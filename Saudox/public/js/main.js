function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    // adicione um zero na frente de números<10
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('txt').innerHTML=h+":"+m+":"+s;
    t=setTimeout('startTime()',500);
}


function startTime2() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    // adicione um zero na frente de números<10
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('txt2').innerHTML=h+":"+m+":"+s;
    t=setTimeout('startTime2()',500);
}

function checkTime(i) {
    if (i<10)
    {
        i="0" + i;
    }
    return i;
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

// Pega a altura do topnav e coloca como a altura do espaçador, pra o topnav não ficar em cima do resto da pagina.
document.getElementsByClassName("espacador_mesma_altura_top_nav")[0].style.height = document.getElementsByClassName("topnav")[0].getBoundingClientRect().height * 1.5;

// Desabilida o scroll do mouse nos input de tipo number
document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
    document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});


// Permitir apenas numeros nos campos com essa função
function validar_apenas_numeros(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}
// Permitir apenas numeros nos campos com essa função
function validar_apenas_numeros(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

// Permitir apenas numeros nos campos com essa função
function validar_apenas_numeros(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}
// Pega a altura do topnav e coloca como a altura do espaçador, pra o topnav não ficar em cima do resto da pagina.
document.getElementsByClassName("espacador_mesma_altura_top_nav")[0].style.height = document.getElementsByClassName("topnav")[0].getBoundingClientRect().height * 1.5;

// Desabilida o scroll do mouse nos input de tipo number
document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
    document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});

// Pega a altura do topnav e coloca como a altura do espaçador, pra o topnav não ficar em cima do resto da pagina.
document.getElementsByClassName("espacador_mesma_altura_top_nav")[0].style.height = document.getElementsByClassName("topnav")[0].getBoundingClientRect().height * 1.5;

// Desabilida o scroll do mouse nos input de tipo number
document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
    document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});
// Pega a altura do topnav e coloca como a altura do espaçador, pra o topnav não ficar em cima do resto da pagina.
document.getElementsByClassName("espacador_mesma_altura_top_nav")[0].style.height = document.getElementsByClassName("topnav")[0].getBoundingClientRect().height * 1.5;

// Desabilida o scroll do mouse nos input de tipo number
document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
    document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});

// Permitir apenas numeros nos campos com essa função
function validar_apenas_numeros(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}
// Pega a altura do topnav e coloca como a altura do espaçador, pra o topnav não ficar em cima do resto da pagina.
document.getElementsByClassName("espacador_mesma_altura_top_nav")[0].style.height = document.getElementsByClassName("topnav")[0].getBoundingClientRect().height * 1.5;

// Desabilida o scroll do mouse nos input de tipo number
document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
    document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});

// Permitir apenas numeros nos campos com essa função
function validar_apenas_numeros(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}
// Pega a altura do topnav e coloca como a altura do espaçador, pra o topnav não ficar em cima do resto da pagina.
document.getElementsByClassName("espacador_mesma_altura_top_nav")[0].style.height = document.getElementsByClassName("topnav")[0].getBoundingClientRect().height * 1.5;

// Desabilida o scroll do mouse nos input de tipo number
document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
    document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});



function temaEscuro() {
    let bd = document.body;

    if(bd.className == "bg-claro") {
        bd.className = "bg-padrao";
    } else {
        bd.className = "bg-claro";
    }
}


function verAgendamento(linha_tabela) {
    window.location = linha_tabela.attributes["data-href"].nodeValue;
}



function buscarPorNome(tipo_user) {
    let busca = tipo_user == 'paciente'
    ? (document.getElementById('pac').value) : (document.getElementById('prof').value);

    // Aviso quando a string de busca não existir
    if(!busca) {
        alert("Informe algum nome para realizar a busca");
    } else {
        window.location = "/profissional/buscar?buscou=true&tipo_user="+tipo_user+"&tipo_busca=nome&info=" + busca;
    }
}

function scrollFunction() {
    let height_px = 200;
    if (document.body.scrollTop > height_px || document.documentElement.scrollTop > height_px) {
        document.getElementById("to-top").style.display = "block";
    } else {
        document.getElementById("to-top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    // Tempo da animação em ms
    let tempo_subida = 600; //ms

    // Demora um pouco mais pra subir se ele estiver numa altura muito grande
    if($(window).scrollTop() > 10000) {
        tempo_subida = 1000;
    }

    // Animação para subir ao poucos
    $("html, body").animate({ scrollTop: 0 }, tempo_subida);
}
