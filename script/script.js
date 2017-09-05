$(document).ready(function(){
			

			var determine = 0;
			var display= 0;
			var displayEdit = 0;
			var displayDelete = 0;
			var displayRead = 0;
			
			$("#addStyle").hide();
			$("#editStyle").hide();
			$("#deleteStyle").hide();
			$("#read").hide();

			

			$("#btnShowAdd").click(function(){
				if(display == 0){
					$("#addStyle").show(1000);
					$("#btnShowAdd").val("Hide Add");
					display = 1;
				}
				else{
					$("#addStyle").hide(1000);
					display = 0;
					$("#btnShowAdd").val("Show Add");
				}
				
			});
			$("#btnadd").click(function(){
				alert("Successfully Added");
			});
			$("#btnedit").click(function(){
				alert("Successfully Edit");
			});
			$("#btnDelete").click(function(){
				alert("Successfully Deleted");
			});

			$("#btnShowEdit").click(function(){
				if(displayEdit == 0){
					$("#editStyle").show(1000);
					displayEdit = 1;
						$("#btnShowEdit").val("Hide Edit");
				}
				else{
					$("#editStyle").hide(1000);
					displayEdit = 0;
					$("#btnShowEdit").val("Show Edit");
				}
				
			});

			$("#btnShowDelete").click(function(){

				
				if(displayDelete == 0){
					$("#deleteStyle").show(1000);
					displayDelete = 1;
					$("#btnShowDelete").val("Hide Delete");
				}
				else{
					$("#deleteStyle").hide(1000);
					displayDelete = 0;
					$("#btnShowDelete").val("Show Delete");
				}
				
			});

			$("#btnShowData").click(function(){

				if(displayRead == 0){
					$("#read").show(1000);
					displayRead = 1;
					$("#btnShowData").val("Hide Data");

				}
				else{
					$("#read").hide(1000);
					displayRead = 0;
					$("#btnShowData").val("Show Data");
				}
				
			});

		});
