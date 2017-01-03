<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form-backend-validation demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">

    <style>body { padding-top: 40px; }</style>
</head>

<body>
    <div id="app" class="container">
        @include('_partials/list')
        @include('_partials/form')
    </div>

    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>