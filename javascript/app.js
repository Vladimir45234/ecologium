const slide = document.querySelectorAll('.slide');
let currentIndex = 0;
const totalSlides = slide.length;
const slides = document.querySelector('.slides');

const prev = document.querySelector(".prev");
const next = document.querySelector(".next");

const button_5 = document.getElementsByClassName("item-button")[0];
const button_6 = document.getElementsByClassName("item-button")[1];
const hamb = document.querySelector(".hamb");
const menu1 = document.querySelector(".nav-links");
const pos = document.querySelector(".menu");
const gerain = document.querySelector("#menus");

const menu = document.getElementById("side-menu");

const windowInnerWidth = document.documentElement.clientWidth;
const scrollbarWidth = parseInt(window.innerWidth) - parseInt(document.documentElement.clientWidth);
const bodyElementHTML = document.getElementsByTagName("body")[0];
const all = document.getElementsByTagName("*")[0];

const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

const modalTrigger1 = document.getElementsByClassName("trigger")[0];
const modalTrigger2 = document.getElementsByClassName("trigger")[1];

const modalWindow1 = document.getElementsByClassName("modalWindow")[0];
const modalWindow2 = document.getElementsByClassName("modalWindow")[1];

const modalBackground1 = document.getElementsByClassName("modalBackground")[0];
const modalBackground2 = document.getElementsByClassName("modalBackground")[1];

const modalClose1 = document.getElementsByClassName("modalClose")[0];
const modalClose2 = document.getElementsByClassName("modalClose")[1];

const modalActive1 = document.getElementsByClassName("modalActive")[0];
const modalActive2 = document.getElementsByClassName("modalActive")[1];

function bodyMargin() {
    bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
}

function updateSliderPosition() {
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}
nextBtn.addEventListener('click', () => {
    if (currentIndex < totalSlides - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateSliderPosition();
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalSlides - 1;
    }
    updateSliderPosition();
});
if (modalTrigger1){
    
    modalTrigger1.addEventListener("click", () => {
    all.style.overflow = "hidden";
    document.getElementById('side-menu').checked = false;
    modalBackground1.style.display = "block";
    modalWindow1.style.display = "block";
    if (modalWindow2){
        modalWindow2.style.display = "none";
    }
    else if (windowInnerWidth <= 768) {
        bodyMargin();
    }

    modalActive1.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
});

modalClose1.addEventListener("click", () => {
    all.style.overflow = "visible";
    modalBackground1.style.display = "none";
    modalBackground2.style.display = "none";
    if (windowInnerWidth <= 768) {
        bodyMargin();
    }
});


modalBackground1.addEventListener("click", function (event) {
    if (event.target === modalBackground1) {
        all.style.overflow = "visible";
        modalBackground1.style.display = "none";
        modalBackground2.style.display = "none";
        if (windowInnerWidth <= 768) {
            bodyMargin();
        }
    }
});
}

if (modalTrigger2){
    modalTrigger2.addEventListener("click", () => {
    all.style.overflow = "hidden";
    document.getElementById('side-menu').checked = false;
    modalBackground2.style.display = "block";
    modalWindow1.style.display = "none";
    if (modalWindow2){
        modalWindow2.style.display = "block";
    }
    if (windowInnerWidth <= 768) {
        bodyMargin();
    }

    modalActive2.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
});
modalClose2.addEventListener("click", () => {
    all.style.overflow = "visible";
    modalBackground2.style.display = "none";
    if (windowInnerWidth <= 768) {
        bodyMargin();
    }
});
modalBackground2.addEventListener("click", function (event) {
    if (event.target === modalBackground2) {
        all.style.overflow = "visible";
        modalBackground1.style.display = "none";
        modalBackground2.style.display = "none";
        if (windowInnerWidth <= 768) {
            bodyMargin();
        }
    }
});
}

