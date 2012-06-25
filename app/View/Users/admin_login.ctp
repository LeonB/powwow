	<?=$this->Form->create('User');?>

	<h1>Sign In</h1>		
	
	<p>Sign in using your registered account:</p>
	
	<div class="field">
		<?=$this->Form->input('email', array('placeholder' => 'Email address', 'label' => array('class' => 'control-label')));?>
	</div> <!-- /field -->
	
	<div class="field">
		<?=$this->Form->input('password', array('placeholder' => 'Password', 'label' => array('class' => 'control-label')));?>
	</div> <!-- /password -->
		
	<label class="checkbox">
		<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
		Keep me signed in
	</label>
							
	<?=$this->Form->submit('Sign in', array('class' => array('btn', 'btn-warning', 'btn-large')));?>
		
	<!--
	<div class="login-social">
		<p>Sign in using social network:</p>
		
		<div class="twitter">
			<a href="http://wbpreview.com/previews/WB00U99JJ" class="btn_1">Login with Twitter</a>				
		</div>
		
		<div class="fb">
			<a href="http://wbpreview.com/previews/WB00U99JJ" class="btn_2">Login with Facebook</a>				
		</div>
	</div>
	-->
	
<?=$this->Form->end();?>

<!-- Text Under Box -->
<hr />
<div class="login-extra">
	Don't have an account? <?=$this->Html->link('Sign up', array('controller' => 'users', 'action' => 'add'));?><br/>
	Remind <?=$this->Html->link('Password', array('controller' => 'users', 'action' => 'password_recover', 'admin' => true));?>
</div> <!-- /login-extra -->
