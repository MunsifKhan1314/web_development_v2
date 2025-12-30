<!DOCTYPE html>
<html>
<head>
  <title>Attribute Selector Example</title>
  <style>
    /* Attribute Selector */
    input[type="text"] {
      border: 2px solid blue;
      background-color: lightyellow;
    }

    input[type="password"] {
      border: 2px solid red;
    }
  </style>
</head>
<body>

  <h2>Attribute Selector Demo</h2>

  <input type="text" placeholder="Username">
  <br><br>

  <input type="password" placeholder="Password">
  <br><br>

  <input type="email" placeholder="Email">

</body>
</html>
