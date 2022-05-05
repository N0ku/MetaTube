const dropZone = document.getElementById('dropzone');


dropZone.addEventListener('dragover',(e) =>{
    console.log("dropover")
    e.preventDefault();
})

dropZone.addEventListener('drop',(e)=>{
    console.log("drop")
    e.preventDefault();
    for(let file of e.dataTransfer.files){
        if(file.type = 'video.mp4'){
            console.log(file);
            upload(file);
        }
    }
})
