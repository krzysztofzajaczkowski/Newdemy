<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class GlotioTranslationSourcesResourceV1 extends GlotioRestApiResource
{
    /** @var GlotioTranslationSourceFactory */
    private $translationSourceFactory;

    /** @var GlotioTranslationSourceCache */
    private $translationSourceCache;

    /**
     * TranslationSourcesResource constructor.
     * @param GlotioTranslationSourceFactory $translationSourceFactory
     * @param GlotioTranslationSourceCache|null $translationSourceCache
     */
    public function __construct(GlotioTranslationSourceFactory $translationSourceFactory = null, GlotioTranslationSourceCache $translationSourceCache = null)
    {
        $this->translationSourceFactory = $translationSourceFactory ? $translationSourceFactory : new GlotioTranslationSourceFactory();
        $this->translationSourceCache = $translationSourceCache ? $translationSourceCache : new GlotioTranslationSourceCache();
    }

    public function get(array $params)
    {
        $default_lang_iso = GlotioPsLanguages::idLangToIso((int) Configuration::get('PS_LANG_DEFAULT'));
        list($reset_cache, $filter_active) = $this->manageInputParameters();

        $this->loadTranslationSourceCache();

        $records = array();

        /** @var GlotioTranslationSourceInterface[] $translationSources */
        $translationSources = array_merge(
            $this->getPrestashopCoreDbTranslationSources(),
            $this->getModuleDbTranslationSources(),
            $this->getThemeTranslationSources(),
            $this->getModuleTranslationSources(),
            $this->getThemeModuleTranslationSources(),
            $this->getMailTranslationSources()
        );

        foreach ($translationSources as $translationSource) {
            $source_cache_key = $translationSource->getId().'_'.$default_lang_iso.'_'.$filter_active;
            $cachedDefinition = $this->translationSourceCache->get($source_cache_key);

            if ($cachedDefinition) {
                $records[] = $cachedDefinition;
                continue;
            }

            if ($translationSource->isValid()) {
                $definition = $translationSource->getDefinition();
                $records[] = $definition;

                $this->translationSourceCache->add($source_cache_key, $definition);
                $this->translationSourceCache->store();
            }
        }

        return $records;
    }

    /**
     * @return array
     */
    private function manageInputParameters()
    {
        $reset_cache = filter_var(Tools::getValue('reset_cache', 0), FILTER_SANITIZE_NUMBER_INT);
        if ($reset_cache < 0 || $reset_cache > 1) {
            throw new GlotioException("Unsupported value of reset_cache parameter, should be 0 or 1");
        }

        if ($reset_cache) {
            $this->translationSourceCache->reset();
        }

        $filter_active = filter_var(Tools::getValue('filter_active', 0), FILTER_SANITIZE_NUMBER_INT);
        if ($filter_active < 0 || $filter_active > 1) {
            throw new GlotioException("Unsupported value of filter_active parameter, should be 0 or 1");
        }

        $this->translationSourceFactory->setFilterActive($filter_active);

        return array($reset_cache, $filter_active);
    }

    private function loadTranslationSourceCache()
    {
        if ($this->translationSourceCache->isObsolete()) {
            $this->translationSourceCache->reset();
        } else {
            $this->translationSourceCache->load();
        }
    }

    /**
     * @return GlotioTranslationSourceInterface[]
     */
    private function getPrestashopCoreDbTranslationSources()
    {
        $core_tables = array(
            'attachment',
            'attribute',
            'attribute_group',
            'carrier',
            'cart_rule',
            'category',
            'cms',
            'cms_category',
            'contact',
            'country',
            'feature',
            'feature_value',
            'gender',
            'image',
            'manufacturer',
            'meta',
            'product',
            'supplier',
        );

        // Not present in all versions of Prestashop
        if (class_exists('CustomizationField')) {
            $core_tables[] = 'customization_field';
        }

        $translationSources = array();

        foreach ($core_tables as $table_name) {
            $params = array(
                'type'    => GlotioTranslationSourceInterface::TYPE_DB,
                'subtype' => $table_name,
            );
            $translationSources[] = $this->translationSourceFactory->create($params);
        }

        return $translationSources;
    }

    /**
     * @return GlotioTranslationSourceInterface[]
     */
    private function getModuleDbTranslationSources()
    {
        $translationSources = array();

        $moduleModelCollection = GlotioModuleModelCollectionFactory::create();

        foreach ($moduleModelCollection->getModuleModelsArray() as $moduleModel) {
            $params = array(
                'type'    => GlotioTranslationSourceInterface::TYPE_DB_MODULE,
                'subtype' => $moduleModel->table,
                'module'  => $moduleModel->module,
            );
            $translationSources[] = $this->translationSourceFactory->create($params);
        }

        return $translationSources;
    }

    /**
     * @return GlotioTranslationSourceInterface[]
     */
    private function getThemeTranslationSources()
    {
        $translationSources = array();

        $params = array(
            'type'  => GlotioTranslationSourceInterface::TYPE_THEME,
            'theme' => _THEME_NAME_,
        );
        $translationSources[] = $this->translationSourceFactory->create($params);

        return $translationSources;
    }

    /**
     * @return GlotioTranslationSourceInterface[]
     */
    private function getModuleTranslationSources()
    {
        $translationSources = array();

        foreach (GlotioPsModules::getTranslatableModules() as $module_name) {
            $params = array(
                'type'   => GlotioTranslationSourceInterface::TYPE_MODULE,
                'module' => $module_name,
            );
            $translationSources[] = $this->translationSourceFactory->create($params);
        }

        return $translationSources;
    }

    /**
     * @return GlotioTranslationSourceInterface[]
     */
    private function getThemeModuleTranslationSources()
    {
        $translationSources = array();

        foreach (GlotioPsModules::getTranslatableModules() as $module_name) {
            $params = array(
                'type'   => GlotioTranslationSourceInterface::TYPE_THEME_MODULE,
                'module' => $module_name,
                'theme'  => _THEME_NAME_,
            );
            $translationSources[] = $this->translationSourceFactory->create($params);
        }

        return $translationSources;
    }

    /**
     * @return GlotioTranslationSourceInterface[]
     */
    private function getMailTranslationSources()
    {
        $translationSources = array();

        $params = array(
            'type' => GlotioTranslationSourceInterface::TYPE_MAIL
        );
        $translationSources[] = $this->translationSourceFactory->create($params);

        $params = array(
            'type'  => GlotioTranslationSourceInterface::TYPE_THEME_MAIL,
            'theme' => _THEME_NAME_
        );
        $translationSources[] = $this->translationSourceFactory->create($params);

        foreach (GlotioPsModules::getTranslatableModuleWithMails() as $module_name) {
            $params = array(
                'type'   => GlotioTranslationSourceInterface::TYPE_MODULE_MAIL,
                'module' => $module_name,
            );
            $translationSources[] = $this->translationSourceFactory->create($params);
        }

        foreach (GlotioPsModules::getTranslatableThemeModuleWithMails() as $module_name) {
            $params = array(
                'type'   => GlotioTranslationSourceInterface::TYPE_THEME_MODULE_MAIL,
                'theme'  => _THEME_NAME_,
                'module' => $module_name,
            );
            $translationSources[] = $this->translationSourceFactory->create($params);
        }

        return $translationSources;
    }
}
