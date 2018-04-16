<html>
    <head>
 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link href="style.css" rel="stylesheet">
        <link href="regist2.css" rel="stylesheet">
        <script href="regist2.js"></script>
    </head>
    <style>
        @font-face {
            font-family: HANDVETICA;
            src: url('../fonts/font/HANDVETICA.TTF');
        }

        body{
           background-image: url(Background.jpg);
           width: 100%;
           height: auto;
           margin: 0px;
           padding: 0px;
           overflow-x: hidden;
           font-family: HANDVETICA;

        }
        .homeContainer #pinguens{
            position: sticky;
            left: 50%;
           top: 60%;
            width: 50%;
        }
        .homeContainer #about_the_gablia{
            position: sticky;
            margin-left: 1%;
           font-family: HANDVETICA;
            font-size: 400%;
            color: white;

        }
         .about_text {

             width: 90%;
             font-family: HANDVETICA;
            font-size: 140%;
          overflow: hidden; /* Ensures the content is not revealed until the animation */
               /*white-space: nowrap; /* Keeps the content on a single line */

          margin: 3% auto; /* Gives that scrolling effect as the typing happens */
          letter-spacing: .10em; /* Adjust as needed */
          animation:
            typing 3.5s steps(40, end),
            blink-caret .75s step-end infinite;
        }

        /* The typing effect */
        @keyframes typing {
          from { width: 0 }
          to { width: 90% }
        }
        span{
            font-size: 150%;
        }

        /*Start Media querys for responsive Mode*/

        @media only screen and (max-width: 767px) {

            html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
            }

        }

        @media (min-width: 768px) and (max-width: 991px) {

            html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
            }

        }

        @media (min-width: 992px) and (max-width: 1199px) {

            html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
            }

        }
        .colors
        {
          font-size: 20px;
          color:darkslateblue;
        }
        /*End Media querys for responsive Mode*/
        
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }


        main {
          flex: 1 0 auto;
        }

        #website_img{
            width:150px;
            height:150px;

        }

        #website_name{
           font-family: Apple Chancery, cursive;
            text-align: center;
            font-weight: bold;
        }

        .card1 {
            /* just in case there no content*/
            margin: 0 auto 25px;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 6px -6px 52px rgba(0, 0, 0, 0.3);
            padding: 32px 48px 0px 48px; 
            display:inline-block;
        }


        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label,
        .input-field input[type=tel]:focus + label{
          color: #000;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus ,
        .input-field input[type=tel]:focus {
          border-bottom: 2px solid #000;
          box-shadow: none;
        }


        input[type=email],
        input[type=password],
        input[type=text],
        input[type=tel]{
           border-bottom-color: black
        }

        #mail,#pass,#first_name,#last_name,#name,#age,#phone,#con_pass,#birth,#icon_telephone{
            color:black
        }

        .colory{
            background-color:#38403f;
        }

 
    
    </style>
    <body>
         
  <main>
       <img class="responsive-img" id="website_img" src="logo%20osc%20(1).png" />
    <center>
     
      

      <h5  id="website_name">UDCOSC</h5>

      <div class="container">
        <div class="z-depth-1  lighten-4 row card1" >

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
              
            <div class='row'>
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" required>
                  <label id="name" for="first_name">First Name *</label>
                </div>
            
              
                  <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate" required>
                  <label id="name" for="last_name">Last Name *</label>
                  </div>
                </div>
              
            <div class='row'>
                  <div class='input-field col s12 '>
                    <input class='validate' type='text' name='age' id='age' required />
                    <label id="age"  for='age'>Age *</label>
                  </div>
            </div>


              
              <div class="row">
                  <div class="input-field col s12">
                    
                      <input id="icon_telephone" type="tel" class="validate">
                      <label  id="icon_telephone" for="icon_telephone">Telephone</label>
              </div>
            </div>
              
              
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' required/>
                <label id="mail" for='email'>Enter your email *</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12 '>
                <input class='validate' type='password' name='password' id='password' required />
                <label id="pass"  for='password'>Enter your password *</label>
              </div>
            </div>
              
              <div class='row'>
              <div class='input-field col s12 '>
                <input class='validate' type='password' name='password' id='password' required/>
                <label id="con_pass"  for='password'>Confirm your password *</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo '>Sign UP</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a class="blue-text text-darken-2" href="login.blade.php">Already have account</a>
        
    </center>

      <div class="section"></div>
       <div class="section"></div>
  </main>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    </body>
    
</html>