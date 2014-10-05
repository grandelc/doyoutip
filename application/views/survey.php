<h2>Survey</h2>
<p>Some call them the grunuts and the unsung heros. Others say it's their job and they get paid to do it. Click on a service title below and let your opinion be known if they should be tipped or not!</p>

<div id="job-slide" class="owl-carousel">

  <?php foreach($services as $service): ?>
    <div class="item">
        <div class="job-box">
          <p class="job-title"><?php echo $service['job_title'] ?></p>
          <p class="job-text">Lorem ipsum dolor sit amet, maiorum molestie forensibus ne cum, no tempor voluptatibus vel, dictas pertinax no sed. Vis quis tantas eu, id eos omnes regione integre, epicurei salutandi deseruisse eum ex. Et duo invenire vituperatoribus, sit at invenire erroribus consequuntur.</p>
          <div class="survey-btn group">
            <div class="doTip">
              <p id="do_tip_<?php echo $service['id'] ?>" class="next" data-id="<?php echo $service['id'] ?>">I Tip</p>
            </div>
            <div class="dontTip">
              <p id="dont_tip_<?php echo $service['id'] ?>" class="next" data-id="<?php echo $service['id'] ?>">I Don't Tip</p>
            </div>
          </div>
        </div>
    </div>
  <?php endforeach; ?>

  <!-- LAST SLIDE -->
   <div class="item">
  		<div class="job-box">
  			<p class="job-title">Thanks For Taking Our Survey! </p>
  			<p class="percent">We really Appreciate That! </p>
  			<p class="job-text">Lorem ipsum dolor sit amet, maiorum molestie forensibus ne cum, no tempor voluptatibus vel, dictas pertinax no sed. Vis quis tantas eu, id eos omnes regione integre, epicurei salutandi deseruisse eum ex. Et duo invenire vituperatoribus, sit at invenire erroribus consequuntur.</p>
  			<div class="survey-btn group">
	  			<div class="doTip">
	  				<a href="#"><p>Donate</p></a>
	  			</div>
	  			<div class="dontTip">
	  				<p id="survey-share">Share</p>
	  			</div>
	  			<div class="share-modal">
  					<h3>Share</h3>
  					<p id="close">X</p>
  						<a href=""><img class ="share-links" src="<?php echo base_url() . 'assets/img/facebook.png' ?>" alt="facebook"></a>
  						<a href=""><img class ="share-links" src="<?php echo base_url() . 'assets/img/twitter.png' ?>" alt="twitter"></a>
  						<a href=""><img class ="share-links" src="<?php echo base_url() . 'assets/img/googleplus.png' ?>" alt="google plus"></a>
  				</div>
  			</div>
  		</div>
  </div>

</div> <!-- SLIDE END -->	

<script>var base_url = "<?php echo base_url(); ?>";</script>


		