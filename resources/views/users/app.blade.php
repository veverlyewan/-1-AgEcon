<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>User List</h1>

    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</body>

</html>
Gwyneth Raine
Gwyneth Raine Niog
<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Laravel App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Additional styles or your own stylesheets -->
</head>
<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Additional scripts or your own scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>