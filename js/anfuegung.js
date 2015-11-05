$(window).scroll(function(){
  height = $(window).scrollTop();
   	if(height > 1){
   	  $('.top').fadeIn();
   	}else{
   	  $('.top').fadeOut();
   	};
});