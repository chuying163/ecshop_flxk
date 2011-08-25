<?php
require('/smarty/Smarty.class.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XkSmarty
 *
 * @author dejie
 */

class XkSmarty extends Smarty{
     function XkSmarty() { 
		parent::__construct();
		$this->template_dir = 'templates/';
		$this->compile_dir = 'templates_c/';
		$this->config_dir = 'configs/';
		$this->cache_dir = 'cache/'; 
		$this->caching = true;
 }

}

?>
