document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    
    if (menuBtn && menu) {
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            // Update ARIA expanded state
            const isExpanded = !menu.classList.contains('hidden');
            menuBtn.setAttribute('aria-expanded', isExpanded.toString());
        });
    }

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Close mobile menu if open
                if (menu && menuBtn) {
                    menu.classList.add('hidden');
                    menuBtn.setAttribute('aria-expanded', 'false');
                }

                // Smooth scroll to target
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Update URL without jumping
                window.history.pushState(null, '', targetId);

                // Update active state
                document.querySelectorAll('a[href^="#"]').forEach(a => {
                    a.classList.remove('text-[#1e0536]');
                });
                this.classList.add('text-[#1e0536]');
            }
        });
    });

    // Handle initial hash on page load
    if (location.hash) {
        const targetElement = document.querySelector(location.hash);
        if (targetElement) {
            setTimeout(() => {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 100);
        }
    }

    // Update active link on scroll
    let activeLink = null;
    const sections = document.querySelectorAll('section[id], div[id="hero"]');
    
    function updateActiveLink() {
        const scrollPosition = window.scrollY + 100; // Offset for better UX

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const correspondingLink = document.querySelector(`a[href="#${section.id}"]`);
                
                if (activeLink !== correspondingLink) {
                    document.querySelectorAll('a[href^="#"]').forEach(a => {
                        a.classList.remove('text-[#1e0536]');
                    });
                    
                    if (correspondingLink) {
                        correspondingLink.classList.add('text-[#1e0536]');
                        activeLink = correspondingLink;
                    }
                }
            }
        });
    }

    window.addEventListener('scroll', updateActiveLink);
    updateActiveLink(); // Initial check
});

