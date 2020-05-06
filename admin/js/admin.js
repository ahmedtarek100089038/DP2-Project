$(document).ready(function(){

	getAdmins();
	
	function getAdmins(){
		$.ajax({
			url : '../admin/classes/Admin.php',
			method : 'POST',
			data : {GET_ADMIN:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var adminHTML = '';

					$.each(resp.message, function(index, value){
						adminHTML += '<tr>'+
										'<td>#</td>'+
										'<td>'+ value.name +'</td>'+
										'<td>'+ value.email +'</td>'+
										'<td>'+ value.is_active +'</td>'+
										'<td><a class="btn btn-sm btn-info edit-admin"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a bid="'+value.id+'" class="btn btn-sm btn-danger delete-admin"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';
					});

					$("#admin_list").html(adminHTML);

				}else if(resp.status == 303){
					$("#admin_list").html(resp.message);
				}

				

				

			}
		})
		
	}

	$(".add-brand").on("click", function(){

		alert();

	});
	

	$(document.body).on('click', '.delete-admin', function(){

		var bid = $(this).attr('bid');

		if (confirm("Are you sure to remove this admin")) {
			$.ajax({
				url : '../admin/classes/Admin.php',
				method : 'POST',
				data : {DELETE_ADMIN:1, bid:bid},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getAdmin();
					}else if(resp.status == 303){
						alert(resp.message);
					}
				}
			});
		}else{
			alert('Cancelled');
		}

		

	});

	$(document.body).on("click", ".edit-admin", function(){

		var admin = $.parseJSON($.trim($(this).children("span").html()));
		console.log(admin);
		$("input[name='e_admin_title']").val(admin.admin_title);
		$("input[name='id']").val(admin.admin_id);

		$("#edit_admin_modal").modal('show');

		

	});

	$(".edit-admin-btn").on("click", function(){
		$.ajax({
			url : '../admin/classes/Admin.php',
			method : 'POST',
			data : $("#edit-admin-form").serialize(),
			success : function(response){
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					getAdmin();
					$("#edit_admin_modal").modal('hide');
					alert(resp.message);
				}else if(resp.status == 303){
					alert(resp.message);
				}
				
			}
		});
	});

});