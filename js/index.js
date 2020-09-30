function maquina(contenedor,texto,intervalo){
    // Calculamos la longitud del texto
    longitud = texto.length;
    // Obtenemos referencia del div donde se va a alojar el texto.
    cnt = document.getElementById(contenedor);
    var i=0;
    // Creamos el timer
    timer = setInterval(function(){
        // Vamos añadiendo letra por letra y la _ al final.
        cnt.innerHTML = cnt.innerHTML.substr(0,cnt.innerHTML.length-1) + texto.charAt(i) + "_";
        // Si hemos llegado al final del texto..
        if(i >= longitud){
            // Salimos del Timer y quitamos la barra baja (_)
            clearInterval(timer);
            cnt.innerHTML = cnt.innerHTML.substr(0,longitud);
            return true;
        } else {
            // En caso contrario.. seguimos
            i++;
        }},intervalo);
};

var texto = "Programador Web FullStack";
maquina("title_main",texto,100);

window.onload = function() {

    const easeInCubic = function (t) { return t*t*t }   
    const scrollElems = document.getElementsByClassName('scroll');
    
    //console.log(scrollElems);
    const scrollToElem = (start, stamp, duration, scrollEndElemTop, startScrollOffset) => {
        //debugger;
        const runtime = stamp - start;
        let progress = runtime / duration;
        const ease = easeInCubic(progress);
        
        progress = Math.min(progress, 1);
        console.log(startScrollOffset,startScrollOffset + (scrollEndElemTop * ease));
        
        const newScrollOffset = startScrollOffset + (scrollEndElemTop * ease);
        window.scroll(0, startScrollOffset + (scrollEndElemTop * ease));
    
        if(runtime < duration){
          requestAnimationFrame((timestamp) => {
            const stamp = new Date().getTime();
            scrollToElem(start, stamp, duration, scrollEndElemTop, startScrollOffset);
          })
        }
      }
    
    for(let i=0; i<scrollElems.length; i++){
      const elem = scrollElems[i];
      
      elem.addEventListener('click',function(e) {
        e.preventDefault();
        const scrollElemId = e.target.href.split('#')[1];
        const scrollEndElem = document.getElementById(scrollElemId);
        
        const anim = requestAnimationFrame(() => {
          const stamp = new Date().getTime();
          const duration = 1200;
          const start = stamp;
              
          const startScrollOffset = window.pageYOffset;
    
          const scrollEndElemTop = scrollEndElem.getBoundingClientRect().top;
                
          scrollToElem(start, stamp, duration, scrollEndElemTop, startScrollOffset);
          // scrollToElem(scrollEndElemTop);
          })
        })
      }
    }