const modalUploadVideo = document.querySelector(".modal-container");
const modalCreationAccount = document.querySelector(".feature-channel-modal-overlay-uploadVideo")


function feature_open_upload_function(){
    modalUploadVideo.classList.add("show");
    modalCreationAccount.classList.add("show");


}
function feature_remove_upload_function(){
    modalUploadVideo.classList.remove("show");
    modalCreationAccount.classList.remove("show");
    


}


