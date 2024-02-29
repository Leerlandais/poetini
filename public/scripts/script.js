const screenwidth = document.getElementById("screenwidth");
function displayScreenWidth() { 
    let theWidth = window.innerWidth;
    console.log(theWidth);                                               
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;

}
    displayScreenWidth();

    window.addEventListener('resize', displayScreenWidth); 

    