<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="index.css">
<meta name="viewport" content="width=device-width" initial-scale="1">

</head>

<body>

    <div class="head_section">

        <div class="head_bound">

			<div class="logo_bound">
				<div class="logo_g">logo</div>
				<div class="menu_bar" onclick="menu()">Menu</div>
			</div>
			
			<div class="menu_list">

				<div class="update_user" onclick="update()">Update Shipment</div>
				<div class="create_new" onclick="new_user()"> Create New Shipment</div>
				<!-- <div class="transaction_history" onclick="transaction()">Transaction history</div> -->

			</div>
			
			<script src='links.js'></script>
        </div>

    </div>


	<?php
if(isset($_POST['update_image']) ){
require 'image_upload.php';
}


?>



	<form method="POST" enctype="multipart/form-data">

    <div class="dashboard_section">

        <div class="dashboard_bound">

		<br><br>

            <div class="bound_cage"> 

		
		
					<div class="passport_section">

						<!-- <div class="passport_main">

							<img src="../img/profile_image2.jpg"> 

						</div> -->

						<!-- <div class="passport_new">

							 <input type="file" name='bodyimage'  id='image_file' >

							
							<input type="submit" name='update_image' value="Update Image"> 
						</div> -->
						

					</div>




                <div class="search_section">

					<div class="input_search">
						<input type='text' class='search_f' placeholder="Enter Email or from_location"> 
					</div>

					<div class="search_btn" onclick="search()">Search</div>
                    
                </div>


            </div>


			
			<br><br>
            <div class="bound_cage"> 
			
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Tracking id
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text'  id='tracking_id'  class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="tracking_id_update()">
			
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>



            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						Tracking_no
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='tracking_no' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="tracking_no_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>


			
			
			

            <div class="bound_cage"> 

          		<div class='bound_left'>
					<div class='b_l_text'>
						
						From Location
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='from_location' name='from_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="from_location_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
            </div>


            <div class="bound_cage"> 

               		<div class='bound_left'>
					<div class='b_l_text'>
						
						To location
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='to_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="to_location_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
				
				
            </div>


            <div class="bound_cage"> 

                <div class='bound_left'>
					
					<div class='b_l_text'>
						
						Item Name
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='item_name' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="item_name_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
            </div>


            <div class="bound_cage"> 
				
				<div class='bound_left'>
					
					<div class='b_l_text'>
						
						Weight
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='weight' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="weight_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>

                
            </div>



            <div class="bound_cage"> 
				
			 	<div class='bound_left'>
					<div class='b_l_text'>
						
					first day date
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id="first_date" class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="first_date_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>

                
            </div>



            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						Second day date
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='second_date' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="second_date_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>


            <div class="bound_cage"> 
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Third day date
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='third_date' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="third_date_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>

                
            </div>


            <div class="bound_cage"> 
				
				<!-- <div class='account_officer_details_text'>Account Officer Details</div> -->

                
            </div>
			
			
			
			<div class="bound_cage"> 
				
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Fourth day date
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='fourth_date' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="fourth_date_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                

                
            </div>




			<div class="bound_cage"> 
				
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						First day time
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='first_time' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="first_time_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                

                
            </div>





			<div class="bound_cage"> 
				
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Second day time
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='second_time' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="second_time_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                

                
            </div>







			<div class="bound_cage"> 
				
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Third day time
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='third_time' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="third_time_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                

                
            </div>






			<div class="bound_cage"> 
				
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Fourth day time
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='fourth_time' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="fourth_time_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                

                
            </div>


























            <div class="bound_cage"> 

						
				<div class='bound_left'>
					<div class='b_l_text'>
						
						First day Info
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='first_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="first_day_info_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>


            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						Second day Info
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='second_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="second_day_info_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>





			
            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						Third day Info
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='third_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="third_day_info_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>






			
            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						Fourth day Info
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='fourth_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="fourth_day_info_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>






			
            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						first day location
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='first_day_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="first_day_location_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>






			
            <div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						second day location
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='second_day_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="second_day_location_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>





			<div class="bound_cage"> 

				<div class='bound_left'>
					<div class='b_l_text'>
						
						third day location
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='third_day_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
						<div class='update_btn' onclick="third_day_location_update()">
							
							update
						
						</div>
					
					</div>
				
				</div>
                
            </div>


            

            

        </div>

    </div>


	
	</form>




<script src='fetch_data.js'></script>

</body>

</html>