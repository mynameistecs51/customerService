
<!-- <div class="col-sm-12"> -->
<div class="card  " style="padding:10px;">
	<div class="card-header alert-success"><?php echo $title; ?></div>
	<div class="card-block">
		<caption>
			<button type="button" class="btn btn-primary" id='btn_addProduct'><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล</button>
		</caption>
		<div class="clearfix"><hr></div>
		<table id="example" class="display alert-info" cellspacing="0" width="100%" >
			<thead style="font-size: 12px;">
				<tr>
					<th style="width: 10px;">No.</th>
					<th>NAME</th>
					<th>DESCRIPTION</th>
					<th>PRICE NORMAL</th>
					<th>PRICE SALE</th>
					<th>PUBLISHED</th>
					<th class="text-center " style="width: 230px;">#</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($getProductAll as $rowProduct): ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $rowProduct['name']; ?></td>
						<td><?php echo $rowProduct['description']; ?></td>
						<td><?php echo $rowProduct['price_normal']; ?></td>
						<td><?php echo $rowProduct['price_sale']; ?></td>
						<td><?php echo $show = ($rowProduct['published'] == 0)?'<div class="text-danger"> ไม่ประกาศขาย</div>':'<div class="text-success"> ประกาศขาย</div>' ; ?></td>
						<td >
							<button type="button" class="btn btn-warning btn-sm btn_edit" data-num="<?php echo $rowProduct['id']; ?>"><i class="fa fa-edit"></i> EDIT</button>
							<button type="button" class="btn btn-danger  btn-sm btn_delete" data-num="<?php echo $rowProduct['id']; ?>"><i class="fa fa-trash"></i> DELETE</button>
							<button type="button" class="btn btn-success  btn-sm btn_view" data-num="<?php echo $rowProduct['id']; ?>""><i class="fa fa-list"></i> VIEW</button>
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

		fnview();
		funadd();
		fnedit();
		fndelete();
	} );

	function funadd(url) {
		$('#btn_addProduct').click(function(){
			var url = '<?php echo $FormProductAdd;?>';
			modal_form('<?php echo $saveAdd; ?>','.:: ADD PRODUCT ::.');
			$('#myModal ').modal('show');
			$('.modal-body').load(url);
		});
	}


	function fnview() {
		$('.btn_view').click(function() {
			var url = '<?php echo $FormProductView;?>'+$(this).data('num');
			modal_form('#','.:: ดูข้อมูลพนักงาน ::.');
			$('#myModal ').modal('show');
			$('.modal-body').load(url);
		});
	}

	function fnedit() {
		$('.btn_edit').click(function(){
			var url = '<?php echo $FormProductEdit;?>'+$(this).data('num');
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
					url: '<?php echo $productDelete;?>',
					type: 'POST',
					data: {'id': $(this).data('num')}
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