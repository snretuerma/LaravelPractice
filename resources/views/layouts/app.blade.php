<html>
	<head>
		<title>Task List</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<nav>
				<div class="nav-wrapper">
			      <a href="#" class="brand-logo">Task List</a>
			      <ul id="nav-mobile" class="right hide-on-med-and-down">
			        
			      </ul>
			    </div>
			</nav>
		</div>
		@yield('content')
	</body>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	 @yield('customScript');
</html>