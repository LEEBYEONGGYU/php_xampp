<?php
	if(!defined('__XE__')) exit();

	$disp_comember = Context::get('act');
	if(strpos($disp_comember, 'dispCommunication') !== FALSE || strpos($disp_comember, 'dispMember') !== FALSE) return;

	if($called_position == 'before_display_content' && Context::getResponseMethod()=='HTML') {
		$minfo = Context::get('module_info');
		if(!$minfo->layout_srl) return;
		Context::set('addon_info',$addon_info);
		// 템플릿 파일 지정
		$tpl_file = 'outdated_browser';
		$oTemplate = &TemplateHandler::getInstance();
		$output = $output.$oTemplate->compile('./addons/outdated_browser', $tpl_file);
	}
?>