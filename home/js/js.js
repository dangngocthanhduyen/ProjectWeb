//----start----
$(document).ready(function()
{

	$(".my-Btn").click(function()
	{
		$("#myModal").show();
		console.log("test");
	});
	$("#myModal").click(function()
	{
		$("#myModal").hide();
		console.log("test1");
	});
});

//-Function---
// function hover(element) {
//     element.setAttribute('src', '../image/banner/lipstick-icon.png');
// }
// function unhover(element) {
//     element.setAttribute('src', '../image/banner/lipstick-icon.png');
// }
// Get the modal
// var modal = document.getElementById('myModal');

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function(){
//     modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function(event){
//     modal.style.display = "none";
// }


// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }