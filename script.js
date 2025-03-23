const contactLink = document.getElementById('contact-link');
const popup = document.getElementById('contact-popup');
const closeBtn = document.getElementById('close-popup');
const form = document.getElementById('contact-form');

contactLink.addEventListener('click', function(e) {
    e.preventDefault();
    popup.classList.add('active');
    form.reset(); // Reset form when opened
});

closeBtn.addEventListener('click', function() {
    popup.classList.remove('active');
    form.reset(); // Reset form when closed
});