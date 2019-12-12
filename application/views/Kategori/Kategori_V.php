<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Lukaririnki</title>

	<!-- Import Jquery-3.4.1 -->
	<script src="<?php echo base_url('assets/jquery/jquery-3.4.1.js') ?>"></script><!-- Compiled and minified CSS -->
	
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo base_url('assets/materialize/css/materialize.min.css') ?>">

	<!-- Import CSS -->
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo base_url('assets/css/style.css') ?>"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
</head>
<body>
	<!-- navbar -->
	<div class="navbar-fixed">
        <nav class=" blue darken-1">
         	<div class="container">
            	<div class="nav-wrapper">
					<a href="#home" class="brand-logo">LAB ICT</a> 
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#about">About Us</a></li>
						<li><a href="#clients">Clients</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#portofolio">Portofolio</a></li>
						<li><a href="#contact">Contact Us</a></li>
              		</ul>
            	</div>
          	</div>
        </nav>
    </div>


    <!-- sidenav -->
    	<ul class="sidenav" id="mobile-nav">
			<li><a href="#about">About Us</a></li>
			<li><a href="#clients">Clients</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#portofolio">Portofolio</a></li>
			<li><a href="#contact">Contact Us</a></li>
      	</ul>

	<!-- Content -->
	<section id="contacts" class="contact grey lighten-3 scrollspy" style="margin: 1%;">
            <div class="container">
              <h3 class="light grey-text text-darken-3 center">List Kategori</h3>
                <div class="row">
				
				<button class="ftbiru col m4 s12 blue btn waves-effect waves-light" href="<?php echo site_url(''); ?>">Tambah</button>
				
				<br>
				<?php 

					// if($mhs){
						echo "<table border='1' cellpading='5' cellspacing='0'>";
						echo "<tr>
								<th>No.</th>
								<th>Kd Kategori</th>
								<th>Nama Kategori</th>
								<th>Aksi</th>
							</tr>";	
						$no=$page+1;
						foreach ($result as $content) {
							echo "<tr>
									<td>$no.</td>
									<td>$content->KdKategori</td>
									<td>$content->NmKategori</td>
									<td>".
									anchor('#'.$content->KdKategori, 'Delete', 'title="Delete data?"') . " | " . anchor('#'.$content->KdKategori, 'Update', 'title="Update data?"') . "</td>
									</tr>";
									$no++;
						}
						echo "</table><br>";
						echo "Halaman :".$links; echo "<br>";
					// }
				?>
				</div>
			
		  </section>
		  
	

</body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>			
	
	<!--JavaScript at end of body for optimized loading-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">

		const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);



    </script>
	
</body>
</html>
