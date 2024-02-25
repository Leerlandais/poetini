const articleWindow = document.querySelectorAll(".articleWindow");
const imgSubmit = document.getElementById("imgSubmit");

imgSubmit.addEventListener("click", checkLink);

myForm.addEventListener('submit', function(event) {
    event.preventDefault();
});


for (i=0; i<articleWindow.length; i++) {
    articleWindow[i].addEventListener('click', spinArticle);
}

function spinArticle () {
    this.classList.toggle("spinIt");

}

function checkLink () {
    alert("good so far");
}
