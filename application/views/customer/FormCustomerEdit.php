<div class="container card col-sm-9 " style="padding:10px;background-color:#F2F2F2; ">
	<div class="card-header card-info"><h3><i class="fa fa-users" aria-hidden="true"></i> <?php echo $title; ?></h3></div>
	<div class="card-block ">
		<form action="<?php echo $saveEdit; ?>"  role="form" data-toggle="validator" id="form" method="post" >
			<div class="col-sm-12" style="padding:10px;">
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
					<?php echo form_error('firstname'); ?>
				</div>
				<div class="col-5">
					<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $dataCustomer['last_name']; ?>" placeholder="สกุล">
					<?php echo form_error('lastname'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-2 col-form-label">E-mail</label>
				<div class="col-10">
					<input type="email" name="email" id="email" class="form-control" value="<?php echo $dataCustomer['email']; ?>" placeholder="yourmail@email.com">
					<?php echo form_error('email'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="phone" class="col-2 col-form-label">เบอร์โทร</label>
				<div class="col-10">
					<input type="tel" name="phone" class="form-control" value="<?php echo $dataCustomer['phone']; ?>" id="phone">
					<?php echo form_error('phone'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="fax" class="col-2 col-form-label">FAX</label>
				<div class="col-10">
					<input class="form-control" value="<?php echo $dataCustomer['fax']; ?>" name="fax" type="text"  id="fax">
					<?php echo form_error('fax'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="country_code" class="col-2 col-form-label">รหัสประเทศ</label>
				<div class="col-10">
					<input class="form-control" value="<?php echo $dataCustomer['country_code']; ?>" type="text" name="country_code"  id="country_code">
					<?php echo form_error('country_code'); ?>
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
			<input type="hidden" name="id" value="<?php echo $dataCustomer['id']; ?>">
			<div class="card-footer alert-warning text-center">
				<button type="submit" id="save" class="btn btn-modal btn-primary">
					<span class="   glyphicon glyphicon-floppy-saved"> SAVE</span>
				</button>
				<button type="reset" id='exit' class="btn btn-modal btn-danger" >
					<span class="glyphicon glyphicon-floppy-remove"> EXIT</span>
				</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$('#exit').click(function(){
		window.location='<?php echo base_url()."index.php/customer/"; ?>';
	});
</script>
