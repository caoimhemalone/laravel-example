<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laracast')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

    <style type="text/css">
    	.is-complete {
    		text-decoration: line-through;
    	}
    </style>
</head>

<body>
    <div class="container">
    	@yield('content')
	</div>

</body>

</html>