<section class="main__section main__section_ad">
			<div class="container container_padh">
				<h2 class="main__title">AlimentationDiary</h2>
				<div class="wrapper">
					<div class="ad__data">
						<div class="ad__water">
							<div class="ad__water-item">

							</div>
							<div class="ad__water-item">

							</div>
						</div>
						<div class="ad__list">

							<input type="time" name="mealtimeID" placeholder="00:00" id="timeID" class="ad__list-item time"
								value="">
							<input type="text" name="mealcalID" placeholder="kcal" id="calID" class="ad__list-item calories"
								value="">
							<input type="text" name="mealqtyID" placeholder="grams" id="qtyID" class="ad__list-item grams"
								value="">
							<input type="text" name="mealcontentID" placeholder="..." id="mealID" class="ad__list-item meal"
								value="">
							<div class="ad__list-item hint hidden">

							</div>
						</div>
						<div class="ad__list">

							<input type="time" name="mealtimeID" placeholder="00:00" id="timeID" class="ad__list-item time"
								value="">
							<input type="text" name="mealcalID" placeholder="kcal" id="calID" class="ad__list-item calories"
								value="">
							<input type="text" name="mealqtyID" placeholder="grams" id="qtyID" class="ad__list-item grams"
								value="">
							<input type="text" name="mealcontentID" placeholder="..." id="mealID" class="ad__list-item meal"
								value="">
							<div class="ad__list-item hint hidden">

							</div>
						</div>
						<div class="ad__list">

							<input type="time" name="mealtimeID" placeholder="00:00" id="timeID" class="ad__list-item time"
								value="">
							<input type="text" name="mealcalID" placeholder="kcal" id="calID" class="ad__list-item calories"
								value="">
							<input type="text" name="mealqtyID" placeholder="grams" id="qtyID" class="ad__list-item grams"
								value="">
							<input type="text" name="mealcontentID" placeholder="..." id="mealID" class="ad__list-item meal"
								value="">
							<div class="ad__list-item hint hidden">

							</div>
						</div>
					</div>

					<div class="ad__result">
						<h3 class="ad__title ad__title_cal">Caloriemeter</h3>
						<div class="ad__caloriemeter">

						</div>
						<p>Your max is: <strong id="ad__max">1234</strong></p>
					</div>
				</div>
				<div class="ad__base">
					<h3 class="ad__title">Database</h3>
					<div class="ad__base-list">

						<div class="ad__base-line add">
							<input type="text" name="foodins" placeholder="Product name"
								class="ad__base-input ad__base-input_food">
							<input type="text" name="foodins" placeholder="Cal" class="ad__base-input ad__base-input_cal">
							<button class="button button_em ad__base_button">ADD</button>
						</div>
						<!-- ! OUTPUT FROM DATABASE  -->

						<?php
						//Getting PRODUCTS from database
						$sql_prod = 'SELECT * FROM si__me_calorbase ORDER BY productname';
						$result_prod = mysqli_query($link, $sql_prod);
						
						while ($row_prod = mysqli_fetch_array($result_prod)) {
							print('<div class="ad__base-line '); 
							if($row_prod['recid'] % 2){
							print('even');
							}
							print('">');
							print('<input type="text" name="foodins" value="'. $row_prod['productname'] .'"
							class="ad__base-input ad__base-input_foodready">');
							print('<input type="text" name="foodins" value="'. $row_prod['productcal'] .'" class="ad__base-input ad__base-input_calready">');
							print('</div>');
							
						}   
						
					?>

						
						
						<div class="ad__base-line">
							<input type="text" name="foodins" value="Product two"
								class="ad__base-input ad__base-input_foodready">
							<input type="text" name="foodins" value="200" class="ad__base-input ad__base-input_calready">
						</div>
						<div class="ad__base-line even">
							<input type="text" name="foodins" value="Product three"
								class="ad__base-input ad__base-input_foodready">
							<input type="text" name="foodins" value="300" class="ad__base-input ad__base-input_calready">
						</div>
					</div>


				</div>
			</div>
			</div>
		</section>