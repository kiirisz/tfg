function showMessage(event) {
    var selectedButton = event.target.id;
    var number = selectedButton.split("_").pop();
    document.getElementById(selectedButton).previousSibling.previousSibling.setAttribute('id', 'Show');
    var button = document.getElementById(selectedButton);
    button.remove();
    // Function to create the cookie
    createCookie("SelectedMessage", number, "10");
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
    location.reload();
}

function asignarEventos(event){
    const buttons = document.getElementsByClassName("readButton");
    for (let button of buttons) {
        button.addEventListener("click", showMessage);
    }
}

document.addEventListener("readystatechange", asignarEventos(event));