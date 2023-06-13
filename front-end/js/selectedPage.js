/*const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      navbar = body.querySelector('.navbar-background'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");*/

function changeSelected() {
    var url = window.navigation.currentEntry.url;
    var links = document.links;
    for (let i = 0; i < links.length; i++) {
        if (url == links[i].href) {
            links[i].setAttribute("class", "selected");
        }
    }
}

function asignarEventos() {
    document.addEventListener('DOMContentLoaded', changeSelected);
}
document.addEventListener('readystatechange', asignarEventos);