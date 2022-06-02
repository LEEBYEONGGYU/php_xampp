<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/tpl/css/editor.css--><?php $__tmp=array('modules/editor/tpl/css/editor.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/css/admin.css--><?php $__tmp=array('modules/admin/tpl/css/admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/css/bootstrap.min.css--><?php $__tmp=array('common/css/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section class="section">
	<h1><?php echo $__Context->component->title ?> ver. <?php echo $__Context->component->version ?></h1>
	<table class="x_table x_table-striped x_table-hover">
	<tr>
		<th scope="row"><div><?php echo $__Context->lang->component_author ?></div></th>
		<td>
			<?php if($__Context->component->author&&count($__Context->component->author))foreach($__Context->component->author as $__Context->author){ ?>
			<?php echo $__Context->author->name ?> <?php if($__Context->author->homepage || $__Context->author->email_address){ ?>(<?php if($__Context->author->homepage){ ?><a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->author->homepage ?></a><?php };
if($__Context->author->homepage && $__Context->author->email_address){ ?>, <?php };
if($__Context->author->email_address){ ?><a href="mailto:<?php echo $__Context->author->email_address ?>"><?php echo $__Context->author->email_address ?></a><?php } ?>)<?php } ?><br />
			<?php } ?>
	</tr>
	<?php if($__Context->component->homepage){ ?>
	<tr>
		<th scope="row"><div><?php echo $__Context->lang->homepage ?></div></th>
		<td class="blue"><a href="<?php echo $__Context->component->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->component->homepage ?></a></td>
	</tr><?php } ?>
	<tr>
		<th scope="row"><div><?php echo $__Context->lang->regdate ?></div></th>
		<td><?php echo zdate(str_replace('-',"",$__Context->component->date), 'Y-m-d') ?></td>
	</tr>
	<?php if($__Context->component->license || $__Context->component->license_link){ ?>
	<tr>
		<th scope="row"><div><?php echo $__Context->lang->component_license ?></div></th>
		<td>
			<?php echo nl2br(trim($__Context->component->license)) ?>
		<?php if($__Context->component->license_link){ ?>
			<p><a href="<?php echo $__Context->component->license_link ?>" onclick="window.close(); return false;"><?php echo $__Context->component->license_link ?></a></p>
		<?php } ?>
		</td>
	</tr><?php } ?>
	<?php if($__Context->component->description){ ?>
	<tr>
		<th scope="row"><div><?php echo $__Context->lang->component_description ?></div></th>
		<td><?php echo nl2br(trim($__Context->component->description)) ?></td>
	</tr><?php } ?>
	</table>
</section>
