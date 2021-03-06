<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>App  </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url('assests/css/datePicker.css'); ?>">
		<script type="text/javascript" src="<?php echo base_url('assests/js/datePicker.js'); ?>"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$(".SubmitedDate").datepicker({
					autoclose: true,
					format: "yyyy-mm-dd"
				});
			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="form-group col-xs-12 col-sm-4 col-lg-8">
					<h4>App</h4> 
				</div>
				
				<div class="form-group col-xs-12 col-sm-4 col-lg-2">
					<h4> Welcome <?php echo $this->session->userdata('user'); ?></h4>
				</div>
				
				<div class="form-group col-xs-12 col-sm-4 col-lg-2">
					<a href="<?php echo site_url('login/logout'); ?>">
						<input type='Logout' class="btn btn-primary form-control" name='Logout' value='Logout'>
					</a>
				</div>
				
			</div>
			<hr />  
			
			<div class="row">
				<?php echo form_open('Read/insertToDo',['name'=>'diaryApp','autocomplete'=>'off']);?>
				<div class="col-md-4"><b>To do</b>
					<?php echo form_input(['name'=>'toDo','class'=>'form-control','value'=>set_value('toDo')]);?>
					<?php echo form_error('toDo',"<div style='color:red'>","</div>");?>
				</div>
				<div class="col-md-4"><b>Submited Date</b>
					<?php echo form_input(['name'=>'SubmitedDate','class'=>'form-control SubmitedDate','value'=>set_value('SubmitedDate')]);?>
					<?php echo form_error('SubmitedDate',"<div style='color:red'>","</div>");?>
				</div>
			</div>

			<div class="row" style="margin-top:1%">
				<div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-1">
					<?php echo form_submit(['name'=>'insert','class'=>'col-md-2 form-control btn btn-primary','value'=>'Submit']);?>	
					<?php echo form_close();?>
				</div>
				
				<div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-1">				
					<a href="<?php echo site_url('read/getToDoData'); ?>">
						<button class="btn btn-primary"> Cancel</button>
					</a>
				</div>
				
				
			</div> 
			  
			
			
		</div>
	</body>
</html>
