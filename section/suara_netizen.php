<?php
$suaraNetizen = [
  [
    "image" => "img/sample/person-1.png",
    "name" => "Asep Juana",
    "comment" => "Yang menang pasti dari Anis dan AHY sih ini 🇮🇩🇮🇩🇮🇩 Semangat terus untuk Indonesia !!!"
  ],
  [
    "image" => "img/sample/person-2.png",
    "name" => "Budi Durian",
    "comment" => "Semoga pemilu kali ini berjalan dengan aman dan damai 🙏🙏🙏"
  ],
  [
    "image" => "img/sample/person-3.png",
    "name" => "Cici Kusuma",
    "comment" => "Jangan lupa pilih yang terbaik ya teman-teman 🇮🇩🇮🇩🇮🇩"
  ]
];
$suaraNetizenLength = count($suaraNetizen);
$netizenIndex = 0;
$netizen = $suaraNetizen[$netizenIndex];
?>

<section class="section-container" style="margin-bottom: 89px;">
  <h2>SUARA <span class="h2-highlight">NETIZEN</span></h2>
  <div class="netizen-container">
    <button class="button-circle" id="prevButton" onclick="navigateNetizen(-1)"><?php require "img/icon/arrow-left.svg" ?></button>
    <div class="netizen-content">
      <?php foreach ($suaraNetizen as $index => $netizen): ?>
        <?php
        $netizenImage = $netizen['image'];
        $netizenName = $netizen['name'];
        $netizenComment = $netizen['comment'];
        ?>
        <div class="netizen-card" id="netizenCard<?php echo $index; ?>" style="<?php echo $index === 0 ? '' : 'display: none;'; ?>">
          <?php
          require "module/netizen-card.php";
          ?>
        </div>
      <?php endforeach; ?>
      <div class="pagination-circle">
        <?php for ($i = 0; $i < $suaraNetizenLength; $i++): ?>
          <span class="<?php echo $i === $netizenIndex ? 'active' : ''; ?>"></span>
        <?php endfor; ?>
      </div>
    </div>
    <button class="button-circle" id="nextButton" onclick="navigateNetizen(1)"><?php require "img/icon/arrow-right.svg" ?></button>
  </div>
  <button class="button button-outline">Lihat komentar lainnya</button>
  <div class="input-container">
    <input placeholder="Masukkan Komentarmu" name="comment" />
    <div class="submit-icon">
      <?php require "img/icon/paper-airplane.svg" ?>
    </div>
  </div>
  <script>
  var netizenIndex = 0;
  var suaraNetizenLength = <?php echo $suaraNetizenLength; ?>;

  function navigateNetizen(direction) {
    document.getElementById('netizenCard' + netizenIndex).style.display = 'none';

    netizenIndex = (netizenIndex + direction + suaraNetizenLength) % suaraNetizenLength;

    document.getElementById('netizenCard' + netizenIndex).style.display = 'block';

    updatePaginationActiveState();
  }
  
  function updatePaginationActiveState() {
    document.querySelectorAll('.pagination-circle span').forEach(function(span) {
      span.classList.remove('active');
    });

    document.querySelectorAll('.pagination-circle span')[netizenIndex].classList.add('active');
  }
  </script>
</section>