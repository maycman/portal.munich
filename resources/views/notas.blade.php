<!DOCTYPE html>
<html>
<head>
	<title>Notas Bebe</title>
</head>
<body>
	<h1>Notas</h1>
	<ul>
		@foreach($notas as $nota)
		<li> {{ $nota->nota }} </li>
		@endforeach
	</ul>
</body>
</html>