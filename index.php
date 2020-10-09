<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 style="padding:2%; background-color: orange; color: white;"></h1>
        <h1 style="padding:3px; margin-left: 1%; background-color: white; color: darkred;"> <span><img style="width: 5%;" src="download (1).png" alt=""/></span> Aadhar</h1>
        <h1 style="padding:2%; background-color: green; color: white;"></h1>
    <center style="margin-top:3%; ">
        <form action="Aadhar.php" method="POST">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="Text" name="Fname"></td>
                </tr>
                <tr>
                    <td>Middle Name:</td>
                    <td><input type="Text" name="Mname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="Text" name="Lname"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea  name="Address"></textarea></td>
                </tr>
                <tr>
                    <td>Photo:</td>
                    <td><input type="file" name="Pic" ></td>
                </tr>
                <tr>
                    <td><input style="border: none; color: white; background-color: green; padding: 10px; border-radius: 5px;" type="submit" name="Sub" value="Submit"></td>
                    <td><input style="border: none; color: white; background-color: royalblue; padding: 10px; border-radius: 5px;" type="reset" name="res" ></td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>
