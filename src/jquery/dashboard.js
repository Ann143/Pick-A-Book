$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});

	$("#find-user").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	  });
	$(".side-icon-container").on("mouseleave", function(){
		$("span").css("display","none");
	});

	$(".side-icon-container").on("mouseover", function(){
		$(this).children("span").css("display","unset");
	});
});	

