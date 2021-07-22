<script>
	function startmark(id, T_Flag){
			var u_status = 0;
			if(T_Flag == '0'){
				u_status = 1;
			}
				$.ajax({
					type: "POST",
					url: 'ajax/trending-product.php',
					data: {f_id: id, f_status: u_status},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		}
</script>