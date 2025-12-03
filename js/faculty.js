function searchFaculty() {
    let input = document.getElementById("search").value.toLowerCase();
    let cards = document.getElementsByClassName("card");

    for (let i = 0; i < cards.length; i++) {
        let name = cards[i].getAttribute("data-name").toLowerCase();
        let spec = cards[i].getAttribute("data-spec").toLowerCase();
        cards[i].style.display = (name.includes(input) || spec.includes(input)) ? "block" : "none";
    }
}

function openModal(id) {
    document.getElementById("modal").style.display = "block";

    let profiles = document.getElementsByClassName("profile");
    for (let p of profiles) p.style.display = "none";

    document.getElementById(id).style.display = "block";
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}

/* ===== MOBILE NAV ===== */
const burger = document.querySelector(".burger");
const navLinks = document.querySelector(".nav-links");
const overlay = document.getElementById("overlay");

burger.addEventListener("click", () => {
    navLinks.classList.add("show");
    overlay.style.display = "block";
});

overlay.addEventListener("click", () => {
    navLinks.classList.remove("show");
    overlay.style.display = "none";
});
