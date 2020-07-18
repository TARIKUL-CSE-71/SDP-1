
<?php
    $mass = "";
    if(isset($_POST['add'])){
        require 'connection.php';
        $student_name = $_POST['student_name'];
        $father_name  = $_POST['father_name'];
        $mother_name  = $_POST['mother_name'];
        $email        = $_POST['email'];
        $phone_no     = $_POST['phone_no'];
        $address      = $_POST['address'];
        
        $sql = "INSERT INTO reg_table(student_name,father_name,mother_name,email,phone_no,address) VALUES('$student_name','$father_name','$mother_name','$email','$phone_no','$address')";
        if(mysqli_query($conn,$sql)){
            //$mass = "Data Inserted Successfully.";
            header("Location: studentList.php");
        }else{
            $mass = "Sorry !! Data is not inserted.";
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
                    <h2 class="contact-title" style="text-align: center;">Add Student</h2>
                    <span><?php echo $mass; ?></span>
                </div>
                <div class="col-lg-12">
                    <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="student_name" id="student_name" type="text" placeholder="Student's name">
                                    <!-- <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea> -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="father_name" id="father_name" type="text" placeholder="Father's name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="mother_name" id="mother_name" type="text" placeholder="Mother's Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="phone_no" id="phone_no" type="number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="address" id="address" type="text" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3" style="text-align: center;">
                            <button type="submit" name="add" class="btn btn-primary">Add Student</button>
                        </div>
                    </form>


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