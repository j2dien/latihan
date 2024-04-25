<?php include 'header.php' ?>
<title>Portfolio Avid Agustin</title>
<section id="slider" class="slider" style="background-image:url('img/banner-01.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="text">
					<h1>Selamat Datang</h1>
					<p>Avid Agustin S.Kom
						Saya adalah anak ke dua dari dua bersaudara, yang mempunyai keinginan untuk membahagiakan orangtua, seperti keinginan anak kepada orangtua pada umumnya. Cukup lakukan hal yang terbaik untuk menjadi yang terbaik walaupun merupakan suatu hal yang mustahil

					</p>
					<div class="button">
						<a href="tentang.php" class="btn primary "><i class="fa fa-briefcase"></i>My Portfolio</a>
						<a href="contact.php" class="btn"><i class="fa fa-phone"></i>Contact Me</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about" class="about">
	<div class="container">
		<div class="row">
			<div class="about-content">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="section-title">
						<h2>About <span>Me</span></h2>
					</div>
				</div>

				<?php
				$qry = mysqli_query($konek, "SELECT * FROM tbl_profil limit 1");
				while ($data = mysqli_fetch_assoc($qry)) {
				?>
					<div class="col-md-6  col-sm-6 col-xs-12">
						<div class="single-about">
							<p class="bolt"><?php echo $data['visi_misi']; ?></p>
							<div class="cv">
								<a target="_blank" href="dokumen/AVID AGUSTIN Curiculum_Vitae.pdf">Download Profil</a>
							</div>
							<!-- <div class="social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div> -->
						</div>
					</div>
				<?php } ?>


				<?php
				$qry = mysqli_query($konek, "SELECT * FROM tbl_bulan limit 1");
				while ($data = mysqli_fetch_assoc($qry)) {
				?>

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="image">
							<img src="img/avid.jpeg" alt="#">
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section>
<section id="skill" class="skill section">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="section-title">
					<h2>My <span>Skill</span></h2>
				</div>
			</div>
			<div class="col-md-10 col-sm-12 col-xs-12">
				<div class="skill-head">
					<div class="row">

						<?php
						$qry = mysqli_query($konek, "SELECT * FROM tbl_profil limit 1");
						while ($data = mysqli_fetch_assoc($qry)) {
						?>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="skill-content">
									<h3>DESKRIPSI SKILL</h3>
									<p>
										<?php echo $data['sejarah']; ?>
									</p>
								</div>
							</div>
						<?php } ?>

						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="skill-main">

								<?php
								$qry = mysqli_query($konek, "SELECT * FROM tbl_jadwal_solat limit 20");
								while ($data = mysqli_fetch_assoc($qry)) {
								?>
									<div class="single-skill">
										<div class="skill-title">
											<h4><?php echo $data['uraian']; ?></h4>
										</div>
										<div class="progress two">
											<div class="progress-bar" data-percent="<?php echo $data['jadwal']; ?>">
												<span><?php echo $data['jadwal']; ?>%</span>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="story" class="story section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title">
					<h2>PE<span>NDIDIKAN</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="story-content">
					<!-- single-story -->
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2006</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
							<h3>2006-2011</h3>
							<p>SD Negeri Jatimulya III</p>
						</div>
					</div>
					<!-- single-story -->
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">2011</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
							<h3>2011–2014</h3>
							<p>SMP Negeri 3 Kasokandel</p>
						</div>
					</div>
					<!-- single-story -->
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">2014</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
							<h3>2014–2017</h3>
							<p>SMK Korpri Majalengka</p>
						</div>
					</div>
					<!-- single-story -->
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2017</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
							<h3>2017–2022</h3>
							<p>S-1 Teknik Informatika - Universitas Majalengka</p>
						</div>
					</div>




				</div>
			</div>
		</div>
	</div>
</section>

<section id="story" class="story section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title">
					<h2>PE<span>KERJAAN</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="story-content">
					<!-- single-story -->
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2019</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
							<h3>Februari 2019 s/d Juli 2020</h3>
							<p> Mengajar Bidang Studi TIK - SMA Islam Ummul Barahin</p>
						</div>
					</div>
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2019</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
							<h3>Tahun 2019 </h3>
							<p> Petugas KPPS</p>
						</div>
					</div>
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">2020</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
							<h3>Juli 2020 s/d Juli 2021</h3>
							<p>Staff Desain Grafis ACMC - Assyifa Boarding School</p>

						</div>
					</div>
					<!-- single-story -->
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">2022</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
							<h3>Desember 2022 s/d Maret 2023</h3>
							<p>Staf Desain Grafis - PT Cheng Zhang Wang</p>
						</div>
					</div>
					<!-- single-story -->

					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2023</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
							<h3>Maret 2023 s/d April 2023</h3>
							<p>Menjadi Petugas KPU Pantarlih Data Pemilu</p>
						</div>
					</div>
					<div class="single-story">
						<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2017</span>
						<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
							<h3>April 2023 s/d April 2024</h3>
							<p>Staf Desain Grafis - Pusat Digital Printing</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php' ?>