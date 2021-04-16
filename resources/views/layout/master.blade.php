
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    <titl>mon début avec laravel</title>
    	<style type="text/css">
        .blink
        {
            background: lime;
        }

        .blink1
        {
            background: orange;
        }
    </style>
</head>
<body>
	<span>le titre de la page est {{$title ?? ' fffn'}}</span>
	
	<div class="menu">
        <ul>
            <li><a href="Home">Home</a></li>
            <li><a href="Support">Support</a></li>
            <li><a href="Application">Application</a></li>
            <li><a href="Outil de collaboration">Outil de collaboration</a></li>
            <li><a href="Etude">Etude</a></li>
            <li><a href="Outil de communication">Outil de communication</a></li>
        </ul>

    </div>

    

	@yield('content') 

	<div class="evenement">
		@yield('evenement')
	</div>

	<footer>
		@yield('foot')
	</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
</body>
</html>