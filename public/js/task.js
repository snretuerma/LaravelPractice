'use strict'

var task = {
	
	add: function(){
		var data_values = {
			"_token" : $('.classForm').find("input[name=_token]").attr("value"),
			"name" : $('.classForm').find("input[name=name]").val(),
		};
		
	
		$.ajax({
			url:"/",
			type: "POST",
			data: data_values,
			success: function(data){
				Materialize.toast('Added',1500);
				$('.collection').append('<li class="collection-item"><div>'+data.name+'<form method = "DELETE" action="" class="deleteForm"><input type="hidden" name="id" value= '+data.token+'><button href="#!" class="btn waves-effect waves-light secondary-content deleteButton">Delete<i class="material-icons">delete</i></button></form></div></li>');
			},
			error: function(msg){}
		});

	},

	delete: function(id, token){
		var data_values = {
			"_token" : token,
			"id" : id,
		}
		$.ajax({
			url:"/",
			type: "DELETE",
			data: data_values,
			success: function(data){
				Materialize.toast('Deleted',1500);
			},
			error: function(msg){} 
		});

	},
}