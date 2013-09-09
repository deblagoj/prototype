<html>
<head>
<title>Delieptrov</title>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
			$('#div1').hide();//na pocetok sokrij gi site
			$('#div2').hide();
			$('#div3').hide();				
        $('#id_radio1').click(function () {
			$('#div1').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
		    $('#div1').show('fast');//pri klik na radio button1 prviot se prikazuva ostanatite se sokrieni
			$('#div2').hide('fast');
			$('#div3').hide('fast');
			
		});
	    
		$('#id_radio2').click(function () {
			$('#div2').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
			$('#div1').hide('fast');
			$('#div2').show('fast');
			$('#div3').hide('fast');
			
	    });
		
		
		$('#id_radio3').click(function () {
			$('#div3').css({"width":"auto", "height":"auto", "-webkit-border-radius":"20px", "border-radius":"20px", "background":"rgba(239,243,246,0.7)"});
			$('#div1').hide('fast');
			$('#div3').show('fast');
			$('#div2').hide('fast');
			
	    });
					 
		
    });			   
</script>

</head>
<body>
<!-- Za koristenje na formata vo centralen del da se izvadat kometarite samo od tagot centar-->
	<!--<center>-->
		<h2>Choise</h2>

		<table style="width: 50%">
			<tr>
				<td><input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" />SDP</td>
				<td><input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" />RL</td>
                <td><input id="id_radio3" type="radio" name="name_radio1" value="value_radio3" />DP-simulation</td>
				
			</tr>
			<tr>
				<td colspan="5">
					<div id="div1">
						<form action="uploadSDP.php" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">					
							<div>
								<p>
								Upload SDP File</br>
									<select name='typedb' id='wroselect'>
										<option value='notsel'>Select type</option>
										<option value='storage_sdp'> Storage Discretization</option>
										<option value='inflow_sdp1'>Inflow</option>
										<option value='demandtown_sdp_pz'>Demand town pz</option>
                                        <option value='demandtown_sdp_ss'>Demand town ss</option>
										<option value='demandagriculture_sdp_uz'>Demand agriculture uz</option>
                                        <option value='demandagriculture_sdp_lz'>Demand agriculture lz</option>
										<option value='demandecology_sdp'>Demand ecology</option>
										<option value='flood_sdp'>Flood</option>
										<option value='recreation_sdp'>Recreation</option>
                                        <option value='demandhydropower_sdp'>hydropower</option>
										 <option value='inflow_sdp_sim'>inflow_sim</option>
									</select> 								
								<input name='ufile' type='file' size='28' id='ufile1' />
								<input type='submit' value='uploadSDP' name='uploadSDP' />
								<span id='status' style='display:none'>...</span>
								<iframe id='target_iframe' name='target_iframe' src='' style='width:0;height:0;border:0px'>
								</iframe>
								</p>
							</div>
						</form>
					</div>
					<div id="div2">
						<form action="uploadRL.php" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">
							<div>
								<p>
								Upload RL File</br>							
									<select name='typedb' id='wroselect'>
										<option value='notsel'>Select type</option>      
										<option value='storage_rl'> Storage Discretization</option>
										<option value='inflow_rl'>Inflow</option> 
										<option value='demandtown_rl_pz'>Demand town pz</option>
                                        <option value='demandtown_rl_ss'>Demand town ss</option>
										<option value='demandagriculture_rl_uz'>Demand agriculture uz</option>
                                        <option value='demandagriculture_rl_lz'>Demand agriculture lz</option>
										<option value='demandecology_rl'>Demand ecology</option> 
										<option value='flood_rl'>Flood</option>
										<option value='recreation_rl'>Recreation</option>
                                        <option value='demandhydropower_rl'>hydropower</option>
                                        <option value='inflow_mid_rl'>Middle inflow</option> 
        								<option value='inflow_mid_hk_rl'>Inflow Middle HK</option> 
         								 <option value='inflow_mid_lu_rl'>Middle inflow LU</option>
										 <option value='inflow_rl_sim'>Inflow sim</option> 
                                   <option value='inflow_mid_rl_sim'>Middle inflow sim</option> 
        								<option value='inflow_mid_hk_rl_sim'>Inflow Middle HK sim</option> 
         								 <option value='inflow_mid_lu_rl_sim'>Middle inflow LU sim</option>
									</select> 
								<input name='ufile' type='file' size='28' id='ufile1' />
								<input type='submit' value='uploadRL' name='uploadRL' />
								<span id='status' style='display:none'>...</span>
								<iframe id='target_iframe' name='target_iframe' src='' style='width:0;height:0;border:0px'>
								</iframe>
								</p>
							</div>
						</form>
					</div>
					
				<div id="div3">
						<form action="uploadSDP.php" method="post" enctype="multipart/form-data" name="cvs" id="uploadform">					
							<div>
								<p>
								Upload SDP File</br>
									<select name='typedb' id='wroselect'>
										<option value='notsel'>Select type</option>
								
										<option value='inflow_dp_sim'>Inflow</option>
										<option value='demandtown_dp_pz_sim'>Demand town pz</option>
                                        <option value='demandtown_dp_ss_sim'>Demand town ss</option>
										<option value='demandagriculture_dp_uz_sim'>Demand agriculture uz</option>
                                        <option value='demandagriculture_dp_lz_sim'>Demand agriculture lz</option>
										<option value='demandecology_dp_sim'>Demand ecology</option>
										<option value='flood_dp_sim'>Flood</option>
										<option value='recreation_dp_sim'>Recreation</option>
                                        <option value='demandhydropower_dp_sim'>hydropower</option>
                                        <option value='inflow_mid_sim'>inflow mid</option>
                                        <option value='inflow_mid_hk_sim'>hinflow mid hz</option>
                                        <option value='inflow_mid_lu_sim'>inflow mid lz</option>
									</select> 								
								<input name='ufile' type='file' size='28' id='ufile1' />
								<input type='submit' value='uploadSDP' name='uploadSDP' />
								<span id='status' style='display:none'>...</span>
								<iframe id='target_iframe' name='target_iframe' src='' style='width:0;height:0;border:0px'>
								</iframe>
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