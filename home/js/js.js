//----start----
$(document).ready(function(){

	    $(".navbar-toggle").click(function(){
        $(".collapse").toggle();
    });
	hover(".lip-stick");
	unhover(".lip-stick");
});

//-Function---
function hover(element) {
    element.setAttribute('src', '../image/banner/lipstick-icon.png');
}
function unhover(element) {
    element.setAttribute('src', '../image/banner/lipstick-icon.png');
}