<div class="col-sm-12" style="padding:10px;">
	<div class="form-group row"><div class="col-sm-12"><?php echo validation_errors(); ?></div> </div>
	<div class="form-group row">
		<label for="gender" class="col-2 col-form-label"> เพศ</label>
		<div class="col-10" id="gender">
			<?php echo form_error('gender'); ?>
			<label><input type="radio" name="gender" value="M" class="control-label" checked> <b class="btn btn-primary btn-md">  ชาย</b></label>
			&nbsp;&nbsp;&nbsp;
			<label><input type="radio" name="gender" value="F" class="control-label"> <b class="btn btn-warning btn-md"> หญิง</b></label>
		</div>
	</div>
</div>
<div class="form-group row">
	<label for="firstname" class="col-2 col-form-label">ชื่อ</label>
	<div class="col-5">
		<?php echo form_error('firstname'); ?>
		<input type="text" name="firstname" id="firstname" class="form-control" value="" placeholder="ชื่อ" autofocus required  oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')" oninput="setCustomValidity('')" >
	</div>
<!-- </div>
<div class="form-group row">
	<label for="example-email-input" class="col-2 col-form-label">Email</label> -->
	<div class="col-5">
		<input type="text" name="lastname" id="lastname" class="form-control" value="" placeholder="สกุล" required oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')" oninput="setCustomValidity('')">
	</div>
</div>
<div class="form-group row">
	<label for="email" class="col-2 col-form-label">E-mail</label>
	<div class="col-10">
		<input type="email" name="email" id="email" class="form-control" value="" placeholder="yourmail@email.com" required oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')" oninput="setCustomValidity('')">
	</div>
</div>
<div class="form-group row">
	<label for="phone" class="col-2 col-form-label">เบอร์โทร</label>
	<div class="col-10">
		<input type="tel" name="phone" class="form-control" value="" id="phone" required oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')" oninput="setCustomValidity('')">
	</div>
</div>
<div class="form-group row">
	<label for="fax" class="col-2 col-form-label">FAX</label>
	<div class="col-10">
		<input class="form-control" value="" name="fax" type="text"  id="fax" required oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')" oninput="setCustomValidity('')">
	</div>
</div>
<div class="form-group row">
	<label for="country_code" class="col-2 col-form-label">รหัสประเทศ</label>
	<div class="col-10">
		<input class="form-control" value="" type="text" name="country_code"  id="country_code" required oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')" oninput="setCustomValidity('')">
	</div>
</div>
<div class="form-group row">
	<label for="enabled" class="col-2 col-form-label">เปิดใช้งาน</label>
	<div class="col-10" id="enabled">
		<label><input type="radio" name="enabled"  value="1" class="control-label" checked> <b class="btn btn-success btn-md">  ใช้งาน</b></label>
		&nbsp;&nbsp;&nbsp;
		<label><input type="radio" name="enabled"  value="0" class="control-label"> <b class="btn btn-warning btn-md"> ไม่ใช้งาน</b></label>
	</div>
</div>
