document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.candidate-card');

  cards.forEach(card => {
    card.addEventListener('click', function() {
      // Remove 'selected' class from the clicked card
      if (card.classList.contains('selected')) {
        card.classList.remove('selected');
        return;
      }

      // Remove 'selected' class from all cards
      cards.forEach(c => c.classList.remove('selected'));
      
      // Add 'selected' class to the clicked card
      this.classList.add('selected');
    });
  });
});