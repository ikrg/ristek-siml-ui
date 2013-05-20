<?php
include_once('header.php');
?>

<!-- BEGIN: HEADER_MENU -->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand">XYZ</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="#">Home</a>
								</li>
								<li  >
									<a href="review.php">Review</a>
								</li>
							</ul>
							<ul class="nav pull-right">
								<?php
								include_once('menu_account.php');
								?>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="alert">
				 <button type="button" class="close">×</button>
				<h4>
					Penting!
				</h4> 
				<strong>Deadline</strong> review terakhir tanggal <strong style="color:red;">30 April 2013</strong>. Harap menyelesaikan review sebelum tanggal tersebut, atau menghubungi panitia pelaksana untuk bantuan.
			</div>
		</div>
	</div>
</div>
<!-- END: HEADER_MENU -->

<!-- BEGIN: CONTENT-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							ID
						</th>
						<th>
							Judul
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							 PDII12345
						</td>
						<td>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</td>
						<td>
							Belum terreview
						</td>
					</tr>
					<tr class="success">
						<td>
							2
						</td>
						<td>
							 PDII12345
						</td>
						<td>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</td>
						<td>
							Lulus
						</td>
					</tr>
					<tr class="error">
						<td>
							3
						</td>
						<td>
							 PDII12345
						</td>
						<td>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</td>
						<td>
							Tidak Lulus
						</td>
					</tr>
					<tr class="warning">
						<td>
							4
						</td>
						<td>
							 PDII12345
						</td>
						<td>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</td>
						<td>
							Ditunda/Perbaikan
						</td>
					</tr>
					<tr class="info">
						<td>
							5
						</td>
						<td>
							 PDII12345
						</td>
						<td>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</td>
						<td>
							Perlu konfirmasi lanjutan
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- END: CONTENT -->
<?php
include_once('footer.php');
?>