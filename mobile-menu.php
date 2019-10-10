<style>

.side-menu.show{right:0;box-shadow: 0 0 200px black;}
.side-menu {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%);
    position: fixed;
    z-index: 9999;
    top: 0;
    text-align: center;
    right: -300px;
    width: 300px;
    height: -webkit-fill-available;
    padding: 40px;
    -webkit-transition: all 0.37s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -moz-transition: all 0.37s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -o-transition: all 0.37s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -ms-transition: all 0.37s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    transition: all 0.37s cubic-bezier(0.000, 0.000, 0.580, 1.000);
}
#mm {cursor: pointer;}
.side-menu span {
    cursor: pointer;
    font-weight: 100;
    color: white;
    letter-spacing: 6px;
    text-align: center;
    border-bottom: 1px solid white;
    padding-bottom: 12px;
    width: 100%;
    display: inline-block;
}
.side-menu ul {margin-top: 20px;}
.side-menu ul li {}
.side-menu ul li a {
    font-size: 22px;
    color: white;
    line-height: 45px;
    cursor: pointer;
    text-transform: uppercase;
}

</style>

<div class="side-menu">
    <span id="cl">CLOSE</span>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="index.php#quote">Quote</a></li>
        <li><a href="tel:(719) 347-8465">(719) 347-8465</a></li>
    </ul>
</div>
<script>
    $("#mm").click(function(){
      $(".side-menu").toggleClass("show");
    });
    $("#cl").click(function(){
      $(".side-menu").toggleClass("show");
    });
</script>