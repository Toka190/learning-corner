<?php
require_once('connection.php');

if(isset($_POST['submit']))
{
    if(empty($_POST['statue'])|| empty($_POST['price'])||empty($_POST['start'])||empty($_POST['end'])||empty($_POST['location']))
    {
        echo"<script> alert('fill in blanks!');</script>";
    }
    else{
        $statue=$_POST['statue'];
        $price=$_POST['price'];
        $start=$_POST['start'];
        $end=$_POST['end'];
        $location=$_POST['location'];

        $query="insert into learning (user_id,statue,price,start,end,location) 
        values ('1','$statue','price','start','end','location')";
       
        $result=mysqli_query($con,$query);
        if($result)
         {
            echo"<script> alert('Data inserted successfully !');</script>";
        }
        else{
            echo'error';
        }
    }


    }

    ?>