<?php

				global  $wpdb;
				$get_appid = $_GET['app_id'];
				$get_revId = $_GET['revid'];

				//Decrypt the string which is getting URL
				function bjay_decryptString( $q ) {

				  $ciphering = "AES-128-CTR";
				  $iv_length = openssl_cipher_iv_length($ciphering);
				  $options = 0;

				  $decryption_iv = '1234567891011121';
				  $decryption_key = "unitedpeople";

				  $decryption = openssl_decrypt ($q, $ciphering, 
						$decryption_key, $options, $decryption_iv);

				  return $decryption;

				}

				
				if($get_appid != ""){
					$desc_apid  = bjay_decryptString($get_appid);
					$desc_revid = bjay_decryptString($get_revId);
                    
				//Get Entry ID from formidable meta table by field value								  
			    $entryId = $wpdb->get_var("SELECT item_id FROM table_name WHERE field_id = 5016 AND meta_value = '$desc_apid' ");
				$entryKey = $wpdb->get_var("SELECT item_key FROM table_name WHERE id = '$entryId' ");	

				if($entryId != ""){

					$entry_details = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5021,5022,5023,5917,5918,5919,5920,5921', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details2 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5053,5054,5055,5056,5057,5922,5923,5924,5925,5926', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details3 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5046,5047,5048,5049,5050,5927,5928,5929,5930,5931', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details4 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5039,5040,5041,5042,5043,5932,5933,5934,5935,5936', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details5 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5032,5033,5034,5035,5036,5937,5938,5939,5940,5941', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details6 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5025,5026,5027,5028,5029,5942,5943,5944,5945,5946', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details7 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5948,5949,5950,5951,5952,5953,5954,5955,5956,5957', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details8 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5960,5961,5962,5963,5964,5965,5966,5967,5968,5969', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details9 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5972,5973,5974,5975,5976,5977,5978,5979,5980,5981', 'include_blank' => 1, 'format' => 'array' ) );

					$entry_details10 = FrmProEntriesController::show_entry_shortcode( array( 'id' => $entryId, 'include_fields' => '5016,5984,5985,5986,5987,5988,5989,5990,5991,5992,5993', 'include_blank' => 1, 'format' => 'array' ) );

				?>

					<div class="section-a">

						<div class="section-header">
							<h2>Section A</h2>
						</div>	

						<table id="bjsection1">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						//Counter For table Columns
						$i = 103;
						unset($entry_details[0]);
						foreach(array_slice($entry_details, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>

					<div class="section-b">

						<div class="section-header">
							<h2>Section B</h2>
						</div>	

						<table id="bjsection2">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 201;
						unset($entry_details2[0]);
						foreach(array_slice($entry_details2, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details2 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>

					</div>

					<div class="section-c">

						<div class="section-header">
							<h2>Section C</h2>
						</div>	

						<table id="bjsection3">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 301;
						unset($entry_details3[0]);
						foreach(array_slice($entry_details3, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details3 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>	


					<div class="section-d">

						<div class="section-header">
							<h2>Section D</h2>
						</div>

						<table id="bjsection4">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 401;
						unset($entry_details4[0]);
						foreach(array_slice($entry_details4, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details4 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>

					<div class="section-e">

						<div class="section-header">
							<h2>Section E</h2>
						</div>

						<table id="bjsection5">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 501;
						unset($entry_details5[0]);
						foreach(array_slice($entry_details5, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details5 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>

					</div>

					<div class="section-f">

						<div class="section-header">
							<h2>Section F</h2>
						</div>

						<table id="bjsection6">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 601;
						unset($entry_details6[0]);
						foreach(array_slice($entry_details6, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details6 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>
					

					<div class="section-g">

						<div class="section-header">
							<h2>Section G</h2>
						</div>

						<table id="bjsection7">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 701;
						unset($entry_details7[0]);
						foreach(array_slice($entry_details7, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details7 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>

					<div class="section-h">

						<div class="section-header">
							<h2>Section H</h2>
						</div>


						<table id="bjsection8">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 801;
						unset($entry_details8[0]);
						foreach(array_slice($entry_details8, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details8 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>

					<div class="section-i">

						<div class="section-header">
							<h2>Section I</h2>
						</div>

						<table id="bjsection9">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 901;
						unset($entry_details9[0]);
						foreach(array_slice($entry_details9, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details9 as $entry){
							echo "<td>" . $entry . "</td>";
						}
						?>
								</tr>	
							</tbody>	
						</table>
					</div>

					<div class="section-j">

						<div class="section-header">
							<h2>Section J</h2>
						</div>

						<table id="bjsection10">
							<thead>
								<tr>
									<th>Record ID</th>
						<?php
						
						$i = 1001;
						unset($entry_details10[0]);
						foreach(array_slice($entry_details10, 1) as $entry){
							echo "<th>" . "Field ". $i++ . "</th>";
						}
						unset($i);
						
						?>
								</tr>
							</thead>
							<tbody>
								<tr>
						<?php			
						foreach($entry_details10 as $entry){
							echo "<td>" . $entry . "</td>";
						}

						?>

								</tr>	
							</tbody>	
						</table>

					</div>

					<div class="rating-section">
						<?php echo "<a class='rating-btn' href='https://abc.com/?eid=".$entryKey."&revrid=".$get_revId."&appid=".$get_appid."'>Add Rating</a>"; ?>
					</div>
				<?php

				echo "<input type='hidden' value='$entryKey' id='bj_entryid'/>";
				echo "<input type='hidden' value='$get_revId' id='bj_reviewerid'/>";
				echo "<input type='hidden' value='$get_appid' id='bj_appid'/>";
			}else{
				?>
				<div class="error-section">
					<div class="alert alert-danger fade in alert-dismissible">
						<strong>Sorry!</strong> There is no record.
					</div>
				</div>	
				<?php
			}
				}
				//} );

			?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
   //Embed video URL in player to play video
jQuery(document).ready(function($){
	var video_cell = $("#bjsection2 tbody tr td:nth-child(4)");
	var video_cotent  = $(video_cell).html();
	var video_src_half = video_cotent.replace('[video  src="', "");
	var video_src = video_src_half.replace('" /]', "");
	var video_html = '<video width="400" height="350" controls><source src="'+ video_src +'"></video>';
	$(video_cell).html(video_html);
	console.log(video_src);
});	
</script>	
