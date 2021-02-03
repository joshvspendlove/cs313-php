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

function changeColor()
{
    var div1 = document.getElementById("div1").parentElement;
    div1.style.background = document.getElementById("color").value;
}


$("#div1button").click(function(){  
$("#div1").css("background-color",$("#color").val());
});


$("#togVis").click(function(){
$("#div3").fadeToggle("slow");
});
