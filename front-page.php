<html>

<?php

get_header();

?>

<style>
#searchcon2 {
  display:none;
}

  </style>

<body>
<script>

function showpopup() {
    popup.classList.add('open');
}
function hidePopup() {
  popup.classList.remove('open');
}
</script>

<div class="jumbotron jumbotron-fluid jumbo1" style= "background-image: url('https://roamingrolls.com/wp-content/uploads/2020/08/searchbackground4.png'); height:110%; background-size:cover;">
<div class="container">
  <h1 style="font-size:50;">Your BJJ holiday starts here!</h1>
  <!-- <input id="search" class="form-control mr-sm-2" type="search" placeholder="Which city/town do you want to train in?" aria-label="Search"></input> -->
  

<form role="search" method="get" id="searchform1" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div>
<input id="search" class="form-control mr-sm-2" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="banner-text-box" placeholder="Which town/city do you want to train in?"></input>
<input type="hidden" name="post_type" value="gyms" />
<button id="but" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="banner-text-btn">Go!</button>
</div>
</form>



<p></p>
<div id="searchcon2">
<h2>Looking for an Article?</h2>


<form role="search" method="get" id="searchform2" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div>
<input id="search2" class="form-control mr-sm-2" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="banner-text-box" placeholder="Enter a topic."></input>

<button id="but3" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="banner-text-btn">Go!</button>
</div>
</form>
</div>

  <p></p>
  <div class="alert alert-success" id="logSuccess" role="alert">
  You're logged in!
</div>
</div>

<div class="jumbotron jumbotron-fluid jumbo2">
<div class="container">
  <h1 class="display-4">Add your gym</h1>
  <p class="lead">Own or train at a gym you love? Add it to our database and we'll show it off for you!</p>
  <a <?php if ( ! is_user_logged_in() ){
    echo "";} else {
    echo "href ='https://www.roamingrolls.com/add%20your%20gym/'";}?>><button type="button" id="but2" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
  </svg></button></a>
</div>
</div>


<div class="jumbotron jumbotron-fluid jumbo3">
<div class="container">
<div Id="articles">
<h1 style="font-size:55;">BJJ Travel and training guides</h1>
</div>
<p></p>
<p></p>
<div class="card-columns" id = "cards">
  <div class="card">
    <img class="card-img-top" src="https://roamingrolls.com/wp-content/uploads/2020/08/plane-scaled.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">How To Prepare For A BJJ Holiday</h5>
      <p class="card-text">Tips for getting the most out of your jiujitsu holiday.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://roamingrolls.com/wp-content/uploads/2020/08/taiwan.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Rolling in Taiwan, A Complete Guide.</h5>
      <p class="card-text">Taiwan has some of the kindest people and best food on the planet, follow the link to learn about their awesome jiujitsu scene too!</p>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://roamingrolls.com/wp-content/uploads/2019/09/DSC_0302.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Rolling in Okinawa: A Complete Guide</h5>
      <p class="card-text">Okinawa is teeming with some of the best jiujitsu in Asia! Check out our complete guide for your BJJ trip to this beautiful island.</p>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://roamingrolls.com/wp-content/uploads/2020/08/homegym.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">How Build a Home BJJ Gym On a Budget</h5>
      <p class="card-text">A case study on how a home BJJ gym was built with less than 1000 dollars!</p>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://roamingrolls.com/wp-content/uploads/2019/08/5b3a422dc234878410d1801505f9f7ab-e1569810402990.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">How Dangerous Is Jiujitsu Really? A Closer Look.</h5>
      <p class="card-text">Here we look into various studies on injury rates and their types at a number of large BJJ events, determining statistically how dangerous Jiujitsu really is. </p>
      <p class="card-text"></p>
    </div>
  </div>
 
  <div class="card">
    <img class="card-img" src="https://roamingrolls.com/wp-content/uploads/2020/08/brazilian-jiu-jitsu-2957075_1280.jpg" alt="Card image">
    <div class="card-body">
      <h5 class="card-title">How To Learn BJJ in Another Language</h5>
      <p class="card-text">Check out our step by step guide minimize information loss at your BJJ sessions abroad.</p>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img" src="https://roamingrolls.com/wp-content/uploads/2020/08/podcast.jpg" alt="Card image">
    <div class="card-body">
      <h5 class="card-title">The 6 Best BJJ Podcasts For Jiujitsu Progression Off The Mats</h5>
      <p class="card-text">There are many jiujitsu podcasts out there, but few of them are tailored for conceptual jiujitsu progression off the mats as well as these are.</p>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img" src="https://roamingrolls.com/wp-content/uploads/2019/11/72698357_131876461538430_808452766551769088_o-1-1.jpg" alt="Card image">
    <div class="card-body">
      <h5 class="card-title">Rolling in Daegu, Korea: A Complete Guide</h5>
      <p class="card-text">Daegu is the 4th biggest city in Korea, attracting talent from all across the country. I visited a large number of gyms here last year, and documented my experience for anyone whose curious about the awesome BJJ scene here!</p>
      <p class="card-text"></p>
    </div>
  </div>

  
</div>
</div>

<div id="buttonRow" class="row justify-content-center">
  
<button type="button" id="but3" style="
color:white;
margin-top:10px;
margin-bottom:20px;
border:none;
border-radius:5px;
height:50px;
width:100px;
font-size:30px;
margin-top:50px;">More
</button>
</div>

</div>


<?php

  if( have_posts() ) {

      while( have_posts() ) {

          the_post();

      }



  }


?>




<script>
addGymMsg = document.getElementById("logAddGymMsg")
<?php 
if ( ! is_user_logged_in() ) {
  echo " addgym = document.getElementById('but2');
                addgym.addEventListener('click', function() { showpopup()
                logGymShow()
                setTimeout(function(){fade(addGymMsg)}, 1000);})";
}

?>

function logGymShow() { 
  
  addGymMsg.style.display = "block";
}

successLog = document.getElementById("logSuccess")

	setTimeout(function(){fade(successLog)}, 1000);

	function fade(element) {
  var op = 1;  // initial opacity
  var timer = setInterval(function () {
      if (op <= 0.1){
          clearInterval(timer);
          element.style.display = 'none';
      }
      element.style.opacity = op;
      element.style.filter = 'alpha(opacity=' + op * 100 + ")";
      op -= op * 0.1;
  }, 50);
}

document.getElementById("but").onmouseover = function() {

document.getElementById("but").style.backgroundImage = "linear-gradient(#AD0E2C, black)";

};

document.getElementById("but").onmouseout = function() {

document.getElementById("but").style.backgroundImage = "linear-gradient(#0A0A23, #071A4B)";

};

document.getElementById("but2").onmouseover = function() {

document.getElementById("but2").style.backgroundImage = "linear-gradient(#AD0E2C, black)";

};

document.getElementById("but2").onmouseout = function() {

document.getElementById("but2").style.backgroundImage = "linear-gradient(#0A0A23, #071A4B)";

};


document.getElementById("but3").onmouseover = function() {

document.getElementById("but3").style.backgroundImage = "linear-gradient(#AD0E2C, black)";

};

document.getElementById("but3").onmouseout = function() {

document.getElementById("but3").style.backgroundImage = "linear-gradient(#0A0A23, #071A4B)";


};

document.getElementById("sidebarbtn").onmouseover = function() {

document.getElementById("sidebarbtn").style.backgroundImage = "linear-gradient(white, white)";


}

document.getElementById("sidebarbtn").onmouseout = function() {

document.getElementById("sidebarbtn").style.backgroundImage = "linear-gradient(#0A0A23, #071A4B)";


};

</script>


</body>

<div class="footer">

<?php

get_footer();

?>

</div>




</html>
