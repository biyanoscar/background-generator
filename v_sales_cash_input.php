<script type="text/javascript">
$(function() { $('[name="document_no"]').focus(); });
</script>
<form id="form_head" class="form-horizontal " method="post">
<div class="row mt">
<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="showback">
		<div class="task-title">
		<div class='row'>
			<div class="col-xs-12 col-sm-5">
			  <span class="task-title-sp"><i class="fa fa-money"></i> Penjualan Cash <!--<?php if(!empty($head->DOCUMENT_NO)) {echo ': '.$head->DOCUMENT_NO;} ?>--></span>
			</div>
		  <div class="col-xs-12 col-sm-7">
			  <div class="float-xs-left float-sm-right">
				<?php $this->load->view('navigation/v_nav_create'); ?>
				<?php $this->load->view('navigation/v_nav_del'); ?>
				<?php $this->load->view('navigation/v_nav_save'); ?>
				<?php $this->load->view('navigation/v_nav_undo'); ?>
				<?php $this->load->view('navigation/v_nav_print'); ?>
				<?php $this->load->view('navigation/v_nav_info'); ?>
				<?php $this->load->view('navigation/v_nav_status'); ?>
			  </div>
		  </div>
		  </div>
		</div>		
		
		<div class="row drop-after">
			<div class="panel-breadcrumb">
				<ol class="breadcrumb breadcrumb-arrow">
					<li class="active"><a href='<?php echo base_url(); ?>'><i class="fa fa-home" aria-hidden="true"></i></a></li>
					<li class="active"><a href='<?php echo base_url($this->uri->segment(1)); ?>'>Penjualan</a></li>
					<li class="active"><a href='<?php echo base_url($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>'>Penjualan Cash</a></li>
					<?php if(!empty($head->DOCUMENT_NO)) { ?>
						<li class="active"><?php echo $head->DOCUMENT_NO; ?></li>					
					<?php } ?>
				</ol>			
			</div>	
		</div>
    </div><!-- /showback -->
</div>
</div>

<div class="row ">
<div class="col-lg-12 col-md-12 col-sm-12">
         <div class="showback">
      	<div class="form-horizontal " method="post">
			<div class="row mt seventh-custom-mn">
                <div class="col-md-6 col-sm-12">
				<?php $this->load->view('form/v_form_sales_faktur'); ?>
				<?php $this->load->view('form/v_form_customer_faktur'); ?>
				<?php $this->load->view('form/v_form_ket'); ?>
				
				<div hidden>
				<?php $this->load->view('form/v_form_termin_hide'); ?>
					<div class="collapse" id="collapseFilter2">
				<?php $this->load->view('form/v_form_jt'); ?>
					</div>
				</div>
				
				
				</div>
                <div class="col-md-6 col-sm-12 col-xs-12">
				<div class="well well-lg" name="total_net_well" id="total_net_well" style="font-size:30px; text-align:right;"><?php if(!empty($head->TOTAL_NET)) {echo $head->TOTAL_NET;} ?></div>
				<?php $this->load->view('form/v_form_sales'); ?>
				<?php $this->load->view('form/v_form_gudang_fakturjual'); ?>
				<?php $this->load->view('form/v_form_noref'); ?>
				<?php $this->load->view('form/v_form_totaldiskon'); ?>
				<?php $this->load->view('form/v_form_ppn'); ?>
					
				<input name="nota_penjualan_id" type="hidden" id="nota_penjualan_id" required value="<?php if(!empty($head->NOTA_PENJUALAN_ID)) {echo $head->NOTA_PENJUALAN_ID;} ?>" readonly/>
				
				<input name="discount_percen_person" type="hidden" id="discount_percen_person" value="<?php if(!empty($head->DISCOUNT_PERCEN_PERSON)) {echo $head->DISCOUNT_PERCEN_PERSON;} ?>" readonly/>
				
				<input name="discount_price_person" type="hidden" id="discount_price_person" value="<?php if(!empty($head->DISCOUNT_PRICE_PERSON)) {echo $head->DISCOUNT_PRICE_PERSON;} ?>" readonly/>
				
				<input name="bank_default" type="hidden" id="bank_default" value="<?php if(!empty($head->BANK_DEFAULT)) {echo $head->BANK_DEFAULT;} ?>" readonly/>
							
				<div class="form-group hidden">
					<label class="col-sm-4 col-sm-4 control-label">Total Amount</label>
					<div class="col-xs-12 col-sm-12 col-md-8">
						<input id="total_amount" name="total_amount" class="form-control" value="<?php if(!empty($head->TOTAL_AMOUNT)) {echo $head->TOTAL_AMOUNT;}?>">
						<input id="total_amount_ppn" name="total_amount_ppn" class="form-control" value="">
					</div>
				</div>
				<div class="form-group hidden">
					<label class="col-sm-4 col-sm-4 control-label">Total Net</label>
					<div class="col-xs-12 col-sm-12 col-md-8">
						<input id="total_net" name="total_net" class="form-control" value="<?php if(!empty($head->TOTAL_NET)) {echo $head->TOTAL_NET;}?>">
					</div>
				</div>
				
				<input name="action" type="hidden" id="action" required value="<?php echo $action; ?>" readonly/>
				</div>				
			</div>
		</div>
    </div><!-- /showback -->
    </div>
    </div>
    </form>
<div class="row">	
	<div class="col-lg-12 col-md-12 col-sm-12">	
		
		<div class="showback">
			<?php $this->load->view('v_sales_cash_input_detail'); ?>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="showback">
      	<div class="form-horizontal " method="post">
			<div class="row mt seventh-custom-mn">

			<div class="col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-6">
			  <table class="table ">
				<tbody>
				  <tr>
					<th>Total</th>
					<td>:</td>
					<td></td>
					<td></td>
					<td class="text-right"><div id="v_total_amount"></div></td>
				  </tr>
				  <tr>
					<th>Diskon</th>
					<td>:</td>
					<td class="text-left"><?php $this->load->view('form/v_form_totaldiskon_sub1'); ?></td>
					<td class="text-center">%=</td>
					<td class="text-right"><?php $this->load->view('form/v_form_totaldiskon_sub2'); ?></td>
				  </tr>
				  <tr>
					<th>PPN</th>
					<td>:</td>
					<td class="text-left"><?php $this->load->view('form/v_form_ppn_sub'); ?>
					<td></td>
					<td class="text-right"><div id="v_ppn_amount"></div></td>
				  </tr>
				  <tr>
					<th><h4>Grand&nbsp;Total</h4></th>
					<td>:</td>
					<td></td>
					<td></td>
					<td class="text-right text-danger"><h4><div id="v_total_net"></div></h4></td>
				  </tr>
				</tbody>
			  </table>
			</div>
		    </div>	
		</div>
		</div>
</div>
</div>
</div>

<?php $this->load->view('v_utility'); ?>

<script type="text/javascript">

	function debug() {
      $.ajax({   
        type: "GET",
		url: "<?php echo site_url($dir.'/'.$uri.'/debug/')?>",   
        dataType: "html",             
        success: function(response){                    
            $("#responsecontainer").html(response); 
        }
    });
};

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form_bayar_cash" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">ajax Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_bayar_cash" class="form-horizontal" method="post">
                    <div class="form-body">
                        <div class="row">
						  <div class="col-md-4 col-sm-4">
							<h3>GRAND TOTAL</h3>
						  </div>
						  <div class="col-md-8 col-sm-8" >
							<div class="input-group-lg">
								<div name="grand_total" id="grand_total" class="well well-sm" style="font-size:30px; text-align:right;"></div>
								<!--<input name="grand_total" id="grand_total" type="text" class="form-control" style="text-align:right;" readonly>-->
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-12 col-sm-12">
							<label>PEMBAYARAN(Dapat menggunakan metode bayar dgn Bank/cash/kombinasi)</label>
						  </div>
						</div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Metode Bayar 1</label>
                            <div class="col-md-4 col-sm-4">
								<div class="input-group">
									<select id="coa_byr1" name="coa_byr1" placeholder="" class="form-control" type="text">
									</select>	
								</div>
                                <span class="help-block"></span>
                            </div>
							<div class="col-md-5 col-sm-5">
								<div class="input-group">
										 <input id="total_byr1" name="total_byr1" onchange="calculate_pay()" placeholder="" class="form-control" type="number" style="text-align:right;">
										 <input id="net_byr1" name="net_byr1" placeholder="" class="form-control" type="hidden">
								</div>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
							<div class="col-md-12 col-md col-sm-12 col-sm">
								<div class="btn-group btn-group-justified" role="group" >
									<div class="btn-group" role="group">
										<button id="amount1" onclick="submit_amount('amount1')" type="button" class="btn btn-info">1</button>
									</div>
									<div class="btn-group" role="group">
										<button id="amount2" onclick="submit_amount('amount2')" type="button" class="btn btn-info">2</button>
									</div>
									<div class="btn-group" role="group">
										<button id="amount3" onclick="submit_amount('amount3')" type="button" class="btn btn-info">3</button>
									</div>
									<div class="btn-group" role="group">
										<button id="amount4" onclick="submit_amount('amount4')" type="button" class="btn btn-info">4</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">No Kartu</label>
                            <div class="col-md-4 col-sm-4">
                                <input id="card_no1" name="card_no1" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Nama Bank</label>
                            <div class="col-md-4 col-sm-4">
                                <input id="nama_bank1" name="nama_bank1" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Metode Bayar 2</label>
                            <div class="col-md-4 col-sm-4">
								<div class="input-group">
									<select id="coa_byr2" name="coa_byr2" onchange="cek_byr2()" placeholder="" class="form-control" type="text">
									</select>	 
								</div>
                                <span class="help-block"></span>
                            </div>
							<div class="col-md-5 col-sm-5">
								<div class="input-group">
										 <input id="total_byr2" name="total_byr2" onchange="calculate_pay()" placeholder="" class="form-control" type="number" style="text-align:right;">
								</div>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">No Kartu</label>
                            <div class="col-md-4 col-sm-4">
                                <input id="card_no2" name="card_no2" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Nama Bank</label>
                            <div class="col-md-4 col-sm-4">
                                <input id="nama_bank2" name="nama_bank2" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						<div class="row">
						  <div class="col-md-4 col-sm-4">
							<h3>TOTAL BAYAR</h3>
						  </div>
						  <div class="col-md-8 col-sm-8" >
							<div class="input-group-lg">
							  <div id="total_bayar" name="total_bayar" class="well well-sm" style="font-size:30px; text-align:right;"></div>
							  <!--<input type="text" id="total_bayar" name="total_bayar" class="form-control" style="text-align:right;" readonly>-->
							  <input type="hidden" id="total_received" name="total_received" class="form-control">
							</div>
						  </div>
						</div>
						
						<div class="row">
						  <div class="col-md-4 col-sm-4">
							<h3>KEMBALI</h3>
						  </div>
						  <div class="col-md-8 col-sm-8" >
							<div class="input-group-lg">
							  <div id="kembali" name="kembali" class="well well-sm" style="font-size:30px; text-align:right;"></div>
							  <!--<input type="text" id="kembali" name="kembali" class="form-control" style="text-align:right;" readonly>-->
							</div>
						  </div>
						</div>
                       <div class="row">
						  <div class="col-md-12 col-sm-12">
							<label>Pembayaran selain menggunakan metode kas kecil harus uang pas</label>
						  </div>
						</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="pay()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
var gt;
var coa_byr1;
var coa_byr2;
	
var total_byr1;
var total_byr2;
var total_byr;
	
function ajax_head_add()
{
	
	//CEK SETUP LIMIT HUTANG/PIUTANG
	<?php if($setup->LIMIT_PIUT_JUAL=="2"){ ?> 
		var person_id = $("#person_id").val();
		var total_net = $("#total_net").val();
		$.ajax({
			 type: "POST",
			 url: '<?php echo base_url(); ?>sales/faktur/piutang/'+person_id,
			 data: $('#form_head').serializeArray(),
			 dataType: "json",  
			 cache:false,
			 success: 
				  function(data){
					//console.log(data);
					if(data.NilaiLimit > 0){
						if(data.Sisa > data.NilaiLimit){
							swal("Perhatian", "Nilai Faktur melebihi sisa limit hutang! sisa limit piutang ="+(total_net-data.Sisa)+"", "error").catch(swal.noop);
							}
						else{
							ajax_head_stok();
						}
					}
					else{ // jika 0 batas piutang unlimited,langsung save
						ajax_head_stok();
					}
				  }
			  });
	<?php }else{  ?>
				ajax_head_stok();
	<?php }?>
}	
	
function ajax_head_stok()
{
	var valueDetail = new Array();
	var dataDetail = table.rows().data();
	
	dataDetail.each(function (value, index) {
	 valueDetail[index] = [value[0], value[1], value[2],value[3],value[4],value[5],value[6],value[7],value[8],value[9],value[10],value[11],value[12],value[13],value[14],value[15],value[16],value[17]];
	});
	
	pre1 = JSON.stringify(valueDetail); //add atau update
	pre2 = pre1.replace(/"/g, '\\"'); 
	pre3 = pre2.replace(/'/g, "''"); 
	var myJsonDetail = pre3; //add atau update
	
	//CEK SETUP STOCK_MIN
	<?php if($setup->STOCK_MIN=="2"){ ?> 
	
		var warehouse = $("#warehouse_id option:selected").text();
		xdata = {item:myJsonDetail,gudang:$('#warehouse_id').val()};
		var uri = '<?php echo $uri; ?>';//setiap menu detail beda kolom
		
		$.ajax({
		url : '<?php echo site_url('auto/cek_stok_minus')?>/'+uri,
		//async: false,
		type: "POST",
		data: xdata,
		dataType: "JSON",
			success: function(data)
			{
				//console.log(data);
				data = data.data;
				var text = "" ;
				if(data.length>0)
				{
					data.forEach(function (value, index) {
						text +=  "Sisa stok "+value.item + " di gudang " + warehouse + " = " + value.sisa.toFixed(2) + " " + value.uom + "<br>";
						//alert(text);
					});
					swal("Maaf stok kurang",text, "warning").catch(swal.noop);
					//return;
				}
				else{
					form_pay();
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				// alert('Error adding / update data');

				//biyan edit - Custom error message
				var msg = '';
				if (jqXHR.status === 0) {
					msg = 'Not connect.\n Verify Network.';
				} else if (jqXHR.status == 404) {
					msg = 'Requested page not found. [404]';
				} else if (jqXHR.status == 500) {
					msg = 'Internal Server Error [500].';
				} else if (textStatus === 'parsererror') {
					msg = 'Requested JSON parse failed.';
				} else if (textStatus === 'timeout') {
					msg = 'Time out error.';
				} else if (textStatus === 'abort') {
					msg = 'Ajax request aborted.';
				} else {
					msg = 'Uncaught Error.\n' + jqXHR.responseText;
				}
				// $('#post').html(msg);

				alert(msg);
			}
		});
		
	<?php }else{  ?>
				form_pay();
	<?php }?>
	
}	
	
function form_pay()
{
	save_method = 'add'; 
	$('#form_bayar_cash')[0].reset(); // reset form on modals
	$('.form-group').removeClass('has-error'); // clear error class
	$('.help-block').empty(); // clear error string
	$('#modal_form_bayar_cash').modal('show'); // show bootstrap modal
	$('.modal-title').text('Form Bayar Cash'); // Set Title to Bootstrap modal title
	
	var gt = $('#total_net').val(); 
	
	calculate_pay();
	set_button_pay();
	$('#grand_total').text(accounting.format(gt,2)); 
}
function set_button_pay()
{
	gt= Number(gt); 
	if(gt<20000){	
		if(gt%1000==0){
			amount2=Number(gt)+1000;
			x=amount2+1;
			amount3=Math.ceil(x/5000)*5000;
			if(amount3==15000){
				amount3=20000;
				x=x+10000;
			}
			else{
				x=x+5000;
			}
			amount4=Math.ceil(x/10000)*10000;
			if(amount4>20000)
			{
				amount4=50000;
			}
		}
		else{
			amount2=Math.ceil(gt/1000)*1000;
			x=amount2+1;
			amount3=Math.ceil(x/5000)*5000;
			if(amount3==15000){
				amount3=20000;
				x=x+10000;
			}
			else{
				x=x+5000;
			}
			amount4=Math.ceil(x/10000)*10000;
			if(amount4>20000)
			{
				amount4=50000;
			}
		}
	}
	else if(gt>=20000 && gt<50000){
		if(gt%20000==0){
			amount2=50000;
			amount3=100000;
			amount4=100000;
		}
		else if(gt%30000==0){
			amount2=40000;
			amount3=50000;
			amount4=100000;
		}
		else{
			if(gt%5000==0){
				amount2=Number(gt)+5000;
				x=amount2+1;
				amount3=Math.ceil(x/10000)*10000;
				x=x+10000;
				amount4=Math.ceil(x/50000)*50000;
			}
			else{
				amount2 = Math.ceil(gt/5000)*5000;
				x=amount2+1;
				amount3=Math.ceil(x/10000)*10000;
				x=x+10000;
				amount4=Math.ceil(x/50000)*50000;
			}
		}
	}
	else{		
				amount2 = Math.ceil(gt/10000)*10000;
				amount3 = Math.ceil(gt/50000)*50000;
				amount4 = Math.ceil(gt/100000)*100000;
		}
	
	$("#amount1").html(accounting.format(gt,2));
	$("#amount2").html(accounting.format(amount2,2));
	$("#amount3").html(accounting.format(amount3,2));
	$("#amount4").html(accounting.format(amount4,2));
}
function calculate_pay()
{
	gt = $("#total_net").val();
	total_byr1 = document.getElementById("total_byr1").value;
	total_byr2 = document.getElementById("total_byr2").value;
	
	coa_byr1 = document.getElementById("coa_byr1").value;
	coa_byr2 = document.getElementById("coa_byr2").value;
	
	if(total_byr1=="")
	{
		total_byr1=0;
	}
	if(total_byr2=="")
	{
		total_byr2=0;
	}
	
	if( total_byr1==0 && total_byr2>0)
	{
		$("#total_byr2").val(0);
		total_byr2=0;
		swal("Perhatian", "Isi total pembayaran 1 terlebih dahulu", "error").catch(swal.noop);
	}
	total_byr  = Number(total_byr1) + Number(total_byr2);
	
	$("#total_bayar").text(accounting.format(total_byr,2));
	$("#kembali").text(accounting.format((total_byr-gt),2));
	
	if(coa_byr2==""){
		$("#total_received").val(total_byr1);
		$("#net_byr1").val(gt);
	}
	else{
		$("#total_received").val(total_byr);
		$("#net_byr1").val(total_byr1);
	}
	
}
function submit_amount(id){
	var amount = document.getElementById(id).firstChild;
	//alert(accounting.unformat(amount.data));
	$("#total_byr1").val(accounting.unformat(amount.data));
	calculate_pay();
}
function pay(){
	 
	var bank_default = document.getElementById("bank_default").value;
	if(coa_byr2=="")
	{
		if(coa_byr1!=bank_default && Number(total_byr1) > Number(gt))
		{
			//$("#total_byr1").val(null);
			swal("Perhatian", "Pembayaran harus menggunakan uang pas!", "error").catch(swal.noop);
			return;
		}
		if(Number(total_byr1) < Number(gt))
		{
			swal("Perhatian", "Pembayaran kurang!", "error").catch(swal.noop);
			return;
		}
	}
	else
	{
		if(Number(total_byr) > Number(gt))
		{
			//$("#total_byr1").val(null);
			swal("Perhatian", "Pembayaran harus menggunakan uang pas!", "error").catch(swal.noop);
			return;
		}
		if(Number(total_byr) < Number(gt))
		{
			swal("Perhatian", "Pembayaran kurang!", "error").catch(swal.noop);
			return;
		}
	}
	
	
	var valueDetail = new Array();
	var dataDetail = table.rows().data();
	
	dataDetail.each(function (value, index) {
	 valueDetail[index] = [value[0], value[1], value[2],value[3],value[4],value[5],value[6],value[7],value[8],value[9],value[10],value[11],value[12],value[13],value[14],value[15],value[16]];
	});
	
	pre1 = JSON.stringify(valueDetail);
	pre2 = pre1.replace(/"/g, '\\"'); 
	pre3 = pre2.replace(/'/g, "''"); 
	var myJsonDetail = pre3; 
	
	var DeleteDetail = JSON.stringify(idDeleteDetail);  //delete
	
	var xdata = $('#form_head,#form_bayar_cash').serializeArray();
	xdata.push({name: 'dataDetail', value: myJsonDetail});
	xdata.push({name: 'deleteDetail', value: DeleteDetail});
	
	var url;
	//var id =$('#po_id').val();
	var act = $('#action').val();
	url = "<?php echo site_url('sales/cash/save')?>";
	
	//$('#modal_form_bayar_cash').modal('hide');
	//console.log(myJsonDetail);
	//console.log(DeleteDetail);
	$.ajax({
		url : url,
		type: "POST",
		data: xdata,
		dataType: "JSON",
		async: false,
		success: function(data)
		{
			if(data.status) 
			{
				$("#responsecontainer").html(data.query);
				if(act == 'input') {	
				
					swal({
					  title: "Good", text: "Transaksi Berhasil", type: "success", 
					  showConfirmButton: false, timer: 1700
					}).then(
					  function () {},
					  // handling the promise rejection
					  function (dismiss) {
					//if (dismiss === 'timer') {
						
						//loadPrintPage(data.id);
						//$("#iframe_print").hide();
						//var kembalian = $("#kembali").val();
						if( (total_byr-gt) > 0){ // jika total kemabalian > 0
						 swal({
							  title: "TOTAL KEMBALIAN: "+accounting.format((total_byr-gt),2)+"", text: "", type: "info", 
							  showConfirmButton: true,
							}).then(
							  function () {
								<?php if($menu->CUSTOM2=='Y'){  ?>
									var url = "<?php echo site_url('sales/cash/create'); ?>";
								<?php } else { ?>
									var url = "<?php echo site_url('sales/cash/view'); ?>/" + data.id;
								<?php } ?>
								window.location = url;	
							  },
							)
						}else{
							<?php if($menu->CUSTOM2=='Y'){  ?>
								var url = "<?php echo site_url('sales/cash/create'); ?>";
							<?php } else { ?>
								var url = "<?php echo site_url('sales/cash/view'); ?>/" + data.id;
							<?php } ?>
							window.location = url;	
						}
						//}
					  }
					)
				} else if(act == 'edit' || act == 'readonly') {	
					swal({
					  title: "Good", text: "Transaksi Berhasil", type: "success", 
					  showConfirmButton: false, timer: 1700
					}).then(
					  function () {},
					  // handling the promise rejection
					  function (dismiss) {
						
						if( (total_byr-gt) > 0){ // jika total kemabalian > 0
						 swal({
							  title: "TOTAL KEMBALIAN: "+accounting.format((total_byr-gt),2)+"", text: "", type: "info", 
							  showConfirmButton: true,
							}).then(
							  function () {
								var url = "<?php echo site_url('sales/cash/view'); ?>/" + data.id;
								window.location = url;
							  },
							)
						}else{
							var url = "<?php echo site_url('sales/cash/view'); ?>/" + data.id;
							window.location = url;	
						}
					  }
					)
				
				} else {
					swal({
					  title: "Warning", text: "Something wrong", type: "warning",
					  timer: 1700, showConfirmButton: false
					});
				}
			}
			else
			{
				//jika ada input _validate yang fix maka
				if(typeof data.inputfix != 'undefined'){
					for (var i = 0; i < data.inputfix.length; i++) 
					{
						$('[name="'+data.inputfix[i]+'"]').parent().removeClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="'+data.inputfix[i]+'"]').empty(); //select span help-block class set text error string
					}
				} else {
					alert(data.error);
				}	
				
				//jika ada input _validate yang error maka
				if(typeof data.inputerror != 'undefined'){
					for (var i = 0; i < data.inputerror.length; i++) 
					{
						$('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="'+data.inputerror[i]+'"]').html(data.error_string[i]); //select span help-block class set text error string
					}
				} else {
					alert(data.error);
				}	
			}
			$('#modal_form_bayar_cash').modal('hide'); // show bootstrap modal
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			// alert('Error adding / update data');
			//alert("Status: " + textStatus); alert("Error: " + errorThrown); 

			//biyan edit - Custom error message
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (textStatus === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (textStatus === 'timeout') {
				msg = 'Time out error.';
			} else if (textStatus === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			// $('#post').html(msg);

			alert(msg);
		}
	});

}

function ajax_head_delete()
{
	var data = table.rows().data();
	if(data.length > 0){
		swal({
			title: "Warning", text: "Tidak bisa dibatalkan, karena transaksi ini sudah diproses!!", type: "warning",
			//timer: 1700, showConfirmButton: false
		}).catch(swal.noop);
	}else{
		swal({
			  title: 'Are you sure?',text: "You won't be able to revert this!",type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6', cancelButtonColor: '#d33',confirmButtonText: 'Yes, delete it!'
			}).then(function () {
						var xdata = $('#form_head').serializeArray();
						var url;
						//var id =$('#po_id').val();
						var act =$('#action').val();
						
						url = "<?php echo site_url('sales/cash/delete')?>";
						//console.log(myJsonDetail);
						//console.log(DeleteDetail);
						$.ajax({
							url : url,
							type: "POST",
							data: xdata,
							dataType: "JSON",
							success: function(data)
							{
								if(data.status) 
								{
									$("#responsecontainer").html(data.query);
									if(act == 'input' || act == 'edit' || act == 'readonly') {	
									
										swal({
										  title: "Good", text: "Transaksi Berhasil Dihapus", type: "success", 
										  showConfirmButton: false, timer: 1700
										}).then(
										  function () {},
										  // handling the promise rejection
										  function (dismiss) {
											//if (dismiss === 'timer') {
											var url = "<?php echo site_url('sales/cash/view'); ?>/" + data.id;
											window.location = url;	
											//}
										  }
					)
									} else {
										swal({
										  title: "Warning", text: "Something wrong", type: "warning",
										  timer: 1700, showConfirmButton: false
										});
									}
								}
								else
								{
									//jika ada input _validate yang fix maka
									if(typeof data.inputfix != 'undefined'){
										for (var i = 0; i < data.inputfix.length; i++) 
										{
											$('[name="'+data.inputfix[i]+'"]').parent().removeClass('has-error'); //select parent twice to select div form-group class and add has-error class
											$('[name="'+data.inputfix[i]+'"]').empty(); //select span help-block class set text error string
										}
									} else {
										alert(data.error);
									}	
									
									//jika ada input _validate yang error maka
									if(typeof data.inputerror != 'undefined'){
										for (var i = 0; i < data.inputerror.length; i++) 
										{
											$('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
											$('[name="'+data.inputerror[i]+'"]').html(data.error_string[i]); //select span help-block class set text error string
										}
									} else {
										alert(data.error);
									}	
								}
							},
							error: function (jqXHR, textStatus, errorThrown)
							{
								// alert('Error adding / update data');

								//biyan edit - Custom error message
								var msg = '';
								if (jqXHR.status === 0) {
									msg = 'Not connect.\n Verify Network.';
								} else if (jqXHR.status == 404) {
									msg = 'Requested page not found. [404]';
								} else if (jqXHR.status == 500) {
									msg = 'Internal Server Error [500].';
								} else if (textStatus === 'parsererror') {
									msg = 'Requested JSON parse failed.';
								} else if (textStatus === 'timeout') {
									msg = 'Time out error.';
								} else if (textStatus === 'abort') {
									msg = 'Ajax request aborted.';
								} else {
									msg = 'Uncaught Error.\n' + jqXHR.responseText;
								}
								// $('#post').html(msg);

								alert(msg);
							}
						});
			}).catch(swal.noop);
	}
}

function cek_um(id){
	$.ajax({
		url : "<?php echo base_url(); ?>sales/faktur/cek_um/"+id,
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{	
			if(data.status==true){
				//alert("ada uang muka yang harus diapply");
				swal(
					  'Perhatian!',
					  'Ada uang muka sebesar Rp '+data.data.TOTAL_UM+' yang harus diapply',
					  'info'
					)
			}
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error get data from ajax');
		}
	});
}
</script>	
<script type="text/javascript">

function isNumberKey(evt){
    //var charCode = (evt.which) ? evt.which : evt.keyCode
    //return !(charCode > 31 && (charCode < 48 || charCode > 57));
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57)){	
		return false;
	}
	return true;
}


function calculate(){
	var subtotal = 0;
	var subtotal_ppn = 0; //subtotal yg grade ppn
	var dataLength = table.rows().data().length;
	var irow = 0;
	
	var ppn_code = document.getElementById("ppn_code").value;
	var ppn = document.getElementById("ppn_percen").value;
	
	if(ppn_code=='INCL'){
		while( irow < dataLength)
		{
			dataDetail = table.rows(irow).data();
			dataDetail.each(function (value, index) {
				var unit_price = parseFloat(accounting.unformat(value[7])) / ((100 + parseFloat(ppn))/100);
				
				//price 9 percen 10
				if(value[10] > 0){
					var sh = parseFloat(accounting.unformat(value[7]));
					var diskon = value[10];
					
					//sh = Number(harga.value.replace(/[^0-9\.]+/g,"")) ;
					dt = 0;
					dh = 0;
					
					//split discount | var a = ["a", "b", "c"];
					var diskon_split = diskon.split('+');
					
					for (i = 0; i < diskon_split.length; ++i) {

						dt = sh * diskon_split[i] / 100;
						sh = sh - dt;
						dh = dh + dt;
					}	
					var disc_detail = dh/((100 + parseFloat(ppn))/100);
				}else{
					var disc_detail = parseFloat(accounting.unformat(value[9]));
				}
			
				//var disc_detail = parseFloat(accounting.unformat(value[8]));
				//var disc_detail = parseFloat(accounting.unformat(value[8])/((100 + parseFloat(ppn))/100));
				var subtotal_detail = (unit_price - disc_detail) * parseFloat(accounting.unformat(value[5]));
				var table1 = $('#table').dataTable();
				//alert(parseFloat(ppn));
				//alert(((100 + parseFloat(ppn))/100));
				//alert(value[8]);
				//alert(value[7]);
				table1.fnUpdate( accounting.formatMoney(unit_price,'',desimal), irow, 8, false );
				table1.fnUpdate( accounting.formatMoney(disc_detail,'',desimal), irow, 9, false );
				table1.fnUpdate( accounting.formatMoney(subtotal_detail,'',desimal), irow, 11, false );
				table1.fnDraw();
			});
			irow++;
		}
		
		var dataDetail = table.rows().data();
		dataDetail.each(function (value, index) {
			subtotal = subtotal + parseFloat(accounting.unformat(value[11]));
			if(value[17]!=73)//yg grade selain no ppn
			{
				subtotal_ppn = subtotal_ppn + parseFloat(accounting.unformat(value[11]));
			};
		});
		
		//set total amout 
		document.getElementById("total_amount").value = subtotal;
		document.getElementById("total_amount_ppn").value = subtotal_ppn;
		
		//set diskon
		var diskon = document.getElementById("discount_percen_head");
		if(diskon.value.length != 0){
			c_discount_percen_head();
		} else {
			c_discount_price_head() ;
		}

		var disc = document.getElementById("discount_price_head").value;
	
		document.getElementById("ppn_amount").value = (subtotal_ppn-disc)*ppn/100;
		document.getElementById("total_net").value = parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100);
	
		document.getElementById("v_total_amount").innerHTML = accounting.format(parseFloat(subtotal),desimal);
		document.getElementById("v_ppn_amount").innerHTML = accounting.format(((subtotal_ppn-disc)*ppn/100),desimal);
		document.getElementById("v_total_net").innerHTML = accounting.format((parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100)),desimal);
		document.getElementById("total_net_well").innerHTML = accounting.format((parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100)),desimal);
	
	}else{
		while( irow < dataLength)
		{
			dataDetail = table.rows(irow).data();
			dataDetail.each(function (value, index) {
				var unit_price = parseFloat(accounting.unformat(value[7]));	
				
				//price 9 percen 10
				//if(value[10] == '' || value[10] == null){
				if(value[10]> 0){
					var sh = parseFloat(accounting.unformat(value[7]));
					var diskon = value[10];
					
					//sh = Number(harga.value.replace(/[^0-9\.]+/g,"")) ;
					dt = 0;
					dh = 0;
					
					//split discount | var a = ["a", "b", "c"];
					var diskon_split = diskon.split('+');
					
					for (i = 0; i < diskon_split.length; ++i) {

						dt = sh * diskon_split[i] / 100;
						sh = sh - dt;
						dh = dh + dt;
					}	
					var disc_detail = dh;
				}else{
					var disc_detail = parseFloat(accounting.unformat(value[9]));
				}		
				
				//var disc_detail = parseFloat(accounting.unformat(value[8]));
				//var disc_detail = parseFloat(accounting.unformat(value[8])*((100 + parseFloat(ppn))/100));
				var subtotal_detail = (unit_price - disc_detail) * parseFloat(accounting.unformat(value[5]));
				var table1 = $('#table').dataTable();
				//alert(parseFloat(ppn));
				//alert(((100 + parseFloat(ppn))/100));
				//alert(value[8]);
				//alert(value[7]);
				table1.fnUpdate( accounting.formatMoney(unit_price,'',desimal), irow, 8, false );
				table1.fnUpdate( accounting.formatMoney(disc_detail,'',desimal), irow, 9, false );
				table1.fnUpdate( accounting.formatMoney(subtotal_detail,'',desimal), irow, 11, false );
				table1.fnDraw();
			});
			irow++;
		}
		
		var dataDetail = table.rows().data();
		dataDetail.each(function (value, index) {
			subtotal = subtotal + parseFloat(accounting.unformat(value[11]));
			if(value[17]!=73)//yg grade selain no ppn
			{
				subtotal_ppn = subtotal_ppn + parseFloat(accounting.unformat(value[11]));
			};
		});
	
		//set total amout 
		document.getElementById("total_amount").value = subtotal;
		document.getElementById("total_amount_ppn").value = subtotal_ppn;
		
		//set diskon
		var diskon = document.getElementById("discount_percen_head");
		if(diskon.value.length != 0){
			c_discount_percen_head();
		} else {
			c_discount_price_head() ;
		}
		
		var ppn = document.getElementById("ppn_percen").value;
		var disc = document.getElementById("discount_price_head").value;
		
		document.getElementById("ppn_amount").value = (subtotal_ppn-disc)*ppn/100;
		document.getElementById("total_net").value = parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100);
		
		document.getElementById("v_total_amount").innerHTML = accounting.format(parseFloat(subtotal),desimal);
		document.getElementById("v_ppn_amount").innerHTML = accounting.format(((subtotal_ppn-disc)*ppn/100),desimal);
		document.getElementById("v_total_net").innerHTML = accounting.format((parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100)),desimal);
		document.getElementById("total_net_well").innerHTML = accounting.format((parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100)),desimal);
		
	}
	/*
	dataDetail.each(function (value, index) {
		subtotal = subtotal + parseFloat(accounting.unformat(value[10]));
		if(value[16]!=73)//yg grade selain no ppn
		{
			subtotal_ppn = subtotal_ppn + parseFloat(accounting.unformat(value[10]));
		};
	});
	
	//set total amout 
	document.getElementById("total_amount").value = subtotal;
	document.getElementById("total_amount_ppn").value = subtotal_ppn;
	
	//set diskon
	var diskon = document.getElementById("discount_percen_head");
	if(diskon.value.length != 0){
		c_discount_percen_head();
	} else {
		c_discount_price_head() ;
	}

	var disc = document.getElementById("discount_price_head").value;
	var ppn = document.getElementById("ppn_percen").value;
	
	document.getElementById("ppn_amount").value = (subtotal_ppn-disc)*ppn/100;
	document.getElementById("total_net").value = parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100);
	
	document.getElementById("v_total_amount").innerHTML = accounting.format(parseFloat(subtotal),desimal);
	document.getElementById("v_ppn_amount").innerHTML = accounting.format(((subtotal_ppn-disc)*ppn/100),desimal);
	document.getElementById("v_total_net").innerHTML = accounting.format((parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100)),desimal);
	document.getElementById("total_net_well").innerHTML = accounting.format((parseFloat(subtotal)-disc+((subtotal_ppn-disc)*ppn/100)),desimal);
	*/
}
</script>	



<script>

function cek_byr2() {
	
	if($('#coa_byr2').val()=="")
	{
		$("#total_byr2").val(null);
		$("#total_byr2").prop('readonly', true);
		calculate_pay();
	}
	else
	{
		$("#total_byr2").prop('readonly', false);
		calculate_pay();
	}
	//var kas_bank = document.getElementById("bank_id");
	//set_kas_bank(kas_bank.value);
}

$.ajax({
		url :  '<?php echo base_url(); ?>auto/dropdown/'+'drop_kas_bank_cash',
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{
	
			var bank1="";
			
					//bank += "<option selected='selected'></option>";
					$.each(data, function(index, item)
					{	
							<?php if(!empty($head->COA_BYR1)) { ?>
									
							if(item.COA_ID == <?php echo $head->COA_BYR1 ?>)
							{
								bank1 += "<option selected='selected' value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
								//$('#account_type_id').val(item.ACCOUNT_TYPE_ID);
							}
							else
							{
								bank1 += "<option value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
							}
							<?php } else{ ?>
							
								if(index==0)
								{
									bank1 += "<option selected='selected' value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
									//$('#account_type_id').val(item.ACCOUNT_TYPE_ID);
								}
								else
								{
									bank1 += "<option value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
								}
							<?php } ?>
							
					});
			$("#coa_byr1").append(bank1);
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			console.log('Error get data from ajax');
		}
	});
	
	$.ajax({
		url :  '<?php echo base_url(); ?>auto/dropdown/'+'drop_kas_bank_cash',
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{
	
			var bank2="";
			
					//bank += "<option selected='selected'></option>";
					$.each(data, function(index, item)
					{	
							<?php if(!empty($head->COA_BYR2)) { ?>
									<?php if($head->COA_BYR2!=$head->BANK_DEFAULT) { ?>
							if(item.COA_ID == <?php echo $head->COA_BYR2 ?>)
							{
								bank2 += "<option selected='selected' value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
								//$('#account_type_id').val(item.ACCOUNT_TYPE_ID);
							}
							else
							{
								bank2 += "<option value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
							}
							<?php }} else{ ?>
								if(index==0)
								{
									bank2 += "<option selected='selected'></option>";
									<?php if($head->COA_BYR2!=$head->BANK_DEFAULT) { ?>
									bank2 += "<optionvalue='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
									<?php } ?>
									//$('#account_type_id').val(item.ACCOUNT_TYPE_ID);
								}
								else
								{
									<?php if($head->COA_BYR2!=$head->BANK_DEFAULT) { ?>
									bank2 += "<option value='"+item.COA_ID+"'>" + item.COA_NAME + "</option>";
									<?php } ?>
								}
							<?php } ?>
							
					});
			$("#coa_byr2").append(bank2);
			cek_byr2();
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			console.log('Error get data from ajax');
		}
	});
	
	
function loadPrintPage(id) {
	<?php $url_print = base_url($dir.'/'.$uri.'/cetak/'); ?>
	//alert('<?php echo $url_print; ?>/'+id);
    $("<iframe id='iframe_print' onload='this.contentWindow.print();'>")   // create a new iframe element
        .attr("src","<?php echo $url_print; ?>/"+id)	// point the iframe to the page you want to print
        .appendTo("body")               		// add iframe to the DOM to cause it to load the page
		.hide();                        		// make it invisible
		}

</script>


<?php $this->load->view('v_pre_masking'); ?>
<?php $this->load->view('v_utility'); ?>