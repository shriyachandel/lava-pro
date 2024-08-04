<html>
    <head>
        <Title>Lava Pro</Title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        
    </head>
    <body>
      @yield('content')
      @yield('register-content')
      @yield('dashboard-nav')
    </body>
</html>