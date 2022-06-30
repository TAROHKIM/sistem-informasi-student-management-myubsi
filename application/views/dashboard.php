<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<a href="student?opt=mgst" style="color:white; text-decoration:none;">
					Total Mahasiswa : <span class="badge"><?php echo $countTotalStudent; ?></span>	
				</a>				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-primary text-center">
			<div class="panel-heading">
				<a href="teacher" style="color:white; text-decoration:none;">
					Total Dosen : <span class="badge"><?php echo $countTotalTeacher; ?></span>	 	
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<a href="prodi" style="color:white; text-decoration:none;">
					Total Kelas : <span class="badge"><?php echo $countTotalClasses; ?></span>		
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<a href="marksheet?opt=mngms" style="color:white; text-decoration:none;">
					Total KHS : <span class="badge"><?php echo $countTotalMarksheet; ?></span>	
				</a>
			</div>			
		</div>
	</div>

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Kalender</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="fa fa-dollar-sign"></i> Total Pemasukan </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo 'Rp. '.$totalIncome; ?> </b></h3>	
				</center>				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-money-check-alt"></i> Total Pengeluaran </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo 'Rp. '.$totalExpenses; ?></b></h3>	
				</center>
				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading "><i class="fa fa-dollar-sign"></i> Saldo </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo 'Rp. '.$totalBudget; ?></b></h3>
				</center>
			</div>	
		</div>
	</div>

	
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#topNavDashboard").addClass('active');
    $("#calendar").fullCalendar();
  });
</script>

