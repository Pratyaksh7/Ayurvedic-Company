<?php include_once('admin_header.php');  ?>

<div class="container">
	<div class="row">
		<div class="col col-lg-offset-10">
			<?= anchor('admin/add_product','Add Product',['class'=>'btn btn-md btn-outline-success']); ?>
			
		</div>
	</div>

    <?php if( $feedback= $this->session->flashdata('feedback')):
	 	 $feedback_class= $this->session->flashdata('feedback_class');
	  ?>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="alert alert-dismissible <?= $feedback_class ?>">
                <?= $feedback ?>
              
            </div>
        </div>
    </div>
	<?php endif; ?>

	<table class="table">
		<thead>
			<th>S.No</th>
			<th>Name</th>
			<th>Description</th>
            <th>Description2</th>
            <th>Image</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php if( count($products) ): 
				$count = $this->uri->segment(3,0);
			 foreach($products as $product) :?>
				<tr>
					<td><?= ++$count ?></td>
					<td>
						<?= $product->name ?>
					</td>
					<td width="25%">
						<?= $product->description ?>
					</td>
                    <td width="25%">
						<?= $product->description2 ?>
					</td>
                    <td>
						<img src="<?= $product->image_path ?>" alt="image" class="img-thumbnail my-2">
					</td>
					<td>
						<div class="row">
							<div class="col-md-2">
								<?= anchor('admin/edit_product/'.$product->id, 'Edit',['class'=>'btn btn-outline-dark','style'=>'margin-left:-35px;']); ?>
							</div>

							<div class="col-md-2">
								<?=
							 		form_open('admin/delete_product'),
							 		form_hidden('product_id', $product->id),
							 		form_submit(['name'=>'submit','value'=>'Delete', 'class'=>'btn btn-outline-danger']),
							 		form_close();
					 			?>
							</div>
						</div>					 
						
					</td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<td colspan="4">
					No records found.
				</td>
			<?php endif; ?>
		</tbody>
	</table>
<center>
	<h4><?= $this->pagination->create_links() ?> </h4>
</center>
</div>



<?php include_once('admin_footer.php');  ?>
