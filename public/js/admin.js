function MenuToggle() {
    var element = document.querySelector("body");
    element.classList.toggle("open-menu");
}

function Active(e) {
    var el = document.querySelector('#main-nav a.focus');
    if (el !== null) {
        el.classList.remove('active');
    }
    e.target.className = "active";
}
