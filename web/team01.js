var resetTimer = null;

function clickMe(id)
{
    var button = document.getElementById(id);
    alert("Clicked!");
    button.innerHTML = "Thanks for Clicking";
    resetTimer = setInterval(resetButton, 5000, id);
}

function resetButton(id)
{
    var button = document.getElementById(id);
    button.innerHTML = "Click Me";
    clearInterval(resetTimer);
}

function changeColor(id)
{
    var parentDiv = document.getElementById(id).parentElement;
    console.log(parentDiv.class)
    parentDiv.style.color = document.getElementById("color").value;
}

