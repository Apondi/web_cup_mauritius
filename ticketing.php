
<!DOCTYPE HTML>

<!DOCTYPE html>
<html>
<head>
	<title>Buy a ticket</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>


									
									<section>
										

											<table>
												
												<tr>
													<td><img src="images/harrypotter2.jpg" alt="oops" style="display:block;  width:500px; height:auto";/></td>
													<td><img src="images/landing1.jpg" alt="oops" style="display:block;  width:100%; height:100%"; /></td>
													<td><img src="images/the_mummy_page.jpg" alt="oops" style="display:block;  width:100%; height:100%"; /></td>
												</tr>

												<tr>
													<td>World of Wizardry</td>
													<td> Tenacious Trex!</td>
													<td>Unholy Dead!</td>


												</tr>

											</table>

									</section>
									<!-- Sidebar -->
									<section id="sidebar">
									<section>
											<h3>Price Your Adventure</h3>
											<form method="POST" action="booknow.php">
												<div class="row uniform 50%">
													<div class="6u 12u$(xsmall)">
														<input type="text" name="name" id="name" value="" placeholder="Name" />
													</div>
													<div class="6u$ 12u$(xsmall)">
														<input type="email" name="email" id="email" value="" placeholder="Email" />
													</div>
													<div class="6u 12u$(xsmall)">
														<input type="text" name="start_date" id="start_date" value="" placeholder="Start Date" />
													</div>
													
													<div class="6u$ 12u$(xsmall)">
														<input type="text" name="end_date" id="end_date" value="" placeholder="End Date" />
													</div>
													<div class="6u 12u$(xsmall)">
														<input type="text" name="no_of_adults" id="no_of_adults" value="" placeholder="Number of Adults" />
													</div>
													<div class="6u 12u$(xsmall)">
														<input type="text" name="no_of_kids" id="no_of_kids" value="" placeholder="Number of Kids" />
													</div>
													<div class="12u$">
														<div class="select-wrapper">
															<select name="universe" id="universe">
																<option value="none">- Universe -</option>
																<option value="harrypotter">Harry Potter</option>
																<option value="jurassicpark">Jurasic Park</option>
																<option value="mummy">The Mummy</option>
															</select>
														</div>
													</div>
													<div class="12u$">
														<div class="select-wrapper">
															<select name="hotel_of_stay" id="hotel_of_stay">
																<option value="none">- Hotel of Stay -</option>
																<option value="androlodge">AndroLodge</option>
																<option value="jurassichotel">Jurasic Hotel</option>
																<option value="hillysvilla">Hillys Villa</option>
																<option value="other">Other</option>
															</select>
														</div>
													</div>
													<div class="12u$">
														<ul class="actions">
															<li><input type="submit" value="Book Now" class="special" /></li>
															<li><input type="reset" value="Reset" /></li>
														</ul>
													</div>
												</div>
											</form>
										</section>


</body>
</html>



