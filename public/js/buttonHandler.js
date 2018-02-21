//Define a variable for pointing to a button object
var $button = $('#carPageButton');
//Event handler for if the button is held down via mouse
$button.mousedown(function () {
    //Change the text colour of the current button to blue
    $(this).css('color', '#FF0000');
    //Change the background colour of the button to white
    $(this).css('background-color', 'white');
});
//Event handler for if the button is released via mouse
$button.mouseup(function () {
    //Change the text colour of the current button to white
    $(this).css('color', 'white');
    //Change the background colour of the button to blue
    $(this).css('background-color', '#FF0000');
});
//Event handler for if the mouse cursor leaves the button
$button.mouseleave(function () {
    //Change the text colour of the current button to white
    $(this).css('color', 'white');
    //Change the background colour of the button to blue
    $(this).css('background-color', '#FF0000');
});