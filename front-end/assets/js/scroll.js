const page = document.querySelector('.page');
const pageContent = document.querySelector('.page-content');
const grid = document.querySelector('.home-video-grid');

console.log("scroll file load")


var pageHeight = page.offsetHeight;

function loadGrid() {
    var text = document.createElement("div");
    text.className = "home-videos-grid";
    for (let index = 0; index < 6; index++) {
        text.appendChild(createVid());
    }
    page.appendChild(text);
}


function createVid() {
    var vidA = document.createElement('a');
    vidA.setAttribute("href", "index.php ? name = Watch & id=<?= $vids[$i] -> id ?>");
    vidA.className = "video-link-home";
    var vidContent = document.createElement('div');
    vidContent.className = "home-video-content";
    var thumbnail = document.createElement('img');
    thumbnail.className = "thumbnail";
    thumbnail.setAttribute("src", "data: image / png; base64,<?= $vids[$i] -> thumbnail ?>");
    var belowContent = document.createElement('div');
    belowContent.className = "below-content";
    var belowContentImg = document.createElement('div');
    belowContentImg.className = "below-content-img";
    var channelImg = document.createElement('img');
    channelImg.className = "video-channel-img";
    channelImg.setAttribute("src", "data:image/png;base64,<?= $creator[0]->channelProfilePicture ?>");
    var belowContentText = document.createElement('div');
    belowContentText.className = "below-content-text";
    var videoTitle = document.createElement('strong');
    videoTitle.className = "video-title";
    var videoChanName = document.createElement('p');
    videoChanName.className = "video-channel-name";
    var vidInfo = document.createElement('div');
    vidInfo.className = "video-infos";
    var numberView = document.createElement('p');
    numberView.className = "video-number-views";
    var dateVideo = document.createElement('p');
    dateVideo.className = "video-date";
    vidInfo.appendChild(numberView);
    vidInfo.appendChild(dateVideo);
    belowContentText.appendChild(videoTitle);
    belowContentText.appendChild(videoChanName);
    belowContentText.appendChild(vidInfo);
    belowContentImg.appendChild(channelImg);
    belowContent.appendChild(belowContentImg);
    belowContent.appendChild(belowContentText);
    vidContent.appendChild(thumbnail);
    vidContent.appendChild(belowContent);
    vidA.appendChild(vidContent);
    return vidA;
}



pageContent.addEventListener('scroll', () => {
    var lastDiv = document.querySelector(".page > div:last-child");
    var lastDivOffset = lastDiv.offsetTop + lastDiv.clientHeight;
    var pageOffset = pageContent.scrollTop + pageContent.clientHeight;

    if (pageOffset > lastDivOffset - 10) {
        setTimeout(loadGrid, 2000)
    }
});