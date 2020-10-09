<center>
    <div style="width: 30%; background-color: whitesmoke;">
        <span><img style="width: 20%; margin-top: 20px; margin-left: -200px;"  src="thumb.jpg" alt=""/><img style="width: 20%;margin-top: 20px; float: right; padding-right:30px;" src="download (1).png" alt=""/></span> 
        <h1 style="padding:3%; background-color: orange; color: white;"></h1>
        <h1 style="padding:4%; margin-top: -20px;margin-bottom: -20px; background-color: white; color: orange;"> </h1>
        <!--<h1 style="padding:3px; margin-left: 1%; background-color: white; color: darkred;"> Aadhar</h1>-->
        <h1 style="padding:3%; background-color: green; color: white;"></h1>
        <p>Enrollment No. 11991/442526/27299</p>
        <div style="margin-top:40px;padding-bottom:10px;">
        <p>To.</p>
        <p style="margin-top:-15px;font-weight: bold;"><?php echo $_POST['Fname']." ".$_POST['Mname']." ".$_POST['Lname']; ?></p>
        <p style="margin-top:-15px; "><?php echo $_POST['gender']; ?></p>
        <p style="margin-top:-15px;"><?php echo $_POST['Address']; ?></p>
        </div>        
        <p style="font-size: 20px;">Aadhar No.</p>
        <h1 style="margin-top:-15px;font-weight: bold;">888 88 88 88 8 </h1> 
        <p>-------------------------------------------------------------------------------------------</p>
        <table style="width: 90%;">
            <tr>
                <td><img style="width: 50%;" src="dp.jpg" alt=""/></td>
                <td style="width: 50%;">        
                    <p style="margin-top:-15px;font-weight: bold;"><?php echo $_POST['Fname']." ".$_POST['Mname']." ".$_POST['Lname']; ?></p>
                    <p style="margin-top:-15px; "><?php echo $_POST['gender']; ?></p>
                </td>
            </tr>
        </table>
        
        <h1 style="color: darkred;">______________________________</h1>
        <h3 >Your Aadhar</h3>
    </div>
</center>