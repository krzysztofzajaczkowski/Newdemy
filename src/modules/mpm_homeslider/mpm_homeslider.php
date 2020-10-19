<?php
if (!defined('_PS_VERSION_'))
  exit;

require_once(dirname(__FILE__) . '/classes/blockHomeSlide.php');

class mpm_homeslider extends Module
{

  private $_homeSlider;

  public function __construct()
  {
    $this->name = 'mpm_homeslider';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'MyPrestaModules';
    $this->need_instance = 0;
    $this->bootstrap = true;
    $this->module_key = "34f24ecd51a391dc9bcfce884c0fa21b";

    parent::__construct();

    $this->displayName = $this->l('Responsive carousel slider');
    $this->description = $this->l('Adds an carousel slider to your homepage.');
    $this->_homeSlider = new blockHomeSlide();
  }

  public function install()
  {
    if (!parent::install()
      || !$this->registerHook('header')
      || !$this->registerhook('displayHomeSlider')
      || !Configuration::updateValue('GOMAKOIL_HOME_SLIDER', '')
    )
      return false;

    $this->_createTab('AdminHomeSlider', 'Home slider');
    $this->_installDb();
    $this->_installConfiguration();
    $this->_setDataInDb();

    return true;
  }
  public function uninstall()
  {
    if (!parent::uninstall()
      || !Configuration::deleteByName('GOMAKOIL_HOME_SLIDER'))
      return false;

    $slides = $this->_homeSlider->getSlidesImg();
    $this->_homeSlider->deleteImgSlider($slides);
    $this->_removeTab('AdminHomeSlider');
    $this->_uninstallDb();

    return true;
  }

  private function _createTab($class_name, $name)
  {
    $tab = new Tab();
    $tab->active = 1;
    $tab->class_name = $class_name;
    $tab->name = array();
    foreach (Language::getLanguages(true) as $lang)
      $tab->name[$lang['id_lang']] = $name;
    $tab->id_parent = -1;
    $tab->module = $this->name;
    $tab->add();
  }

  private function _removeTab($class_name)
  {
    $id_tab = (int)Tab::getIdFromClassName($class_name);
    if ($id_tab)
    {
      $tab = new Tab($id_tab);
      $tab->delete();
    }
  }

  private function _installDb()
  {
    // Table  pages
    $sql = 'DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'block_home_slider';
    Db::getInstance()->execute($sql);

    $sql = 'CREATE TABLE IF NOT EXISTS ' . _DB_PREFIX_ . 'block_home_slider(
				id_block_home_slider int(11) unsigned NOT NULL AUTO_INCREMENT,
				active boolean NOT NULL,
				position int(11) unsigned NOT NULL,
				position_desc varchar(255) NULL,
				width_desc int(11) NULL,
				height_desc int(11) NULL,
				opacity_desc DECIMAL(20,2) NULL,
				date_add datetime NULL,
				PRIMARY KEY (`id_block_home_slider`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8';

    Db::getInstance()->execute($sql);

    // Table  pages lang
    $sql = 'DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'block_home_slider_lang';
    Db::getInstance()->execute($sql);

    $sql = 'CREATE TABLE IF NOT EXISTS ' . _DB_PREFIX_ . 'block_home_slider_lang(
				id_block_home_slider int(11) unsigned NOT NULL,
				id_lang int(11) unsigned NOT NULL,
				id_shop int(11) unsigned NOT NULL,
				image varchar(255) NULL,
				title varchar(255) NULL,
				url varchar(255) NULL,
				caption varchar(255) NULL,
        description TEXT  NOT NULL,
				PRIMARY KEY(id_block_home_slider, id_shop, id_lang)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8';
    Db::getInstance()->execute($sql);
  }

  private function _uninstallDb()
  {
    $sql = 'DROP TABLE IF EXISTS '._DB_PREFIX_.'block_home_slider';
    Db::getInstance()->execute($sql);

    $sql = 'DROP TABLE IF EXISTS '._DB_PREFIX_.'block_home_slider_lang';
    Db::getInstance()->execute($sql);
  }

  private function _setDataInDb()
  {
    $languages = Language::getLanguages(false);
    $lang_def = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
    $x=0;

    while ($x++<3){
      $img = $x.'_'.$lang_def->id.'.jpg';
      copy(dirname(__FILE__).'/views/img/def/'.$x.'.jpg',  dirname(__FILE__).'/views/img/'.$img);

      $obj = new blockHomeSlide();
      $obj->active = 1;
      $obj->position = $x;


      $obj->position_desc = 'top_left';

      if($x == 3){
        $obj->position_desc = 'top_right';
      }


      $obj->width_desc = 0;
      $obj->height_desc = 0;
      $obj->opacity_desc = 0;

      foreach ($languages as $lang){
        $obj->image[$lang['id_lang']] = $img;
        $obj->description[$lang['id_lang']] = ' ';
        $obj->url[$lang['id_lang']] = 'https://addons.prestashop.com/ru/2_community-developer?contributor=258471';
        $obj->title[$lang['id_lang']] = 'Sample '.$x;
        $obj->caption[$lang['id_lang']] = 'Sample '.$x;
      }
      $obj->save();
    }

    $this->_homeSlider->resizeSliderImages();
  }

  private function _installConfiguration(){
    $config = array(
      'active'              => 1,
      'width'               => 1903,
      'height'              => 830,
      'auto_play'           => 1,
      'speed'               => 2500,
    );
    $config = serialize($config);
    Configuration::updateValue('GOMAKOIL_HOME_SLIDER', $config);
  }

  public function getContent()
  {
    Tools::redirectAdmin($this->context->link->getAdminLink('AdminHomeSlider'));
  }

  public function hookDisplayHeader()
  {
    $this->context->controller->registerStylesheet('mpm_homeslider', 'modules/'.$this->name.'/views/css/blockhomeslider.css', array('media' => 'all', 'priority' => 902));
    $this->context->controller->registerStylesheet('slick', 'modules/'.$this->name.'/views/css/slick.css', array('media' => 'all', 'priority' => 902));
    $this->context->controller->registerJavascript('mpm_homeslider', 'modules/'.$this->name.'/views/js/blockhomeslider.js', array('position' => 'bottom', 'priority' => 150));
    $this->context->controller->registerJavascript('slick', 'modules/'.$this->name.'/views/js/slick.min.js', array('position' => 'bottom', 'priority' => 150));


    $settings = Tools::unserialize(Configuration::get('GOMAKOIL_HOME_SLIDER'));


    Media::addJsDef(
      array(
        'auto_play' => $settings['auto_play'],
        'speed_slider' => $settings['speed'],
        'height_slider' => $settings['height'],
        'width_slider' => $settings['width'],
      )
    );

  }




  public function hookDisplayHomeSlider()
  {
    $settings = Tools::unserialize(Configuration::get('GOMAKOIL_HOME_SLIDER'));

    if( Context::getContext()->controller->php_self == 'index'){
      return $this->getHomeSlider($settings);
    }

  }

  public function getHomeSlider($settings){

      $slides = $this->_homeSlider->getAllSlides(Context::getContext()->language->id, Context::getContext()->shop->id);
      $img_dir = _MODULE_DIR_ . 'mpm_homeslider/views/img/slides/';
      $this->context->smarty->assign(array(
        'img_dir' => $img_dir,
        'slides' => $slides,
        'settings' => $settings,
        'id_lang' => Context::getContext()->language->id,
        'id_shop' => Context::getContext()->shop->id,
      ));

    return $this->display(__FILE__, 'slider.tpl');
  }

}
