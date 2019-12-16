<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>まんぼう</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                まんぼうユートピ＠
            </a>

            <div class="mb-4">
                <a href="{{ route('posts.create')}" class="btn btn-primary">
                    投稿を新規作成する
                </a>
            </div>
        </div>
        
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
