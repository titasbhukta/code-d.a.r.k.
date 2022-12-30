let codeDARK = localStorage.getItem('codeDARK');
let test = document.querySelector('.code-dark-icon');
const enableCodeDARK = () => {
    document.body.classList.add('codeDARK');
    localStorage.setItem('codeDARK', 'enabled');
}
const disableCodeDARK = () => {
    document.body.classList.remove('codeDARK');
    localStorage.setItem('codeDARK', null);
}
if (codeDARK === 'enabled') {
    enableCodeDARK();
}

$(document).ready(function() {
    $(".code-dark-icon").on("click", function() {
        if ($("body").hasClass("codeDARK")) {
            disableCodeDARK();
        } else {
            enableCodeDARK();
        }
    });
});