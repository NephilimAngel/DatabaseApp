$(function(){
	var serverUrl = "http://localhost/database/";
	$("#submit").click(function(event) {
		var fname = $("#fname").val();
		var lname = $("#lname").val();
		var email = $("#email").val();
		var state = $("#state").val();
		var country = $("#country").val();


		$.post(serverUrl+'getsetdata.php', {firstname:fname,lastname:lname,email:email,state:state,country:country}, function(data) {
			$("#output").html(data);
		});

	});

});