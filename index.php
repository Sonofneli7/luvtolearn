<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuvtoLearnInc. -LandingPage</title>
    <link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <style>
       *{
        font-family: 'Poppins', sans-serif;
       }
       .h-font{
        font-family: 'Merienda', cursive;
       }
       /* Chrome, Safari, Edge, Opera  Removing number arrows from input field*/
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        /* Firefox  Removing number arrows from input field*/
        input[type=number] {
        -moz-appearance: textfield;
        }

        .custom-bg{
            background-color: #2ec1ac;
        }
        .custom-bg:hover{
            background-color: #279e8c;
        }
    </style>
</head>
<body>
<!-- Header Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top ">
  <div class="container-fluid">
    <a class="navbar-brand h-font me-5 fw-bold fs-3 " href="index.php">LuvtoLearn</a> 
    <!-- Put an logo image here instean of the wording -->
    <button class="navbar-toggler shadow-non" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex" >
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning shadow-non me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
        </button>
        <button type="button" class="btn btn-warning shadow-non me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                 Register
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                    <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>  Trainer Login
                    </h5>
                    <button type="reset" class="btn-close shadow-nonw" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <!-- Fixed alignment of login and forgot password in Modal and creates space -->
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-warning shadow-none"> LOGIN </button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
<!-- Register Modal -->

     <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <form>
                    <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-lines-fill fs-3 me-2"></i>  Trainer Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-nonw" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill text-bg-warning mb-3 text-wrap lh-base">
                        Note: Details must match with your ID  (Work ID, Drivers License)
                        which will be required for proper payment
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                             <!-- Places the input field next to one another -->
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                         <button type="submit" class="btn btn-warning shadow-none"> REGISTER </button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
     </div>

     <!-- Carousel -->

     <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.jpg" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/2.jpg" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/3.jpg"class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/4.jpg" class="w-100 d-block" />
            </div>
            </div>
         </div>
     </div>

     <!-- Checking Availability Form -->
     <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                             <div class="col-lg-3">
                                <label class="form-label" style="font-weight:500;">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                             </div>
                             <div class="col-lg-3">
                                <label class="form-label" style="font-weight:500;">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                             </div>
                             <div class="col-lg-3">
                                <label class="form-label" style="font-weight:500;">Adults</label>
                                 <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                             </div>
                             <div class="col-lg-3">
                                <label class="form-label" style="font-weight:500;">Children</label>
                                 <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                             </div>
                             <div class="col-lg-1">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                             </div>
                        </div>
                    </form>
            </div>
        </div>
     </div>


 <br><br><br>
 <br><br><br>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 <!-- Initialize Swiper -->
 <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false, 
      }
    });
  </script>
</body>
</html>