<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình Web</title>
</head>
<body>
    <style>
      .wrapper{
        padding: 10px;
        height: 340px;
        width: 500px;
        justify-content: center;
        text-align: center;
        margin-left: 35%;
        margin-top: 5%;
        border: 1px solid black;
        /* background-color: aqua; */
      }
      #fname{
        font-size: 20px;
        margin-top: 20px;
        margin-bottom: 30px;
        margin-left: -17px;
      }
      #lname{
        font-size: 20px;
        margin-left: -17px;
       
      }
      #lname2{
        font-size: 20px;
        margin-left: 70px;
       
      }
      label{
        font-size: 20px;
        padding: 10px;
        margin-right: 35px;

      }
     #check{
        margin: 20px;
        margin-left: 45px;
        
     }
     a{
        font-size: 20px;
        text-decoration: none;
        /* background-color: aqua; */
        margin-left: 200px;  
        margin-right: 40px;
     }
    #login{
        padding: 15px;
        border-radius: 10px;
        background-color: rgb(17, 151, 254);
        margin-top: 70px;
        margin-right: 30px;
    }
    #nlmk{
        font-size: 20px;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-right: 30px;
    }
   table{
    border: 1px solid black;
    width: 100%;
    display: flex;
    justify-content: center;
    font-size: 20px;
    padding: 10px;
   }
   table td{
    padding: 0px 10px;
   }
   #table1{
    margin-top: 50px;
   }
   #table2{
    margin-top: 90px;
   }
   #home{
    border-left:1px solid black ;
   }
   #ghinho{
    padding: 15px;
    margin-left: 95px;
    margin-top: 20px;
   }
    </style>
    <table id="table1">
        <tr>
            <td >Home</td>
            <td id="home">Đăng nhập</td>
            <td id="home">Đăng ký</td>
        </tr>
    </table>
    <div class="wrapper">
        <h2>Màn hình đăng nhập</h2>
        <form action="">
        <label for="fname">Username</label>
        <input type="text" id="fname" name="fname" ><br>
        <label for="lname">Mật khẩu</label>
        <input type="password" id="lname" name="lname"> <br>
        <input id="ghinho" type="checkbox" name="name" value=""><label > Ghi nhớ đăng nhập </label> <br>
        <a href="">Quên mật khẩu</a>
        <input id="login" type="submit" value="Đăng nhập">
        </form> 
    </div>
    <table id="table2">
        <tr>
            <td >Lập trình web @01/2024</td>
        </tr>
    </table>
</body>
</html>