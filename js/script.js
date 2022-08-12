function startTimer(duration) {

    var timeout = setTimeout(function() {
        var time = duration;
        var i = 1;
        var k = ((i / duration) * 100);
        var l = 100 - k;
        i++;
        document.getElementById("c1").style.strokeDasharray = [l, k];
        document.getElementById("c2").style.strokeDasharray = [k, l];
        document.getElementById("c1").style.strokeDashoffset = l;
        document.getElementById("counterText").innerHTML = duration;
        var interval = setInterval(function() {
            if (i > time) {
                clearInterval(interval);
                clearTimeout(timeout);
                return;
            }
            k = ((i / duration) * 100);
            l = 100 - k;
            document.getElementById("c1").style.strokeDasharray = [l, k];
            document.getElementById("c2").style.strokeDasharray = [k, l];
            document.getElementById("c1").style.strokeDashoffset = l;
            console.log(k, l);
            document.getElementById("counterText").innerHTML = (duration + 0) - i;
            i++;
        }, 1000);
    }, 0);
}
startTimer(5);
const menuBtn = document.querySelector(".menu-icon span");

const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const li = document.querySelectorAll(".nav-items li");
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
for (let lis of li) {
    lis.onclick = () => {
        items.classList.remove("active");
        cancelBtn.classList.remove("show");
        menuBtn.classList.remove("hide");
    }
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