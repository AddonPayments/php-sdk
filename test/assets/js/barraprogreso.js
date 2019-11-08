// Función de la barra de progreso
window.onscroll = function() {progresoScroll()};

function progresoScroll() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("progreso").style.width = scrolled + "%";
}