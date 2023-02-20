<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>

    <!-- jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../style/jobs.css">



    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lexend+Exa:wght@400;800;900&family=Merienda:wght@500;600;700&family=Norican&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">

    <!-- fontawesome js -->
    <script src="https://kit.fontawesome.com/e1ee03ca03.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet"
        href="https://www.futuremug.co.in/resources/assets/homedesign-old/css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css"> -->
</head>

<body>


    <?php 
    session_start();
    require('../database.php');
    // require('./login_candidate.php');
    $results = mysqli_query($connect, "SELECT * FROM jobs"); 
    $arr=[];
    $username = $_SESSION['name'];
    $userId= $_SESSION['id'];
    ?>

    <!-- navbar -->
    <nav class="navbar">
        <div class="container d-flex justify-content-between">
            <img src="../images/logo-white2.png" alt="Bootstrap" width="120px" height="auto">

            <div class="dropdown">
                <button class="btn btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-circle-user"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="../service/logout2.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <h2 class="text-center mt-4"><u>APPLY JOBS HERE</u></h2>


    <!-- banner -->
    <div class="container-fluid content mb-5">
        <div class="row mx-3">
            <div class="col-lg-3 md-12 left-side text-center">
                <div class="d-flex flex-column align-items-center justify-content-center left-div shadow">
                    <!-- <img src="./images/headshot-bg.jpg" alt="" style="border-radius: 50%; width: 200px;"> -->

                    <div class="circle">
                        <img class="profile-pic"
                            src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

                    </div>
                    <div class="p-image">
                        <i class="fa fa-camera upload-button"></i>
                        <input class="file-upload" type="file" accept="image/*" />
                    </div>


                    <h4 class="mt-4 text-secondary">
                        <?php echo $username; ?>
                    </h4>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-success w-100 mt-4">Applied Jobs</button></a>
            </div>

            <div class="col-lg-9 md-12 right-side ms-auto px-5">
                <div class="row">
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <div class="card mt-3 shadow">
                        <div class="card-body row">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">
                                    <?php echo $row['job_title']; ?>
                                </h4>
                                <span class="job-type-fulltime"><?php echo $row['company']; ?></span>
                            </div>
                            <div class="col-md-9">
                                <p class="summary mt-4">
                                    <strong>Job Summary:</strong>
                                    <?php echo $row['description2']; ?>
                                </p>
                                <div class="skills d-flex justify-content-between mt-3">
                                    <?php
                                    $skill=$row['skills'];
                                    $arr = explode(",",$skill);
                                    // echo count($arr);
                                    for ($i = 0; $i < count($arr); $i++) {
                                        // echo "The number is: $x <br>";
                                      
                                    ?>
                                    <span>
                                    <?php
                                    
                                        echo $arr[$i];
                                    ?>
                                    </span>
                                    <?php
                                    
                                    }
                                    ?>
                                    

                                    <!-- <span>CSS</span>
                                    <span>Javascript</span>
                                    <span>Bootstrap</span>
                                    <span>Angular</span>
                                    <span>Node</span>
                                    <span>MongoDB</span> -->
                                </div>
                                <div class="details d-flex justify-content-between mt-4">
                                    <span><strong>Experience: </strong>
                                        <?php echo $row['experience']; ?> years
                                    </span>
                                    <span><strong>Location: </strong>
                                        <?php echo $row['location2']; ?>
                                    </span>
                                    <span><strong>Salary in CTC: </strong>
                                        <?php echo $row['salary']; ?> LPA
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                                <button type="button" class="btn btn-request my-3" data-bs-toggle="modal" data-bs-target="#applyModal" onclick="applyJobs(<?php echo $row['sn'] ?>,<?php echo $userId ?>)"> Apply Now </button>
                            </div>

                            <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="applyModalLabel"><b>Job Applied Successfully !</b></h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                            <p>Jobs with similar skills found !!</p>
                                            <p>Apply all similar Jobs??</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Apply All</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>




    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="../js/bootstrap.js"></script>
    <script src="../script/jobs.js"></script>
    <script src="https://kit.fontawesome.com/e1ee03ca03.js" crossorigin="anonymous"></script>
    <script>
        function applyJobs(jobId,userId){
            $.ajax({
        type: "POST",
        url: '../service/candidate_services.php',
        data: {
            funcName:"applyJob",
            params:{jobId,userId}
        },
        success: function (response) {
            console.log("response",response)
            alert("hai")
        }
    });
        }
    </script>

</body>

</html>