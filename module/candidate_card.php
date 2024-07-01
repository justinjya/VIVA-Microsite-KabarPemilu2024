<div class="candidate-card <?php echo $partyId; ?>" data-party-id="<?php echo $partyId; ?>">
  <h3 style="color: <?php echo $titleColor; ?>;">PILIHAN #<?php echo $details['number']; ?></h3>
  <div class="candidate-photo-container">
    <img style="border-color: <?php echo $titleColor;?>;" src="<?php echo $partyLeaderImg; ?>" alt="Candidate 1">
    <img style="border-color: <?php echo $titleColor;?>;" src="<?php echo $partyCoLeaderImg; ?>" alt="Candidate 2">
  </div> 
  <h4><?php echo $details['leader']; ?></h4>
  <h5>Calon Presiden</h5>
  <h4><?php echo $details['co-leader']; ?></h4>
  <h5>Calon Wakil Presiden</h5>
  <p>Jumlah Suara</p>
  <h6><?php echo $details['votes']; ?> <i class="fa fa-star"></i></h6>
</div>