<?php
    $devs = $des = $cli = "";
    //Get number of developers
    $query = "SELECT * FROM users WHERE user_type = 'developer'";
    $result = mysqli_query($connection,$query);
    $devs = mysqli_num_rows($result);

    //Get number of designers
    $query = "SELECT * FROM users WHERE user_type = 'designer'";
    $result = mysqli_query($connection,$query);
    $des = mysqli_num_rows($result);

    //Get number of clients
    $query = "SELECT * FROM clients ";
    $result = mysqli_query($connection,$query);
    $cli = mysqli_num_rows($result);
?>
<br><br><br><br><br><br><br>
        <div style="background-color:black; margin-bottom: 0; border-radius: 0px;" class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <b style="color:white; font-weight: lighter;">Devdirectory.oi</b>
                        <br><br>
                        <p style="color: white;"> Lorem ipsum dolor sit amet shan, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                        <br><br>
                        <b style="color:white; font-weight: lighter;">Copyrights Reserved <b id="date-time"></b></b>
                    </div>
                    <div class="col-sm-4 text-center">
                        <b style="color:white; font-weight: lighter;">Follow Us</b>
                        <br><br>
                        <i class="fab fa-facebook" style="color: blue; padding: 5px; width:30;"></i>
                        <i class="fab fa-twitter" style="color: blue; padding: 5px; width:30;"></i>
                        <i class="fab fa-instagram" style="color: blue; padding: 5px; width:30;"></i>
                    </div>
                    <div class="col-sm-4 text-center">
                        <b style="color:white; font-weight: lighter;">Clients</b>
                        <p style="color: white; font-size: 25pt;"><?php echo $cli;?></p>
                        <b style="color:white; font-weight: lighter;">Developers</b>
                        <p style="color: white; font-size: 25pt;"><?php echo $devs;?></p>
                        <b style="color:white; font-weight: lighter;">Designers</b>
                        <p style="color: white; font-size: 25pt;"><?php echo $des?></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/datetime.js"></script>
    </body>
</html>