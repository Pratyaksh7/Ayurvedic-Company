<?php include_once('admin_header.php');  ?>

<div class="container">
    <?php echo form_open_multipart('admin/store_product', ['class'=>'form-horizontal']); ?>
    <?= form_hidden('admin_id', $this->session->userdata('admin_id')); ?>
    <?= form_hidden('created_at', date('Y-m-d H:i:s')) ?>
		<legend>Add Product</legend>
		
  <fieldset>
    
     <div class="row">
       <div class="col-lg-6">
         <div class="form-group">
            <label for="exampleInputName">Product Name</label>
            <?php echo form_input(['name'=>'name','class'=>"form-control", 'placeholder'=>'Enter Product name']); ?>
      
         </div>
       </div>
          <div class="col-lg-6"> 
            <?php echo form_error('name'); ?>
          </div>

     </div>

     <div class="row">
       <div class="col-lg-6">
         <div class="form-group">
            <label for="exampleInputName">Product Description</label>
            <?php echo form_textarea(['name'=>'description','class'=>"form-control", 'placeholder'=>'Enter Product Description ']); ?>
      
         </div>
       </div>
          <div class="col-lg-6"> 
            <?php echo form_error('description'); ?>
          </div>

     </div>
     <div class="row">
       <div class="col-lg-6">
         <div class="form-group">
            <label for="exampleInputName">Product Description2</label>
            <?php echo form_textarea(['name'=>'description2','class'=>"form-control", 'placeholder'=>'Enter Product Description2 ']); ?>
      
         </div>
       </div>
          <div class="col-lg-6"> 
            <?php echo form_error('description2'); ?>
          </div>

     </div>
        
    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
             <label for="exampleInputEmail1">Upload Image</label>
              <?php echo form_upload(['name'=>'image', 'class'=>"form-control"]); ?>
      
          </div>
        
      </div>
      <div class="col-lg-6">
          <?php if(isset($upload_error))  echo $upload_error ?>  
      </div>
    </div>
   
    
    <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?>
    
  </fieldset>
</div>

<?php include_once('admin_footer.php');  ?>
