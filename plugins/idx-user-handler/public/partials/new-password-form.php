<?php
/**
 * Show password and confirmation fields, with 2 hidden ($user_id and a nonce)
 */
?>

<form action="" class="w-clearfix" method="post">
	<input class="w-input input-contato" type="password" placeholder="Senha" name="idx_new_password"/>
	<input class="w-input input-contato" type="password" placeholder="Repita a senha" name="idx_new_password_confirmation"/>
	<input type="hidden" name="idx_user_id" value="<?php echo $user_id; ?>"/>
	<input type="hidden" name="new_password_nonce"
	       value="<?php echo wp_create_nonce( 'new_password_nonce' ); ?>"/>
	<br>
	<input type="submit" name="update_user_password_button" class="w-button bts" value="Alterar"/>
</form>
