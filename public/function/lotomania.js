
var numbers = [];

// NUMEROS QUE SERÃO RETIRADOS
listOne = []; 
listTwo = []; 
listThree = []; 
listFour = [];
listFive = [];
listSix = [];
listSeven = [];
listEight = [];
listNine = [];
listTen = [];


function numberSelecionado(num) {
    if(num > 0 && num <11){
        removeNumeroDaLista(listOne, num);
    }
    if(num > 10 && num <21){
        removeNumeroDaLista(listTwo, num);
    }
    if(num > 20 && num <31){
        removeNumeroDaLista(listThree, num);
    }
    if(num > 30 && num <41){
        removeNumeroDaLista(listFour, num);
    }
    if(num > 40 && num <51){
        removeNumeroDaLista(listFive, num);
    }
    if(num > 50 && num <61){
        removeNumeroDaLista(listSix, num);
    }
    if(num > 60 && num <71){
        removeNumeroDaLista(listSeven, num);
    }
    if(num > 70 && num <81){
        removeNumeroDaLista(listEight, num);
    }
    if(num > 80 && num <91){
        removeNumeroDaLista(listNine, num);
    }
    if(num > 90 && num <101){
        removeNumeroDaLista(listTen, num);
    }
}

function primeiraList(){
    var base = [1,2,3,4,5,6,7,8,9,10];
    UmDez = novaList(base, listOne);
}

function sugundaList(){
    var base = [11,12,13,14,15,16,17,18,19,20];
    OnzeVinte = novaList(base, listTwo);
}

function terceiraList(){
    var base = [21,22,23,24,25,26,27,28,29,30];
    VinteUmTrinta = novaList(base, listThree);
}

function quartaList(){
    var base = [31,32,33,34,35,36,37,38,39,40];
    TrintaUmQuarenta = novaList(base, listFour);
}

function quintaList(){
    var base = [41,42,43,44,45,46,47,48,49,50];
    QuarentaUmCiquenta = novaList(base, listFive);
}

function sextaList(){
    var base = [51,52,53,54,55,56,57,58,59,60];
    CiquentaUmSessenta = novaList(base, listSix);
}

function setimaList(){
    var base = [61,62,63,64,65,66,67,68,69,70];
    SessentaUmSetenta = novaList(base, listSeven);
}

function oitavaList(){
    var base = [71,72,73,74,75,76,77,78,79,80];
    SetentaUmOitenta = novaList(base, listEight);
}

function nonaList(){
    var base = [81,82,83,84,85,86,87,88,89,90];
    OitentaUmNoventa = novaList(base, listNine);
}

function decimaList(){
    var base = [91,92,93,94,95,96,97,98,99,100];
    NoventaUmCem = novaList(base, listTen);
    return NoventaUmCem;
}

// REMOVE NUMEROS DA LISTA
function removeNumeroDaLista(list, num) {
    var element = document.getElementById(num);    

    if(!list.includes(num)){

        if(list.length >= 5){  // LIMETE DE 5 NUMERO POR DEZENA
            alert("Escolha 5 números no máximo de cada dezena!");
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
    i = 5,
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
    sugundaList();
    terceiraList();
    quartaList();
    quintaList();
    sextaList();
    setimaList();
    oitavaList();
    nonaList();
    decimaList();

    const retorno = numbers.concat(UmDez, OnzeVinte, VinteUmTrinta, TrintaUmQuarenta, QuarentaUmCiquenta, 
                                CiquentaUmSessenta, SessentaUmSetenta, SetentaUmOitenta, OitentaUmNoventa, NoventaUmCem).sort((a,b)=>a-b); 
    // VALORES EM ORDEM

    removeClasse();

    let count = retorno.length;

    var i = 0;
    while (i < count) {  // MUDA COR PARA MARCADO
        var element = document.getElementById(retorno[i]);
        element.classList.add("marcado");
        i++;
    }
}

function removeClasse(){ // REMOVE CLASSE MARCADA DA LISTA
    for(var i = 1; i != 101; i++){  
        var element = document.getElementById(i);
        element.classList.remove("marcado");
    }    
}

function limpaNumbers(){  // LIMPA NUMEROS 
    numbers = [];
    listOne = []; 
    listTwo = []; 
    listThree = []; 
    listFour = [];
    listFive = [];
    listSix = [];
    listSeven = [];
    listEight = [];
    listNine = [];
    listTen = [];
    for(var i = 1; i != 101; i++){  
        var element = document.getElementById(i);
        element.classList.remove("marcado");
        element.classList.remove("selecionado");
    }
}
