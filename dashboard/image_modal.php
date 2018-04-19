<div class="w3-container">
  <h2>W3.CSS Modal Image Gallery</h2>
  <p>Click on the images to display them in full size.</p>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="img_fjords.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="img_lights.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="img_mountains.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>











<style>
.mySlides {display:none}
</style>
<body>

<div class="w3-container">

<h2>W3.CSS Lightbox</h2>
<p>In this example we combine JavaScript from Slideshows and Modals to create a Lightbox (Modal Image Gallery):</p>
<div class="w3-row-padding" style="margin:0 -16px">
  <div class="w3-col s4">
    <img src="img_nature_wide.jpg" style="width:100%;cursor:pointer"
    onclick="openModal();currentDiv(1)" class="w3-hover-shadow">
  </div>
  <div class="w3-col s4">
    <img src="img_fjords_wide.jpg" style="width:100%;cursor:pointer"
    onclick="openModal();currentDiv(2)" class="w3-hover-shadow">
  </div>
  <div class="w3-col s4">
    <img src="img_mountains_wide.jpg" style="width:100%;cursor:pointer"
    onclick="openModal();currentDiv(3)" class="w3-hover-shadow">
  </div>
</div>

<div id="myModal" class="w3-modal w3-black">
 <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeModal()" style="cursor:pointer">×</span>
 <div class="w3-modal-content">

  <div class="w3-content" style="max-width:1200px">
   <img class="mySlides" src="img_nature_wide.jpg" style="width:100%">
   <img class="mySlides" src="img_fjords_wide.jpg" style="width:100%">
   <img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
   <div class="w3-row w3-black w3-center">
    <div class="w3-display-container">
     <p id="caption"></p>
     <span class="w3-display-left w3-btn" onclick="plusDivs(-1)">❮</span>
     <span class="w3-display-right w3-btn" onclick="plusDivs(1)">❯</span>
    </div>
    <div class="w3-col s4">
     <img class="demo w3-opacity w3-hover-opacity-off" src="img_nature_wide.jpg" style="width:100%" onclick="currentDiv(1)" alt="Nature and sunrise">
    </div>
    <div class="w3-col s4">
     <img class="demo w3-opacity w3-hover-opacity-off" src="img_fjords_wide.jpg" style="width:100%" onclick="currentDiv(2)" alt="Trolltunga, Norway">
    </div>
    <div class="w3-col s4">
     <img class="demo w3-opacity w3-hover-opacity-off" src="img_mountains_wide.jpg" style="width:100%" onclick="currentDiv(3)" alt="Mountains and fjords">
    </div>
   </div> <!-- End row -->
  </div> <!-- End w3-content -->
  
 </div> <!-- End modal content -->
</div> <!-- End modal -->

</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");

  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>