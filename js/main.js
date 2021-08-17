jQuery(function($){
	$("body").on("click",".notifcation .close-notification",function(e){
		e.preventDefault();
		$(this).closest('.notifcation').remove();
	});
	
	$("body").on("click",".delete-list",function(e){
		e.preventDefault();
		var did = $(this).data("listId");
		var r = confirm("Are you sure?");
		if(r){
			window.location.href = "includes/delete.php?id="+did;
		}
	});
	$("body").on("click",".clear-all",function(e){
		e.preventDefault();
		var r = confirm("Are you sure?");
		if(r){
			window.location.href = "includes/delete_all.php?id=-1";
		}
	});
});