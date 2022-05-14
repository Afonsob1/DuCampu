
function disappear(element){
    element.style.display = 'none';
}

function appear(element){
    element.style.display = '';
}
var id = 0;

function expandSearchBar(){
    const ANIMATION_TIME = 1; // secounds
    let velocity = 10;

    const nav_itens = document.querySelectorAll('.nav-links ul li:not(:last-child)');
    const search_bar = document.querySelector('#search');
    const search_check = document.querySelector('#lupa');

    if(search_check.checked){
        setTimeout(aparecerMenu, 200)
    }else{
        
        setTimeout(desaparecerMenu, 0)
    }

    function desaparecerMenu() {
        // fazer desaparecer o menu 
        for(let item of nav_itens)
            disappear(item)

        // mostrar search_bar
        //search_bar.style.visibility = "visible"
        search_bar.parentElement.style.width = "100%";
    }

    function aparecerMenu() {
        // fazer menu aparecer
        search_bar.parentElement.style.width = "";
        for(let item of nav_itens)
            appear(item)

    }

    


}
