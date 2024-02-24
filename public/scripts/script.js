const articleWindow = document.querySelectorAll(".articleWindow");


for (i=0; i<articleWindow.length; i++) {
    let articleSpin = articleWindow[i].addEventListener('click', spinArticle);
}

function spinArticle () {
    this.classList.toggle("spinIt");
}

