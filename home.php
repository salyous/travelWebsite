<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome  cdn links -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>




   <!-- header section start  -->
   <section class="header">
      <a href="home.php" class="logo">travel</a>

      <nav class="navbar">
         
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
        
      </nav>
  <div id="menu-btn" class="fas fa-bars">
   <!-- nothing -->
  </div>
   </section>
   <!-- header section ends  -->
   
   <!-- home section starts  -->
   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) ">
               <div class="content">
                   <span>explore, discover, travel</span>
                   <h3>travel around the world</h3>
                   <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
            
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) ">
               <div class="content">
                   <span>explore, discover, travel</span>
                   <h3>travel around the world</h3>
                   <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) ">
               <div class="content">
                   <span>explore, discover, travel</span>
                   <h3>make your tour worthwhile</h3>
                   <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
               </div>

            <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>

      </div>
   </section>
   <!-- home section endss  -->

<!-- services  section starts -->
 
  <section class="services">
   <h1 class="heading-title">our services</h1>
   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camg fire</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camging</h3>
      </div>

   </div>
  </section>

<!-- services  section ends -->
<!-- home about section starts  -->

<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Corporis assumenda a vitae distinctio,
           eum ex iste facere? Explicabo veniam possimus labore,
            inventore impedit, natus dolorem ipsa eius necessitatibus velit sapiente.
      </p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends  -->

<!-- home packages section starts -->
<section class="home-packages">
   <h1 class="heading-title">our packages</h1>
   <div class="box-container">
      <div class="box">
          <div class="image">
            <img src="images/img-1.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Fugit officia maiores quaerat aliquid quos dolores consectetur laboriosam animi inventore? Tempore assumenda,
                id saepe dolore repellat porro esse pariatur debitis quam?
               </p>
               <a href="book.php" class="btn">book now</a>
          </div>
      </div>
      
      <div class="box">
         <div class="image">
           <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
           <h3>adventure & tour</h3>
           <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               Fugit officia maiores quaerat aliquid quos dolores consectetur laboriosam animi inventore? Tempore assumenda,
               id saepe dolore repellat porro esse pariatur debitis quam?
              </p>
              <a href="book.php" class="btn">book now</a>
         </div>
     </div>
  
     <div class="box">
      <div class="image">
        <img src="images/img-3.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Fugit officia maiores quaerat aliquid quos dolores consectetur laboriosam animi inventore? Tempore assumenda,
            id saepe dolore repellat porro esse pariatur debitis quam?
           </p>
           <a href="book.php" class="btn">book now</a>
      </div>
  </div>

  
   </div>
   <div class="load-more"><a href="package.php" class="btn">load more</a></div>

 
</section>
<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Labore accusamus voluptates neque corporis eligendi,
           nam quia debitis quisquam ut non deleniti odit amet nisi repellendus saepe laborum optio dolorem?
            Recusandae?
         </p>
         <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

 <!-- about section starts  -->
<section class="about">
  <div class="image">
   <img src="images/about-img.jpg" alt="">
  </div>
  <div class="content">
   <h3>why choose us?</h3>
   <p>Lorem ipsum dolor sit amet,
       consectetur adipisicing elit.
        Velit odit nihil voluptas enim
         hic fuga similique sit eligendi alias
          quam rem odio accusamus,
           ab dignissimos dolorem quas,
            beatae repellat nisi?
         </p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Voluptas quod adipisci ipsam,
              debitis et magni sapiente! Provident corrupti iste amet.
               Quae obcaecati quas suscipit aut nobis distinctio
                praesentium sapiente perferendis.
               </p>
               <div class="icons-container">
                   <div class="icons">
                     <i class="fas fa-map"></i>
                     <span>top destinations</span>
                   </div>
                   <div class="icons">
                     <i class="fas fa-hand-holding-usd"></i>
                     <span>affordable price</span>
                   </div>
                   <div class="icons">
                     <i class="fas fa-map"></i>
                     <span>24/7 guide service</span>
                   </div>
               </div>
  </div>
</section>
 <!-- about section ends  -->

 <!-- reviews section begans -->

 <section class="reviews">
    <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
          <!-- premiere review -->
         <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>
               Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatibus possimus
                 excepturi explicabo beatae temporibus
                  ducimus veniam odio id! In modi asperiores
                   possimus placeat perferendis veniam
                    cupiditate voluptates quisquam corporis
                     cumque.
            </p>
            <h3>ahmed malki</h3>
            <span>traveler</span>
            <img src="images/pic-1.png" alt="">
         </div>
          
         <!-- deuxieme review -->
         <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>
               Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatibus possimus
                 excepturi explicabo beatae temporibus
                  ducimus veniam odio id! In modi asperiores
                   possimus placeat perferendis veniam
                    cupiditate voluptates quisquam corporis
                     cumque.
            </p>
            <h3>sofia alami </h3>
            <span>traveler</span>
            <img src="images/pic-2.png" alt="">
         </div>

          <!-- troisieme review -->
          <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>
               Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatibus possimus
                 excepturi explicabo beatae temporibus
                  ducimus veniam odio id! In modi asperiores
                   possimus placeat perferendis veniam
                    cupiditate voluptates quisquam corporis
                     cumque.
            </p>
            <h3>sofia alami </h3>
            <span>traveler</span>
            <img src="images/pic-3.png" alt="">
         </div>
         <!-- quatrieme review -->
         <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>
               Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatibus possimus
                 excepturi explicabo beatae temporibus
                  ducimus veniam odio id! In modi asperiores
                   possimus placeat perferendis veniam
                    cupiditate voluptates quisquam corporis
                     cumque.
            </p>
            <h3>sofia alami </h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

      <!--   cinquieme review  -->
      <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>
               Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatibus possimus
                 excepturi explicabo beatae temporibus
                  ducimus veniam odio id! In modi asperiores
                   possimus placeat perferendis veniam
                    cupiditate voluptates quisquam corporis
                     cumque.
            </p>
            <h3>sofia alami </h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <!-- sixieme review  -->
          <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>
               Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatibus possimus
                 excepturi explicabo beatae temporibus
                  ducimus veniam odio id! In modi asperiores
                   possimus placeat perferendis veniam
                    cupiditate voluptates quisquam corporis
                     cumque.
            </p>
            <h3>sofia alami </h3>
            <span>traveler</span>
            <img src="images/pic-6.png" alt="">
         </div>

         

      </div>
    </div>
 </section>
 <!-- reviews section ends -->




<!-- footer section starts -->

<section class="footer">
    
   <div class="box-container">
      
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
         <a href="#"><i class="fas fa-angle-right"></i>about us</a>
         <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
         <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
         <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
         <a href="#"><i class="fas fa-envelope"></i> younes.salmi62@gmail.com</a>
         <a href="#"><i class="fas fa-map"></i>narjiss,fes 30000</a>
      </div>

      <div class="box">
           <h3>follow us</h3>
           <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
           <a href="#"><i class="fab fa-instagram"></i>intagram</a>
           <a href="#"><i class="fab fa-twitter"></i>twitter</a>
           <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>
   </div>

 <div class="credit">created by <span>mr. web developer</span> | all rights  reserved</div>
</section>

<!-- footer section ends -->

<!-- swiper css file -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<!-- swiper js file -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>




   <!-- custom js file link -->
   <script src="js/script.js"></script>
</body>
</html>