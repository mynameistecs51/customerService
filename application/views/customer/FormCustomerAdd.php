<div class="container card col-sm-9 " style="padding:10px;background-color:#F2F2F2; ">
	<div class="card-header card-info"><h3><i class="fa fa-users" aria-hidden="true"></i> <?php echo $title; ?></h3></div>
	<div class="card-block ">
		<form action="<?php echo $saveAdd; ?>"  role="form" data-toggle="validator" id="form" method="post" >
			<div class="col-sm-12" style="padding:10px;">
				<div class="form-group row">
					<label for="gender" class="col-2 col-form-label text-muted"> GENDER</label>
					<div class="col-10 " id="gender">
						<?php echo form_error('gender'); ?>
						<label><input type="radio" name="gender" value="M" class="control-label"  checked> <b class="btn btn-primary btn-md">  MALE</b></label>
						&nbsp;&nbsp;&nbsp;
						<label><input type="radio" name="gender" value="F" class="control-label" > <b class="btn btn-warning btn-md"> FEMALE</b></label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="firstname" class="col-2 col-form-label text-muted"> FIRSTNAME</label>
				<div class="col-5">
					<input  type="text" name="firstname" id="firstname" class="form-control" value="<?php echo set_value('firstname'); ?>" placeholder="FIRSTNAME" autofocus   >
					<?php echo form_error('firstname'); ?>
				</div>
				<div class="col-5">
					<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo set_value('lastname'); ?>" placeholder="LASTNAME">
					<?php echo form_error('lastname'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-2 col-form-label text-muted"> E-mail</label>
				<div class="col-10">
					<input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="yourmail@email.com">
					<?php echo form_error('email'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="phone" class="col-2 col-form-label text-muted"> PHONE</label>
				<div class="col-10">
					<input type="tel" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" id="phone">
					<?php echo form_error('phone'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="fax" class="col-2 col-form-label text-muted"> FAX</label>
				<div class="col-10">
					<input class="form-control" value="<?php echo set_value('fax'); ?>" name="fax" type="text"  id="fax">
					<?php echo form_error('fax'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="country_code" class="col-2 col-form-label text-muted"> COUNTRY CODE</label>
				<div class="col-10">
					<input class="form-control" value="<?php echo set_value('country_code'); ?>" type="text" name="country_code"  id="country_code">
					<?php echo form_error('country_code'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="enabled" class="col-2 col-form-label text-muted">STATUS</label>
				<div class="col-10" id="enabled">
					<label><input type="radio" name="enabled"  value="1" class="control-label" checked > <b class="btn btn-success btn-md">  ENABLE</b></label>
					&nbsp;&nbsp;&nbsp;
					<label><input type="radio" name="enabled"  value="0" class="control-label" > <b class="btn btn-warning btn-md"> DISABLE</b></label>
					<?php echo form_error('enabled'); ?>
				</div>
			</div>
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