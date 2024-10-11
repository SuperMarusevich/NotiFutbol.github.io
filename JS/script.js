document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            alert(`Has hecho clic en el enlace: ${link.textContent}`);
        });
    });
});
