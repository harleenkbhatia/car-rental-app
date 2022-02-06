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

$model="";
$number="";
$seating="";
$rentperday="";

$sql="select * from cars";

$res = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($res)){
    $model=$row["model"];
    $number=$row["number"];
    $seating=$row["seating"];
    $rentperday=$row["rentperday"];

}
?>
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Car</h1>
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
                                
                                <div class="col-lg-12">
                            <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header"><strong>Update Car</strong></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Add the
                                                Model</label><input type="text"
                                                placeholder="Enter the model here" class="form-control"
                                                name="model" value="<?php echo $model; ?>" readonly>
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Number</label><input type="text" placeholder="Enter car number here"
                                                class="form-control" name="number" value="<?php echo $number; ?>" readonly>
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                seating capacity</label><input type="text" placeholder="Enter seating capacity here"
                                                class="form-control" name="seating" value="<?php echo $seating; ?>" readonly>
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                rent per day</label><input type="text" placeholder="Enter rent per day here"
                                                class="form-control" name="rentperday" value="<?php echo $rentperday; ?>" readonly>
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                number of days</label>
                                                <select name="number_days" value="<?php echo $number_days; ?>">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="4">5</option>
                                                    <option value="4">6</option>
                                                    <option value="4">7</option>
                                                    <option value="4">8</option>
                                                    <option value="4">9</option>
                                                    <option value="4">10</option>
                                                </select>
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                start date</label><input type="date"
                                                class="form-control" name="start_date" value="<?php echo $start_date; ?>">
                                        </div>


                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Update Car"
                                                class="btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php

if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into booked_cars values (NULL, '$_POST[model]', '$_POST[number]', '$_POST[seating]', '$_POST[rentperday]', '$_POST[number_days]', '$_POST[start_date]')") or die(mysqli_error($link));
    ?>
 <script  type="text/javascript">
        alert("Car Added Successfully!");
        window.location= "available_cars.php";
    </script>
    <?php
    
}

?>

<?php

include "footer.php";

?>