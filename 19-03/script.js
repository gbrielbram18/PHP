//variaveis
const nome = document.querySelector("#nome");
const button = document.querySelector("#button") ;
const lista = document.querySelector(".lista");

//criar função
function cadUser(event){
    event.preventDefault();
    const inputValue = nome.value;
    const templateHTML = `<li>${inputValue}</li>`;

    lista.innerHTML + templateHTML;

    //limpar campos
    nome.value="";
    

} 



