<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container" style="margin-top: 20px;">
        <div class="float-end">
            <a href="{{ route('book.create') }}" class="btn btn-primary btn-md">Add</a>
        </div>
        <div class="clearfix"></div>
        <div class="card" style="margin-top: 10px;">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
