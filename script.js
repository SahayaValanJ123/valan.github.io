document.addEventListener('DOMContentLoaded', () => {

    // --- Typewriter Effect ---
    const words = ["Ethical Hacker.", "Security Enthusiast.", "ECE Student.", "Vulnerability Hunter."];
    let i = 0;
    let timer;
    const typeTextTag = document.getElementById("typewriter");

    function typingEffect() {
        let word = words[i].split("");
        var loopTyping = function() {
            if (word.length > 0) {
                typeTextTag.innerHTML += word.shift();
            } else {
                setTimeout(deletingEffect, 2000);
                return;
            }
            timer = setTimeout(loopTyping, 100);
        };
        loopTyping();
    }

    function deletingEffect() {
        let word = words[i].split("");
        var loopDeleting = function() {
            if (word.length > 0) {
                word.pop();
                typeTextTag.innerHTML = word.join("");
            } else {
                if (words.length > (i + 1)) {
                    i++;
                } else {
                    i = 0;
                }
                setTimeout(typingEffect, 500);
                return;
            }
            timer = setTimeout(loopDeleting, 50);
        };
        loopDeleting();
    }

    // Start Typing
    typingEffect();


    // --- Scroll Reveals ---
    const fadeElements = document.querySelectorAll('.fade-up');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    fadeElements.forEach(el => observer.observe(el));

    // --- Smooth Scrolling for Anchor Links ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

});
