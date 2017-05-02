<?php 
	require('function.php');
	$forecast = getForcast();
	//print_r($forecast);
?>
<div class="wea_fiveday_cast">5 Day Forecast</div>
	<div class="wea_daywise_outer">	
	   <?php for($i=0; $i<5; $i++) {   ?>
	   
		<div class="wea_daywise_">
			<div class="col-md-5">
				<div class="wea_daywise_left">
					<span class="wea_daywise_week">
						<?php echo date('D',$forecast->list[$i]->dt) ?>
					</span>
					<span class="wea_daywise_img">
						<!-- <img src="images/sun.png"> -->
						<img src="<?php echo 'http://openweathermap.org/img/w/'.$forecast->list[$i]->weather[0]->icon.'.png'; ?>" />
					</span>
					<span class="wea_daywise_deg">
						<?php echo round(convertCelsiusToFahrenheit($forecast->list[$i]->temp->min)); ?> /
						<?php echo round(convertCelsiusToFahrenheit($forecast->list[$i]->temp->max)); ?>
					</span>	
				</div>
			</div>
			<div class="col-md-7">
				<div class="wea_daywise_infobtn">
					<?php echo ucfirst($forecast->list[$i]->weather[0]->description); ?>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>