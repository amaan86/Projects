const hamburger = document.querySelector(".hamburger");
const links = document.querySelector('.links');
const all = document.querySelectorAll('.nav-links');


hamburger.addEventListener('click', () => {
    links.classList.toggle('open');
    all.forEach(link => {
        link.classList.add('fade');
    });
});
all.forEach(link => {
    link.addEventListener('click', () => {
        links.classList.toggle('open');
    });
});