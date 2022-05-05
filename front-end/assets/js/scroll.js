console.log("scroll file load")


const page = document.querySelector('.page');
const pageContent = document.querySelector('.page-content');
const grid = document.querySelector('.home-video-grid');



var pageHeight = page.offsetHeight;


function loadGrid() {
    for (let index = 0; index < 6; index++) {
        grid.appendChild(createVid());
    }
}




function createVid() {
    var thumbnail = document.createElement('img');
    thumbnail.className = "thumbnail";
    thumbnail.setAttribute("src", "data: image / png; base64,<?= $vids[$someVar]->thumbnail ?>");
    return thumbnail;
}

pageContent.addEventListener('scroll', () => {
    var lastDiv = document.querySelector(".page > div:last-child");
    var lastDivOffset = lastDiv.offsetTop + lastDiv.clientHeight;
    var pageOffset = pageContent.scrollTop + pageContent.clientHeight;

    if (pageOffset > lastDivOffset - 10) {
        /* setTimeout(loadGrid, 2000) */
        fetch("front-end/views/components/video.php")
            .then(response => {
                console.log(response)
            });
    }
});
