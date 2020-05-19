<?php

$config= [

			'add_product_rules'	=>	[
											[
												'field'	=>	'name',
												'label'	=>	'Product Name',
												'rules'	=>	'required|alpha_dash|alpha_numeric',
											],
											[
												'field'	=>	'description',
												'label'	=>	'Product Description',
												'rules'	=>	'required',
											]

									],

			'admin_login'		=>	[
											[
												'field'	=>	'username',
												'label'	=>	'UserName',
												'rules'	=>	'required|alpha_numeric|max_length[20]',
											],
											[
												'field'	=>	'password',
												'label'	=>	'Password',
												'rules'	=>	'required',
											]
									], 
			'shop_product_rules'	=>	[
											[
												'field'	=>	'name',
												'label'	=>	'Name',
												'rules'	=>	'required|alpha_dash|alpha_numeric',
											],
											[
												'field'	=>	'contact',
												'label'	=>	'Contact Number',
												'rules'	=>	'required|numeric|exact_length[10]',
											],
											[
												'field'	=>	'email',
												'label'	=>	'Email',
												'rules'	=>	'required|valid_email',
											],
											[
												'field'	=>	'city',
												'label'	=>	'City',
												'rules'	=>	'alpha',
											],
											[
												'field'	=>	'disease',
												'label'	=>	'Disease',
												'rules'	=>	'alpha|alpha_numeric|alpha_dash',
											],
											[
												'field'	=>	'message',
												'label'	=>	'Message',
												'rules'	=>	'alpha|alpha_numeric|alpha_dash',
											]
											
										],	
			'contact_form_rules'	=>	[
											[
												'field'	=>	'name',
												'label'	=>	'Name',
												'rules'	=>	'required|alpha_dash|alpha_numeric',
											],
											[
												'field'	=>	'contact',
												'label'	=>	'Contact No',
												'rules'	=>	'required|numeric|exact_length[10]',
											],
											[
												'field'	=>	'email',
												'label'	=>	'Email',
												'rules'	=>	'required|valid_email',
											],
											[
												'field'	=>	'message',
												'label'	=>	'Message',
												'rules'	=>	'',
											]
										],												  

							
];