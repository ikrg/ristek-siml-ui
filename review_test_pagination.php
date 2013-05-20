<?php
include_once('header.php');

mysql_connect('localhost','root','r15tek2012.') or die ("gagal");
mysql_select_db('db_iptek2');

$sql_from = "
				FROM 
								t_kgt_lembaga AS a LEFT JOIN t_lembaga AS b ON a.fk_lembaga = b.kode
                LEFT JOIN t_prioritas AS c ON a.fk_prioritas=c.kode
                LEFT JOIN bidang as d ON a.id_bidang=d.id_bidang
                LEFT JOIN t_sumber_dana as e ON a.fk_sumber_dana = e.kode
        WHERE a.kode LIKE '%PDII%' AND e.nama <> ''
                AND (a.abstrak <> '' OR a.abstrak <> null)";
                
$sql_count = "SELECT COUNT(*) as count " . $sql_from;
                
$result = mysql_query($query);
if ($result_count = mysql_fetch_array($result,MYSQL_ASSOC)) {
	$data_count = $result_count['count'];
} else {
	$data_count = 0;
}


$pagination_data_per_page = 2;
$pagination_cell_per_page = 10;
$pagination_pages = ceil($data_count / $pagination_data_per_page);

$pagination_current_page = 1;
$pagination_cell_showed_start = 1;
$pagination_cell_showed_stop = $pagination_cell_per_page;
$pagination_cell_showed_divider = floor($pagination_data_per_page/2);
$pagination_last_page = $pagination_pages - $pagination_cell_showed_divider;

if(isset($_GET['page'])) {
	$pagination_current_page = $_GET['page'];
} else {
	$pagination_current_page = 1;
}

if ($pagination_current_page > $pagination_cell_showed_divider && 
		$pagination_current_page < $pagination_last_page) {
	$pagination_cell_showed_start = $pagination_current_page - $pagination_cell_showed_divider;
	$pagination_cell_showed_stop  = $pagination_current_page + $pagination_cell_showed_divider;
} else {
	if ($pagination_current_page >= $pagination_last_page) {
		$pagination_cell_showed_stop = $pagination_last_page;
		$pagination_cell_showed_start = $pagination_last_page - $pagination_cell_per_page;
	}
}


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
								<li>
									<a href="home.php">Home</a>
								</li>
								<li  class="active">
									<a href="#">Review</a>
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
			<ul class="breadcrumb">
				<li>
					<a href="#">Home</a> <span class="divider">/</span>
				</li>
				<li class="active">
					Review
				</li>
			</ul>
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
		<div class="span8">
			<div class="pagination">
				<ul>
					<li>
						<a href="#">Prev</a>
					</li>
					<?php
						for($i=$pagination_cell_showed_start ; $i <= $pagination_cell_showed_stop; $i++) {
					?>
						<li>
							<a href="review.php?page=<?php echo $i;?>"><?php echo $i;?></a>
						</li>
					<?php
						}
					?>
					<li>
						<a href="#">Next</a>
					</li>
				</ul>
			</div>
			<h3>
				[ID: PDII123456] Judul Lorem ipsum dolor sit amet.
			</h3>
			<dl class="dl-horizontal">
				<dt>
					Penulis
				</dt>
				<dd>
					Albar, Ahmad 
				</dd>
				<dd>
					Fals, Iwan
				</dd>
				<dt>
					Instansi
				</dt>
				<dd>
					Pusat Musik Jadul
				</dd>
				<dd>
					Lembaga Musik Indonesia
				</dd>
				<dt>
					Disiplin
				</dt>
				<dd>
					Musik
				</dd>
				<dt>
					Abstrak
				</dt>
				<dd>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit adipiscing felis et molestie. Integer laoreet mattis lacinia. Aliquam eleifend, massa sed ornare porta, lorem dui pharetra mauris, eu dapibus orci nulla quis dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin in rhoncus eros. Nullam congue eleifend pellentesque. Nullam luctus mattis augue, quis tincidunt nisl convallis at. Sed et urna dui, et sodales erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce consequat pulvinar posuere. Nunc cursus lacus eget neque porta vel egestas tortor molestie. 
				</dd>
				<dt>
				Analisis Kemiripan
				</dt>
				<dd>
					<a href="#">Mirip dalam judul dan abstrak.</a>
				</dd>
				<dd>
					<a href="#">Mirip dalam abstrak saja.</a>
				</dd>
			</dl>
			<h3>
				[ID: PDII123456] Judul Lorem ipsum dolor sit amet.
			</h3>
			<dl class="dl-horizontal">
				<dt>
					Penulis
				</dt>
				<dd>
					Albar, Ahmad 
				</dd>
				<dd>
					Fals, Iwan
				</dd>
				<dt>
					Instansi
				</dt>
				<dd>
					Pusat Musik Jadul
				</dd>
				<dd>
					Lembaga Musik Indonesia
				</dd>
				<dt>
					Disiplin
				</dt>
				<dd>
					Musik
				</dd>
				<dt>
					Abstrak
				</dt>
				<dd>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit adipiscing felis et molestie. Integer laoreet mattis lacinia. Aliquam eleifend, massa sed ornare porta, lorem dui pharetra mauris, eu dapibus orci nulla quis dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin in rhoncus eros. Nullam congue eleifend pellentesque. Nullam luctus mattis augue, quis tincidunt nisl convallis at. Sed et urna dui, et sodales erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce consequat pulvinar posuere. Nunc cursus lacus eget neque porta vel egestas tortor molestie. 
				</dd>
				<dt>
				Analisis Kemiripan
				</dt>
				<dd>
					<a href="#">Mirip dalam judul dan abstrak.</a>
				</dd>
				<dd>
					<a href="#">Mirip dalam abstrak saja.</a>
				</dd>
			</dl>
			<div class="pagination">
				<ul>
					<li>
						<a href="#">Prev</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">Next</a>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- BEGIN: RIGHT_BAR -->
		<div class="span4">
			<form class="form-search">
				<input type="text" class="input-medium search-query"> <button type="submit" class="btn">Search</button>
			</form> <span class="label">Tujuh Fokus Pembangunan</span>
			<ul class="unstyled">
				<li><a href="#">
					Ketahanan Pangan</a>
				</li>
				<li><a href="#">
					Energi</a>
				</li>
				<li><a href="#">
					Teknologi Informasi dan Komunikasi</a>
				</li>
				<li><a href="#">
					Teknologi dan Manajemen Transportasi</a>
				</li>
				<li><a href="#">
					Teknologi Pertahanan dan Keamanan</a>
				</li>
				<li><a href="#">
					Teknologi Kesehatan dan Obat</a>
				</li>
				<li><a href="#">
					Material Maju</a>
				</li>
				<li><a href="#">
					Tema Riset Unggulan Sosial Kemanusiaan</a>
				</li>
			</ul> <span class="label">Disiplin</span>
			<ul class="unstyled">
				<li>
					Lorem ipsum dolor sit amet
				</li>
				<li>
					Consectetur adipiscing elit
				</li>
				<li>
					Integer molestie lorem at massa
				</li>
				<li>
					Facilisis in pretium nisl aliquet
				</li>
				<li>
					Nulla volutpat aliquam velit
				</li>
				<li>
					Faucibus porta lacus fringilla vel
				</li>
				<li>
					Aenean sit amet erat nunc
				</li>
				<li>
					Eget porttitor lorem
				</li>
			</ul>
		</div>
		<!-- END: RIGHT_BAR -->
	</div>
</div>


<!-- END: CONTENT -->
<?php
include_once('footer.php');
?>

