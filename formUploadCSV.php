<html>
<head>
<title>Delieptrov</title>
	
	<script type="text/javascript">
        $(document).ready(function () {
			$('#div1').hide();//na pocetok sokrij gi site
			$('#div2').hide();
			$('#div3').hide();
			$('#div4').hide();
			
								
        $('#id_radio1').click(function () {
			$('#div1').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
		    $('#div1').show('fast');//pri klik na radio button1 prviot se prikazuva ostanatite se sokrieni
			$('#div2').hide('fast');
			$('#div3').hide('fast');
			$('#div4').hide('fast');
			
		});
	    
		$('#id_radio2').click(function () {
			$('#div2').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
			$('#div1').hide('fast');
			$('#div2').show('fast');
			$('#div3').hide('fast');
			$('#div4').hide('fast');
			
	    });
		
		$('#id_radio3').click(function () {
			$('#div2').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
			$('#div1').hide('fast');
			$('#div2').hide('fast');
			$('#div3').show('fast');
			$('#div4').hide('fast');
	    });
		
		$('#id_radio4').click(function () {
			$('#div2').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
			$('#div1').hide('fast');
			$('#div2').hide('fast');
			$('#div3').hide('fast');
			$('#div4').show('fast');
	    });
					 
		
    });			   
</script>

</head>
<body>
<!-- Za koristenje na formata vo centralen del da se izvadat kometarite samo od tagot centar-->
	<!--<center>-->
		<h2>Choise your type for upload</h2>
		<table style="width: 70%">
			<tr>
				<td><input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" />Dynamic programming</br></td>
				<td><input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" />Stochastic Dynamic Programming</br></td>
				<td><input id="id_radio3" type="radio" name="name_radio1" value="value_radio3" />Reinforcement Learning</br></td>
				<td><input id="id_radio4" type="radio" name="name_radio1" value="value_radio4" />HIDE</br></td>				
			</tr>
						
			<tr>
				<td colspan="5">
					<div id="div1">
						<form action="uploadDP.php" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">					
							<div>
							</br>
								<p>
								</br>
								Upload Dynamic programming File</br>
									<select name='typedb' id='wroselect'>
										<option value='notsel'>Select type</option>
										<option value='storage_sdp'> Storage Discretization</option>
										<option value='inflow_sdp'>Inflow</option>
										<option value='demandtown_sdp'>Demand town</option>
										<option value='demandagriculture_sdp'>Demand agriculture</option>
										<option value='demandecology_sdp'>Demand ecology</option>
										<option value='flood_sdp'>Flood</option>
										<option value='recreation_sdp'>Recreation</option>
									</select> 								
								<input name='ufile' type='file' size='28' id='ufile0' />
								<input type='submit' value='uploadSDP' name='uploadSDP' />
								<span id='status' style='display:none'>...</span>
								<iframe id='target_iframe' name='target_iframe' src='' style='width:0;height:0;border:0px'>
								</iframe>
								</p>
							</div>
							</br>
							<div>
							
							</div>
						</form>
					</div>
					<div id="div2">
						<form action="uploadSDP.php" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">					
							<div>
							</br>
								<p>
								</br>
								Upload Stochastic Dynamic Programming File</br>
									<select name='typedb' id='wroselect'>
										<option value='notsel'>Select type</option>
										<option value='storage_sdp'> Storage Discretization</option>
										<option value='inflow_sdp'>Inflow</option>
										<option value='demandtown_sdp'>Demand town</option>
										<option value='demandagriculture_sdp'>Demand agriculture</option>
										<option value='demandecology_sdp'>Demand ecology</option>
										<option value='flood_sdp'>Flood</option>
										<option value='recreation_sdp'>Recreation</option>
									</select> 								
								<input name='ufile' type='file' size='28' id='ufile0' />
								<input type='submit' value='uploadSDP' name='uploadSDP' />
								<span id='status' style='display:none'>...</span>
								<iframe id='target_iframe' name='target_iframe' src='' style='width:0;height:0;border:0px'>
								</iframe>
								</p>
							</div>
							</br>
							<div>
							
							</div>
						</form>
					</div>
					<div id="div3">
						<form action="uploadRL.php" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">
							<div>
								<p>
								</br>
								Upload Reinforcement Learning File</br>							
									<select name='typedb' id='wroselect'>
										<option value='notsel'>Select type</option>      
										<option value='storage_rl'> Storage Discretization</option>
										<option value='inflow_rl'>Inflow</option> 
										<option value='demandtown_rl'>Demand town</option>
										<option value='demandagriculture_rl'>Demand agriculture</option>
										<option value='demandecology_rl'>Demand ecology</option> 
										<option value='flood_rl'>Flood</option>
										<option value='recreation_rl'>Recreation</option>
									</select> 
								<input name='ufile' type='file' size='28' id='ufile0' />
								<input type='submit' value='uploadRL' name='uploadRL' />
								<span id='status' style='display:none'>...</span>
								<iframe id='target_iframe' name='target_iframe' src='' style='width:0;height:0;border:0px'>
								</iframe>
								</p>
							</div>
						</form>
					</div>
					<div id="div4">
						<form action="" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">
							<div>
								<p>
								</br>
								It's already hidden!
								</p>
							</div>
						</form>
					</div>						
				</td>
			</tr>
		</table>		
	<!--</center>-->
</body>
</html>
