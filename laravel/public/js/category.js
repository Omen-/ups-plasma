$( document ).ready(function()
{
  $('.news-category-toggle').click(function(){
    $(this).is( ":checked" ) ? $('.news-category-' + $(this).data('news-category')).show(200) : $('.news-category-' + $(this).data('news-category')).hide(200);
  });
});
