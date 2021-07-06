function myFunction() {
    setTimeout(showPage, 2);
}
function showPage() {
    document.getElementById("load").style.display = "none";
}

function goBack() {
    window.history.back();
}
