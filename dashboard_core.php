<?php

require_once("connection.php");

if(isset($_REQUEST["foodname"]) && isset($_REQUEST["item"]) && isset($_REQUEST["price"]) && isset($_REQUEST["type"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $type = $_REQUEST["type"];
    
    if($type==Italian)
    {
        $insertquery = "INSERT INTO pizzamenu(Foodname,Item,Price)VALUES('$foodname','$item','$price')";
        $runisquery = mysqli_query($conn,$insertquery);
    
        if($runisquery==true)
        {
            header ("location: admininsert.php?action=true");
        }
        else 
        {
            header ("location: admininsert.php?action=false");
        }
    }
    else if($type==Biriyani)
    {
        $insertquery = "INSERT INTO chickenmenu(Foodname,Item,Price)VALUES('$foodname','$item','$price')";
        $runisquery = mysqli_query($conn,$insertquery);
    
        if($runisquery==true)
        {
            header ("location: admininsert.php?action=true");
        }
        else 
        {
            header ("location: admininsert.php?action=false");
        }
    }
    else if($type==Chinese)
    {
        $insertquery = "INSERT INTO burgermenu(Foodname,Item,Price)VALUES('$foodname','$item','$price')";
        $runisquery = mysqli_query($conn,$insertquery);
    
        if($runisquery==true)
        {
            header ("location: admininsert.php?action=true");
        }
        else 
        {
            header ("location: admininsert.php?action=false");
        }
    }
    else if($type==Dessert)
    {
        $insertquery = "INSERT INTO desartmenu(Foodname,Item,Price)VALUES('$foodname','$item','$price')";
        $runisquery = mysqli_query($conn,$insertquery);
    
        if($runisquery==true)
        {
            header ("location: admininsert.php?action=true");
        }
        else 
        {
            header ("location: admininsert.php?action=false");
        }
    }
    else if($type==Setmenu)
    {
        $insertquery = "INSERT INTO setmenu(Foodname,Item,Price)VALUES('$foodname','$item','$price')";
        $runisquery = mysqli_query($conn,$insertquery);
    
        if($runisquery==true)
        {
            header ("location: admininsert.php?action=true");
        }
        else 
        {
            header ("location: admininsert.php?action=false");
        }
    }
    else if($type==Beverage)
    {
        $insertquery = "INSERT INTO beveragemenu(Foodname,Item,Price)VALUES('$foodname','$item','$price')";
        $runisquery = mysqli_query($conn,$insertquery);
    
        if($runisquery==true)
        {
            header ("location: admininsert.php?action=true");
        }
        else 
        {
            header ("location: admininsert.php?action=false");
        }
    }
    
}

elseif(isset($_REQUEST["offername1"]) && isset($_REQUEST["deteils1"]) && isset($_REQUEST["offername2"]) && isset($_REQUEST["deteils2"])&& isset($_REQUEST["offername3"])&& isset($_REQUEST["deteils3"]))
{
    $offername1 = $_REQUEST["offername1"];
    $deteils1 = $_REQUEST["deteils1"];
    $offername2 = $_REQUEST["offername2"];
    $deteils2 = $_REQUEST["deteils2"];
    $offername3 = $_REQUEST["offername3"];
    $deteils3 = $_REQUEST["deteils3"];

    $insertquery = "INSERT INTO menuoffer(offername1,deteils1,offername2,deteils2,offername3,deteils3)VALUES('$offername1','$deteils1','$offername2','$deteils2','$offername3','$deteils3')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: addoffer.php?action=true");
    }
    else 
    {
        header ("location: addoffer.php?action=false");
    }
}

elseif(isset($_REQUEST["submit1"]))
{
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    $insertquery = "INSERT INTO gellaryslide(picture)VALUES('$nameforpic.jpg')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: gellarypic.php?inserted");
    }
    else 
    {
        header ("location: gellarypic.php?notinsert");
    }

    
}

elseif(isset($_REQUEST["submit2"]))
{
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    $insertquery = "INSERT INTO gellaryslide2(picture)VALUES('$nameforpic.jpg')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: gellarypic.php?inserted");
    }
    else 
    {
        header ("location: gellarypic.php?notinsert");
    }

    
}

elseif(isset($_REQUEST["submit3"]))
{
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    $insertquery = "INSERT INTO gellaryslide3(picture)VALUES('$nameforpic.jpg')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: gellarypic.php?inserted");
    }
    else 
    {
        header ("location: gellarypic.php?notinsert");
    }

    
}

elseif(isset($_REQUEST["submit4"]))
{
    $about = $_REQUEST["about"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    $insertquery = "INSERT INTO chefsinfo(picture,about)VALUES('$nameforpic.jpg','$about')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: insertchefs.php?inserted");
    }
    else 
    {
        header ("location: insertchefs.php?notinsert");
    }

    
}

elseif(isset($_REQUEST["submit5"]))
{
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $date = $_REQUEST["date"];
    $time = $_REQUEST["time"];
    $type = $_REQUEST["type"];
    $number = $_REQUEST["number"];

    $insertquery = "INSERT INTO partybook(uname,email,date,time,type,person)VALUES('$username','$email','$date','$time','$type','$number')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: reservation.php?action=true");
    }
    else 
    {
        header ("location: reservation.php?action=false");
    }
}

elseif(isset($_REQUEST["submit6"]))
{
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $date = $_REQUEST["date"];
    $time = $_REQUEST["time"];
    $number = $_REQUEST["number"];

    $insertquery = "INSERT INTO tablebook(uname,email,date,time,person)VALUES('$username','$email','$date','$time','$number')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: reservation.php?action=true");
    }
    else 
    {
        header ("location: reservation.php?action=false");
    }
}


elseif(isset($_REQUEST["submit7"]))
{
    $name = $_REQUEST["uname"];
    
    $address = $_REQUEST["address"];
    $type = $_REQUEST["type"];
    $salary = $_REQUEST["salary"];
    $date = $_REQUEST["date"];
    
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    


    $insertquery = "INSERT INTO `employee` (`name`, `addr`, `categorie`, `salary`, `joinning_date`, `picture`) VALUES ('$name', '$address', '$type', '$salary', '$date', '$nameforpic.jpg')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: employee_reg.php?insert");
    }
    else 
    {
        header ("location: employee_reg.php?action=false");
    }
}

elseif(isset($_REQUEST["submit8"]))
{
    $foodname = $_REQUEST["foodname"];
    $quantity = $_REQUEST["qty"];
    $price = $_REQUEST["price"];
    $username = $_REQUEST["uname"];
    $email = $_REQUEST["email"];
    $address = $_REQUEST["address"];
    $number = $_REQUEST["number"];
    $total = $_REQUEST["total"];

    $insertquery = "INSERT INTO foodorder(foodname,quantity,price,total,username,email,addr,phone)VALUES('$foodname','$quantity','$price','$total','$username','$email','$address','$number')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: food_order.php?insert");
    }
    else 
    {
        header ("location: food_order.php?wrong");
    }
}

elseif(isset($_REQUEST["submit9"]))
{
    $username = $_REQUEST["username"];
    $number = $_REQUEST["number"];
    $email = $_REQUEST["email"];
    $msg = $_REQUEST["msg"];
    

    $insertquery = "INSERT INTO feedback(name,phone,email,msg)VALUES('$username','$number','$email','$msg')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: index.php?insert");
    }
    else 
    {
        header ("location: index.php?wrong");
    }
}




?>