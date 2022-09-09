
var numbers = [];

// NUMEROS QUE SERÃO RETIRADOS
listOne = []; 


function numberSelecionado(num) {
    if(num > 0 && num <26){
        removeNumeroDaLista(listOne, num);
    }
}

function primeiraList(){
    var base = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
    UmDez = novaList(base, listOne);
}

// REMOVE NUMEROS DA LISTA
function removeNumeroDaLista(list, num) {
    var element = document.getElementById(num);    

    if(!list.includes(num)){

        if(list.length >= 10){  // LIMETE DE 5 NUMERO POR DEZENA
            alert("Escolha 10 números no máximo para retirar!");
        }else{
            list.push(num);  // ADD NA LISTA
            element.classList.toggle("selecionado");
        }     
    }else{
        element.classList.toggle("selecionado");
        for(var i = 0; i < list.length; i++){  // REMOVE DA LISTA
            if ( list[i] === num) { 
                list.splice(i, 1); 
            }
        }
    }
}

// RETORNA LISTA SEM NUMEROS ESCOLHIDOS
function novaList(base, numerosRetirados){
    
    var filterList = base.filter(function(leitura) {
        return numerosRetirados.indexOf(leitura) < 0;
    });

    mistura(filterList);

    numerosEscolhidos = retornaCincoNumber(filterList);

    return numerosEscolhidos;

    //console.log(numerosEscolhidos)
}

// Mistura os numeros
function mistura(arr){  
    for(var i =arr.length-1 ; i>0 ;i--){
        var j = Math.floor( Math.random() * (i + 1) ); //random index
        [arr[i],arr[j]]=[arr[j],arr[i]]; // swap
    }
}

// RETORNA 5 NÚMEROS
function retornaCincoNumber(filterList){
    retorna = [],
    i = 15,
    j = 0;
    while (i--) {
        mistura(filterList);
        j = Math.floor(Math.random() * (i+1));
        retorna.push(filterList[j]);
        filterList.splice(j,1);
    }
    return retorna;
}


function gerarNumeros(){
    primeiraList();

    const retorno = numbers.concat(UmDez).sort((a,b)=>a-b); 

    // VALORES EM ORDEM
    removeClasse();

    let count = retorno.length;

    var i = 0;
    while (i < count) {  // MUDA COR PARA MARCADO
        var element = document.getElementById(retorno[i]);
        element.classList.add("marcado-lotofacil");
        i++;
    }
}

function removeClasse(){ // REMOVE CLASSE MARCADA DA LISTA
    for(var i = 1; i != 26; i++){
        var element = document.getElementById(i);
        element.classList.remove("marcado-lotofacil");
    }    
}

function limpaNumbers(){  // LIMPA NUMEROS 
    numbers = [];
    listOne = []; 

    for(var i = 1; i != 26; i++){  
        var element = document.getElementById(i);
        element.classList.remove("marcado-lotofacil");
        element.classList.remove("selecionado");
    }
}
