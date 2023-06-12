function showMessage(event) {
    var selectedButton = event.target.id;
    var number = selectedButton.split("_").pop();
    document.getElementById(selectedButton).previousSibling.previousSibling.setAttribute('id', 'Show');
    var button = document.getElementById(selectedButton);
    button.remove();
    // Function to create the cookie
    createCookie("SelectedMessage", number, "1");
    reloadPage();
}

function createCookie(name, value, time) {
    var expires;
    if (time) {
        var date = new Date();
        date.setTime(date.getTime() + (time * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}

function asignarEventos(event){
    const buttons = document.getElementsByClassName("readButton");
    reloadPage();
    for (let button of buttons) {
        button.addEventListener("click", showMessage);
    }
}

function reloadPage() {
    var script= document.getElementById("script").childNodes[0].data;
    if (document.cookie.split(";")[1]) {
        if (script != "") {
            location.reload();
        }
    }
}

document.addEventListener("readystatechange", asignarEventos(event));