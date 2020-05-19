<div class="container-fluid">
    <div class="jumbotron" id="container1">
        <h2 align="center" style=" font-family:Castellar; color:white;">CONTACT US</h2>
    </div>
</div>

<?php if( $feedback= $this->session->flashdata('feedback')):
	 	 $feedback_class= $this->session->flashdata('feedback_class');
	  ?>

<div class="row">
        <div class="col-lg-12 col-lg-offset-3">
            <div class="alert alert-dismissible <?= $feedback_class ?>">
               <center> <strong><?= $feedback ?></strong> </center>
              
            </div>
        </div>
    </div>
	<?php endif; ?>

<div class="container" id="contactus">
    <div class="row">
        <div class="col-md-1">
            <i class="fa fa-fw fa-map-marker fa-2x"></i>
        </div>
        <!-- <div class="col-md-11"> -->
        <h4>Regd. Office: 01, village-Badwai, Teh-Dungla,
                  Distt-Chittorgarh (Raj.)</h4>
        <!-- </div> -->
    </div><br>

    <div class="row">
        <div class="col-md-1">
            <i class="fa fa-fw fa-map-marker fa-2x"></i>
        </div>
        <!-- <div class="col-md-11"> -->
            <h4>Corp. Office: 324, B-Block Pratap Nagar, Udaipur (Raj.)</h4>
        <!-- </div> -->
    </div>
<br>
    <div class="row">
        <div class="col-md-1">
            <i class="fa fa-fw fa-phone fa-2x"></i>
        </div>
        <!-- <div class="col-md-11"> -->
            <h4>742-600-6424</h4>
        <!-- </div> -->
    </div>
<br>
    <div class="row">
        <div class="col-md-1">
            <i class="fa fa-fw fa-envelope fa-2x"></i>
        </div>
        <!-- <div class="col-md-11"> -->
            <h4>hiyaayucare@gmail.com</h4>
        <!-- </div> -->
    </div>
<br>
</div>

<div class="container">
    <div class="jumbotron px-4" id="contactusform">
    <div class="container">
        <?php echo form_open('home/contactus_validation', ['class'=>'form-horizontal']); ?>
            <div class="row">

            <div class="col-md-3">
                    <!-- Empty Space -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name: <b class="text-danger">*</b></label>
                        <?= form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name']); ?>
                        
                    </div>
                </div>

                <div class="col-md-3">
                    <?= form_error('name'); ?>
                </div>

                <!-- <div class="col-md-6">
                   
                </div> -->
            </div>

            <div class="row">

                <div class="col-md-3">
                    <!-- Empty Space -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact No: <b class="text-danger">*</b></label>
                        <?= form_input(['name'=>'contact','class'=>'form-control','placeholder'=>'Contact No']); ?>
                        
                    </div>
                </div>

                <div class="col-md-3">
                    <?= form_error('contact'); ?>
                </div>

            </div>

            <div class="row">

            <div class="col-md-3">
                    <!-- Empty Space -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email: <b class="text-danger">*</b></label>
                        <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email']); ?>
                        
                    </div>
                </div>

                <div class="col-md-3">
                    <?= form_error('email'); ?>
                </div>

            </div>

            <div class="row">

            <div class="col-md-3">
                    <!-- Empty Space -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Message:</label>
                        <?= form_textarea(['name'=>'message','class'=>'form-control','placeholder'=>'Message']); ?>
                        
                    </div>
                </div>

                <div class="col-md-3">
                     <?= form_error('message'); ?>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3">
                        <!-- Empty Space -->
                    </div>

                    <div class="col-md-6">
                        <?php 
                            echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-outline-dark']);
                        ?>
                    </div>
                    
                    <div class="col-md-3">
                        <!-- Empty Space -->
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>