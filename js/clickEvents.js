window.addEventListener('load', function() { 
    var element = document.querySelector('#articleImg');
    addEvent(element);
  });
  
  function addEvent(element){
    element.style.transition = "all .3s linear";
    element.addEventListener('mouseover', (e) => {
        element.style.width = "1000px";
    });
    element.addEventListener('mouseout', (e) => {
        element.style.width = "500px";
    });
  }