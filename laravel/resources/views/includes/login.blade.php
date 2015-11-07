<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container">
      <h1>Login to Your Account</h1><br>
      <form method="post" action="/login">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
      </form>

      <div class="login-help">
        <a href="#">Register</a> - <a href="#">Forgot Password</a>
      </div>
    </div>
  </div>
</div>
