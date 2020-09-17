console.log('loading from site.js file');

function toggleMenu() {
    var x = document.getElementById("menu-drop");
    var y = document.getElementById("closed-menu");
    var z = document.getElementById("opened-menu");
    
    if (x.style.display === "block") {
        x.style.display = "none";
        z.style.display = "none";
        y.style.display = "block";
        console.log('toggle menu off');
    } else {
        x.style.display = "block";
        z.style.display = "block";
        y.style.display = "none";
        console.log('toggle menu on');
    }
}
  
// function screenCheck() {
//     var windowWidth = screen.width;
//     var x = document.getElementById("menu-drop");
//     var y = document.getElementById("mobile-menu");
//     var z = document.getElementById("menu_large");

//     if (windowWidth => 808) {
//         x.style.display = "none";
//         y.style.display = "none";
//         z.style.display = "block";
//     } else {
//         x.style.display = "block";
//         y.style.display = "block";
//         z.style.display = "none";
//     }
// }