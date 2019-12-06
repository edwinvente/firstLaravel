<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head> 
		<title>Somos Crenadola | Diseño y desarrollo web</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img src="{{ asset('images/02.png') }}" class="logoCreandola" alt="">
				<p>Diseño y desarrollo de estrategias digitales a la medida, no esperes más <br> y potencializa tu negocio ahora mismo, tenemos descuentos especiales en octubre...<br />
				Para conocer más de nosotros ve a nuestro <a href="{{ url('listado') }}">Sitio web</a>. </p>
			</header>

		<!-- Signup Form -->
			<small>Registra tu correo y obten un 10% de descuento!</small>
			<form id="signup-form" method="post" action="#">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<input type="email" name="email" id="email" placeholder="Email Address | Dirección de correo" required />
				<input type="submit" value="Suscribete" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon brands fa-whatsapp"><span class="label">WhatsApp</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled.</li><li>Creditos: <a href="http://somoscreandola.com">Somos Creándola</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(function(){
		//registrar el correo del cliente
		$('#signup-form').submit(function(e) {
			e.preventDefault();
			var mail = $('#email').val();
			var token = $('#token').val();
			//ajax con los datos para laravel
			var data = {};
			data.mail = mail;
			data.token = token;
			$.ajax({
				url:'http://localhost:8000/marketing',
				headers: {'X-CSRF-TOKEN': token},
				type:'post',
				dataType:'json',
				data:data,
				beforeSend: function(){
					console.log('Loading...');
				},
				success: function(response){
					console.log(response)
				}
			});
		});
	});
</script>