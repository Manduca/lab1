<head>
 <meta charset="utf-8">
 <title>Login Form</title>
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>

 Username: <input type="text" name="username" id="username"></input><br>
 
 Password: <input type="password" name="pw" id="pw"> </input><br>
 <button onclick="getValuesFromData();">Test</button>


<script>


function getValuesFromData(){
	
	var username = document.getElementById('username').value,
		password = document.getElementById('pw').value;
 	
 	$.post( "pageb.php", { username: username, password: password })
 	.done(function( data ) {
 		alert( "Data Loaded: " + data );
 	});
}

</script>