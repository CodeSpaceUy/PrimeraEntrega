function mostrarContrasenia(idPassword, idIcon){

    let inputPassword = document.getElementById(idPassword);
    let icon = document.getElementById(idIcon);

    if(inputPassword.type == "password" && icon.classList.contains("fa-eye")){
        inputPassword.type = "text";
        icon.classList.replace("fa-eye", "fa-slash");
    }else{
        inputPassword.type = "password";
        icon.classList.replace("fa-slash", "fa-eye");
    }

}



function abrir(){
    let barra = document.getElementById("menu_side");
    if(barra.classList.contains("menu__side") && barra.classList.contains("veri")){
        barra.classList.replace("veri", "menu__side_move");
        
    }else{
        barra.classList.replace("menu__side_move", "veri");
    }
}

