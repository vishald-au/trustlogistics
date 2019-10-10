<div class="row footer">
    <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
        <div class="col-sm-12 col-md-3">
            <a href="index.php"><img src="img/logo.png" alt="Trust Movers Logistics" title="Trust Movers Logistics"></a>
            <p>You don’t have to do much, just tell us all about your requirements to help us create a perfect plan that we’ll stick to all the way until the end of your moving process.</p>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
            <h2>Company</h2>
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="index.php#quote">Quote</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
            <h2>Services</h2>
            <ul>
                <li><a href="services.php">Residential & Commercial Moving</a></li>
                <li><a href="services.php">Professional Packing</a></li>
                <li><a href="services.php">Moving Supplies</a></li>
                <li><a href="services.php">Storage</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-md-3">
            <h2>Address</h2>
            <ul>
                <li><i class="fa fa-map-marker"></i> 3414 Blake St Denver, CO 80205</li>
                <li><i class="far fa-envelope"></i> info@trustmoverslogistics.com</li>
                <li><i class="fa fa-phone rot"></i> Phone: (719) 347-8465</li>
            </ul>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 text-center">
        <hr>
        <p class="xfont">Copyright © <span id="year">2019</span> trustmoverslogistics.com, All rights reserved.</p>
    </div>
</div>

<?php include("mobile-menu.php") ?>
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
</body>
</html>