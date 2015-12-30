<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
      </div>
      @endif
      <h1>Se connecter</h1><br>
      <form method="post" action="/login">
        <input type="text" value="{{Request::old('email')}}" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
      </form>

      <div class="login-help">
        <a href="#">Mot de passe oublié</a>
      </div>
    </div>
  </div>
</div>

@if($errors->any())
<script type="text/javascript">
    $(window).load(function(){
        $('#login-modal').modal('show');
    });
</script>
@endif
