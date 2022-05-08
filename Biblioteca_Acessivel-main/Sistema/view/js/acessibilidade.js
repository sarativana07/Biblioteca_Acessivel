//Microphone
function getLocalStream() {
   if (window.location.protocol != "https") {
            //window.location = "https://" + window.location.href.substring(window.location.protocol.length, window.location.href.length);
            //window.location.reload();
        }
    
}

navigator.permissions.query({name: 'microphone'})
 .then((permissionObj) => {
  console.log(permissionObj.state);
 })
 .catch((error) => {
  console.log('Got error :', error);
 })


getLocalStream();

var languagueID = 0;
var voices = speechSynthesis.getVoices();
function populateVoiceList() {
    if(typeof speechSynthesis === 'undefined') {
        return;
    }

    voices = speechSynthesis.getVoices();

    for(var i = 0; i < voices.length; i++) {
        if(voices[i].name == "Google português do Brasil"  || voices[i].name == "Microsoft Helia - Portuguese (Portugal)"){
            languagueID = i;
        }
        if(voices[i].default) {
           // console.log("Default");
        }
       // console.log(voices[i].name);

    }
}

populateVoiceList();



if (typeof speechSynthesis !== 'undefined' && speechSynthesis.onvoiceschanged !== undefined) {
    speechSynthesis.onvoiceschanged = populateVoiceList;
}

var iniciou_fala = false;
function speak(message) {
    populateVoiceList();
    var utterance = new SpeechSynthesisUtterance(message);
    utterance.voice = voices[languagueID];
    utterance.lang = voices[languagueID].lang;
    window.speechSynthesis.speak(utterance);
    iniciou_fala = window.speechSynthesis.speaking;

    console.log(languagueID+": id da lingua | iniciou fala :"+iniciou_fala+" | message :"+message);

}

while (iniciou_fala== false){
    speak("Bem vindo a Biblioteca acessivel de Mocambique");
}


var startBtn = document.getElementById("ouvir");


// speech to text
function ouvir(){
    document.getElementById("alert_span").innerHTML = `Controle por voz Activo, Diga Um Comando! Para saber a lista de comandos diga 'Comandos' .`;
    speak("Controle por voz Activo, Diga Um Comando! Para saber a lista de comandos diga 'Comandos' .");

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    let toggleBtn = null;
    if (typeof SpeechRecognition === "undefined") {
        //startBtn.remove();
        document.getElementById("alert_span").innerHTML = "<b>Browser does not support Speech API. Please download latest chrome.<b>";
    } else {
        const recognition = new SpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;
        recognition.lang = "pt-BR";
        recognition.onresult = event => {
            const last = event.results.length - 1;
            const res = event.results[last];
            const text = res[0].transcript;

            if (res.isFinal) {
               // processing.innerHTML = "Processando....";
                document.getElementById("alert_span").innerHTML = "Processando....";

                const response = process(text);
                const p = document.createElement("p");
                p.innerHTML = `Voce Disse: ${text} </br>O Sistem Disse: ${response}`;
                //processing.innerHTML = "";
                document.getElementById("alert_span").innerHTML = `Voce Disse: ${text} | O Sistema Disse: ${response}`;
                //result.appendChild(p);

                // read it out
                speak(response);
                //speechSynthesis.speak(new SpeechSynthesisUtterance(response));


            } else {
             //   processing.innerHTML = `Ouvindo: ${text}`;
                document.getElementById("alert_span").innerHTML = `Ouvindo: ${text}`;
            }
        }
        let listening = true;
        recognition.start();
        //let listening = false;
        /*toggleBtn = () => {
            if (listening) {
                recognition.stop();
                //startBtn.textContent = "Start listening";
            } else {
                recognition.start();
                //startBtn.textContent = "Stop listening";
            }
            listening = !listening;
        };*/
       // startBtn.addEventListener("click", toggleBtn);
    }

}

// processor
function process(rawText) {
    let text = rawText.replace(/\s/g, "");
    text = text.toLowerCase();
    let response = null;
    switch(text) {
        case "procurarlivro":
            response = "ola, tudo bem com voce?"; break;
        case "oi":
            response = "ola, tudo bem com voce?"; break;
        case "comovocêsechama":
            response = "Meu nome é Alice, Sou a sua bibliotecária virtual";  break;
        case "quehorassão":
            response = new Date().toLocaleTimeString(); break;
        case "aceitar":
            response = "Confirmado!"; break;
        case "sair":
            response = "Saindo do Sistema";

        case "próximo":
            proximo();
            break;
        case "como você está":
            response = "estou bem e você";
        case "comandos":
            response = "os comandos sao procurar livro, abrir livro, próximo, anterior, que horas são, como você se chama ,aceitar, sair";  break;
        //toggleBtn();
    }
    if (!response) {
        //window.open(`http://google.com/search?q=${rawText.replace("search", "")}`, "_blank");
        return `Nao Consegui Reconhecer o seu comando ${rawText}`;
    }
    return response;
}
sendEvent = function(sel, step) {
    var sel_event = new CustomEvent('next.m.' + step, {detail: {step: step}});
    window.dispatchEvent(sel_event);
}

var lastTabIndex = 10;
function proximo()
{
    var currentElement = this; // ID set by OnFOcusIn
    var curIndex = currentElement.tabIndex; //get current elements tab index
    if(curIndex == lastTabIndex) { //if we are on the last tabindex, go back to the beginning
        curIndex = 0;
    }
    var tabbables = document.querySelectorAll('[tabindex = "0"]'); //get all tabable elements
    for(var i=0; i<tabbables.length; i++) { //loop through each element
        if(tabbables[i].tabIndex == (curIndex+1)) { //check the tabindex to see if it's the element we want
            tabbables[i].focus(); //if it's the one we want, focus it and exit the loop
            break;
        }
    }
}


