<?php if(!defined("__XE__"))exit;?><!--#Meta:addons/outdated_browser/css/outdatedbrowser.min.css--><?php $__tmp=array('addons/outdated_browser/css/outdatedbrowser.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:addons/outdated_browser/js/outdatedbrowser.min.js--><?php $__tmp=array('addons/outdated_browser/js/outdatedbrowser.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="outdated"></div>
<script>
jQuery(document).ready(function() {
	outdatedBrowser({
<?php if($__Context->addon_info->iev){ ?>		lowerThan: '<?php echo $__Context->addon_info->iev ?>',<?php } ?>
		bgColor: '#f25648',
		color: '#ffffff',
		lowerThan: 'transform',
		languagePath: 'addons/outdated_browser/lang/<?php echo $__Context->lang_type ?>.html'
	})
})
</script>
