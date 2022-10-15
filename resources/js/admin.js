$( document ).ready(function() {

	$('#btn-burger').click(function(){
    if($('body').hasClass('sidebar-collapse')){
      $('body').removeClass('sidebar-collapse');
    }
    else{
      $('body').addClass('sidebar-collapse');
    }
  });

  $('#tree-menu').click(function(){

    if($(this).find('p').find('i').hasClass('fa-angle-left')){
      $(this).find('p').find('i').removeClass('fa-angle-left').addClass('fa-angle-down');
      $('.nav-treeview').attr('style','display:block');
      // console.log($(this).find('ul'));
      // $(this).find('ul').show();
    }
    else{
      
    }
  });

});