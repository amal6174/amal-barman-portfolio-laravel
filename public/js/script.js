document.querySelectorAll('.side-panel a').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(link.getAttribute('href'))
            .scrollIntoView({ behavior: 'smooth' });
    });
});
const img = document.querySelector('.hero-img');

document.addEventListener('mousemove', e => {
    const x = (window.innerWidth / 2 - e.pageX) / 25;
    const y = (window.innerHeight / 2 - e.pageY) / 25;

    img.style.transform = `
        perspective(1000px)
        rotateY(${x}deg)
        rotateX(${y}deg)
        scale(1.05)
    `;
});


const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".side-panel a");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 200) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });
});


const skillCards = document.querySelectorAll('.skill-card');

window.addEventListener('scroll', () => {
    skillCards.forEach(card => {
        const top = card.getBoundingClientRect().top;
        if (top < window.innerHeight - 100) {
            card.classList.add('show');
        }
    });
});

const contactCards = document.querySelectorAll('.contact-card');

window.addEventListener('scroll', () => {
    contactCards.forEach(card => {
        const top = card.getBoundingClientRect().top;
        if (top < window.innerHeight - 100) {
            card.classList.add('show');
        }
    });
});


const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("show");
});




