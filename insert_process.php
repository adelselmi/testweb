<body>
    <?php
    $con= mysqli_connect("localhost","root","","school1");
    // check connection
    if (mysqli_connect_errno())
    {
        echo"Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $note=$_POST['note'];

    $sql="INSERT INTO student (name, mobile, address, note)
    VALUES('$name','$mobile','$address','$note' )";
    mysqli_query($con,$sql);
    echo "تمت العملية بنجاخ";
    mysqli_close($con);
    ?>
</body>