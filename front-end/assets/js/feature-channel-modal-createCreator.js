const modalUploadVideo = document.querySelector(".bloc-modal");
 const modalCreationAccount = document.querySelector(".feature-channel-modal-overlay-channel")


function feature_open_accountCreator_function(){
    modalUploadVideo.classList.add("show");
    console.log(modalUploadVideo);
    modalCreationAccount.classList.add("show");


}
function feature_remove_accountCreator_function(){
    modalUploadVideo.classList.remove("show");
     modalCreationAccount.classList.remove("show");
    


}

