<div class="container-fluid" >
    <div class="jumbotron my-2" id="container1">
        <h2 align="center" style=" font-family:Castellar; color:white;">Products</h2>
    </div>
</div>

<div class="container">
    <div class="row jumbotron">

    
    <!-- <?php if( count($products)): ?> -->
        <?php $count= $this->uri->segment(3,0); ?>
				<?php foreach ($products as $product): ?>
            <div class="col-md-6">
                <h3><?= $product->name; ?></h3>
                <img src="<?= $product->image_path ?>" alt="laptop image" class="img-thumbnail my-2" style="width:200px;height:200px;">
            </div>
            <div class="col-md-6" style="margin-top:10%;">
            <div class="buton">
              <button onclick="document.getElementById('id01').style.display='block'"  class="btn btn-outline-success">
                Shop Now
              </button>
            </div>

        <div id="id01" class="modal">
        <form action="<?php echo base_url(); ?>email_send/send" method="post" class="modal-content animate">            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h3>SHOP NOW</h3>
            </div>
              
            <div class="container">
              <label for="name"><b>Name <span style="color:red;">*</span></b></label>
              <input type="text" name="name" placeholder="Enter Name" required>

              <label for="contact"><b>Contact Number <span style="color:red;">*</span></b></label>
              <input type="text" name="contact" placeholder="Enter contact number"  required>              

              <label for="email"><b>Email <span style="color:red;">*</span></b></label>
              <input type="email" name="email" placeholder="Enter Email"  required>              

              <label for="city"><b>City</b></label>
              <input type="text" name="city" placeholder="Enter City"  />

              <label for="disease"><b>Disease</b></label>
              <input type="text" name="disease" placeholder="Enter Disease"  />

              <label for="message"><b>Message</b></label>
              <textarea name="message" cols="40" rows="10" placeholder="Enter Message" ></textarea>
              
              <button name="submit" class="btn btn-outline-success" type="submit">Submit</button>
              
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-outline-danger">Cancel</button>

            </div>
          </form>
        </div>
                   <p> <?= $product->description ?><span id="dots">...</span>
                   <span id="more"><?= $product->description2 ?> </span></p>
                   <button onclick="myFunction()" id="myBtn" class="btn btn-outline-info">Read more</button>

            </div>
            <?php endforeach; ?>
				<?php else: ?>
				<tr>
						<td colspan="3">No records Found..</td>		
					</tr>
				<?php endif;?>
    </div><br><hr>
</div>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php include_once('footer.php') ?>