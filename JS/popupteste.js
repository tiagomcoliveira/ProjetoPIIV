var c = 0;
function Popup(){
  if(c == 0){
    document.getElementById("box").style.display = "block";
    c = 1;
  }
  else{
    document.getElementById("box").style.display = "none";
    c = 0;
  }
}

var btn = document.getElementById('btn');
function remover() {
    document.getElementById('txt').remove();
    this.remove();
};