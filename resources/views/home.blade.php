<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mGPList | Dashboard</title>
</head>
<body>
    @auth
    MASUK KE DASHBOARD
    <a class="btn btn-primary w-40 float-end ms-2" href="/dashboard" type="button">GO!</a>
    @else
    mGPList Dashboard Admin
    <a class="btn btn-primary w-40 float-end ms-2" href="/login" type="button">Login</a>

    @endauth
</body>
</html>