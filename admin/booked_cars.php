<?php
session_start();
include "header.php";
include "../connection.php";
if(!isset($_SESSION["admin"])){
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Booked Cars</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <center>
                <h1>All Booked Cars</h1>
                </center>
                <?php
                $count=0;
                $res=mysqli_query($link, "select * from booked_cars order by id desc");
                $count=mysqli_num_rows($res);

                if($count==0){
                    ?>
                    <center>
                        <h1>No Results Found</h1>
                    </center>
                    <?php

                }
                else{
                    echo "<table class='table table-bordered' style='margin-top: 25px'>";
                    echo "<tr style='background-color:#006df0; color:white'>";
                    echo "<th>"; echo "Car Number";echo "</th>";
                    echo "<th>"; echo "Model";echo "</th>";
                    echo "<th>"; echo "Rent  Per Day";echo "</th>";
                    echo "<th>"; echo "Number of Days";echo "</th>";
                    echo "<th>"; echo "Start Date";echo "</th>";
                    // echo "<th>"; echo "Wrong Answer";echo "</th>";
                    echo "</tr>";

                    while($row=mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>"; echo $row["number"];echo "</td>";
                    echo "<td>"; echo $row["model"];echo "</td>";
                    echo "<td>"; echo $row["rentperday"];echo "</td>";
                    echo "<td>"; echo $row["number_days"];echo "</td>";
                    echo "<td>"; echo $row["start_date"];echo "</td>";
                    // echo "<td>"; echo $row["wrong_answer"];echo "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";

                }
                
                ?>
                                

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<?php

include "footer.php";

?>