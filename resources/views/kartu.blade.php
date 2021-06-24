<!DOCTYPE html>
<html>
	<head>
		<title>Samakan kartu</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/kartu.css') !!}">
		<script type="text/javascript" src="{!! asset('assets/js/jquery.js') !!}"></script>
		<script type="text/javascript" src="{!! asset('assets/js/script.js') !!}"></script>
	</head>
	<body>
		<div class="container">
			<h3>SAMAKAN KARTU</h3>
			<h4>GAME MEYAMAKAN 2 KARTU</h4>

			<div id="game"></div>
        </div>
        
    </body>
    <a class="btn btn-success" id="kartu2" href="{{url('/')}}" role="button">Balik uy</a>
</html>