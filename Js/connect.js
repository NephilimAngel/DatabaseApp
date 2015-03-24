$(function(){

	var serverUrl = "http://localhost/database/";	

	$("#test").click(function(event) {
		var username = $("#user").val();
		var password = $("#pass").val();
		var connection = $("#connStr").val();
		var dbaseName = $("#dbName").val();

		$.post(serverUrl+'connect.php', {user:username,pass:password,connStr:connection,dbName:dbaseName,isTest:1}, function(data) {
			/*optional stuff to do after success */
			console.log(data);
			if(data.type == "success"){
				$("#msg").addClass('alert-success');
				$("#msg").text(data.alert);
			}else{
				$("#msg").addClass('alert-danger');
				$("#msg").text(data.alert);
			}
		},"json");
	});

	$("#conn").click(function(event) {
		var username = $("#user").val();
		var password = $("#pass").val();
		var connection = $("#connStr").val();
		var dbaseName = $("#dbName").val();

		$.post(serverUrl+'connect.php', {user:username,pass:password,connStr:connection,dbName:dbaseName,isTest:0}, function(data) {
			/*optional stuff to do after success */
			console.log(data);
			if(data.type == "success"){
				$("#msg").addClass('alert-success');
				$("#msg").text(data.alert+" Redirecting....");
				setTimeout(function(){
					window.location = serverUrl+"home.php";
				},3000);
			}else{
				$("#msg").addClass('alert-danger');
				$("#msg").text(data.alert);
			}
		},"json");
	});

});