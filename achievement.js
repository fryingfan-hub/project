/* CAROUSEL */
let currentSlide = 0;
const slides = document.querySelectorAll(".carousel-item");

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
}

setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 3500);

/* FILTER GALLERY */
const filter = document.getElementById("yearFilter");
const cards = document.querySelectorAll(".achievement-card");

filter.addEventListener("change", () => {
    const year = filter.value;

    cards.forEach(card => {
        if (year === "all" || card.dataset.year === year) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});

/* HAMBURGER MENU */
const openBtn = document.getElementById("openMenu");
const closeBtn = document.getElementById("closeMenu");
const sideMenu = document.getElementById("sideMenu");
const overlay = document.getElementById("overlay");

openBtn.addEventListener("click", () => {
    sideMenu.style.right = "0";
    overlay.style.display = "block";
});

closeBtn.addEventListener("click", closeMenu);
overlay.addEventListener("click", closeMenu);

function closeMenu() {
    sideMenu.style.right = "-320px";
    overlay.style.display = "none";
}
