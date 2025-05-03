document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.section-link');
    let currentSection = null;

    const showSection = (id) => {
        if (currentSection && currentSection.id === id) return;

        // Ocultar sección actual
        if (currentSection) {
            currentSection.classList.remove('active');
        }

        // Mostrar nueva sección
        const nextSection = document.getElementById(id);
        if (nextSection) {
            setTimeout(() => {
                nextSection.classList.add('active');
                currentSection = nextSection;
            }, 100);
        }

        // Marcar enlace activo
        links.forEach(link => {
            const targetId = link.getAttribute('href').substring(1);
            link.classList.toggle('active', targetId === id);
        });

        // Actualizar el hash en la URL
        history.replaceState(null, '', `#${id}`);
    };

    // Escuchar clics en los enlaces
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            showSection(targetId);
        });
    });

    // Mostrar la sección inicial
    const initial = window.location.hash?.substring(1) || 'home';
    showSection(initial);
});
