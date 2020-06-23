$(document).ready(function(){
    $('.parallax').parallax();
    $('select').formSelect();
});

function copyToClip(el) {
    function listener(e) {
        e.clipboardData.setData("text/plain", el.innerText);
        e.clipboardData.setData("text/html", el.innerHTML);
        // https://w3c.github.io/clipboard-apis/#override-copy
        e.preventDefault();
    }
    document.addEventListener("copy", listener);
    document.execCommand("copy");
    document.removeEventListener("copy", listener);
}