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

				<div class="update_user" onclick="update_user()">Update Shipment</div>
				<div class="create_new" onclick="new_user()"> Create New Shipment</div>
				<!-- <div class="transaction_history" onclick="transaction()">Transaction history</div> -->

			</div>
			
            <script src='links.js'></script>
        </div>

    </div>

	<form method="POST" enctype="multipart/form-data">

    <div class="dashboard_section">

        <div class="dashboard_bound">

           <br><br><br><br>

			
			
            <div class="bound_cage"> 
			
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Tracking id
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id="tracking_id" placeholder='example: GM6043782974927YYWDJ29'name='first_name' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
					
					
					</div>
				
				</div>
                
            </div>




			<div class="bound_cage"> 
			
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Tracking no
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' id='tracking_no'  placeholder='example: 47858163' name='last_name' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
					
					
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
						
					<input type='text' name='email' placeholder='example: Paris, France ' id='from_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
			
					
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
						
					<input type='text' name='identifier'  placeholder='example: South Korea, Ulsan Airportg' id='to_location' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
					
					
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
						
					<input type='text' name='password' id='item_name' placeholder='example:Portfolio ' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
				
					
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
						
					<input type='text' name='secret_code' id='weight' placeholder='example: 33 lbs ' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
					
					
					</div>
				
				</div>
            </div>


            <div class="bound_cage"> 
				
				<div class='bound_left'>
					
					<div class='b_l_text'>
						
						First day date
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' name='phone_number' id='first_date' placeholder='example: Aug 15, 2023' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
					
					
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
						
					<input type='text' name='total_balance' id='second_date' placeholder='example:Aug 16, 2023 ' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
				
					
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
						
					<input type='text' name='total_expenses' id='third_date' placeholder='example: Aug 27, 2023 ' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
					
					
					</div>
				
				</div>
                
            </div>


            <div class="bound_cage"> 
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						Fourth day date
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' name='total_income' id='fourth_date' placeholder='example: Sep 3, 2023' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
			
					
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
						
					<input type='text' name='total_income' id='first_time' placeholder='example: 4:34pm GMT' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
			
					
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
						
					<input type='text' name='total_income' id='second_time' placeholder='example: 4:34pm GMT' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
			
					
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
						
					<input type='text' name='total_income' id='third_time' placeholder='example: 6:34pm GMT' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
			
					
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
						
					<input type='text' name='total_income' id='fourth_time' placeholder='example: 1:30pm GMT' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
			
					
					</div>
				
				</div>

                
            </div>













            <div class="bound_cage"> 
				
				<!-- <div class='account_officer_details_text'>Account Officer Details</div> -->

                
            </div>
			
			
			
			<div class="bound_cage"> 
				
				
				<div class='bound_left'>
					<div class='b_l_text'>
						
						First day Info
					
					</div>
				
				</div>
				
				
				<div class='bound_right'>
					
					<div class='b_right_input'>
						
					<input type='text' name='account_officer_names' placeholder='ELECTRONIC NOTIFICATION RECEIVED. TRACKING WILL BE UPDATED SOON.'id='first_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
				
					
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
						
					<input type='text' name='account_officer_number' placeholder='EN ROUTE TO Express diplomatic service DISTRIBUTION CENTER' id='second_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
				
					
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
						
					<input type='text' name='account_officer_email' placeholder='Orly Airport Paris, France' id='third_day_info' class='fetched_input'>
					
					</div>
					
					<div class='b_right_btn'>
						
				
					
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
								
							<input type='text' name='account_officer_email' id='fourth_day_info' class='fetched_input'>
							
							</div>
							
							<div class='b_right_btn'>
								

							
							</div>

						</div>

			</div>





			<div class="bound_cage"> 

						<div class='bound_left'>
							<div class='b_l_text'>
								
								First day location
							
							</div>

						</div>


						<div class='bound_right'>
							
							<div class='b_right_input'>
								
							<input type='text' name='account_officer_email' placeholder='Paris' id='first_day_location' class='fetched_input'>
							
							</div>
							
							<div class='b_right_btn'>
								

							
							</div>

						</div>

			</div>





			<div class="bound_cage"> 

						<div class='bound_left'>
							<div class='b_l_text'>
								
								Second day location
							
							</div>

						</div>


						<div class='bound_right'>
							
							<div class='b_right_input'>
								
							<input type='text' name='account_officer_email' placeholder='Paris' id='second_day_location'  class='fetched_input'>
							
							</div>
							
							<div class='b_right_btn'>
								

							
							</div>

						</div>

			</div>






			<div class="bound_cage"> 

						<div class='bound_left'>
							<div class='b_l_text'>
								
								Third day location
							
							</div>

						</div>


						<div class='bound_right'>
							
							<div class='b_right_input'>
								
							<input type='text' name='account_officer_email' placeholder='Paris' id='third_day_location' class='fetched_input'>
							
							</div>
							
							<div class='b_right_btn'>
								

							
							</div>

						</div>

		</div>




            <div class="bound_cage_btn"> 
				
				<input type="button" class='create_btn' onclick = 'create_new_user()' value="Create New Shipment" name="create_user">

             </div>   





             
            <div class="report"> 

                <!-- <div class="report_info">New user has been sucessfully created</div> -->

             </div>   
            

            

        </div>

    </div>

</form>

<script src='create_new_user.js'></script>

<?php




?>


<script src="create_user.js"></script>
</body>

</html>