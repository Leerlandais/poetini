const articleWindow = document.querySelectorAll(".articleWindow");



for (i=0; i<articleWindow.length; i++) {
    articleWindow[i].addEventListener('click', spinArticle);
}

function spinArticle () {
    this.classList.toggle("spinIt");

}

function checkLink () {
    alert("good so far");
}
