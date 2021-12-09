<?php
     include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passcode Validator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="pin">
<i class="fas fa-lock"></i>
<h1>Enter Passcode</h1>
  <div class="dots">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  <div class="numbers">
    <div class="number">1</div>
    <div class="number">2 ABC</div>
    <div class="number">3 DEF</div>
    <div class="number">4 GHI</div>
    <div class="number">5 <br>JKL</div>
    <div class="number">6 MNO</div>
    <div class="number">7 PQRS</div>
    <div class="number">8 TUV</div>
    <div class="number">9 WXYZ</div>
    <div class="number"></div>
    <div class="number">0</div>
    <div class="number"></div>
    
    <h3>Emergency</h3>
    <h3>_____</h3>
    <h3>Cancel</h3>
  </div>

<script src="app.js"></script>
</body>
</html>