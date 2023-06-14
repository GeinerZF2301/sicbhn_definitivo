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
    event.preventDefault();
    modalA.style.display = 'block';
    document.body.style.overflow = 'hidden';
});

cerrarA.addEventListener('click', function(){
    modalA.style.display = 'none';
    document.body.style.overflow = 'auto';
});

window.addEventListener('click', function(a){

    if(a.target == flexA){
        modalA.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});

abrirE.addEventListener('click',function(){
    event.preventDefault();
    modalE.style.display = 'block';
    document.body.style.overflow = 'hidden';
});

cerrarE.addEventListener('click', function(){
    modalE.style.display = 'none';
    document.body.style.overflow = 'auto';
});

window.addEventListener('click', function(e){

    if(e.target == flexE){
        modalE.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});



abrirM.addEventListener('click',function(){
    event.preventDefault();
    modalM.style.display = 'block';
    document.body.style.overflow = 'hidden';
});

cerrarM.addEventListener('click', function(){
    modalM.style.display = 'none';
    document.body.style.overflow = 'auto';
});

window.addEventListener('click', function(m){

    if(m.target == flexM){
        modalM.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});
