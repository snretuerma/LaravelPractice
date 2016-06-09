$(document).ready(function(){
	$('#add').click(function(e){
		e.preventDefault();
		task.add();
	});

	/*$('.deleteButton').click(function(e){
		e.preventDefault();
		console.log($(this).parent().find("input[name=_token]").attr("value"));
		console.log($(this).parent().find("input[name=id]").val());
		var token = $(this).parent().find("input[name=_token]").attr("value");
		var id = $(this).parent().find("input[name=id]").val();
		task.delete(id, token);
	});*/

	$('body').on('click', '.deleteButton', function(e){
		e.preventDefault();
		var element = $(this).parents('li');	
		element.remove();
	})

});