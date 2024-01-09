<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APPCARD:@yield('title')</title>
  <style>
    nav {background-color: lightcoral;}
    footer {background-color: lightgreen;}
  </style>
</head>
<body>
  <nav>Menu</nav>
  <header>
    <h1>Titulo de la aplicacion</h1>
    <h2>@yield('subtitle')</h2>
  </header>
  <hr>
<main>
  @section('container')
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reiciendis tempore ipsum odio dolore soluta quisquam fugiat saepe beatae? Totam eveniet minima id dolor aliquid ratione adipisci facilis laudantium amet
  @show
</p>
</main>
  <footer>Footer footilino&copy</footer>
</body>
</html>