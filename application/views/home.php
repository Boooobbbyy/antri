<section>
	<div class="container">
		<div class="col-md-5"></div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-5">
					<div class="box">
						<div class="loket">
							Agenda
						</div>
						<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" id="slide">
								<div class="item active">
									<img class="img-responsive" data-src="" style="height:300px;width:80%;margin-left: auto; margin-right: auto;" src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Lambang_Kabupaten_Way_Kanan.png">
									<div class="carousel-caption">
										<h3>AGENDA INI</h3>
									</div>
								</div>
								<div class="item">
									<img class="img-responsive" data-src="" alt="900x500" src="<?php echo base_url('assets/img/Lambang_Kabupaten.png')  ?>">
									<div class="carousel-caption">
										<h3>AGENDA ITUU</h3>
									</div>
								</div>
								<div class="item">
									<img class="img-responsive" data-src="" alt="900x500" src="">
									<div class="carousel-caption">
										<h3>RAPAT</h3>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
								<span class="fas fa-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
								<span class="fas fa-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="box">
						<div class="loket" id="loket">
							Loket 1
						</div>

						<div class="antrian" id="antrian6">&nbsp;
							<script type="text/javascript">
								setInterval(function() {
									var lok = 6;
									$.ajax({
										type: "POST",
										url: "",
										data: "id_loket=" + lok,
										success: function(data) {
											document.getElementById("antrian6").innerHTML = data;
										}
									})
								}, 1000);
							</script>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="box">
						<div class="loket" id="loket">
							Loket 2
						</div>
						<div class="antrian" id="antrian7">&nbsp;
							<script type="text/javascript">
								setInterval(function() {
									var lok = 7;
									$.ajax({
										type: "POST",
										url: "",
										data: "id_loket=" + lok,
										success: function(data) {
											document.getElementById("antrian7").innerHTML = data;
										}
									})
								}, 1000);
							</script>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="box">
						<div class="loket" id="loket">
							Loket 3
						</div>
						<div class="antrian" id="antrian8">&nbsp;
							<script type="text/javascript">
								setInterval(function() {
									var lok = 8;
									$.ajax({
										type: "POST",
										url: "",
										data: "id_loket=" + lok,
										success: function(data) {
											document.getElementById("antrian8").innerHTML = data;
										}
									})
								}, 1000);
							</script>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="box">
						<div class="loket" id="loket">
							Loket 4
						</div>
						<div class="antrian" id="antrian9">&nbsp;
							<script type="text/javascript">
								setInterval(function() {
									var lok = 9;
									$.ajax({
										type: "POST",
										url: "",
										data: "id_loket=" + lok,
										success: function(data) {
											document.getElementById("antrian9").innerHTML = data;
										}
									})
								}, 1000);
							</script>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
	</div>
</section>