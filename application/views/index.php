
<!-- <div class="col-sm-12"> -->
<div class="card  " style="padding:10px;">
	<div class="card-header alert-success"><i class="fa fa-users" aria-hidden="true"></i> <?php echo $title; ?></div>
	<div class="card-block">
		<caption>
			<button type="button" class="btn btn-primary" id='btn_addCustomer'><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล</button>
		</caption>
		<div class="clearfix"><hr></div>
		<table id="example" class="display alert-info" cellspacing="0" width="100%" >
			<thead style="font-size: 12px;">
				<tr>
					<th style="width: 10px;">No.</th>
					<th>NAME</th>
					<th>E-mail</th>
					<th>PHON</th>
					<th>FAX</th>
					<th>COUNTRY CODE</th>
					<th>STATUS</th>
					<th>CREATE DATE</th>
					<th class="text-center">#</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($getCustomer as  $rowCustomer): ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $rowCustomer['customer_name']; ?></td>
						<td><?php echo $rowCustomer['email']; ?></td>
						<td><?php echo $rowCustomer['phone']; ?></td>
						<td><?php echo $rowCustomer['fax']; ?></td>
						<td><?php echo $rowCustomer['country_code']; ?></td>
						<td><?php echo $rowCustomer['status']; ?></td>
						<td><?php echo $rowCustomer['create_date']; ?></td>
						<td class="text-center">
							<button type="button" class="btn btn-warning btn-sm btn_edit" data-num="<?php echo $rowCustomer['id']; ?>"><i class="fa fa-edit"></i> EDIT</button>
							<button type="button" class="btn btn-danger  btn-sm btn_delete" data-num="<?php echo $rowCustomer['id']; ?>"><i class="fa fa-trash"></i> DELETE</button>
							<button type="button" class="btn btn-danger  btn-sm btn_view" data-num="<?php echo $rowCustomer['id']; ?>""><i class="fa fa-list"></i> VIEW</button>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<div class="show_modal"></div>

<script src="<?php echo base_url(); ?>assets/DataTables-1.10.15/media/js/jquery.dataTables.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			"language": {
				"zeroRecords": "==========> NO  DATA  <========== "
			},
			"lengthMenu": [ 10,50, 100, "All"],
				// "scrollY":  "500px",
				"scrollCollapse": true,
				responsive: true,
			});

		funadd();
		fnedit();
		fndelete();
		fnview();
		<?php echo $addFalse; ?>

	} );

	function addFalse() {

		var url = '<?php echo $FormCustomerAdd;?>';
		modal_form('<?php echo $saveAdd; ?>','.:: เพิ่มข้อมูลพนักงาน ::.');
		$('#myModal ').modal('show');
		$('.modal-body').load(url);
	}

	function fnview() {
		$('.btn_view').click(function() {
			var url = '<?php echo $FormCustomerView;?>'+$(this).data('num');
			modal_form('#','.:: ดูข้อมูลพนักงาน ::.');
			$('#myModal ').modal('show');
			$('.modal-body').load(url);
		});
	}

	function fnedit() {
		$('.btn_edit').click(function(){
			var url = '<?php echo $FormCustomerEdit;?>'+$(this).data('num');
			modal_form('<?php echo $saveEdit; ?>'+$(this).data('num'),'.:: แก้ไขข้อมูลพนักงาน ::.');
			$('#myModal ').modal('show');
			$('.modal-body').load(url);
		});
	}

	function fndelete() {
		$('.btn_delete').click(function() {
			var confm = confirm("ยืนยันการลบข้อมูล !!");
			if(confm == true){
				$.ajax({
					url: '<?php echo $urldelete;?>'+$(this).data('num'),
				})
				.done(function() {
					location.reload();
				})
				.fail(function() {
					alert("ไม่สามารถลบข้อมูลได้");
				// console.log("error");
			});
			}else{
				return  false;
			}
		});
	}

	function funadd(url) {
		$('#btn_addCustomer').click(function(){
			var url = '<?php echo $FormCustomerAdd;?>';
			modal_form('<?php echo $saveAdd; ?>','.:: เพิ่มข้อมูลพนักงาน ::.');
			$('#myModal ').modal('show');
			$('.modal-body').load(url);
		});
	}

	function modal_form(action,title) {
		var html ='<form action="'+action+'"  role="form" data-toggle="validator" id="form" method="post" >';
		html +='<!-- Modal -->';
		html +='<div class="modal modal-wide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
		html +='<div class="modal-dialog modal-lg" >';
		html +='<div class="modal-content">';
		html += '<div class="modal-header alert-info">';
		html += '<h5 class="modal-title">'+ title +'</h5>';
		html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
		html += '	<span aria-hidden="true">&times;</span>';
		html += '</button>';
		html += '</div>';
		html +='<div class="modal-body">';
		html +='</div>';
		html +='<div class="modal-footer" style="text-align:center; background:#F6CECE;">';
		html +='<button type="submit" id="save" class="btn btn-modal btn-primary"><span class="   glyphicon glyphicon-floppy-saved"> บันทึก</span></button>';
		html +='<button type="reset" class="btn btn-modal btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"> ยกเลิก</span></button>';
		html +='</div>';
		html +='</div><!-- /.modal-content -->';
		html +='</div><!-- /.modal-dialog -->';
		html +='</div><!-- /.modal -->';
		html +='</form>';
		$('.show_modal').html(html);
	}
</script>