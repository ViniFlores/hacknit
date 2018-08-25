<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
        <title>HackNit</title>

    	<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="main.css" media="screen, projection"/> <!-- Página CSS que eu altero-->

        @yield('css')    
	</head>
	<body>
		<div class="panel panel-default">        
    		<div class="panel-body">
        		@yield('content')
    		</div>
		</div>

		@yield('script')
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>