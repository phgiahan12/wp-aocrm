jQuery(document).ready(function($){
  var hover_off = false;
  var hover_count = 100;

  $("#header-desktop .elementor-nav-menu > .menu-item-has-children").mouseover(function() {
    hover_off = false;
    $("#menu_overlay").addClass('hovering');
  });

  $("#header-desktop .elementor-nav-menu > .menu-item-has-children").mouseout(function() {
    hover_off = true;
    setTimeout(myMouseOut, hover_count);
  });

  function myMouseOut() {
    if (hover_off) {
      $("#menu_overlay").removeClass('hovering');
    }
  }
  // $("#header-desktop .elementor-nav-menu > .menu-item-has-children").mouseenter(function(){
  //   $('#menu_overlay').show();
  // });
  // $("#header-desktop .elementor-nav-menu > .menu-item-has-children").mouseout(function(){
  //   $('#menu_overlay').hide();
  // });

  // jQuery('#header-desktop .elementor-nav-menu > .menu-item-has-children').hover(function(){
  //   jQuery('#menu_overlay').fadeTo(200, 1);
  // }, function(){
  //   jQuery('#menu_overlay').fadeTo(200, 0, function(){
  //     jQuery(this).hide();
  //   });
  // }); 
  $("a[href*='#']:not([href='#'])").click(function(e) {
    e.preventDefault();
    var hash = this.hash;
    var section = $(hash);

    if (hash) { 
      $('html, body').animate({
        scrollTop: section.offset().top
      }, 1000, 'swing', function(){
        history.replaceState({}, "", hash);
      });
    }
  });
	
	if($('#dotb-archive-card .elementor-pagination :nth-child(2)').hasClass("current")){
// 		console.log($('#dotb-archive-card .elementor-pagination:nth-child(2)').hasClass('current'));
		$('#dotb-archive-card .elementor-pagination :nth-child(1)').css('display','none')
	}
	
});