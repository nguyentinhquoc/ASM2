
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <h1>This is a test</h1>

    @yield('mainA')
    @yield('mainB', 'This is the alternative 1')
    @yield('mainC', '<p>This is the alternative 2</p>')
    @yield('mainD', 'This is the alternative 3')

    @section('testA')
    @show

    @section('testB')
      This is the alternative 4
    @show

    @section('testC')
      <p>This is the alternative 5</p>
    @show

    @section('testD')
      <p>This is the alternative 6</p>
    @show


  </body>
</html>