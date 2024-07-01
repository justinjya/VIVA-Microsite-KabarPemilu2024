<?php
$partyDetails = [
  "partyA" => [
    "color" => "#FFB800",
    "number" => "1",
    "leader-img" => "img/tokoh/tokoh-6.png",
    "co-leader-img" => "img/tokoh/tokoh-3.png",
    "leader" => "Anies Baswedan",
    "co-leader" => "Agus Harimurti Yudhoyono",
    "votes" => "10.021"
  ],
  "partyB" => [
    "color" => "#7C7C7C",
    "number" => "2",
    "leader-img" => "img/tokoh/tokoh-20.png",
    "co-leader-img" => "img/tokoh/tokoh-18.png",
    "leader" => "Prabowo Subianto",
    "co-leader" => "Mahfud MD",
    "votes" => "9.812"
  ],
  "partyC" => [
    "color" => "#D95B00",
    "number" => "3",
    "leader-img" => "img/tokoh/tokoh-9.png",
    "co-leader-img" => "img/tokoh/tokoh-2.png",
    "leader" => "Ganjar Pranowo",
    "co-leader" => "Basuki Tjahaya Purnama",
    "votes" => "7.222"
  ]
];
?>

<img class="voting-bg-img" src="img/voting-bg.svg" />
<section class="section-container" id="home" style="margin-bottom: 89px;">
  <h2 class="h2-voting">VOTING <span class="h2-highlight">CAPRES & CAWAPRES</span></h2>
  <p class="voting-subtitle">Silahkan pilih pasangan <span style="font-weight:bold;">Capres</span> dan <span style="font-weight: bold;">Cawapres</span> yang paling ideal untuk pemilu 2024</p>
  <div class="candidates-container">
    <?php foreach ($partyDetails as $candidateParty => $details): ?>
      <?php
      $partyId = $candidateParty;
      $titleColor = $details['color'];
      $partyNumber = $details['number'];
      $partyLeaderImg = $details['leader-img'];
      $partyCoLeaderImg = $details['co-leader-img'];
      $partyLeader = $details['leader'];
      $partyCoLeader = $details['co-leader'];
      $partyVotes = $details['votes'];
      ?>
      <?php require "module/candidate_card.php"; ?>
    <?php endforeach; ?>
  </div>
  <button class="button button-alt">Pilih Pasangan Ini <i class="fa fa-star"></i></button>
  <script src="js/selectparty.js"></script>
</section>