<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Document</title>
</head>
<body>
    <section class="header">

        <a href="home.php" class="logo">travel.</a>
     
        <nav class="navbar">
           <a href="home.php">home</a>
           <a href="about.php">about</a>
           <a href="package.php">package</a>
           <a href="book.php">book</a>
        </nav>
     
        <div id="menu-btn" class="fas fa-bars"></div>
     
     </section>
    <!-- <div class="header">
        <div class="nav">
            navbar
        </div>
        <div class="imgslider">
            slider (img)
        </div>
    </div> -->
    <div class="swiper home-slider">

        <div class="swiper-wrapper">
  
           <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
              <div class="content">
                 <span>explore, discover, travel</span>
                 <h3>travel arround the world</h3>
                 <a href="package.php" class="btn">discover more</a>
              </div>
           </div>
  
           <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
              <div class="content">
                 <span>explore, discover, travel</span>
                 <h3>discover the new places</h3>
                 <a href="package.php" class="btn">discover more</a>
              </div>
           </div>
  
           <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
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
    <div class="mainBody">
        <br><br><br>
        <div class="container">
            <div class="body">
                <div class="bodyLeft">
                    <div class="h2">
                        <h2>Get in Touch</h2>
                    </div>
                    <div class="founded">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate saepe voluptatum quaerat doloremque eveniet qui et harum sequi. Deserunt, at.</p>
                    </div>
                    <form action="contactUS-1.php"method="post"
                    >
                      <div class="container">
                        <div class="txt_field">
                          <input type="text" name="fname" required>
                        
                          <label>First Name</label>
                        </div>
                        <div class="txt_field">
                          <input type="text" name='lname' required>
                        
                          <label>Last Name</label>
                        </div>
                        <div class="txt_field">
                          <input type="email" name="email" required>
                         <label>Email</label>
                        </div>
                        <div class="txt_field ">
                            <input type="number"name="phone" max="9999999999" required>
                            
                            <label>Phone no.</label>
                        </div>
                        <div class="txt_field textarea">
                          <input type="tel" name="txt" required>
                        
                          <label>Write Your Message</label>
                        </div>
                        <div class="submit ">
                            <br>
                          <input type="submit" value="S U B M I T">
                        </div>
                  
                      </div>
                      <br>
                    </form>
                </div>
                <div class="bodyRight">
                    <div></div>
                    <img src="ooty.jfif" alt="ooty">
                </div>
            </div>
        </div>
    </div>
  
    
    <section class="footer">

        <div class="box-container">
    
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>
    
        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>
    
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
        </div>
    
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    
        </div>
    
        <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>
    
    </section>

    
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


    
</body>
<style>
    body{
        margin: 0px;
        padding: 0px;
    }/*
    .header{
        padding: 10px;
        background-color: antiquewhite;
        min-height: 6vh;
    }
    .footer{
        background-color: rgb(159, 44, 44);
        min-height: 25vh;
        border: 2px solid red;
        margin: 0px;
        padding: 0px;
    }
    */
    .mainBody{
        border: 0px solid red;
    }
    .body{
        border: 1px solid;
        background-color: rgb(255, 255, 255);
        width: 80%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border: 0px solid ;
        width: 80%;
    }
    .bodyLeft{
        padding: 10px;
        width: 90%;
        
    }
    .bodyRight{
        border: 0px solid;
        width: 90%;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .h2, .founded{
        padding-left: 10px;
    }
    .bodyRight img{
        width: 100%;
        height: 80%;
        object-fit: cover;
   
    }
    .container{
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }
    .txt_field {
        position: relative;
        border-bottom: 2px solid rgb(39, 116, 238);
        margin: 20px 0;
       
        width: 45%;
      }
      .txt_field input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
      }
      .txt_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: rgb(109, 169, 238);
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .3s;
        
      }
     
      .txt_field input:focus~label,
      .txt_field input:valid~label {
        top: -5px;
        color: #2678dc;

      }
      .textarea, .submit{
        width: 95%;
        
      }
      input[type='submit']{
        width: 100%;
        height: 40px;
        font-size: 18px;
        
      }

      @media screen and (min-width:1200px)
      {
        
        .bodyLeft{
            width: calc(70% - 20px);
        }
        .bodyRight{
            width: calc(30% - 31px);
        }
      }
</style>
</html>