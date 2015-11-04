$( document ).ready(init);

function init()
{
  $('.dropdown-link').click(function(){
    toogle($(this).parent().children('ul'), this);
  });
}

function toogle(list, link)
{

}
