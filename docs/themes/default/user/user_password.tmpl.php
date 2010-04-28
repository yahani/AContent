<?php 
/************************************************************************/
/* Transformable                                                        */
/************************************************************************/
/* Copyright (c) 2009                                                   */
/* Adaptive Technology Resource Centre / University of Toronto          */
/*                                                                      */
/* This program is free software. You can redistribute it and/or        */
/* modify it under the terms of the GNU General Public License          */
/* as published by the Free Software Foundation.                        */
/************************************************************************/

global $onload;
$onload = 'document.form.password.focus();';

require(TR_INCLUDE_PATH.'header.inc.php'); 
?>

<script language="JavaScript" src="include/jscripts/sha-1factory.js" type="text/javascript"></script>

<script type="text/javascript">
function encrypt_password()
{
	document.form.password_error.value = "";

	err = verify_password(document.form.password.value, document.form.password2.value);
	
	if (err.length > 0)
	{
		document.form.password_error.value = err;
	}
	else
	{
		document.form.form_password_hidden.value = hex_sha1(document.form.password.value);
		document.form.password.value = "";
		document.form.password2.value = "";
	}
}
</script>

<div class="input-form">
<fieldset class="group_form"><legend class="group_form"><?php echo _AT('change_password'); ?></legend>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $_GET['id']; ?>" method="post" name="form">
		<input type="hidden" name="form_password_hidden" value="" />
		<input type="hidden" name="password_error" value="" />

		<table class="form-data" align="center">
			<tr>
				<td align="left">
					<div class="required" title="<?php echo _AT('required_field'); ?>">*</div>
					<label for="password"><?php echo _AT('new_password'); ?></label>:
				</td>
				<td align="left">
					<input id="password" name="password" type="password" size="25" maxlength="15" value="<?php echo stripslashes(htmlspecialchars($_POST['password'])); ?>" />
				</td>
			</tr>
		
			<tr>
				<td align="left">
					<div class="required" title="<?php echo _AT('required_field'); ?>">*</div>
					<label for="password2"><?php echo _AT('password_again'); ?></label>:
				</td>
				<td align="left">
					<input id="password2" name="password2" type="password" size="25" maxlength="15" value="<?php echo stripslashes(htmlspecialchars($_POST['password2'])); ?>" />
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<p class="submit_button">
						<input type="submit" name="submit" value="<?php echo _AT('submit'); ?>" onclick="encrypt_password()" />
						<input type="submit" name="cancel" value=" <?php echo _AT('cancel'); ?> " />
					</p>
				</td>
			</tr>
		</table>
	</form>

</fieldset>
</div>

<?php require(TR_INCLUDE_PATH.'footer.inc.php'); ?>