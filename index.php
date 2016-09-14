<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/lunr.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/scrollTo.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <!-- loader -->
<div id="loaderback" ><div id="loader" class="loader"></div> </div>

<!-- menu -->
  <nav>
   <div class="nav-wrapper teal accent-4">
     <div class="container">
       <a href="#" class="brand-logo">Pimp Society</a>
       <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="#Offres">Nos offres</a></li>
         <li><a href="#Devis">Devis</a></li>
         <li><a href="#Contact">Contact</a></li>
       </ul>
     </div>
   </div>
 </nav>
 <!--Fin menu -->

 <!-- menu mobil-->
 <ul id="slide-out" class="side-nav">
   <li <h2 class="brand-logo">Pimp Society</h2></li>
   <li><a href="#Offres">Nos offres</a></li>
   <li><div class="divider"></div></li>
   <li><a href="#Devis">Devis</a></li>
   <li><div class="divider"></div></li>
   <li><a href="#Contact">Contact</a></li>
   <li><div class="divider"></div></li>
</ul>

 <!--fin menu mobil-->

 <!-- Slide1 -->
 <div class="container">
  <div class="section">
    <div class="row">
      <h1 class="col s12 light center header">Pimp Society</h1>
      <h3 class="col s12 light center header">Offrez-vous des sites et applications sur mesure !</h3>
    </div>
  </div>
</div>
 <!--Fin  Slide1 -->
<!--idée -->

<!--Fin idée -->
 <div class="parallax-container">
   <div class="parallax"><img src="images/laptop-1209008_1280.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">blabla</h2>
      <p class="grey-text text-darken-3 lighten-3">blablablabal</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/computer-1209641_1920.jpg"></div>
  </div>



<!-- Contact -->
<div class="row">
  <h1 class="col s12 light center header">Contact</h1>
  <h3 class="col s12 light center header">blablabla de contact</h3>
</div>
<div class="row" id="Contact">
  <div class="container">
    <form class="col s12">
      <div class="row">
        <div class="input-field col m6 s12">
          <i class="material-icons prefix">account_circle</i>
          <input required id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nom</label>
        </div>
        <div class="input-field col m6 s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input required id="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Mail</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
           <textarea id="textarea1" class="materialize-textarea"></textarea>
           <label for="textarea1">Message</label>
         </div>
       </div>

       <button class="btn waves-effect waves-light z-depth-4" type="submit" name="action">Submit
         <i class="material-icons right">send</i>
       </button>
      </div>
    </form>
  </div>
  <div class="PimpMarginX3"></div>
</div>
 <!-- footer -->

 <footer class="page-footer  blue-grey darken-3">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer blablabal</h5>
              <p class="grey-text text-lighten-4">bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Socials</h5>
              <div>
                <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright blue-grey darken-4">
          <div class="container">
          © 2016 Copyright PimpSociety
          </div>
        </div>
      </footer>
  </body>
</html>
