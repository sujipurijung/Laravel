<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

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
        <br><br><br>
        <h1>โปรแกรมแปลงเลขฐาน 2 เป็นเลขฐาน 10 ^^</h1><br><br>

        <form action="calculate" method="post">
            กรุณาป้อนเลขฐาน 2 : <input type="text" name="bin">
            <input type="submit" />
            <br><br><br><br><br>
        
            <!-- เลขฐาน 10 เป็นเลขฐาน 2 : <input type="text" name="dec"> 
            <input type="submit" />
            <br><br><br><br> -->
            {{ csrf_field() }}
        </form>

    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSo7DAUXJOvn7h-H_z0WRqrazkwwqIS6pXFx2JNMmv8_AbKJ_6U" alt="Error" style="width:400px;height:300px;">

   </center></div>

</body>
</html>