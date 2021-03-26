	<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
$id = $_GET['id'];
//conditions
if ((!$_GET['id'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}
?>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perspective Seat Preview | Codrops</title>
		<meta name="description" content="An experimental demo where a 3D perspective preview is shown for a selected seat in a cinema room." />
		<meta name="keywords" content="cinema, seat booking, seating plan, perspective, 3d" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr-custom.js"></script>
	</head>
	<body>

		<header class="header">
			<div class="codrops-links">
				<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Development/LineMenuStyles/" title="Previous Demo"><span>Previous Demo</span></a>
				<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=25885" title="Back to the article"><span>Back to the Codrops article</span></a>
			</div>
			<h1 class="header__title">Cinema Seat Preview</h1>
			<p class="note note--screen">Please view on a larger screen</p>
			<p class="note note--support">Sorry, but your browser doesn't support preserve-3d!</p>
		</header>
		<div class="container">
			<div class="cube">
				<div class="cube__side cube__side--front"></div>
				<div class="cube__side cube__side--back">
					<div class="screen">
						<div class="video">
							<video class="video-player" src="media/<?php echo$id?>.mp4" preload="auto" poster="media/<?php echo$id?>.jpg">
								<source src="media/<?php echo$id?>.ogg" type='video/ogg; codecs="theora, vorbis"'>
								<source src="media/<?php echo$id?>.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
								<p>Sorry, but your browser does not support this video format.</p>
							</video>
							<button class="action action--play action--shown" aria-label="Play Video"></button>
						</div>
						<div class="intro intro--shown">
							<div class="intro__side">
								<h2 class="intro__title">
									<span class="intro__up"><em>Buckle up</em></span>
									<span class="intro__down"><?php echo$id?> <span class="intro__partial"><em></em> <a href="https://durian.blender.org/">The Majestic Presents</a></span></span>
								</h2>
							</div>
							<div class="intro__side">
								<button class="action action--seats" style="color:white	">Select your seats</button>
							</div>
						</div>
					</div>
				</div>
				<div class="cube__side cube__side--left"></div>
				<div class="cube__side cube__side--right"></div>
				<div class="cube__side cube__side--top"></div>
				<div class="rows rows--large">
					
					<div class="row">
						<div onclick="myFunction('A1')" data-seat="A1" class="row__seat"></div>
						<div onclick="myFunction('A2')" data-seat="A2" class="row__seat"></div>
						<div onclick="myFunction('A3')" data-seat="A3" class="row__seat"></div>
						<div onclick="myFunction('A4')" data-seat="A4" class="row__seat"></div>
						<div onclick="myFunction('A5')" data-seat="A5" class="row__seat"></div>
						<div onclick="myFunction('A6')" data-seat="A6" class="row__seat"></div>
						<div onclick="myFunction('A7')" data-seat="A7" class="row__seat"></div>
						<div onclick="myFunction('A8')" data-seat="A8" class="row__seat"></div>
						<div onclick="myFunction('A9')" data-seat="A9" class="row__seat"></div>
						<div onclick="myFunction('A10')" data-seat="A10" class="row__seat"></div>
						<div onclick="myFunction('A11')" data-seat="A11" class="row__seat"></div>
						<div onclick="myFunction('A12')" data-seat="A12" class="row__seat"></div>
						<div onclick="myFunction('A13')" data-seat="A13" class="row__seat"></div>
						<div onclick="myFunction('A14')" data-seat="A14" class="row__seat"></div>
						<div onclick="myFunction('A15')" data-seat="A15" class="row__seat"></div>
						<div onclick="myFunction('A16')" data-seat="A16" class="row__seat"></div>
						<div onclick="myFunction('A17')" data-seat="A17" class="row__seat"></div>
						<div onclick="myFunction('A18')" data-seat="A18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('B1')" data-seat="B1" class="row__seat"></div>
						<div onclick="myFunction('B2')" data-seat="B2" class="row__seat"></div>
						<div onclick="myFunction('B3')" data-seat="B3" class="row__seat"></div>
						<div onclick="myFunction('B4')" data-seat="B4" class="row__seat"></div>
						<div onclick="myFunction('B5')" data-seat="B5" class="row__seat"></div>
						<div onclick="myFunction('B6')" data-seat="B6" class="row__seat"></div>
						<div onclick="myFunction('B7')" data-seat="B7" class="row__seat"></div>
						<div onclick="myFunction('B8')" data-seat="B8" class="row__seat"></div>
						<div onclick="myFunction('B9')" data-seat="B9" class="row__seat"></div>
						<div onclick="myFunction('B10')" data-seat="B10" class="row__seat"></div>
						<div onclick="myFunction('B11')" data-seat="B11" class="row__seat"></div>
						<div onclick="myFunction('B12')" data-seat="B12" class="row__seat"></div>
						<div onclick="myFunction('B13')" data-seat="B13" class="row__seat"></div>
						<div onclick="myFunction('B14')" data-seat="B14" class="row__seat"></div>
						<div onclick="myFunction('B15')" data-seat="B15" class="row__seat"></div>
						<div onclick="myFunction('B16')" data-seat="B16" class="row__seat"></div>
						<div onclick="myFunction('B17')" data-seat="B17" class="row__seat"></div>
						<div onclick="myFunction('B18')" data-seat="B18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('C1')"  data-seat="C1" class="row__seat"></div>
						<div onclick="myFunction('C2')" data-seat="C2" class="row__seat"></div>
						<div onclick="myFunction('C3')"  data-seat="C3" class="row__seat"></div>
						<div onclick="myFunction('C4')" data-seat="C4" class="row__seat"></div>
						<div onclick="myFunction('C5')"  data-seat="C5" class="row__seat"></div>
						<div onclick="myFunction('C6')"  data-seat="C6" class="row__seat"></div>
						<div onclick="myFunction('C7')"  data-seat="C7" class="row__seat"></div>
						<div onclick="myFunction('C8')"  data-seat="C8" class="row__seat"></div>
						<div onclick="myFunction('C9')" data-seat="C9" class="row__seat"></div>
						<div onclick="myFunction('C10')" data-seat="C10" class="row__seat"></div>
						<div onclick="myFunction('C11')"  data-seat="C11" class="row__seat"></div>
						<div onclick="myFunction('C12')" data-seat="C12" class="row__seat"></div>
						<div onclick="myFunction('C13')" data-seat="C13" class="row__seat"></div>
						<div onclick="myFunction('C14')" data-seat="C14" class="row__seat"></div>
						<div onclick="myFunction('C15')" data-seat="C15" class="row__seat"></div>
						<div onclick="myFunction('C16')" data-seat="C16" class="row__seat"></div>
						<div onclick="myFunction('C17')"  data-seat="C17" class="row__seat"></div>
						<div onclick="myFunction('C18')" data-seat="C18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('D1')"  data-seat="D1" class="row__seat"></div>
						<div onclick="myFunction('D2')" data-seat="D2" class="row__seat"></div>
						<div onclick="myFunction('D3')"  data-seat="D3" class="row__seat"></div>
						<div onclick="myFunction('D4')" data-seat="D4" class="row__seat"></div>
						<div onclick="myFunction('D5')"  data-seat="D5" class="row__seat"></div>
						<div onclick="myFunction('D6')"  data-seat="D6" class="row__seat"></div>
						<div onclick="myFunction('D7')"  data-seat="D7" class="row__seat"></div>
						<div onclick="myFunction('D8')"  data-seat="D8" class="row__seat"></div>
						<div onclick="myFunction('D9')" data-seat="D9" class="row__seat"></div>
						<div onclick="myFunction('D10')" data-seat="D10" class="row__seat"></div>
						<div onclick="myFunction('D11')"  data-seat="D11" class="row__seat"></div>
						<div onclick="myFunction('D12')" data-seat="D12" class="row__seat"></div>
						<div onclick="myFunction('D13')" data-seat="D13" class="row__seat"></div>
						<div onclick="myFunction('D14')" data-seat="D14" class="row__seat"></div>
						<div onclick="myFunction('D15')" data-seat="D15" class="row__seat"></div>
						<div onclick="myFunction('D16')" data-seat="D16" class="row__seat"></div>
						<div onclick="myFunction('D17')"  data-seat="D17" class="row__seat"></div>
						<div onclick="myFunction('D18')" data-seat="D18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('E1')" data-seat="E1" class="row__seat"></div>
						<div onclick="myFunction('E2')"data-seat="E2" class="row__seat"></div>
						<div onclick="myFunction('E3')" data-seat="E3" class="row__seat"></div>
						<div onclick="myFunction('E4')"data-seat="E4" class="row__seat"></div>
						<div onclick="myFunction('E5')" data-seat="E5" class="row__seat"></div>
						<div onclick="myFunction('E6')" data-seat="E6" class="row__seat"></div>
						<div onclick="myFunction('E7')" data-seat="E7" class="row__seat"></div>
						<div onclick="myFunction('E8')" data-seat="E8" class="row__seat"></div>
						<div onclick="myFunction('E9')"data-seat="E9" class="row__seat"></div>
						<div onclick="myFunction('E10')"data-seat="E10" class="row__seat"></div>
						<div onclick="myFunction('E11')" data-seat="E11" class="row__seat"></div>
						<div onclick="myFunction('E12')"data-seat="E12" class="row__seat"></div>
						<div onclick="myFunction('E13')"data-seat="E13" class="row__seat"></div>
						<div onclick="myFunction('E14')"data-seat="E14" class="row__seat"></div>
						<div onclick="myFunction('E15')"data-seat="E15" class="row__seat"></div>
						<div onclick="myFunction('E16')"data-seat="E16" class="row__seat"></div>
						<div onclick="myFunction('E17')" data-seat="E17" class="row__seat"></div>
						<div onclick="myFunction('E18')"data-seat="E18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('F1')"  data-seat="F1" class="row__seat"></div>
						<div onclick="myFunction('F2')" data-seat="F2" class="row__seat"></div>
						<div onclick="myFunction('F3')"  data-seat="F3" class="row__seat"></div>
						<div onclick="myFunction('F4')" data-seat="F4" class="row__seat"></div>
						<div onclick="myFunction('F5')"  data-seat="F5" class="row__seat"></div>
						<div onclick="myFunction('F6')"  data-seat="F6" class="row__seat"></div>
						<div onclick="myFunction('F7')"  data-seat="F7" class="row__seat"></div>
						<div onclick="myFunction('F8')"  data-seat="F8" class="row__seat"></div>
						<div onclick="myFunction('F9')" data-seat="F9" class="row__seat"></div>
						<div onclick="myFunction('F10')" data-seat="F10" class="row__seat"></div>
						<div onclick="myFunction('F11')"  data-seat="F11" class="row__seat"></div>
						<div onclick="myFunction('F12')" data-seat="F12" class="row__seat"></div>
						<div onclick="myFunction('F13')" data-seat="F13" class="row__seat"></div>
						<div onclick="myFunction('F14')" data-seat="F14" class="row__seat"></div>
						<div onclick="myFunction('F15')" data-seat="F15" class="row__seat"></div>
						<div onclick="myFunction('F16')" data-seat="F16" class="row__seat"></div>
						<div onclick="myFunction('F17')"  data-seat="F17" class="row__seat"></div>
						<div onclick="myFunction('F18')" data-seat="F18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('G1')"  data-seat="G1" class="row__seat"></div>
						<div onclick="myFunction('G2')" data-seat="G2" class="row__seat"></div>
						<div onclick="myFunction('G3')"  data-seat="G3" class="row__seat"></div>
						<div onclick="myFunction('G4')" data-seat="G4" class="row__seat"></div>
						<div onclick="myFunction('G5')"  data-seat="G5" class="row__seat"></div>
						<div onclick="myFunction('G6')"  data-seat="G6" class="row__seat"></div>
						<div onclick="myFunction('G7')"  data-seat="G7" class="row__seat"></div>
						<div onclick="myFunction('G8')"  data-seat="G8" class="row__seat"></div>
						<div onclick="myFunction('G9')" data-seat="G9" class="row__seat"></div>
						<div onclick="myFunction('G10')" data-seat="G10" class="row__seat"></div>
						<div onclick="myFunction('G11')"  data-seat="G11" class="row__seat"></div>
						<div onclick="myFunction('G12')" data-seat="G12" class="row__seat"></div>
						<div onclick="myFunction('G13')" data-seat="G13" class="row__seat"></div>
						<div onclick="myFunction('G14')" data-seat="G14" class="row__seat"></div>
						<div onclick="myFunction('G15')" data-seat="G15" class="row__seat"></div>
						<div onclick="myFunction('G16')" data-seat="G16" class="row__seat"></div>
						<div onclick="myFunction('G17')"  data-seat="G17" class="row__seat"></div>
						<div onclick="myFunction('G18')" data-seat="G18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('H1')"  data-seat="H1" class="row__seat"></div>
						<div onclick="myFunction('H2')" data-seat="H2" class="row__seat"></div>
						<div onclick="myFunction('H3')"  data-seat="H3" class="row__seat"></div>
						<div onclick="myFunction('H4')" data-seat="H4" class="row__seat"></div>
						<div onclick="myFunction('H5')"  data-seat="H5" class="row__seat"></div>
						<div onclick="myFunction('H6')"  data-seat="H6" class="row__seat"></div>
						<div onclick="myFunction('H7')"  data-seat="H7" class="row__seat"></div>
						<div onclick="myFunction('H8')"  data-seat="H8" class="row__seat"></div>
						<div onclick="myFunction('H9')" data-seat="H9" class="row__seat"></div>
						<div onclick="myFunction('H10')" data-seat="H10" class="row__seat"></div>
						<div onclick="myFunction('H11')"  data-seat="H11" class="row__seat"></div>
						<div onclick="myFunction('H12')" data-seat="H12" class="row__seat"></div>
						<div onclick="myFunction('H13')" data-seat="H13" class="row__seat"></div>
						<div onclick="myFunction('H14')" data-seat="H14" class="row__seat"></div>
						<div onclick="myFunction('H15')" data-seat="H15" class="row__seat"></div>
						<div onclick="myFunction('H16')" data-seat="H16" class="row__seat"></div>
						<div onclick="myFunction('H17')"  data-seat="H17" class="row__seat"></div>
						<div onclick="myFunction('H18')" data-seat="H18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('I1')"  data-seat="I1" class="row__seat"></div>
						<div onclick="myFunction('I2')" data-seat="I2" class="row__seat"></div>
						<div onclick="myFunction('I3')"  data-seat="I3" class="row__seat"></div>
						<div onclick="myFunction('I4')" data-seat="I4" class="row__seat"></div>
						<div onclick="myFunction('I5')"  data-seat="I5" class="row__seat"></div>
						<div onclick="myFunction('I6')"  data-seat="I6" class="row__seat"></div>
						<div onclick="myFunction('I7')"  data-seat="I7" class="row__seat"></div>
						<div onclick="myFunction('I8')"  data-seat="I8" class="row__seat"></div>
						<div onclick="myFunction('I9')" data-seat="I9" class="row__seat"></div>
						<div onclick="myFunction('I10')" data-seat="I10" class="row__seat"></div>
						<div onclick="myFunction('I11')"  data-seat="I11" class="row__seat"></div>
						<div onclick="myFunction('I12')" data-seat="I12" class="row__seat"></div>
						<div onclick="myFunction('I13')" data-seat="I13" class="row__seat"></div>
						<div onclick="myFunction('I14')" data-seat="I14" class="row__seat"></div>
						<div onclick="myFunction('I15')" data-seat="I15" class="row__seat"></div>
						<div onclick="myFunction('I16')" data-seat="I16" class="row__seat"></div>
						<div onclick="myFunction('I17')"  data-seat="I17" class="row__seat"></div>
						<div onclick="myFunction('I18')" data-seat="I18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('J1')"  data-seat="J1" class="row__seat"></div>
						<div onclick="myFunction('J2')" data-seat="J2" class="row__seat"></div>
						<div onclick="myFunction('J3')"  data-seat="J3" class="row__seat"></div>
						<div onclick="myFunction('J4')" data-seat="J4" class="row__seat"></div>
						<div onclick="myFunction('J5')"  data-seat="J5" class="row__seat"></div>
						<div onclick="myFunction('J6')"  data-seat="J6" class="row__seat"></div>
						<div onclick="myFunction('J7')"  data-seat="J7" class="row__seat"></div>
						<div onclick="myFunction('J8')"  data-seat="J8" class="row__seat"></div>
						<div onclick="myFunction('J9')" data-seat="J9" class="row__seat"></div>
						<div onclick="myFunction('J10')" data-seat="J10" class="row__seat"></div>
						<div onclick="myFunction('J11')"  data-seat="J11" class="row__seat"></div>
						<div onclick="myFunction('J12')" data-seat="J12" class="row__seat"></div>
						<div onclick="myFunction('J13')" data-seat="J13" class="row__seat"></div>
						<div onclick="myFunction('J14')" data-seat="J14" class="row__seat"></div>
						<div onclick="myFunction('J15')" data-seat="J15" class="row__seat"></div>
						<div onclick="myFunction('J16')" data-seat="J16" class="row__seat"></div>
						<div onclick="myFunction('J17')"  data-seat="J17" class="row__seat"></div>
						<div onclick="myFunction('J18')" data-seat="J18" class="row__seat"></div>
					</div>
					<div class="row">
						 <div onclick="myFunction('K1')" data-seat="K1" class="row__seat"></div>
						 <div onclick="myFunction('K2')" data-seat="K2" class="row__seat"></div>
						 <div onclick="myFunction('K3')" data-seat="K3" class="row__seat"></div>
						 <div onclick="myFunction('K4')" data-seat="K4" class="row__seat"></div>
						 <div onclick="myFunction('K5')" data-seat="K5" class="row__seat"></div>
						 <div onclick="myFunction('K6')" data-seat="K6" class="row__seat"></div>
						 <div onclick="myFunction('K7')" data-seat="K7" class="row__seat"></div>
						 <div onclick="myFunction('K8')" data-seat="K8" class="row__seat"></div>
						 <div onclick="myFunction('K9')" data-seat="K9" class="row__pseat"></div>
						 <div onclick="myFunction('K10')" data-seat="K10" class="row__seat"></div>
						 <div onclick="myFunction('K11')" data-seat="K11" class="row__seat"></div>
						 <div onclick="myFunction('K12')" data-seat="K12" class="row__seat"></div>
						 <div onclick="myFunction('K13')" data-seat="K13" class="row__seat"></div>
						 <div onclick="myFunction('K14')" data-seat="K14" class="row__seat"></div>
						 <div onclick="myFunction('K15')" data-seat="K15" class="row__seat"></div>
						 <div onclick="myFunction('K16')" data-seat="K16" class="row__seat"></div>
						 <div onclick="myFunction('K17')" data-seat="K17" class="row__seat"></div>
						<div onclick="myFunction('K18')" data-seat="K18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('L1')" data-seat="L1" class="row__seat"></div>
						<div onclick="myFunction('L2')" data-seat="L2" class="row__seat"></div>
						<div onclick="myFunction('L3')" data-seat="L3" class="row__seat"></div>
						<div onclick="myFunction('L4')" data-seat="L4" class="row__seat"></div>
						<div onclick="myFunction('L5')" data-seat="L5" class="row__seat"></div>
						<div onclick="myFunction('L6')" data-seat="L6" class="row__seat"></div>
						<div onclick="myFunction('L7')" data-seat="L7" class="row__seat"></div>
						<div onclick="myFunction('L8')" data-seat="L8" class="row__seat"></div>
						<div onclick="myFunction('L9')" data-seat="L9" class="row__seat"></div>
						<div onclick="myFunction('L10')" data-seat="L10" class="row__seat"></div>
						<div onclick="myFunction('L11')" data-seat="L11" class="row__seat"></div>
						<div onclick="myFunction('L12')" data-seat="L12" class="row__seat"></div>
						<div onclick="myFunction('L13')" data-seat="L13" class="row__seat"></div>
						<div onclick="myFunction('L14')" data-seat="L14" class="row__seat"></div>
						<div onclick="myFunction('L15')" data-seat="L15" class="row__seat"></div>
						<div onclick="myFunction('L16')" data-seat="L16" class="row__seat"></div>
						<div onclick="myFunction('L17')" data-seat="L17" class="row__seat"></div>
						<div onclick="myFunction('L18')" data-seat="L18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('M1')"  data-seat="M1" class="row__seat"></div>
						<div onclick="myFunction('M2')"  data-seat="M2" class="row__seat"></div>
						<div onclick="myFunction('M3')"  data-seat="M3" class="row__seat"></div>
						<div onclick="myFunction('M4')"  data-seat="M4" class="row__seat"></div>
						<div onclick="myFunction('M5')"  data-seat="M5" class="row__seat"></div>
						<div onclick="myFunction('M6')"  data-seat="M6" class="row__seat"></div>
						<div onclick="myFunction('M7')"  data-seat="M7" class="row__seat"></div>
						<div onclick="myFunction('M8')"  data-seat="M8" class="row__seat"></div>
						<div onclick="myFunction('M9')"  data-seat="M9" class="row__seat"></div>
						<div onclick="myFunction('M10')" data-seat="M10" class="row__seat"></div>
						<div onclick="myFunction('M11')" data-seat="M11" class="row__seat"></div>
						<div onclick="myFunction('M12')" data-seat="M12" class="row__seat"></div>
						<div onclick="myFunction('M13')" data-seat="M13" class="row__seat"></div>
						<div onclick="myFunction('M14')" data-seat="M14" class="row__seat"></div>
						<div onclick="myFunction('M15')" data-seat="M15" class="row__seat"></div>
						<div onclick="myFunction('M16')" data-seat="M16" class="row__seat"></div>
						<div onclick="myFunction('M17')" data-seat="M17" class="row__seat"></div>
						<div onclick="myFunction('M18')" data-seat="M18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('N1')" data-seat="N1" class="row__seat"></div>
						<div onclick="myFunction('N2')" data-seat="N2" class="row__seat"></div>
						<div onclick="myFunction('N3')" data-seat="N3" class="row__seat"></div>
						<div onclick="myFunction('N4')" data-seat="N4" class="row__seat"></div>
						<div onclick="myFunction('N5')" data-seat="N5" class="row__seat"></div>
						<div onclick="myFunction('N6')" data-seat="N6" class="row__seat"></div>
						<div onclick="myFunction('N7')" data-seat="N7" class="row__seat"></div>
						<div onclick="myFunction('N8')" data-seat="N8" class="row__seat"></div>
						<div onclick="myFunction('N9')" data-seat="N9" class="row__seat"></div>
						<div onclick="myFunction('N10')" data-seat="N10" class="row__seat"></div>
						<div onclick="myFunction('N11')" data-seat="N11" class="row__seat"></div>
						<div onclick="myFunction('N12')" data-seat="N12" class="row__seat"></div>
						<div onclick="myFunction('N13')" data-seat="N13" class="row__seat"></div>
						<div onclick="myFunction('N14')" data-seat="N14" class="row__seat"></div>
						<div onclick="myFunction('N15')" data-seat="N15" class="row__seat"></div>
						<div onclick="myFunction('N16')" data-seat="N16" class="row__seat"></div>
						<div onclick="myFunction('N17')" data-seat="N17" class="row__seat"></div>
						<div onclick="myFunction('N18')" data-seat="N18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('O1')" data-seat="O1" class="row__seat"></div>
						<div onclick="myFunction('O2')" data-seat="O2" class="row__seat"></div>
						<div onclick="myFunction('O3')" data-seat="O3" class="row__seat"></div>
						<div onclick="myFunction('O4')" data-seat="O4" class="row__seat"></div>
						<div onclick="myFunction('O5')" data-seat="O5" class="row__seat"></div>
						<div onclick="myFunction('O6')" data-seat="O6" class="row__seat"></div>
						<div onclick="myFunction('O7')" data-seat="O7" class="row__seat"></div>
						<div onclick="myFunction('O8')" data-seat="O8" class="row__seat"></div>
						<div onclick="myFunction('O9')" data-seat="O9" class="row__seat"></div>
						<div onclick="myFunction('O10')" data-seat="O10" class="row__seat"></div>
						<div onclick="myFunction('O11')" data-seat="O11" class="row__seat"></div>
						<div onclick="myFunction('O12')" data-seat="O12" class="row__seat"></div>
						<div onclick="myFunction('O13')" data-seat="O13" class="row__seat"></div>
						<div onclick="myFunction('O14')" data-seat="O14" class="row__seat"></div>
						<div onclick="myFunction('O15')" data-seat="O15" class="row__seat"></div>
						<div onclick="myFunction('O16')" data-seat="O16" class="row__seat"></div>
						<div onclick="myFunction('O17')" data-seat="O17" class="row__seat"></div>
						<div onclick="myFunction('O18')" data-seat="O18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('P1')" data-seat="P1" class="row__seat"></div>
						<div onclick="myFunction('P2')" data-seat="P2" class="row__seat"></div>
						<div onclick="myFunction('P3')" data-seat="P3" class="row__seat"></div>
						<div onclick="myFunction('P4')" data-seat="P4" class="row__seat"></div>
						<div onclick="myFunction('P5')" data-seat="P5" class="row__seat"></div>
						<div onclick="myFunction('P6')" data-seat="P6" class="row__seat"></div>
						<div onclick="myFunction('P7')" data-seat="P7" class="row__seat"></div>
						<div onclick="myFunction('P8')" data-seat="P8" class="row__seat"></div>
						<div onclick="myFunction('P9')" data-seat="P9" class="row__seat"></div>
						<div onclick="myFunction('P10')" data-seat="P10" class="row__seat"></div>
						<div onclick="myFunction('P11')" data-seat="P11" class="row__seat"></div>
						<div onclick="myFunction('P12')" data-seat="P12" class="row__seat"></div>
						<div onclick="myFunction('P13')" data-seat="P13" class="row__seat"></div>
						<div onclick="myFunction('P14')" data-seat="P14" class="row__seat"></div>
						<div onclick="myFunction('P15')" data-seat="P15" class="row__seat"></div>
						<div onclick="myFunction('P16')" data-seat="P16" class="row__seat"></div>
						<div onclick="myFunction('P17')" data-seat="P17" class="row__seat"></div>
						<div onclick="myFunction('P18')" data-seat="P18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('Q1')" data-seat="Q1" class="row__seat"></div>
						<div onclick="myFunction('Q2')" data-seat="Q2" class="row__seat"></div>
						<div onclick="myFunction('Q3')" data-seat="Q3" class="row__seat"></div>
						<div onclick="myFunction('Q4')" data-seat="Q4" class="row__seat"></div>
						<div onclick="myFunction('Q5')" data-seat="Q5" class="row__seat"></div>
						<div onclick="myFunction('Q6')" data-seat="Q6" class="row__seat"></div>
						<div onclick="myFunction('Q7')" data-seat="Q7" class="row__seat"></div>
						<div onclick="myFunction('Q8')" data-seat="Q8" class="row__seat"></div>
						<div onclick="myFunction('Q9')" data-seat="Q9" class="row__seat"></div>
						<div onclick="myFunction('Q10')" data-seat="Q10" class="row__seat"></div>
						<div onclick="myFunction('Q11')" data-seat="Q11" class="row__seat"></div>
						<div onclick="myFunction('Q12')" data-seat="Q12" class="row__seat"></div>
						<div onclick="myFunction('Q13')" data-seat="Q13" class="row__seat"></div>
						<div onclick="myFunction('Q14')" data-seat="Q14" class="row__seat"></div>
						<div onclick="myFunction('Q15')" data-seat="Q15" class="row__seat"></div>
						<div onclick="myFunction('Q16')" data-seat="Q16" class="row__seat"></div>
						<div onclick="myFunction('Q17')" data-seat="Q17" class="row__seat"></div>
						<div onclick="myFunction('Q18')" data-seat="Q18" class="row__seat"></div>
					</div>
					<div class="row">
						<div onclick="myFunction('R1')" data-seat="R1" class="row__seat"></div>
						<div onclick="myFunction('R2')" data-seat="R2" class="row__seat"></div>
						<div onclick="myFunction('R3')" data-seat="R3" class="row__seat"></div>
						<div onclick="myFunction('R4')" data-seat="R4" class="row__seat"></div>
						<div onclick="myFunction('R5')" data-seat="R5" class="row__seat"></div>
						<div onclick="myFunction('R6')" data-seat="R6" class="row__seat"></div>
						<div onclick="myFunction('R7')" data-seat="R7" class="row__seat"></div>
						<div onclick="myFunction('R8')" data-seat="R8" class="row__seat"></div>
						<div onclick="myFunction('R9')" data-seat="R9" class="row__seat"></div>
						<div onclick="myFunction('R10')" data-seat="R10" class="row__seat"></div>
						<div onclick="myFunction('R11')" data-seat="R11" class="row__seat"></div>
						<div onclick="myFunction('R12')" data-seat="R12" class="row__seat"></div>
						<div onclick="myFunction('R13')" data-seat="R13" class="row__seat"></div>
						<div onclick="myFunction('R14')" data-seat="R14" class="row__seat"></div>
						<div onclick="myFunction('R15')" data-seat="R15" class="row__seat"></div>
						<div onclick="myFunction('R16')" data-seat="R16" class="row__seat"></div>
						<div onclick="myFunction('R17')" data-seat="R17" class="row__seat"></div>
						<div onclick="myFunction('R18')"  data-seat="R18" class="row__seat"></div>
					</div>
				</div>
				<!-- /rows -->
			</div><!-- /cube -->
		</div><!-- /container -->
		<div class="plan">
			<h3 class="plan__title">Seating Plan</h3>
			<div class="rows rows--mini">
				 <div class="row">
					<div onclick="myFunction('A1')" class="row__seat tooltip" data-tooltip="A1"></div>
					<div  onclick="myFunction('A2')" class="row__seat tooltip" data-tooltip="A2"></div>
					<div  onclick="myFunction('A3')" class="row__seat tooltip" data-tooltip="A3"></div>
					<div  onclick="myFunction('A4')" class="row__seat tooltip" data-tooltip="A4"></div>
					<div  onclick="myFunction('A5')" class="row__seat tooltip" data-tooltip="A5"></div>
					<div  onclick="myFunction('A6')" class="row__seat tooltip" data-tooltip="A6"></div>
					<div  onclick="myFunction('A7')" class="row__seat tooltip" data-tooltip="A7"></div>
					<div  onclick="myFunction('A8')" class="row__seat tooltip" data-tooltip="A8"></div>
					<div  onclick="myFunction('A9')" class="row__seat tooltip" data-tooltip="A9"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('A13')" class="row__seat tooltip" data-tooltip="A13"></div>
					<div  onclick="myFunction('A14')" class="row__seat tooltip" data-tooltip="A14"></div>
					<div  onclick="myFunction('A15')" class="row__seat tooltip" data-tooltip="A15"></div>
					<div  onclick="myFunction('A16')" class="row__seat tooltip" data-tooltip="A16"></div>
					<div  onclick="myFunction('A17')" class="row__seat tooltip" data-tooltip="A17"></div>
					<div  onclick="myFunction('A18')" class="row__seat tooltip" data-tooltip="A18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('B1')" class="row__seat tooltip" data-tooltip="B1"></div>
					<div  onclick="myFunction('B2')" class="row__seat tooltip" data-tooltip="B2"></div>
					<div  onclick="myFunction('B3')" class="row__seat tooltip" data-tooltip="B3"></div>
					<div  onclick="myFunction('B4')" class="row__seat tooltip" data-tooltip="B4"></div>
					<div  onclick="myFunction('B5')" class="row__seat tooltip" data-tooltip="B5"></div>
					<div  onclick="myFunction('B6')" class="row__seat tooltip" data-tooltip="B6"></div>
					<div  onclick="myFunction('B7')" class="row__seat tooltip" data-tooltip="B7"></div>
					<div  onclick="myFunction('B8')" class="row__seat tooltip" data-tooltip="B8"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('B11')" class="row__seat tooltip" data-tooltip="B11"></div>
					<div  onclick="myFunction('B12')" class="row__seat tooltip" data-tooltip="B12"></div>
					<div  onclick="myFunction('B13')" class="row__seat tooltip" data-tooltip="B13"></div>
					<div  onclick="myFunction('B14')" class="row__seat tooltip" data-tooltip="B14"></div>
					<div  onclick="myFunction('B15')" class="row__seat tooltip" data-tooltip="B15"></div>
					<div  onclick="myFunction('B16')" class="row__seat tooltip" data-tooltip="B16"></div>
					<div  onclick="myFunction('B17')" class="row__seat tooltip" data-tooltip="B17"></div>
					<div  onclick="myFunction('B18')" class="row__seat tooltip" data-tooltip="B18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('C1')" class="row__seat tooltip" data-tooltip="C1"></div>
					<div  onclick="myFunction('C2')" class="row__seat tooltip" data-tooltip="C2"></div>
					<div  onclick="myFunction('C3')" class="row__seat tooltip" data-tooltip="C3"></div>
					<div  onclick="myFunction('C4')" class="row__seat tooltip" data-tooltip="C4"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('C8')" class="row__seat tooltip" data-tooltip="C8"></div>
					<div  onclick="myFunction('C9')" class="row__seat tooltip" data-tooltip="C9"></div>
					<div  onclick="myFunction('C10')" class="row__seat tooltip" data-tooltip="C10"></div>
					<div  onclick="myFunction('C11')" class="row__seat tooltip" data-tooltip="C11"></div>
					<div  onclick="myFunction('C12')" class="row__seat tooltip" data-tooltip="C12"></div>
					<div  onclick="myFunction('C13')" class="row__seat tooltip" data-tooltip="C13"></div>
					<div  onclick="myFunction('C14')" class="row__seat tooltip" data-tooltip="C14"></div>
					<div  onclick="myFunction('C15')" class="row__seat tooltip" data-tooltip="C15"></div>
					<div  onclick="myFunction('C16')" class="row__seat tooltip" data-tooltip="C16"></div>
					<div  onclick="myFunction('C17')" class="row__seat tooltip" data-tooltip="C17"></div>
					<div  onclick="myFunction('C18')" class="row__seat tooltip" data-tooltip="C18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('D1')" class="row__seat tooltip" data-tooltip="D1"></div>
					<div  onclick="myFunction('D2')" class="row__seat tooltip" data-tooltip="D2"></div>
					<div  onclick="myFunction('D3')" class="row__seat tooltip" data-tooltip="D3"></div>
					<div  onclick="myFunction('D4')" class="row__seat tooltip" data-tooltip="D4"></div>
					<div  onclick="myFunction('D5')" class="row__seat tooltip" data-tooltip="D5"></div>
					<div  onclick="myFunction('D6')" class="row__seat tooltip" data-tooltip="D6"></div>
					<div  onclick="myFunction('D7')" class="row__seat tooltip" data-tooltip="D7"></div>
					<div  onclick="myFunction('D8')" class="row__seat tooltip" data-tooltip="D8"></div>
					<div  onclick="myFunction('D9')" class="row__seat tooltip" data-tooltip="D9"></div>
					<div  onclick="myFunction('D10')" class="row__seat tooltip" data-tooltip="D10"></div>
					<div  onclick="myFunction('D11')" class="row__seat tooltip" data-tooltip="D11"></div>
					<div  onclick="myFunction('D12')" class="row__seat tooltip" data-tooltip="D12"></div>
					<div  onclick="myFunction('D13')" class="row__seat tooltip" data-tooltip="D13"></div>
					<div  onclick="myFunction('D14')" class="row__seat tooltip" data-tooltip="D14"></div>
					<div  onclick="myFunction('D15')" class="row__seat tooltip" data-tooltip="D15"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('E1')" class="row__seat tooltip" data-tooltip="E1"></div>
					<div  onclick="myFunction('E2')" class="row__seat tooltip" data-tooltip="E2"></div>
					<div  onclick="myFunction('E3')" class="row__seat tooltip" data-tooltip="E3"></div>
					<div  onclick="myFunction('E4')" class="row__seat tooltip" data-tooltip="E4"></div>
					<div  onclick="myFunction('E5')" class="row__seat tooltip" data-tooltip="E5"></div>
					<div  onclick="myFunction('E6')" class="row__seat tooltip" data-tooltip="E6"></div>
					<div  onclick="myFunction('E7')" class="row__seat tooltip" data-tooltip="E7"></div>
					<div  onclick="myFunction('E8')" class="row__seat tooltip" data-tooltip="E8"></div>
					<div  onclick="myFunction('E9')" class="row__seat tooltip" data-tooltip="E9"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('E12')" class="row__seat tooltip" data-tooltip="E12"></div>
					<div  onclick="myFunction('E13')" class="row__seat tooltip" data-tooltip="E13"></div>
					<div  onclick="myFunction('E14')" class="row__seat tooltip" data-tooltip="E14"></div>
					<div  onclick="myFunction('E15')" class="row__seat tooltip" data-tooltip="E15"></div>
					<div  onclick="myFunction('E16')" class="row__seat tooltip" data-tooltip="E16"></div>
					<div  onclick="myFunction('E17')" class="row__seat tooltip" data-tooltip="E17"></div>
					<div  onclick="myFunction('E18')" class="row__seat tooltip" data-tooltip="E18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('F1')" class="row__seat tooltip" data-tooltip="F1"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('F3')" class="row__seat tooltip" data-tooltip="F3"></div>
					<div  onclick="myFunction('F4')" class="row__seat tooltip" data-tooltip="F4"></div>
					<div  onclick="myFunction('F5')" class="row__seat tooltip" data-tooltip="F5"></div>
					<div  onclick="myFunction('F6')" class="row__seat tooltip" data-tooltip="F6"></div>
					<div  onclick="myFunction('F7')" class="row__seat tooltip" data-tooltip="F7"></div>
					<div  onclick="myFunction('F8')" class="row__seat tooltip" data-tooltip="F8"></div>
					<div  onclick="myFunction('F9')" class="row__seat tooltip" data-tooltip="F9"></div>
					<div  onclick="myFunction('F10')" class="row__seat tooltip" data-tooltip="F10"></div>
					<div  onclick="myFunction('F11')" class="row__seat tooltip" data-tooltip="F11"></div>
					<div  onclick="myFunction('F12')" class="row__seat tooltip" data-tooltip="F12"></div>
					<div  onclick="myFunction('F13')" class="row__seat tooltip" data-tooltip="F13"></div>
					<div  onclick="myFunction('F14')" class="row__seat tooltip" data-tooltip="F14"></div>
					<div  onclick="myFunction('F15')" class="row__seat tooltip" data-tooltip="F15"></div>
					<div  onclick="myFunction('F16)" class="row__seat tooltip" data-tooltip="F16"></div>
					<div  onclick="myFunction('F17')" class="row__seat tooltip" data-tooltip="F17"></div>
					<div  onclick="myFunction('F18')" class="row__seat tooltip" data-tooltip="F18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('G1')" class="row__seat tooltip" data-tooltip="G1"></div>
					<div  onclick="myFunction('G2')" class="row__seat tooltip" data-tooltip="G2"></div>
					<div  onclick="myFunction('G3')" class="row__seat tooltip" data-tooltip="G3"></div>
					<div  onclick="myFunction('G4')" class="row__seat tooltip" data-tooltip="G4"></div>
					<div  onclick="myFunction('G5')" class="row__seat tooltip" data-tooltip="G5"></div>
					<div  onclick="myFunction('G6')" class="row__seat tooltip" data-tooltip="G6"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('G9')" class="row__seat tooltip" data-tooltip="G9"></div>
					<div  onclick="myFunction('G10')" class="row__seat tooltip" data-tooltip="G10"></div>
					<div  onclick="myFunction('G11')" class="row__seat tooltip" data-tooltip="G11"></div>
					<div  onclick="myFunction('G12')" class="row__seat tooltip" data-tooltip="G12"></div>
					<div  onclick="myFunction('G13')" class="row__seat tooltip" data-tooltip="G13"></div>
					<div  onclick="myFunction('G14')" class="row__seat tooltip" data-tooltip="G14"></div>
					<div  onclick="myFunction('G15')" class="row__seat tooltip" data-tooltip="G15"></div>
					<div  onclick="myFunction('G16')" class="row__seat tooltip" data-tooltip="G16"></div>
					<div  onclick="myFunction('G17')" class="row__seat tooltip" data-tooltip="G17"></div>
					<div  onclick="myFunction('G18')" class="row__seat tooltip" data-tooltip="G18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('H1')" class="row__seat tooltip" data-tooltip="H1"></div>
					<div  onclick="myFunction('H2')" class="row__seat tooltip" data-tooltip="H2"></div>
					<div  onclick="myFunction('H3')" class="row__seat tooltip" data-tooltip="H3"></div>
					<div  onclick="myFunction('H4')" class="row__seat tooltip" data-tooltip="H4"></div>
					<div  onclick="myFunction('H5')" class="row__seat tooltip" data-tooltip="H5"></div>
					<div  onclick="myFunction('H6')" class="row__seat tooltip" data-tooltip="H6"></div>
					<div  onclick="myFunction('H7')" class="row__seat tooltip" data-tooltip="H7"></div>
					<div  onclick="myFunction('H8')" class="row__seat tooltip" data-tooltip="H8"></div>
					<div  onclick="myFunction('H9')" class="row__seat tooltip" data-tooltip="H9"></div>
					<div  onclick="myFunction('H10')" class="row__seat tooltip" data-tooltip="H10"></div>
					<div  onclick="myFunction('H11')" class="row__seat tooltip" data-tooltip="H11"></div>
					<div  onclick="myFunction('H12')" class="row__seat tooltip" data-tooltip="H12"></div>
					<div  onclick="myFunction('H13')" class="row__seat tooltip" data-tooltip="H13"></div>
					<div  onclick="myFunction('H14')" class="row__seat tooltip" data-tooltip="H14"></div>
					<div  onclick="myFunction('H15')" class="row__seat tooltip" data-tooltip="H15"></div>
					<div  onclick="myFunction('H16')" class="row__seat tooltip" data-tooltip="H16"></div>
					<div  onclick="myFunction('H17')" class="row__seat tooltip" data-tooltip="H17"></div>
					<div  onclick="myFunction('H18')" class="row__seat tooltip" data-tooltip="H18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('I1')" class="row__seat tooltip" data-tooltip="I1"></div>
					<div  onclick="myFunction('I2')" class="row__seat tooltip" data-tooltip="I2"></div>
					<div  onclick="myFunction('I3')" class="row__seat tooltip" data-tooltip="I3"></div>
					<div  onclick="myFunction('I4')" class="row__seat tooltip" data-tooltip="I4"></div>
					<div  onclick="myFunction('I5')" class="row__seat tooltip" data-tooltip="I5"></div>
					<div  onclick="myFunction('I6')" class="row__seat tooltip" data-tooltip="I6"></div>
					<div  onclick="myFunction('I7')" class="row__seat tooltip" data-tooltip="I7"></div>
					<div  onclick="myFunction('I8')" class="row__seat tooltip" data-tooltip="I8"></div>
					<div  onclick="myFunction('I9')" class="row__seat tooltip" data-tooltip="I9"></div>
					<div  onclick="myFunction('I10')" class="row__seat tooltip" data-tooltip="I10"></div>
					<div  onclick="myFunction('I11')" class="row__seat tooltip" data-tooltip="I11"></div>
					<div  onclick="myFunction('I12')" class="row__seat tooltip" data-tooltip="I12"></div>
					<div  onclick="myFunction('I13')" class="row__seat tooltip" data-tooltip="I13"></div>
					<div  onclick="myFunction('I14')" class="row__seat tooltip" data-tooltip="I14"></div>
					<div  onclick="myFunction('I15')" class="row__seat tooltip" data-tooltip="I15"></div>
					<div  onclick="myFunction('I16')" class="row__seat tooltip" data-tooltip="I16"></div>
					<div  onclick="myFunction('I17')" class="row__seat tooltip" data-tooltip="I17"></div>
					<div  onclick="myFunction('I18')" class="row__seat tooltip" data-tooltip="I18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('J1')" class="row__seat tooltip" data-tooltip="J1"></div>
					<div  onclick="myFunction('J2')" class="row__seat tooltip" data-tooltip="J2"></div>
					<div  onclick="myFunction('J3')" class="row__seat tooltip" data-tooltip="J3"></div>
					<div  onclick="myFunction('J4')" class="row__seat tooltip" data-tooltip="J4"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div  onclick="myFunction('J8')" class="row__seat tooltip" data-tooltip="J8"></div>
					<div  onclick="myFunction('J9')" class="row__seat tooltip" data-tooltip="J9"></div>
					<div  onclick="myFunction('J10')" class="row__seat tooltip" data-tooltip="J10"></div>
					<div  onclick="myFunction('J11')" class="row__seat tooltip" data-tooltip="J11"></div>
					<div  onclick="myFunction('J12')" class="row__seat tooltip" data-tooltip="J12"></div>
					<div  onclick="myFunction('J13')" class="row__seat tooltip" data-tooltip="J13"></div>
					<div  onclick="myFunction('J14')" class="row__seat tooltip" data-tooltip="J14"></div>
					<div  onclick="myFunction('J15')" class="row__seat tooltip" data-tooltip="J15"></div>
					<div  onclick="myFunction('J16')" class="row__seat tooltip" data-tooltip="J16"></div>
					<div  onclick="myFunction('J17')" class="row__seat tooltip" data-tooltip="J17"></div>
					<div  onclick="myFunction('J18')" class="row__seat tooltip" data-tooltip="J18"></div>
				</div>
				<div class="row">
					<div  onclick="myFunction('K1')" class="row__seat tooltip" data-tooltip="K1"></div>
					<div  onclick="myFunction('K2')" class="row__seat tooltip" data-tooltip="K2"></div>
					<div  onclick="myFunction('K3')" class="row__seat tooltip" data-tooltip="K3"></div>
					<div  onclick="myFunction('K4')" class="row__seat tooltip" data-tooltip="K4"></div>
					<div  onclick="myFunction('K5')" class="row__seat tooltip" data-tooltip="K5"></div>
					<div  onclick="myFunction('K6')" class="row__seat tooltip" data-tooltip="K6"></div>
					<div  onclick="myFunction('K7')" class="row__seat tooltip" data-tooltip="K7"></div>
					<div  onclick="myFunction('K8')" class="row__seat tooltip" data-tooltip="K8"></div>
					<div  onclick="myFunction('K9')" class="row__seat tooltip" data-tooltip="K9"></div>
					<div  onclick="myFunction('K10')" class="row__seat tooltip" data-tooltip="K10"></div>
					<div  onclick="myFunction('K11')" class="row__seat tooltip" data-tooltip="K11"></div>
					<div  onclick="myFunction('K12')" class="row__seat tooltip" data-tooltip="K12"></div>
					<div  onclick="myFunction('K13')" class="row__seat tooltip" data-tooltip="K13"></div>
					<div  onclick="myFunction('K14')" class="row__seat tooltip" data-tooltip="K14"></div>
					<div  onclick="myFunction('K15')" class="row__seat tooltip" data-tooltip="K15"></div>
					<div  onclick="myFunction('K16')" class="row__seat tooltip" data-tooltip="K16"></div>
					<div  onclick="myFunction('K17')" class="row__seat tooltip" data-tooltip="K17"></div>
					<div  onclick="myFunction('K18')" class="row__seat tooltip" data-tooltip="K18"></div>
				</div>
	
			<!-- /rows -->
			<ul class="legend">
         	    <li class="legend__item legend__item--free">Free</li>
				<li class="legend__item legend__item--reserved">Reserved</li>
				<li class="legend__item legend__item--selected">Selected</li>
            </ul>
           <!-- <a href="index1.html" class="action action--buy">Buy tickets</a>-->
            <form action="../booking.php" method="post">
<input type="text" id="lname" name="lname[]" value="0"><br><br>
<input type="hidden" name="id" value="<?php echo $id; ?>">

  <input type="submit" value="Buy tickets" class="action action--buy">
</form>
        </div><!-- /plan -->
        <button class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
        <script src="js/classie.js"></script>
        <script src="js/main.js"></script>
        <script>
var ids = [];
function myFunction(x) {
  ids.push(x);
  document.getElementById("lname").value = ids;

}
</script>
	</body>
</html>