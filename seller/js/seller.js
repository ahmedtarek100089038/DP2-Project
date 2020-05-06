$(document).ready(function(){

	getSellers();
	
	function getSellers(){
		$.ajax({
			url : '../seller/classes/Seller.php',
			method : 'POST',
			data : {GET_SELLER:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var sellerHTML = '';

					$.each(resp.message, function(index, value){
						sellerHTML += '<tr>'+
										'<td>#</td>'+
										'<td>'+ value.name +'</td>'+
										'<td>'+ value.email +'</td>'+
										'<td>'+ value.is_active +'</td>'+
										'<td></td>'+
									'</tr>';
					});

					$("#seller_list").html(sellerHTML);

				}else if(resp.status == 303){
					$("#seller_list").html(resp.message);
				}

				

				

			}
		})
		
	}

	$(".add-brand").on("click", function(){

		alert();

	});

});