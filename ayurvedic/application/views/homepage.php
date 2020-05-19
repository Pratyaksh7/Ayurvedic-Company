<?php include_once('header.php'); ?>
<center>
<?php if($error = $this->session->flashdata('msg')) { ?>
      <p style="color: green;"><strong><?php echo $error; ?></strong></p>
    <?php } ?>
    </center>
<div class="container" style="position:absolute;">

<!-- Pop Up -->

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-primary pl">E
n
q
u
i
r
y
</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="first.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h3>ENQUIRY</h3>
    </div>

    <div class="container">
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

      <label for="contact"><b>Contact Number</b></label>
      <input type="text" placeholder="Enter contact number" name="contact" required>

      <label for="email"><b> Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="city"><b>City</b></label>
      <input type="text" placeholder="Enter City" name="city">

      <label for="disease"><b>Disease</b></label>
      <input type="text" placeholder="Enter disease" name="disease" >

      <label for="contact"><b>Message</b></label>
      <input type="text" placeholder="Enter Message" name="message" >

      <button type="submit" class="btn btn-outline-success">Submit</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-outline-danger">Cancel</button>

    </div>
  </form>
</div>
<!-- POP up ends here -->
</div>


<div id="home-background">
<br>
    <div class="container-fluid" >
        
        <div id="demo" class="carousel slide " data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/images/banner1.png') ?>" width="1400px" height="480px" alt="image1"  >
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/images/banner2.png') ?>" width="1400px" height="480px" alt="image2" >
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/images/banner1.png') ?>" width="1400px" height="480px" alt="image3" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>
        </div>
    </div>

    <div class="container-fluid">
        <h1 align="center" style="margin: 2% 0;color:green; font-family:Castellar;">VISION </h1>
        <div class="jumbotron">
            <div class="row mx-auto column-size">
                <div class="col-md-6">
                    <!-- Image -->
                    <img src="<?= base_url('assets/images/Vision.png') ?>" class="img-thumbnail my-2" alt="vision">
                </div>
                <div class="col-md-6 resize">
                    <!-- Content -->
                    <p style="margin-top:12%;"><?= $ayurvedics->vision ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container  mx-auto column-size">
            <h1 align="center" style="margin: 3% 0;color:green; font-family:Castellar;">What Is Ayurveda?</h1>
            <p><?= $ayurvedics->content1 ?></p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container mx-auto column-size">
            <h1 align="center" style="margin: 3% 0;color:green; font-family:Castellar;">Why Choose Ayurveda?</h1>
            <p><?= $ayurvedics->content2 ?></p>
        </div>
    </div>
    <hr>
    </div>

    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<?php include_once('footer.php'); ?>
