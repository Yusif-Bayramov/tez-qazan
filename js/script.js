const menuBtn = document.querySelector(".menu-icon span");

const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");

menuBtn.onclick = () => {
    items.classList.add("active");
    menuBtn.classList.add("hide");
    cancelBtn.classList.add("show");
}

cancelBtn.onclick = () => {
    items.classList.remove("active");
    menuBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    cancelBtn.style.color = "#ff3d00"
}

let dropdown = document.querySelector(".dropbtn");
let mydropdown = document.querySelector("#myDropdown");
dropdown.addEventListener("click", () => {
    mydropdown.classList.toggle("show")
    dropdown.classList.toggle("active")
});
let rus = document.querySelector(".rus");
rus.addEventListener("click", () => {
    console.log("aa")
})
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}