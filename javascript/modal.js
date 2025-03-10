const modalTrigger1 = document.querySelector(".trigger1");
const modalTrigger2 = document.querySelector(".trigger2");
const modalTrigger3 = document.querySelector(".trigger3");
const modalTrigger4 = document.querySelector(".trigger4");

const modalWindow1 = document.querySelector(".modalWindow1");
const modalWindow2 = document.querySelector(".modalWindow2");
const modalWindow3 = document.querySelector(".modalWindow3");

const modalBackground1 = document.querySelector(".modalBackground1");
const modalBackground2 = document.querySelector(".modalBackground2");
const modalBackground3 = document.querySelector(".modalBackground3");

const modalClose1 = document.querySelector(".modalClose1");
const modalClose2 = document.querySelector(".modalClose2");
const modalClose3 = document.querySelector(".modalClose3");

const modalActive1 = document.querySelector(".modalActive1");
const modalActive2 = document.querySelector(".modalActive2");
const modalActive3 = document.querySelector(".modalActive3");

function bodyMargin() {
    bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
}

if (modalTrigger1){
   modalTrigger1.addEventListener("click", () => {
   document.getElementById('side-menu').checked = false;
   modalBackground3.style.display = "block";
});
   modalClose3.addEventListener("click", () => {
   modalBackground3.style.display = "none";
});
    modalBackground3.addEventListener("click", function (event) {
    if (event.target === modalBackground3) {
        modalBackground3.style.display = "none";
    }
});
}
if (modalTrigger2){
   modalTrigger2.addEventListener("click", () => {
   document.getElementById('side-menu').checked = false;    
   modalBackground2.style.display = "block";
   modalBackground3.style.display = "none";

});
  modalClose2.addEventListener("click", () => {
  modalBackground2.style.display = "none";
});
  modalBackground3.addEventListener("click", function (event) {
    if (event.target === modalBackground3) {
        modalBackground3.style.display = "none";
    }
  });

}
if (modalTrigger3){
   modalTrigger3.addEventListener("click", () => {
   document.getElementById('side-menu').checked = false;
   modalBackground3.style.display = "block";
   modalBackground2.style.display = "none";
});
  modalClose3.addEventListener("click", () => {
  modalBackground3.style.display = "none";
});
  modalBackground3.addEventListener("click", function (event) {
    if (event.target === modalBackground3) {
        modalBackground3.style.display = "none";
        modalTrigger3.classList.remove("active-button");
        modalTrigger2.classList.add("active-button");
    }
});}

if (modalTrigger4){
   modalTrigger4.addEventListener("click", () => {
   document.getElementById('side-menu').checked = false;
   modalBackground1.style.display = "block";
});
   modalClose1.addEventListener("click", () => {
   modalBackground1.style.display = "none";
});
   modalBackground1.addEventListener("click", function (event) {
    if (event.target === modalBackground1) {
        modalBackground1.style.display = "none";
    }
});}





