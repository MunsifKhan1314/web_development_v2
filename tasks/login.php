<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-signup</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: '', sans-serif;
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #000;
  }
  .wrapper{
    position: relative;
    width: 750px;
    height: 450px;
    background: transparent;
    border: 1px solid rgba(255, 187, 0, 1);
    box-shadow: 0 0 25px rgba(255, 187, 0, 1);
    overflow: hidden;
    border-radius: 20px;
  }

  .wrapper .fomr-box{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .wrapper .fomr-box.login{
    left: 0;
    padding: 0 60px 0 40px;
  }

  .wrapper .fomr-box.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
  }

   .wrapper.active .fomr-box.login .animation{
    transform: translateX(-120%);
     opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
  }

  .wrapper .fomr-box.register{
    right: 0;
    padding: 0 40px 0 60px;
    pointer-events: none;
  }

  .wrapper.active .fomr-box.register{
    pointer-events: auto;
  }

  .wrapper .fomr-box.register .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
  }

  .wrapper.active .fomr-box.register .animation{
        transform: translateX(0);
        opacity: 1;
        filter: blur(0);
        transition-delay: calc(.1s * var(--i));
  }

  .fomr-box h2{
    font-size: 32px;
    color: #fff;
    text-align: center;
  }
  .fomr-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 25px 0;
  }

  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-right: 23px;
    transition: .5s;
  }
  .input-box input:focus,
  .input-box input:valid{
    border-bottom-color: rgba(255, 187, 0, 1);
  }


  .input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .input-box input:focus~label,
  .input-box input:valid~label {
     top: -5px;
     color: rgba(255, 187, 0, 1);
  }

 

  .input-box i{
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    color: #fff;
    transition: .5s;
  }

  .input-box input:focus~i,
  .input-box input:valid~i{
    color: rgba(255, 187, 0, 1);
  }

  .log-btn{
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid rgba(255, 187, 0, 1);
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;
  }

  .log-btn::before{
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background: linear-gradient(#081b29, rgba(255, 187, 0, 1), #081b29, rgba(255, 187, 0, 1));
    z-index: -1;
    transition: .5s;
  }

  .log-btn:hover::before{
    top: 0;
  }
 
  .fomr-box .logreg-link{
    font-size: 14.5px;
    color: #fff;
    text-align: center;
    margin: 20px 0 10px;
  }

  .logreg-link p a{
    color: rgba(255, 187, 0, 1);
    text-decoration: none;
    font-weight: 600;
  }

  .logreg-link p a:hover{
    text-decoration: underline;
  }

  .wrapper .info-text {
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;

  }

  .wrapper .info-text.login{
    right: 0;
    text-align: right;
    padding: 0 40px 60px 150px; 
    
  }
  .wrapper .info-text.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
  }

   .wrapper.active .info-text.login .animation{
    transform: translateX(120%);
     opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
  }

  .wrapper .info-text.register{
    left: 0;
    text-align: left;
    padding: 0 150px 60px 40px; 
    pointer-events: none;
  
  }

  .wrapper.active .info-text.register{
    pointer-events: auto;
  }

   .wrapper .info-text.register .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--j));
   }

    .wrapper.active .info-text.register .animation{
    transform: translateX(0);
    opacity: 10;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--i));
   }


  .info-text h2{
    font-size: 36px;
    color: #fff;
    line-height: 1.3;
    text-transform: uppercase;
  }

  .info-text p{
    font-size: 16px;
    color: #fff;

  }

  .wrapper .bg-animate{
    position: absolute;
    top: -40px;
    right: 0;
    width: 850px;
    height: 600px;
    border-bottom: 3px solid rgba(255, 187, 0, 1);
    background: linear-gradient(45deg, #081b29, rgba(255, 187, 0, 1));
    transform: rotate(10deg) skewY(40deg);
    /* transform: rotate(0) skewY(0); */
    transform-origin: bottom right;
    transition: 1.5s ease;
    transition-delay: 1.5s ;

  }

   .wrapper.active .bg-animate{
        transform: rotate(0) skewY(0);
        transition-delay: .5s ;
   }

    .wrapper .bg-animate2{
    position: absolute;
    top: 100%;
    left: 250px;
    width: 850px;
    height: 700px;
    border-top: 3px solid rgba(255, 187, 0, 1);
    background: #081b29;
    /* transform: rotate(-11deg) skewY(-41deg); */
    transform: rotate(0) skewY(0);
    transform-origin: bottom left;
    transition: 1.5s ease;
    transition-delay: .5s ;

  }

   .wrapper.active .bg-animate2{
        transform: rotate(-11deg) skewY(-41deg);
        transition-delay: 1.2s;
   }
</style>






<body>
  
  <div class="wrapper">

    <spna class="bg-animate"></spna>
     <spna class="bg-animate2"></spna>

    <div class="fomr-box login">
      <h1>
        <?php include('./inc/sess.php');
        ?>
      </h1>
      <h2 class="animation" style="--i:0; --j:21">Login</h2>
      <form action="login_act.php" method="post">
        <div class="input-box animation" style="--i:1; --j:22">
          <input type="text" required>
          <label>Username</label>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box animation" style="--i:2; --j:23">
          <input type="password" required>
          <label>Password</label>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <button type="submit" class="log-btn animation" style="--i:3; --j:24">Login</button>
        <div class="logreg-link animation" style="--i:4; --j:25">
          <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="info-text login">
      <h2 class="animation" style="--i:0; --j:20;">MY PORFOLIO!</h2>
      <p class="animation" style="--i:1; --j:21;">We empower innovators, developers, and dreamers to build the future one idea at a time.</p>
    </div>
     <div class="fomr-box register">
      <h1>
        <?php include('./inc/sess.php');
        ?>
      </h1>
      <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
      <form action="sign_up_act.php" method="post">
        <div class="input-box animation" style="--i:18; --j:1;">
          <input type="text" required>
          <label>Username</label>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box animation" style="--i:19; --j:2;">
          <input type="text" required>
          <label>Emial</label>
          <i class='bx bxs-envelope'></i>
        </div>
        <div class="input-box animation" style="--i:20; --j:3;">
          <input type="password" required>
          <label>Password</label>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <button type="submit" class="log-btn animation" style="--i:21; --j:4;">Sign Up</button>
        <div class="logreg-link animation" style="--i:22; --j:5;">
          <p>Already have an account? <a href="#" class="login-link">Login</a></p>
        </div>
      </form>
    </div>
  <div class="info-text register">
      <h2 class="animation"  style="--i:17; --j:0;">MY PORTFOLIO!</h2>
      <p class="animation"  style="--i:18; --j:1;">We empower innovators, developers, and dreamers to build the future one idea at a time.</p>
    </div>


  </div>


<script>
   const wrapper = document.querySelector('.wrapper');
   const registerLink = document.querySelector('.register-link');
   const loginLink = document.querySelector('.login-link');

   registerLink.onclick = () => {
     wrapper.classList.add('active');
   }

   loginLink.onclick = () => {
     wrapper.classList.remove('active');
   }
</script>


</body>
</html>