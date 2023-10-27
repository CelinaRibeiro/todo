<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$page ?? 'Todo - Genérico'}}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <img src="assets/images/logo.png" alt=""/>
    </div>
    <div class="content">
      <nav>
        {{-- <a href="#" class="btn btn-primary">Criar login</a> --}}
        {{$btn ?? null}}
      </nav>
      <main>
        {{ $slot }}
      </main>
    </div>
  </div>
</body>
</html>