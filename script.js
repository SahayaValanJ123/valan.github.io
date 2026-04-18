document.addEventListener('DOMContentLoaded', () => {

    // --- Smooth Scroll Reveal (Intersection Observer) ---
    const fadeElements = document.querySelectorAll('.fade-up');
    
    // Create the observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: Stop observing once revealed
                // observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    // Observe all fade-up elements
    fadeElements.forEach(el => observer.observe(el));

    // --- Waitlist Form Handling ---
    const waitlistForm = document.getElementById('waitlistForm');
    const successToast = document.getElementById('successToast');
    const registerBtn = document.querySelector('.btn-submit');
    const btnText = registerBtn.querySelector('span');

    waitlistForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // 1. Give Button 'Loading' Feedback
        btnText.textContent = "Processing...";
        registerBtn.style.opacity = '0.8';
        registerBtn.style.pointerEvents = 'none';

        // 2. Simulate network request (fake delay)
        setTimeout(() => {
            // Success State
            waitlistForm.style.opacity = '0';
            waitlistForm.style.pointerEvents = 'none';
            waitlistForm.style.transform = 'scale(0.95)';

            // Show Toast
            successToast.classList.remove('hidden');

            // Reset Form (Background)
            waitlistForm.reset();
            btnText.textContent = "Register Now";
            registerBtn.style.opacity = '1';
            registerBtn.style.pointerEvents = 'auto';

            // Optional: Hide toast and show form again after some time
            /*
            setTimeout(() => {
                successToast.classList.add('hidden');
                waitlistForm.style.opacity = '1';
                waitlistForm.style.pointerEvents = 'auto';
                waitlistForm.style.transform = 'scale(1)';
            }, 5000);
            */
        }, 1500); 
    });
});
