const button_5 = document.querySelector(".but-1");
const button_6 = document.querySelector(".but-2");
const button_7 = document.querySelector(".button-3");
const button_8 = document.querySelector(".button-4");
const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu-list");
const text_1 = document.querySelector(".p1");
const text_2 = document.querySelector(".p2");
const text_3 = document.querySelector(".p3");
const text_4 = document.querySelector(".p4");
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const slides = document.querySelector('.slides');
const slide = document.querySelectorAll('.slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentIndex = 0;
const totalSlides = slide.length;

function updateSliderPosition() {
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

nextBtn.addEventListener('click', () => {
    if (currentIndex < totalSlides - 1) {
        currentIndex++;
    } else {
        currentIndex = 0; // Возврат к первому слайду
    }
    updateSliderPosition();
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalSlides - 1; // Переход на последний слайд
    }
    updateSliderPosition();
});

burger.addEventListener("click", () => {
   menu.classList.toggle("visible");
});

button_5.addEventListener("click", () =>{
    button_5.classList.add("active-button");
    button_6.classList.remove("active-button");
    button_7.classList.add("active-button");
    button_8.classList.remove("active-button");
});
button_6.addEventListener("click", () =>{
    button_5.classList.remove("active-button");
    button_6.classList.add("active-button");
    button_7.classList.remove("active-button");
    button_8.classList.add("active-button");
});
button_7.addEventListener("click", () =>{
    button_7.classList.add("active-button");
    button_8.classList.remove("active-button");
});
button_8.addEventListener("click", () =>{
    button_7.classList.remove("active-button");
    button_8.classList.add("active-button");
})