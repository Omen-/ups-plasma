function showPagePreview()
{
  $('#preview').html(tinyMCE.get('editor').getContent());
}

$( document ).ready(function()
{
  tinymce.init({
    plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
      ],
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
