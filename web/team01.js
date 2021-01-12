var resetTimer = null;

function clickMe(id)
{
    var button = document.getElementById(id);
    button.innerHTML = "Thanks for Clicking";
    resetTimer = setInterval(resetButton, 2500, id);
}

function resetButton(id)
{
    var button = document.getElementById(id);
    button.innerHTML = "Click Me";
    clearInterval(resetTimer);
}
