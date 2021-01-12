function clickMe(id)
{
    var button = document.getElementById(id);
    button.value = "Thanks for Clicking";
    setInterval(resetButton, 2500, id);
}

function resetButton(id)
{
    var button = document.getElementById(id);
    button.value = "Click Me";
}
