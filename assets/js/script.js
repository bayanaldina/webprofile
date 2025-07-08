document.addEventListener('DOMContentLoaded', function() {
    const path = window.location.pathname;
    const pageName = path.substring(path.lastIndexOf('/') + 1);

    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(link => {
        const linkName = link.getAttribute('href');
        if (linkName === pageName || (pageName === '' && linkName === 'index.php')) {
            link.classList.add('active');
        }
    });

    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            if (name === '' || email === '' || message === '') {
                event.preventDefault();
                alert('Harap isi semua kolom yang tersedia.');
            }
        });
    }
});
