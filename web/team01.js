function clickMe(id)
{
    console.log(id)
    var button = document.getElementById(id);
    button.innerHTML = "Thanks for Clicking";
    setInterval(resetButton, 2500, id);
}

function resetButton(id)
{
    var button = document.getElementById(id);
    button.innerHTML = "Click Me";
}
