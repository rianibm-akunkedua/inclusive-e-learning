var element = document.getElementById("#text-speak");
var text = element.innerText || element.textContent;
element.innerHTML = text - speak;

var element = document.getElementById("#text-speak");
var text = element.innerText;

function manspeak(obj) {
    responsiveVoice.speak($("#text-speak").text(), "Indonesian Male");
}