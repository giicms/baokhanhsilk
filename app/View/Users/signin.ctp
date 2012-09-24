<h1>Sign up for Baokhanh Silk</h1>
<form action="<?=$this->webroot?>Users/signin" method="POST" autocomplete="off">
<fieldset>
	<input type="text" placeholder="Username" name="username" maxlength="30" id="id_username">
	<input type="email" placeholder="Email" name="email" maxlength="75" id="id_email"><div class="email_suggestion"></div>
	<input type="password" placeholder="Password" name="password" id="id_password">
	<input type="hidden" placeholder="Role" name="role" id="id_role" value="Members">
	<input type="hidden" placeholder="RoleId" name="roleid" id="id_roleid" value="2">
	<input type="submit" value="Sign Up" class="btn">
</fieldset>
 <a href="<?=$this->webroot?>Users/login/"><span>Already have an account?</span> Log in</a>
</form>