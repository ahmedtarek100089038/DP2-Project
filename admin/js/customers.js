$(document).ready(function(){

	getCustomers();
	getCustomerOrders();

	function getCustomers(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>#</td>'+
									          '<td>'+value.first_name+' '+value.last_name+'</td>'+
									          '<td>'+value.email+'</td>'+
									          '<td>'+value.mobile+'</td>'+
									          '<td>'+value.address1+'<br>'+value.address2+'</td>'+
											  
									       '</tr>'

					});

					$("#customer_list").html(customersHTML);

				}else if(resp.status == 303){

				}

			}
		})
		
	}

	function getCustomerOrders(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								              '<td>#</td>'+
								              '<td>'+ value.order_id +'</td>'+
								              '<td>'+ value.product_id +'</td>'+
								              '<td>'+ value.product_title +'</td>'+
								              '<td>'+ value.qty +'</td>'+
								              '<td>'+ value.trx_id +'</td>'+
								              '<td>'+ value.p_status +'</td>'+
											  '<td>'+ value.s_process +'</td>'+
											  '<td><a class="btn btn-sm btn-info edit-shipping"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;</td>'+
								            '</tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}
				
					

			}
		})
		
	}
	
	$(document.body).on("click", ".edit-shipping", function(){

		var shipping = $.parseJSON($.trim($(this).children("span").html()));
		console.log(shipping);		
		$("input[name='e_s_process']").val(shipping.s_process);
		$("input[name='order_id']").val(shipping.order_id);
		
		$("#edit_shipping_modal").modal('show');

		

	});
	

	$(".edit-shipping-btn").on("click", function(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : $("#edit-shipping-form").serialize(),
			success : function(response){
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					getShipping();
					$("#edit_shipping_modal").modal('hide');
					alert(resp.message);
				}else if(resp.status == 303){
					alert(resp.message);
				}
				
			}
		});
	});


});