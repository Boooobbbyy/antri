<nav>
	<div class="row">
		<div class="col-md-12">	
			<div class="menu">
				<h3><ul style='float:left;'>
			<li>Hi Loket 3</li>
		</ul>
		<ul>
			<li><a href=''>Logout</a></li>
		</ul></h3>
			</div>
		</div>
	</div>
</nav>

<section>
	<div class="container">
	<div class="row">
		<div class="col-md-3">
				<div class="box">
					<div class="loket">
						Loket 1
					</div>
					<div>
						<h1 style="color:#000"></h1>
					</div>
				</div>
                <div class="box">
					<div class="loket">
						Loket 2
					</div>
					<div>
						<h1 style="color:#000"></h1>
					</div>
				</div>
		</div>

		<div class="col-md-6">
			<div class="box">
				<div class="loket">
					Loket 3
				</div>
				<div class="agenda">
					<h1 id="a"></h1>
							<button class="btn panggil" onclick="panggil()"><i class="fas fa-bullhorn"></i> &nbsp;Panggil</button>
							<a href="<?php echo site_url('penjaga/antrian_selanjutnya'); ?>" class="btn selanjutnya" type="submit"><i class="fas fa-play"></i> &nbsp;Antrian Selanjutnya</a>
					<br>
				</div>
			</div>
		</div>

		<div class="col-md-3">
				<div class="box">
					<div class="loket">
						Loket 4
					</div>
					<div>
						<h1 style="color:#000"></h1>
					</div>
				</div>
		</div>

	</div>
    </div>
</section>
