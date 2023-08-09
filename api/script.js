function addFav() {
    document.getElementById("heartFull").style.display = "block";
    document.getElementById("heartEmpty").style.display = "none";
    }

function delFav() {
    document.getElementById("heartEmpty").style.display = "block";
    document.getElementById("heartFull").style.display = "none";
    }

// window.addEventListener("scroll", function() {
//     const header = document.querySelector(".header");
    
//     if (window.scrollY > 0) {
//         header.style.boxShadow = "0 2px 4px rgba(0, 0, 0, 0.1)";
//     } else {
//         header.style.boxShadow = "none";
//     }
// });