<div class="col-sm-12" style="padding:10px;">

	<div class="form-group row">
		<label for="firstname" class="col-2 col-form-label">ชื่อ</label>
		<div class="col-10">
			<?php echo $dataCustomer['name']; ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="email" class="col-2 col-form-label">E-mail</label>
		<div class="col-10">
			<?php echo $dataCustomer['email']; ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="phone" class="col-2 col-form-label">เบอร์โทร</label>
		<div class="col-10">
			<?php echo $dataCustomer['phone']; ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="fax" class="col-2 col-form-label">FAX</label>
		<div class="col-10">
			<?php echo $dataCustomer['fax']; ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="country_code" class="col-2 col-form-label">รหัสประเทศ</label>
		<div class="col-10">
			<?php echo $dataCustomer['country_code']; ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="enabled" class="col-2 col-form-label">เปิดใช้งาน</label>
		<div class="col-10" id="enabled">
			<?php echo $dataCustomer['enabled'];
			?>
		</div>
	</div>
</div>
