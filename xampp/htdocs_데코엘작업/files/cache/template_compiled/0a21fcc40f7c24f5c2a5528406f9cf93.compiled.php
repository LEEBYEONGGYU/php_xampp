<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/m.skins/default/css/mboard.css--><?php $__tmp=array('modules/board/m.skins/default/css/mboard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2><?php echo $__Context->lang->msg_input_password ?></h2>
	</div>
    <form action="./" method="post" class="ff" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
		<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment_srl ?>" />
		<ul class="sn">
			<li><label for="pw">비밀번호</label><input name="password" type="password" id="pw" value="" /></li>
		</ul>
		<div class="bna">
			<button type="submit" class="bn dark"><?php echo $__Context->lang->cmd_input ?></button>
		</div>
	</form>
</div>
