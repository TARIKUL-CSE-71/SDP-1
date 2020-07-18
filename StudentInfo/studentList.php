
<?php
    
    require 'connection.php';
    
    $sql = "SELECT * FROM reg_table";
    if(mysqli_query($conn,$sql)){
        $row = mysqli_query($conn,$sql);
    }
?>
<?php
    $mass = "";
    if(isset($_GET['del'])){
        $delete_id = (int)$_GET['del'];
        $delete = "DELETE FROM reg_table WHERE id='$delete_id'";
        if(mysqli_query($conn,$delete)){
            $mass = "Student's Data deleted Successfully!!";
        }else{
            $mass = "Sorry !! Student's Data is not deleted!!";
        }
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/barcode.css">
    <title>Restaurant</title>

</head>
<body>

<?php include 'includes/navbar.php'; ?>

    <section id="marquee" class="mb-4">
        <div class="container">
            <div class="marquee pt-3 pb-3 text-white">
                <marquee scrolldelay="150"><b></b>Note : Barcode Cafe Is Open Time 11:00:00 AM To 12:00:00 AM / Burgwich Fusion Town Cafe Is Open Time 11:00:00 AM To 11:00:00 PM / Barcode Cafe GEC Is Open Time 12:00:00 PM To 12:00:00 AM / Barcode On Fire Modern Japanese Is Open Time 11:00:00 AM To 11:00:00 PM</marquee>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title" style="text-align: center;">Students List</h2>
                    <span><?php echo $mass; ?></span>
                </div>
                <div class="col-lg-12">
                    
                    <div class="tbl mt-4">
                        <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Student's Name</th>
                            <th scope="col">Father's Name</th>
                            <th scope="col">Father's Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                while ($result=mysqli_fetch_assoc($row)) {
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $result['student_name']; ?></td>
                                    <td><?php echo $result['father_name']; ?></td>
                                    <td><?php echo $result['mother_name']; ?></td>
                                    <td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['phone_no']; ?></td>
                                    <td><?php echo $result['address']; ?></td>
                                    <td><a href="?del=<?php echo $result['id']; ?>" class="btn btn-primary">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>

                </div>

                
            </div>
        </div>
    </section>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>