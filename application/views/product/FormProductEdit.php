	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	<div class="col-sm-12" style="padding:10px;">
		<div class="form-group row">
			<label for="productName" class="col-2 col-form-label">PRODUCT NAME</label>
			<div class="col-10">
				<input type="text" name="productName" id="productName" class="form-control" value="<?php echo $rowProduct['name']; ?>"  autofocus  required >
				<!-- <div class="error"><span class="text-danger">** กรุณาใส่ชื่อสินค้า.</span></div> -->
			</div>
		</div>
		<div class="form-group row">
			<label for="description" class="col-2 col-form-label">DESTCRIPTION</label>
			<div class="col-10">
				<textarea name="description" id="description" class="form-control" required><?php echo $rowProduct['description']; ?></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="priceNarmol" class="col-2 col-form-label">PRICE NARMOL</label>
			<div class="col-4">
				<input type="number" name="priceNarmol" class="form-control" value="<?php echo $rowProduct['price_normal']; ?>" id="priceNarmol" required>
			</div>
<!-- </div>
	<div class="form-group row"> -->
		<label for="priceSale" class="col-2 col-form-label">PRICE SALE</label>
		<div class="col-4">
			<input type="number" name="priceSale" class="form-control" value="<?php echo $rowProduct['price_sale']; ?>" id="priceSale" >
		</div>
	</div>
	<div class="form-group row">
		<label for="published" class="col-2 col-form-label">published</label>
		<div class="col-10">
			<?php $checked = ($rowProduct['published'] == 1)? 'checked':'';  ?>
			<label><input type="radio" name="published" value="1" class="control-label" <?php echo $checked; ?>> <b class="btn btn-success btn-md">  ประกาศขาย</b></label>
			&nbsp;&nbsp;&nbsp;
			<?php $checked = ($rowProduct['published'] == 0)? 'checked':'';  ?>
			<label><input type="radio" name="published" value="0" class="control-label" <?php echo $checked; ?>> <b class="btn btn-warning btn-md"> ยังไม่ประกาศขาย</b></label>
		</div>
	</div>
</div>
<input type="hidden" name="id" value="<?php echo $rowProduct['id']; ?>">
<script type="text/javascript">
	$(function(){
		// $('.error').hide();
		$("form").validate({
   		 // Specify validation rules
   		 rules: {
   		 	productName: "required",
   		 	description: "required",
   		 	priceNarmol: "required",
   		 	priceSale: "required",
   		 	published: 'required'
   		 	// email: {
   		 	// 	required: true,
   		 	// 	email: true
   		 	// },
   		 	// password: {
   		 	// 	required: true,
   		 	// 	minlength: 5
   		 	// }
   		 },
   		 // Specify validation error messages
   		 messages: {
   		 	productName: "<span class='text-danger'>**Please enter your productName</span>",
   		 	description: "<span class='text-danger'>**Please enter your description</span>",
   		 	priceNarmol: "<span class='text-danger'>**Please enter your priceNarmol</span>",
   		 	priceSale: "<span class='text-danger'>**Please enter your priceSale</span>",
   		 	published: "<span class='text-danger'>**Please enter your published</span>",
   		 // 	password: {
   		 // 		required: "Please provide a password",
   		 // 		minlength: "Your password must be at least 5 characters long"
   		 // 	},
   		 // 	email: "Please enter a valid email address"
   		},
   		submitHandler: function(form) {
   			form.submit();
   		}
   	});
	});
</script>
