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
              <h3 class="light grey-text text-darken-3 center">Barang</h3>
                <div class="row">
				
				<button href="" class="ftbiru col m4 s12 blue btn waves-effect waves-light">Tambah</button>
				
				<br>
				<?php 

						
							echo "<table class='striped'>";
							echo "<thead>";
							echo "<tr>
									<th>No.</th>
									<th>Kd Barang</th>
									<th>Nama Barang</th>
									<th>harga</th>
									<th>Merk</th>
									<th>Stock</th>
									<th>Aksi</th>
								</tr>";	
							echo "</thead>";
							$no=$page+1;
							foreach ($result as $content) {
								echo "<tbody>";
								echo "<tr>
										<td>$no.</td>
										<td>$content->KdBrg</td>
										<td>$content->NmBrg</td>
										<td>$content->Satuan</td>
										<td>$content->HargaBrg</td>
										<td>$content->Stok</td>
										<td>".
										anchor('#'.$content->KdBrg, 'Delete', 'title="Delete data?"') . " | " . anchor('#'.$content->KdBrg, 'Update', 'title="Update data?"') . "</td>
										</tr>";
										$no++;
								echo "</tbody>";
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
