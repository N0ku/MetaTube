const modalUploadVideo = document.querySelector(".bloc-modal");
const modalCreationAccount = document.querySelector(".feature-channel-modal-overlay-channel");


function feature_open_accountCreator_function(){
    modalUploadVideo.classList.add("show");
    modalCreationAccount.classList.add("show");
}

function feature_remove_accountCreator_function(){
    modalUploadVideo.classList.remove("show");
     modalCreationAccount.classList.remove("show");    
}

function feature_create_account(){
 const modalGetAccountName = document.querySelector(".feature-channel-modal-username").value;
 var modalAccountName = document.querySelector(".feature-channel-modal-username");
 if(modalGetAccountName == ""){
    modalAccountName.style.border ="1px solid red";
    console.log(modalAccountName)
 }
 else{
     modalAccountName.style.border ="1px solid black";
     console.log(modalGetAccountName);
 }
 
}

