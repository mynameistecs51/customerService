<div class="col-sm-12" style="padding:10px;">
	<div class="form-group row"><div class="col-sm-12"><?php echo validation_errors(); ?></div> </div>
	<div class="form-group row">
		<label for="gender" class="col-2 col-form-label"> เพศ</label>
		<div class="col-10" id="gender">
			<?php $checked = ($dataCustomer['gender'] == 'M')? 'checked':''; ?>
			<label><input type="radio" name="gender" value="M" class="control-label" <?php echo $checked; ?> > <b class="btn btn-primary btn-md">  ชาย</b></label>
			&nbsp;&nbsp;&nbsp;
			<?php $checked = ($dataCustomer['gender'] == 'F')? 'checked':''; ?>
			<label><input type="radio" name="gender" value="F" class="control-label" <?php echo $checked; ?> > <b class="btn btn-warning btn-md"> หญิง</b></label>
		</div>
	</div>
</div>
<div class="form-group row">
	<label for="firstname" class="col-2 col-form-label">ชื่อ</label>
	<div class="col-5">
		<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $dataCustomer['first_name']; ?>" placeholder="ชื่อ">
	</div>
	<div class="col-5">
		<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $dataCustomer['last_name']; ?>" placeholder="สกุล">
	</div>
</div>
<div class="form-group row">
	<label for="email" class="col-2 col-form-label">E-mail</label>
	<div class="col-10">
		<input type="email" name="email" id="email" class="form-control" value="<?php echo $dataCustomer['email']; ?>" placeholder="yourmail@email.com">
	</div>
</div>
<div class="form-group row">
	<label for="phone" class="col-2 col-form-label">เบอร์โทร</label>
	<div class="col-10">
		<input type="tel" name="phone" class="form-control" value="<?php echo $dataCustomer['phone']; ?>" id="phone">
	</div>
</div>
<div class="form-group row">
	<label for="fax" class="col-2 col-form-label">FAX</label>
	<div class="col-10">
		<input class="form-control" value="<?php echo $dataCustomer['fax']; ?>" name="fax" type="text"  id="fax">
	</div>
</div>
<div class="form-group row">
	<label for="country_code" class="col-2 col-form-label">รหัสประเทศ</label>
	<div class="col-10">
		<input class="form-control" value="<?php echo $dataCustomer['country_code']; ?>" type="text" name="country_code"  id="country_code">
	</div>
</div>
<div class="form-group row">
	<label for="enabled" class="col-2 col-form-label">เปิดใช้งาน</label>
	<div class="col-10" id="enabled">
		<?php $checked = ($dataCustomer['enabled'] == 1)? 'checked':''; ?>
		<label><input type="radio" name="enabled"  value="1" class="control-label" <?php echo $checked; ?> > <b class="btn btn-success btn-md">  ใช้งาน</b></label>
		&nbsp;&nbsp;&nbsp;
		<?php $checked = ($dataCustomer['enabled'] == 0)? 'checked':''; ?>
		<label><input type="radio" name="enabled"  value="0" class="control-label" <?php echo $checked; ?>> <b class="btn btn-warning btn-md"> ไม่ใช้งาน</b></label>
	</div>
</div>
