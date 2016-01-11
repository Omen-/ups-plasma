<h1>Login Test</h1>
<form method="post" action="/login">
  <input type="text" name="email" required>
  <input type="password" name="password" required>
  <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
  <input type="submit" value="Login">
</form>
