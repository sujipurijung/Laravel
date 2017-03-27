<!DOCTYPE html>
<html>
<head>
    <title>ShowCalculate</title>

    <style>
body {
    background-color: lightblue;
    background-repeat: no-repeat;
    background-position: right top;
    margin-right: 200px;
    background-attachment: fixed;
}
</style>

</head>
<body>
   <div class="container"><center>
      HELLO<br><br><br>
      <div>
        binary: {{session('bin')}} => decimal: {{session('count')}}
      </div><br><br><br><br><br><br><br><br>
      
   </center></div>
   session_binary : {{session('bin')}}<br>
   session_decimal : {{session('count')}}<br><br>
   <?php  echo "Cookie_binary : ";echo Cookie::get('bin');
          echo "<br>Cookie_decimal : <br><br>";echo Cookie::get('cookie_dec'); var_dump(session()->all());

   ?>
   <br><br><br><br><br>
   <a href="calculator"> Previous </a>


</body>
</html>