document.addEventListener('DOMContentLoaded', function() {
    var a = document.querySelectorAll('.nav li a');

    a.forEach(element => {
        if (new URL(element.href).pathname == new URL(document.URL).pathname) {
            element.classList.add("active");
        } 
    });
});