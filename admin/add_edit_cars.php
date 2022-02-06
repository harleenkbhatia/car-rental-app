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
$id=$_GET["id"];
?>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-lg-6">
                            <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header"><strong>Add New Cars for Rent</strong></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Add the
                                                Car Model</label><input type="text"
                                                placeholder="Enter the car model here" class="form-control"
                                                name="model">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add the Car Number
                                                </label><input type="text" placeholder="Enter the car number here"
                                                class="form-control" name="number">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Seating Capacity</label><input type="text" placeholder="Enter seating capacity here"
                                                class="form-control" name="seating">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                rent per day</label><input type="text" placeholder="Enter rent per day here"
                                                class="form-control" name="rentperday">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Add Car"
                                                class="btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                    </div>
                </div>

            </div>
            <!--/.col-->


        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-border">
                            <tr>
                                <th>Id</th>
                                <th>Model</th>
                                <th>Number</th>
                                <th>Seating Capacity</th>
                                <th>Rent per day</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        
                        <?php

                        $res=mysqli_query($link, "select * from cars order by id asc");
                        while($row=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
        
                            echo "<td>"; echo $row["model"]; echo "</td>";
                            echo "<td>"; 
                            echo $row["number"];
                            

                            echo "</td>";

                            echo "<td>"; 
                            
                            echo $row["seating"];
                            

                            echo "</td>";

                            echo "<td>"; 
                            
                            echo $row["rentperday"];
                            

                            echo "</td>";
                            echo "<td>";
                            ?>
                                <a href="edit_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Edit</a>
                                <?php
                            echo "</td>";

                            echo "<td>"; 
                            

                            ?>
                            
                            <a href="delete_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Delete</a>
                            <?php

                            echo "</td>";

                            echo "</tr>";
                            
                        }

                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<?php
if(isset($_POST["submit1"])){
    // $loop=0; //for looping
    $count=0;
    $res=mysqli_query($link, "select * from cars order by id asc") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);
    if($count==0){ //no record

    }
    else{ //record is there
        while($row=mysqli_fetch_array($res)){
            // $loop=$loop+1;
            mysqli_query($link, "update cars where id=$row[id]");
        }
    }
    // $loop=$loop+1;
    mysqli_query($link, "insert into cars values(NULL, '$_POST[model]', '$_POST[number]', '$_POST[seating]', '$_POST[rentperday]')") or die(mysqli_error($link));

    ?>
    <script  type="text/javascript">
        alert("Car Added Successfully!");
        window.location.href= window.location.href;
    </script>
    <?php
    
}

?>

<?php

include "footer.php";

?>