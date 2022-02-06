<?php
session_start();
include "connection.php";
include "header.php";
if(!isset($_SESSION["username"])){
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
?>
        <div class="row" style="margin: 0px; padding:30px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
                <center>
                <h1>Available Cars</h1>
                </center>
                <?php
                $count=0;
                $res=mysqli_query($link, "select * from cars order by id desc");
                $count=mysqli_num_rows($res);

                if($count==0){
                    ?>
                    <center>
                        <h1>No Cars Found</h1>
                    </center>
                    <?php

                }
                else{
                    echo "<table class='table table-bordered'>";
                    echo "<tr style='background-color:#006df0; color:white'>";
                    echo "<th>"; echo "Model";echo "</th>";
                    echo "<th>"; echo "Car Number";echo "</th>";
                    echo "<th>"; echo "Seating Capacity";echo "</th>";
                    echo "<th>"; echo "Rent  Per Day";echo "</th>";
                    // echo "<th>"; echo "Number of Days";echo "</th>";
                    // echo "<th>"; echo "Start Date";echo "</th>";
                    echo "<th>"; echo "Rent";echo "</th>";

                    echo "</tr>";

                    while($row=mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>"; echo $row["model"];echo "</td>";
                    echo "<td>"; echo $row["number"];echo "</td>";
                    echo "<td>"; echo $row["seating"];echo "</td>";
                    echo "<td>"; echo $row["rentperday"];echo "</td>";
                    // echo "<td>"; echo $row["number_days"];echo "</td>";
                    // echo "<td>"; echo $row["start_date"];echo "</td>";
                    echo "<td>"; 
                    echo "<a href='rent.php'>Rent</a>";
                    echo "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";

                }
                
                ?>

            </div>

        </div>
<?php
include "footer.php";
?>



        