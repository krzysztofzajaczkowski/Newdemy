<?php
/**
 * 2007-2015 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * ApPageBuilder is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2019 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class ApImage360 extends ApShortCodeBase
{
    public $name = 'ApImage360';
    public $for_module = 'manage';

    public function getInfo()
    {
        return array('label' => $this->l('Image 360'), 'position' => 20, 'desc' => $this->l('Adds multiple 360 images, rotating display objects'),
            'icon_class' => 'icon-image', 'tag' => 'content structure');
    }

    public function getConfigList()
    {
         $input = array(
                array(
                    'type' => 'text',
                    'name' => 'title',
                    'label' => ApPageSetting::freeTextWhensubmit(),
                    'lang' => 'true',
                    'values' => '',
                ));
        return $input;
    }

    public function endRenderForm()
    {
        $this->helper->module = new $this->module_name();
    }
    
    /**
     * Widget can override this method and add more config at here
     */
    public function addConfigList($values)
    {
        // Get value with keys special
        $config_val = array();
        $total = isset($values['total_slider']) ? $values['total_slider'] : '';

        $arr = explode('|', $total);
        $inputs = array('image360');
//        $languages = Language::getLanguages(false);
        foreach ($arr as $i) {
            foreach ($inputs as $config) {
                $config_val[$config][$i] = str_replace($this->str_search, $this->str_relace_html_admin, Tools::getValue($config.'_'.$i, ''));
            }
        }

        Context::getContext()->smarty->assign(array(
            'arr' => $arr,
            'config_val' => $config_val,
            'image_folder' => apPageHelper::getImgThemeUrl(),
        ));
        $list_slider = Context::getContext()->smarty->fetch(apPageHelper::getShortcodeTemplatePath('ApImage360.tpl'));
        $input = array(
            'type' => 'html',
            'name' => 'default_html',
            'html_content' => $list_slider
        );
        $this->config_list[] = $input;
    }

    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        
        if (!Configuration::get('APPAGEBUILDER_LOAD_IMAGE360')) {
            $assign['formAtts']['lib_has_error'] = true;
            $assign['formAtts']['lib_error'] = 'Please enable Magic360 library in Appagebuilder Configuration.';
            return $assign;
        }

        $total_slider = isset($assign['formAtts']['total_slider']) ? $assign['formAtts']['total_slider'] : '';
        $list = explode('|', $total_slider);
        

        $image_list = array();
        $image_path = apPageHelper::getImgThemeUrl();

        foreach ($list as $item) {
            if (isset($assign['formAtts']['image360_'.$item])) {
                $image_list[] = $assign['formAtts']['image360_'.$item];
            }
        }

        $assign['formAtts']['image_path'] = $image_path;
        $assign['formAtts']['columns'] = count($list);
        $assign['formAtts']['row'] = 1;
        $assign['formAtts']['image_list'] = $image_list;

        // IMAGE DEFAULT
        $min_key = min(array_keys($image_list));
        $assign['formAtts']['image_default'] = $image_list[$min_key];

        return $assign;
    }
}
