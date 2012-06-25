<?=$this->Form->create('User');?>

	<h1>Forgotton your password?</h1>		
	
	<div class="login-fields">
		
		<p>Change your password in three easy steps. This helps to keep your new password secure.</p>
		<ol>
			<li>Fill in your email address below.</li>
			<li>We&rsquo;ll email you a temporary code.</li>
			<li>Use the code to change your password on our secure website.</li>
		</ol>
		
		<hr />
		
		<p><em>Type in the email address you used when you registered with. Then we&rsquo;ll email a code to this address.</em></p>	
		<div class="field">
			<?=$this->Form->input('email', array('placeholder' => 'Email address', 'label' => array('class' => 'control-label')));?>
		</div> <!-- /field -->
		
	</div> <!-- /login-fields -->
	
	<div class="login-actions">
		<?=$this->Form->submit('Send password recover', array('class' => array('btn', 'btn', 'btn-warning', 'btn-large')));?>
	</div> <!-- .actions -->
	
<?=$this->Form->end();?>