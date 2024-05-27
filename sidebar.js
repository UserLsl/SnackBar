document.addEventListener('DOMContentLoaded', function() {
    var a = document.querySelectorAll('.nav li a');
    console.log(a);

    a.forEach(element => {
        console.log(element.href + ' = ' + document.URL);
        if (element.href == document.URL) {
            element.classList.add("active");
        } 
    });
});