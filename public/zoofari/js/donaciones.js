let modalA = document.getElementById('Alimentos');
let flexA = document.getElementById('flexAlimentos');
let abrirA = document.getElementById('abrirAlimentos');
let cerrarA = document.getElementById('closeAlimentos');

let modalE = document.getElementById('Especies');
let flexE = document.getElementById('flexEspecies');
let abrirE = document.getElementById('abrirEspecies');
let cerrarE  = document.getElementById('closeEspecies');


let modalM = document.getElementById('Monetarias');
let flexM = document.getElementById('flexMonetarias');
let abrirM = document.getElementById('abrirMonetarias');
let cerrarM = document.getElementById('closeMonetarias');

abrirA.addEventListener('click',function(){
    modalA.style.display = 'block';
});

cerrarA.addEventListener('click', function(){
    modalA.style.display = 'none';
});

window.addEventListener('click', function(a){

    if(a.target == flexA){
        modalA.style.display = 'none';
    }
});

abrirE.addEventListener('click',function(){
    modalE.style.display = 'block';
});

cerrarE.addEventListener('click', function(){
    modalE.style.display = 'none';
});

window.addEventListener('click', function(e){

    if(e.target == flexE){
        modalE.style.display = 'none';
    }
});



abrirM.addEventListener('click',function(){
    modalM.style.display = 'block';
});

cerrarM.addEventListener('click', function(){
    modalM.style.display = 'none';
});

window.addEventListener('click', function(m){

    if(m.target == flexM){
        modalM.style.display = 'none';
    }
});
