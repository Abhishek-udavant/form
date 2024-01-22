document.addEventListener('DOMContentLoaded', function () {
    var checkbox = document.getElementById('check');
    var navbar = document.querySelector('.navbar');

    checkbox.addEventListener('change', function () {
        navbar.classList.toggle('show', checkbox.checked);
    });
});
