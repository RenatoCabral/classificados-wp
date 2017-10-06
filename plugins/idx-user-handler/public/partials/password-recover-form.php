<form action="" method="post">
	<div class="div-recuperar-senha">
		<input class="w-input input-contato input-email input-recuperar-senha" name="user_email" type="email" placeholder="Email" required="required">
		<input type="hidden" name="idx_recover_password_nonce"
			   value="<?php echo wp_create_nonce( 'idx_recover_password_nonce' ); ?>"/>
		<br>
		<input class="w-button button-enviar bt" type="submit" value="Enviar">
	</div>
</form>
