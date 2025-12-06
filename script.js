 document.getElementById('year').textContent = new Date().getFullYear();

    // Staggered scroll animation for cards
    const observerOptions = {
      rootMargin: '0px 0px -10% 0px',
      threshold: 0.15
    };

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, observerOptions);

    // Observe individual cards with staggered delays
    document.querySelectorAll('.reveal').forEach((el, index) => {
      el.style.transitionDelay = `${index * 0.15}s`;
      observer.observe(el);
    });

    // Observe sections separately
    document.querySelectorAll('.skill-grid').forEach(el => observer.observe(el));