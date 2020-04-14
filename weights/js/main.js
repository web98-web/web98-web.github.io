

function backToTop(){
	let button =$('.back-to-top');

	$(window).on('scroll', () => {
		if ($(this).scrollTop()> 2100){
			button.fadeIn();
		} else {
			button.fadeOut();
		}
	});

button.on('click',(e)=>{
	e.preventDefault();
	$('html').animate({scrollTop: 0}, 1000);
})

}

backToTop();

  $(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  
  });
