<?php
include "header.php";
include "../connection.php";
$id=$_GET["id"];
$id1=$_GET["id1"];

$model="";
$number="";
$seating="";
$rentperday="";



$res=mysqli_query($link, "select * from cars where id=$id");
while($row=mysqli_fetch_array($res)){
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
                                                name="model" value="<?php echo $model; ?>">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Number</label><input type="text" placeholder="Enter car number here"
                                                class="form-control" name="number" value="<?php echo $number; ?>">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                seating capacity</label><input type="text" placeholder="Enter seating capacity here"
                                                class="form-control" name="seating" value="<?php echo $seating; ?>">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                rent per day</label><input type="text" placeholder="Enter rent per day here"
                                                class="form-control" name="rentperday" value="<?php echo $rentperday; ?>">
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
    mysqli_query($link,"update cars set model='$_POST[model]', number='$_POST[number]', seating='$_POST[seating]', rentperday='$_POST[rentperday]' where id=$id");
    ?>

    <script type="text/javascript">
        window.location="add_edit_cars.php?id=<?php echo $id1; ?>";

    </script>
    <?php
}

?>
<?php

include "footer.php";

?>