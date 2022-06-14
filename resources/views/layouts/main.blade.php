<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta10/dist/css/tabler.min.css">
  <script src="https://unpkg.com/@tabler/core@1.0.0-beta10/dist/js/tabler.min.js"></script>
  <title>Document</title>
</head>
<body>
  @include('includes.navbar')
  <div class="container">
    @yield('body')
  </div>
</body>
</html>