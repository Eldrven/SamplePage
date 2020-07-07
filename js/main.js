//// adding sliding indicator on hover on menu item

var marker = document.querySelector('#marker');
var item = document.querySelectorAll('nav a');

function indicator(navitem) {
    marker.style.left = navitem.offsetLeft + "px";
    marker.style.width = navitem.offsetWidth + "px";

}

item.forEach(a => {
    a.addEventListener('mouseover', (navitem) => {
        indicator(navitem.target);
    })
})

//// Adding class active to active menu elements
var navElements = document.getElementsByClassName('nav-item');


for (var i = 0; i < navElements.length; i++) {
    navElements[i].addEventListener("click", function () {
        var activeMenuItem = document.getElementsByClassName("active");

        if (activeMenuItem.length > 0) {
            activeMenuItem[0].className = activeMenuItem[0].className.replace(" active", "");
        }

        this.className += " active";
    });
}
