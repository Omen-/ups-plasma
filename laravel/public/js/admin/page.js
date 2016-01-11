function showPagePreview()
{
  $('#preview').html(tinyMCE.get('editor').getContent());
}

$( document ).ready(function()
{
  $("#generatePassword").click(function() {
      var length = 8,
          charset = "abcdefghijklnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@+-*!",
          retVal = "";
      for (var i = 0, n = charset.length; i < length; ++i) {
          retVal += charset.charAt(Math.floor(Math.random() * n));
      }
      $("#user-password").val(retVal);
  });

  /*tinymce.activeEditor.uploadImages(function(success) {
    $.post('ajax/image/store', tinymce.activeEditor.getContent()).done(function() {
    });
  });*/

  tinymce.init({
    plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
      ],
       automatic_uploads: true,
    images_upload_url: '/ajax/image/store',
    selector: 'textarea#editor',
    content_css : ['/assets/css/bootstrap.min.css', '/assets/css/style.css', '/assets/css/style-default.css'],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    setup: function(editor) {
      editor.on('init', function() {
        showPagePreview();
      });
    }
  });
});
