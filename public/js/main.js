// Wrap all code in DOMContentLoaded to ensure DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    
    AOS.init({
        duration: 1000, // animation duration in ms
        once: false, // animation happens only once
    });

    // === SERVICES INTERACTIVITY ===
    const servicesData = [
        {
            title: "Purpose-Led Leadership & Culture Transformation",
            description:
                "We help organisations build leadership cultures anchored in authenticity, empathy, and ethical accountability. Through immersive workshops and data-driven insight tools, we strengthen leaders' ability to create inclusive, high-trust environments where people thrive and purpose drives performance.",
        },
        {
            title: "Mutual Gains Mediation & Employee Relations",
            description:
                "Our mediation approach is rooted in the mutual gains philosophy — resolving conflict through meaningful dialogue, shared understanding, and sustainable solutions. By uncovering the underlying factors that influence workplace tension, we help organisations restore trust, strengthen engagement, and build environments where people feel heard and respected.",
        },
        {
            title: "Ethical Governance, Compliance & Organisational Integrity",
            description:
                "We design governance frameworks that strengthen organisational integrity and unlock long-term resilience. With deep legal and regulatory expertise supported by data analytics, we help leaders navigate complexity while building transparent, ethical, and future-fit systems aligned to global best practice.",
        },
        {
            title: "Strategic Advisory & Trusted Executive Partnership",
            description:
                "With decades of board-level experience, Infinity provides trusted advisory services to executives, boards, and leadership teams. We combine strategic foresight, ethical leadership, and rich data insights to guide organisations through transformation, risk, and growth — always grounded in purpose and measurable impact.",
        },
    ];

    const serviceIcons = document.querySelectorAll(".icons_list .list_item");
    const serviceTitle = document.getElementById("service-title");
    const serviceDescription = document.getElementById("service-description");

    if (serviceIcons.length > 0 && serviceTitle && serviceDescription) {
        serviceIcons.forEach((icon) => {
            icon.addEventListener("click", () => {
                // Remove active class from all icons
                serviceIcons.forEach((i) => i.classList.remove("active-service"));

                // Add active class to clicked icon
                icon.classList.add("active-service");

                // Get index from data attribute
                const index = icon.getAttribute("data-index");

                // Update content with fade effect
                serviceTitle.style.opacity = 0;
                serviceDescription.style.opacity = 0;

                setTimeout(() => {
                    if (servicesData[index]) {
                        serviceTitle.textContent = servicesData[index].title;
                        serviceDescription.textContent =
                            servicesData[index].description;
                    }
                    serviceTitle.style.opacity = 1;
                    serviceDescription.style.opacity = 1;
                }, 300);
            });
        });

        // Add transition styles for smooth update
        serviceTitle.style.transition = "opacity 0.3s ease";
        serviceDescription.style.transition = "opacity 0.3s ease";
    }

    // === OUR ESSENCE INTERACTIVITY ===
    const essenceData = [
        {
            title: "Synopsis",
            description: "Infinity Strategic Business Solutions (Pty) Ltd is a purpose-driven South African consultancy committed to advancing meaningful social and organisational transformation.\n\nWhile proudly women-led, we partner inclusively across all sectors to strengthen governance, deepen social impact, and create opportunities for youth and historically disadvantaged groups.\n\nOur mission is to unlock sustainable growth in organisations and communities by combining data-driven insight, ethical leadership, and innovative development models that create lasting, measurable change."
        },
        {
            title: "Our Mission",
            description: "We build resilient organisations and communities by integrating governance, culture, and technology—ensuring every individual has the opportunity to thrive. As a female-empowered South African advisory firm, we drive transformative change through purpose-led strategy and data-driven leadership, empowering organisations to create sustainable growth while advancing women and youth."
        },
        {
            title: "Our Vision",
            description: "To be a leading force for social equity and sustainable development, using innovation and strategic insight to unlock meaningful change. Through cutting-edge solutions and ethical leadership, we empower organisations to strengthen governance, deepen social impact, and create opportunities for historically disadvantaged groups across all sectors."
        },
        {
            title: "Impact That Matters",
            description: "We champion women empowerment by advancing female leadership and economic participation, while fostering youth development through digital skills, mentorship, and access to opportunity. Our data-driven approach leverages the Social Impact Index Tool (SIIT) to measure real impact, engagement, and sustained productivity—ensuring meaningful change that transforms communities and creates lasting value."
        }
    ];

    const essenceIcons = document.querySelectorAll("#about .icons_list .list_item");
    const essenceTitle = document.getElementById("essence-title");
    const essenceDescription = document.getElementById("essence-description");

    if (essenceIcons.length > 0 && essenceTitle && essenceDescription) {
        // Set first icon as active by default
        essenceIcons[0].classList.add("active-essence");

        essenceIcons.forEach((icon) => {
            icon.addEventListener("click", () => {
                // Remove active class from all icons
                essenceIcons.forEach((i) => i.classList.remove("active-essence"));

                // Add active class to clicked icon
                icon.classList.add("active-essence");

                // Get index from data attribute
                const index = icon.getAttribute("data-index");

                // Update content with fade effect
                essenceTitle.style.opacity = 0;
                essenceDescription.style.opacity = 0;

                setTimeout(() => {
                    if (essenceData[index]) {
                        essenceTitle.textContent = essenceData[index].title;
                        // Preserve line breaks in description
                        essenceDescription.innerHTML = essenceData[index].description.replace(/\n\n/g, '<br><br>');
                    }
                    essenceTitle.style.opacity = 1;
                    essenceDescription.style.opacity = 1;
                }, 300);
            });
        });

        // Add transition styles for smooth update
        essenceTitle.style.transition = "opacity 0.3s ease";
        essenceDescription.style.transition = "opacity 0.3s ease";
    }


    // === MOBILE NAVIGATION SMOOTH SCROLL ===
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    const offcanvasElement = document.getElementById('navOffcanvas');

    if (mobileNavLinks.length > 0 && offcanvasElement) {
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only handle hash links (internal anchors)
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    
                    // Get the target section
                    const targetSection = document.querySelector(href);
                    
                    if (targetSection) {
                        // Close the offcanvas menu using Bootstrap 5 API
                        const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement) || new bootstrap.Offcanvas(offcanvasElement);
                        offcanvasInstance.hide();
                        
                        // Wait for offcanvas to close, then scroll to section
                        setTimeout(() => {
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }, 350);
                    }
                }
                // For external links (like /articlelist), let default behavior occur
            });
        });
    }

    // === BACK TO TOP BUTTON ===
    const backToTopBtn = document.getElementById('backToTop');
    const contactSection = document.getElementById('contact');
    const footer = document.querySelector('.site-footer');

    if (backToTopBtn && contactSection) {
        window.addEventListener('scroll', () => {
            // Show button when user reaches the contact section
            const contactPosition = contactSection.offsetTop;
            const scrollPosition = window.scrollY + window.innerHeight;

            if (scrollPosition >= contactPosition) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }

            // Prevent button from overlapping footer
            if (footer) {
                const footerRect = footer.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                // If footer is visible in viewport
                if (footerRect.top < windowHeight) {
                    // Calculate how much the footer is covering the bottom
                    const overlap = windowHeight - footerRect.top;
                    // Move button up by overlap amount + original bottom (30px)
                    backToTopBtn.style.bottom = (30 + overlap) + 'px';
                } else {
                    backToTopBtn.style.bottom = '30px';
                }
            }
        });
    }

});
