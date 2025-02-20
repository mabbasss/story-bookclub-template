<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/style.css" />
   <link rel="icon" href="images/logo.png" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <title>Book Club</title>
</head>
<body class="bookClubBodyColor">
   <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <div class="joinAlert alert alert-success p-5 text-center d-none">You've successfully joined!</div>
        <div class="leaveAlert alert alert-danger p-5 text-center d-none">We're sorry to see you go!</div>
        <div id="bookClubCardContent">
           <img id="bookClubCardImg" class="img-fluid w-100">
           <p id="bookClubCardText"></p>
        </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
       </div>
     </div>
   </div>
 </div>
 <!-- END Modal -->
   <header>
      <nav class="shadow-lg">
         <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
         </div>
         <div class="logo"><a href="" class="text-decoration-none"><img src="images/logo.png" width="120rem"></a></div>
         <div class="menu">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">STORE</a></li>
               <li><a href="#">BOOK CLUBS</a></li>
               <li><a href="About.html">ABOUT</a></li>
               <li><a href="#">CONTACT US</a></li>
               <li><a class="btn btn-outline-success" href="#">My Account</a></li>
               <li><a class="btn btn-success" href="Registration.html">Register</a></li>
            </ul>
         </div>
      </nav>
      <div class="text-center bg-image">
         <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="d-flex justify-content-center align-items-center h-100">
               <div class="mt-5 text-white">
                  <h1 class="mb-3">Welcome to our book clubs</h1>
                  <h4 class="mb-5">Creating conversations is our passion!</h4>

               </div>
            </div>
         </div>
      </div>
   </header>
   <section id="bookClubCards" class="container">
      <div class="row">
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/Adult-Book-Club-768x462.png" alt="Card image cap">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">Up all night</h5>
                  <p class="card-text">created by harper collins, up all night is about promoting mental health
                     awarneess and self-care
                     activities for women. each month the club announces its book and its reading schedule, join us to
                     be updated </p>
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/emy.jpg">
                        <p class="profileName fw-semibold my-auto">Harper collins</p>
                     </div>
                  </div>
                  <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button>
               </div>
            </div>
         </div>
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/history.jpg" alt="Card image cap">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">History club</h5>
                  <p class="card-text">Created by Jennifer Robert, if you're looking for a community of history lovers
                     who also love to read,
                     then this is the best online book club for you. There are so many discussions and monthly books to
                     read. join us now </p>
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/emma.jpg">
                        <p class="profileName fw-semibold my-auto">Jennifer Robert </p>
                     </div>
                  </div>
                  <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button>
               </div>
            </div>
         </div>
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/crime.jpg" alt="Card image cap">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">Horror club</h5>
                  <p class="card-text">created by Mark Stevan, The name of this club spoils mystery. horror club blaze
                     through the latest mystery
                     reads. each month we vote for a book to read. if you'd like then just hit the join button to be
                     part of our community. </p>
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/julian-wan-WNoLnJo7tS8-unsplash.jpg">
                        <p class="profileName fw-semibold my-auto">Mark Stevan</p>
                     </div>
                  </div>
                  <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button>
               </div>
            </div>
         </div>

      </div>
      <section id="bookClubCards" class="container">
         <div class="row">
            <div class="bookClubCard col-md-4 mt-5 mb-4">
               <div class="card profile-card-5 shadow-lg bg-white rounded">
                  <div class="card-img-block">
                     <img class="card-img-top" src="images/fclub.png" alt="Card image cap">
                  </div>
                  <div class="card-body pt-0">
                     <h5 class="card-title">Sci Club</h5>
                     <p class="card-text">created by charolette james, Sci Club is a welcoming place for readers to
                        share their love of
                        speculative fiction through group reads. Discover the best science fiction, fantasy, graphic
                        novels, Join now </p>
                     <div class="profileStrip">
                        <div class="d-flex align-items-center">
                           <img class="profileAvatar me-4" src="images/sci.jpg">
                           <p class="profileName fw-semibold my-auto">Charolette James</p>
                        </div>
                     </div>
                     <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Join club
                     </button>
                  </div>
               </div>
            </div>
            <div class="bookClubCard col-md-4 mt-5 mb-4">
               <div class="card profile-card-5 shadow-lg bg-white rounded">
                  <div class="card-img-block">
                     <img class="card-img-top" src="images/b.png" alt="Card image cap">
                  </div>
                  <div class="card-body pt-0">
                     <h5 class="card-title">Action Club</h5>
                     <p class="card-text">Created by sally liam, Welcome to The Action Club, if you love action then
                        this is the perfect book club for you as each month
                        we vote for the book that we will read, we discuss and suggest our recommendations </p>
                     <div class="profileStrip">
                        <div class="d-flex align-items-center">
                           <img class="profileAvatar me-4" src="images/action.jpg">
                           <p class="profileName fw-semibold my-auto">Sally Liam</p>
                        </div>
                     </div>
                     <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Join club
                     </button>
                  </div>
               </div>
            </div>
            <div class="bookClubCard col-md-4 mt-5 mb-4">
               <div class="card profile-card-5 shadow-lg bg-white rounded">
                  <div class="card-img-block">
                     <img class="card-img-top" src="images/suuclub.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body pt-0">
                     <h5 class="card-title">Summer Club</h5>
                     <p class="card-text">Created by Noah James, about our program summer club offers you a summer
                        reading experience,literally the summer
                        sun takes you- we are perfect for your next meeting on the beach, by the pool, or at home with
                        margaritas.
                     </p>
                     <div class="profileStrip">
                        <div class="d-flex align-items-center">
                           <img class="profileAvatar me-4" src="images/man.jpg">
                           <p class="profileName fw-semibold my-auto">Noah James</p>
                        </div>
                     </div>
                     <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Join club
                     </button>
                  </div>
               </div>
            </div>
            <section id="bookClubCards" class="container">
               <div class="row">
                  <div class="bookClubCard col-md-4 mt-5 mb-4">
                     <div class="card profile-card-5 shadow-lg bg-white rounded">
                        <div class="card-img-block">
                           <img class="card-img-top" src="images/rclub.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                           <h5 class="card-title">Romance Club</h5>
                           <p class="card-text">created by Tessa Bailey, Iam a big fan of romance books and novels, so
                              this book club is all about romance,
                              We try and read as many romance genres as we can, sharing our thoughts and expanding our
                              romance reading experience. </p>
                           <div class="profileStrip">
                              <div class="d-flex align-items-center">
                                 <img class="profileAvatar me-4" src="images/jimy.jpg">
                                 <p class="profileName fw-semibold my-auto">Tessa Bailey</p>
                              </div>
                           </div>
                           <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Join club
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="bookClubCard col-md-4 mt-5 mb-4">
                     <div class="card profile-card-5 shadow-lg bg-white rounded">
                        <div class="card-img-block">
                           <img class="card-img-top" src="images/sclub.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                           <h5 class="card-title">Silent club</h5>
                           <p class="card-text">Created by emma winson, Small Talk? No Thanks Pass, Silent Book Club is
                              all
                              about enjoying reading books — without having to think of something smart to say. its all
                              about to put
                              down your phone and be 'real'. </p>
                           <div class="profileStrip">
                              <div class="d-flex align-items-center">
                                 <img class="profileAvatar me-4" src="images/winson.jpg">
                                 <p class="profileName fw-semibold my-auto">emma winson</p>
                              </div>
                           </div>
                           <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Join club
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="bookClubCard col-md-4 mt-5 mb-4">
                     <div class="card profile-card-5 shadow-lg bg-white rounded">
                        <div class="card-img-block">
                           <img class="card-img-top" src="images/adv.jpeg" alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                           <h5 class="card-title">Adventure Club</h5>
                           <p class="card-text">created by john william, Adventure Book Club is a fun, social
                              opportunity
                              for people who love to read support each other, outdoor, travel, and adventure-based
                              fiction and nonfiction books. </p>
                           <div class="profileStrip">
                              <div class="d-flex align-items-center">
                                 <img class="profileAvatar me-4" src="images/mark.jpg">
                                 <p class="profileName fw-semibold my-auto">John william</p>
                              </div>
                           </div>
                           <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Join club
                           </button>
                        </div>
                     </div>
                  </div>
                  <section id="bookClubCards" class="container">
                     <div class="row">
                        <div class="bookClubCard col-md-4 mt-5 mb-4">
                           <div class="card profile-card-5 shadow-lg bg-white rounded">
                              <div class="card-img-block">
                                 <img class="card-img-top" src="images/teen.jpg" alt="Card image cap">
                              </div>
                              <div class="card-body pt-0">
                                 <h5 class="card-title">Teens Club</h5>
                                 <p class="card-text">created by Mia Lucas, Teens and young/ new adults -- ages 15 to 21
                                    -- join us once a month to discuss a variety of books
                                    we don't want people to miss out on the wonderful world of adult books. Join our
                                    club now!
                                 </p>
                                 <div class="profileStrip">
                                    <div class="d-flex align-items-center">
                                       <img class="profileAvatar me-4" src="images/mia.jpg">
                                       <p class="profileName fw-semibold my-auto">Mia Lucas</p>
                                    </div>
                                 </div>
                                 <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Join club
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="bookClubCard col-md-4 mt-5 mb-4">
                           <div class="card profile-card-5 shadow-lg bg-white rounded">
                              <div class="card-img-block">
                                 <img class="card-img-top" src="images/sco.jpg" alt="Card image cap">
                              </div>
                              <div class="card-body pt-0">
                                 <h5 class="card-title">Social Club</h5>
                                 <p class="card-text">Created by Ava Elijah, Join other literary enthusiasts across the
                                    globe at the Social Book Club.
                                    Whether you're after stimulating conversation about your favourite novels or just a
                                    means to fuel your love of books. </p>
                                 <div class="profileStrip">
                                    <div class="d-flex align-items-center">
                                       <img class="profileAvatar me-4" src="images/ava.jpg">
                                       <p class="profileName fw-semibold my-auto">Ava Elijah</p>
                                    </div>
                                 </div>
                                 <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Join club
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="bookClubCard col-md-4 mt-5 mb-4">
                           <div class="card profile-card-5 shadow-lg bg-white rounded">
                              <div class="card-img-block">
                                 <img class="card-img-top" src="images/coclub.jpeg" alt="Card image cap">
                              </div>
                              <div class="card-body pt-0">
                                 <h5 class="card-title">Bestie Club</h5>
                                 <p class="card-text">created by Sophia William, Welcome to our Bestie Book Club— a
                                    community for book lovers from Girls' Life magazine.
                                    If you're new here, Here's how this works: Each month, we read, discuss over a new
                                    book. </p>
                                 <div class="profileStrip">
                                    <div class="d-flex align-items-center">
                                       <img class="profileAvatar me-4" src="images/sophia.jpg">
                                       <p class="profileName fw-semibold my-auto">Sophia william</p>
                                    </div>
                                 </div>
                                 <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Join club
                                 </button>
                              </div>
                           </div>
                        </div>

                     </div>
               </div>
         </div>

         </div>
      </section>
   </section>
   <!-- Footer -->
   <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4" style="background-color: #5E3023">
         <!-- Left -->
         <div class="me-5">
            <span>Get connected with us on social networks:</span>
         </div>
         <!-- Left -->

         <!-- Right -->
         <div class="socialMedia">
            <a href="" class="text-white me-4">
               <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="text-white me-4">
               <i class="bi bi-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
               <i class="bi bi-google"></i>
            </a>
            <a href="" class="text-white me-4">
               <i class="bi bi-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
               <i class="bi bi-linkedin"></i>
            </a>
            <a href="" class="text-white me-4">
               <i class="bi bi-github"></i>
            </a>
         </div>
         <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="footerLinks">
         <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
               <!-- Grid column -->
               <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold">Story Keeper</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto"
                     style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p>
                     Story Keeper is the act of releasing your books for another book lover to find. We hope you to
                     join us!
                  </p>
               </div>
               <!-- Grid column -->

               <!-- Grid column -->
               <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">our services</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto"
                     style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p>
                     <a href="#!" class="text-white ">Our Store</a>
                  </p>
                  <p>
                     <a href="#!" class="text-white">About Story Keeper</a>
                  </p>
               </div>
               <!-- Grid column -->

               <!-- Grid column -->
               <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Useful links</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto"
                     style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p>
                     <a href="#!" class="text-white">My Account</a>
                  </p>
                  <p>
                     <a href="#!" class="text-white">Register</a>
                  </p>

               </div>
               <!-- Grid column -->

               <!-- Grid column -->
               <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto"
                     style="width: 60px; background-color: #7c4dff; height: 2px" />
                  <p><i class="bi bi-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="bi bi-printer mr-3"></i> + 01 234 567 89</p>
               </div>
               <!-- Grid column -->
            </div>
            <!-- Grid row -->
         </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
         © 2020 Copyright:
         <a href="#!" class="text-white text-decoration-none">Story Keeper</a>
      </div>
      <!-- Copyright -->
   </footer>
   <!-- Footer -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"></script>
   <script src="assets/js/script.js"></script>
</body>

</html>
