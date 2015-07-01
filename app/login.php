<!DOCTYPE html>
<html>
<head>
	<!-- Majorly copied from Polymer start kit index.html -->
	<meta charset="utf-8">
	<meta name="description" content="Login page">
	<title>WorkHours Login Page</title>
	<link rel="manifest" href="manifest.json">
	
	<script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
	<link rel="import" href="elements/elements.html">
	
	<link rel="stylesheet" href="styles/main.css">
	
</head>
<body style="background-color: #558C89">
<template is="dom-bind" id="app">
	<br><br><br><br><br><br><br><br>
	<div class="col-3" style="margin-left:auto; margin-right:auto">
	<paper-material elevation="5">
	<div style="padding: 40px;">
	<h1>Login to WorkHours</h1>
	<paper-input label="Username" id="username"></paper-input>
	<paper-input label="Password" type="password" id="password"></paper-input>
	<br>
	<paper-button raised>Login</paper-button>
	<br>
	</paper-material>
	</div>
	</div>
</template>

<!-- Commenting out old content
<h1>Login Page</h1>
<p>Login information</p>
<input type="text" label="Enter Username">
<p>Login information</p>
<input type="text">
-->

</body>
</html>
