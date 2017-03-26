<!DOCTYPE html>
<html>
<head>
    <title>TEST</title>

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
      HELLO<br>

      <?php echo "session('weight')"; ?>
      
      <div>
        bin: {{session('bin')}}
      </div>

      <div>
        count: {{session('count')}}
      </div>


   </center></div>

</body>
</html>