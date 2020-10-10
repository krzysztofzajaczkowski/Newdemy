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

class ApImageHotspot extends ApShortCodeBase
{
    public $name = 'ApImageHotspot';
    public $for_module = 'manage';

    public $inputs_lang = array('temp_title', 'temp_image_link' , 'temp_image', 'temp_description');
    public $inputs = array('temp_top', 'temp_left', 'temp_hpcolor', 'temp_location', 'temp_textalign', 'temp_trigger', 'temp_opacity', 'temp_width', 'temp_margin', 'temp_padding', 'temp_textcolor', 'temp_backcolor', 'temp_class', 'temp_imagealign');

    public function getInfo()
    {
        return array('label' => $this->l('Image Hotspot'),
            'position' => 5,
            'desc' => $this->l('Display tooltip in your image when user hover over points'),
            'icon_class' => 'icon-image',
            'tag' => 'content');
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

    public function addConfigList($values)
    {
        // Get value with keys special
        $config_val = array();
        $total = isset($values['total_slider']) ? $values['total_slider'] : '';
        $arr = explode('|', $total);
        
        $inputs_lang = $this->inputs_lang;
        $inputs = $this->inputs;


        $languages = Language::getLanguages(false);
        foreach ($arr as $i) {
            foreach ($inputs_lang as $config) {
                foreach ($languages as $lang) {
                    $config_val[$config][$i][$lang['id_lang']] = str_replace($this->str_search, $this->str_relace_html_admin, Tools::getValue($config.'_'.$i.'_'.$lang['id_lang'], ''));
                }
            }
            foreach ($inputs as $config) {
                $config_val[$config][$i] = str_replace($this->str_search, $this->str_relace_html_admin, Tools::getValue($config.'_'.$i, ''));
            }
        }

        Context::getContext()->smarty->assign(array(
            'lang' => $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT')),
            'default_lang' => $lang->id,
            'arr' => $arr,
            'languages' => $languages,
            'config_val' => $config_val,
            'path' => apPageHelper::getImgThemeUrl(),
            'inputs_lang' => $this->inputs_lang,
            'inputs' => $this->inputs,
        ));
        $list_slider = Context::getContext()->smarty->fetch(apPageHelper::getShortcodeTemplatePath('ApImageHotspot.tpl'));
        
        $input = array(
            'type' => 'html',
            'name' => 'default_html',
            'html_content' => $list_slider,
        );
        // Append new input type html
        $this->config_list[] = $input;
    }

    public function endRenderForm()
    {
        $this->helper->module = new $this->module_name();
    }
    
    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        if (!Configuration::get('APPAGEBUILDER_LOAD_IMAGEHOTPOT')) {
            $assign['formAtts']['lib_has_error'] = true;
            $assign['formAtts']['lib_error'] = 'Please enable Image Hotpot library in Appagebuilder Configuration.';
            return $assign;
        }
        $assign['path'] = apPageHelper::getImgThemeUrl();
        $total_slider = isset($assign['formAtts']['total_slider']) ? $assign['formAtts']['total_slider'] : '';
        $list = explode('|', $total_slider);
        $list_items = array();
        $lang = Language::getLanguage(Context::getContext()->language->id);
        $id_lang = $lang['id_lang'];
        
        $inputs_lang = $this->inputs_lang;
        $inputs = $this->inputs;
        
        foreach ($list as $number) {
            if ($number) {
                $item = array();
                $item['id'] = $number;

                foreach ($inputs_lang as $key) {
                    # MULTI-LANG
                    $name = $key.'_'.$number.'_'.$id_lang;
                    $item[$key] = isset($assign['formAtts'][$name]) ? $assign['formAtts'][$name] : '';

                    // Description
                    if ($key == 'temp_description' && isset($assign['formAtts'][$name]) && $assign['formAtts'][$name]) {
                        $item[$key] = str_replace($this->str_search, $this->str_relace_html, $assign['formAtts'][$name]);
                    }

                    // Image
                    if ($key == 'temp_image' && isset($assign['formAtts'][$name]) && $assign['formAtts'][$name]) {
                        $item[$key] = apPageHelper::getImgThemeUrl() . $assign['formAtts'][$name];
                    } else if ($key == 'temp_image') {
                        $item[$key] = '';
                    }
                }
                foreach ($inputs as $key) {
                    # SINGLE-LANG
                    $name = $key.'_'.$number;
                    $item[$key] = isset($assign['formAtts'][$name]) ? $assign['formAtts'][$name] : '';
                }

                $list_items[] = $item;
            }
        }
        $assign['formAtts']['items'] = $list_items;

        return $assign;
    }
}
