///////////////////////////HORA E DATA///////////////////////////

setInterval(function () {
  var date = new Date();
  var format = "YYYY-MMM-DD DDD";
  dateConvert(date, format)
}, 1);

function dateConvert(dateobj, format) {
  var year = dateobj.getFullYear();
  var month = ("0" + (dateobj.getMonth() + 1)).slice(-2);
  var date = ("0" + dateobj.getDate()).slice(-2);
  var hours = ("0" + dateobj.getHours()).slice(-2);
  var minutes = ("0" + dateobj.getMinutes()).slice(-2);
  var seconds = ("0" + dateobj.getSeconds()).slice(-2);
  var day = dateobj.getDay();
  var diasem_array = new Array("domingo", "segunda feira", "terça feira", "quarta feira", "quinta feira", "sexta feira", "Sábado");
  var months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
  var converted_date = "";

  switch (format) {
    case "YYYY-MM-DD":
      converted_date = date + " de " + month + ", " + year;
      break;
    case "YYYY-MMM-DD DDD":
      converted_date = date + " de " + months[parseInt(month) - 1] + ", " + year
        + " | " + hours + ":" + minutes + ":" + seconds;
      break;
  }

  //return converted_date;
  // to show it I used innerHTMl in a <p> tag
  document.getElementById("datetime").innerHTML = converted_date;
}


///////////////////////////POPUP REMOVER///////////////////////////

function PopupRemover() {
    document.getElementById("box").style.display = "block";
    document.getElementById("bgbox").style.display = "block";
}

function CloseRemover(){
  document.getElementById("box").style.display = "none";
  document.getElementById("bgbox").style.display = "none";
}

var remover = document.getElementById('remover');
function Remover() {
  document.getElementById("box").style.display = "none";
  document.getElementById("bgbox").style.display = "none";
  document.getElementById('conteudo').remove();
  this.remove();
};

///////////////////////////FILTRAR PESQUISA///////////////////////////

function Filtrar() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filtrar");
  filter = input.value.toUpperCase();
  table = document.getElementById("fltTabela");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

///////////////////////////ORDENAR POR (...)///////////////////////////

function Ordenar(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("fltTabela");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

///////////////////////////VOLTAR À PÁGINA ANTERIOR///////////////////////////

function Voltar() {
  window.history.back();
}

///////////////////////////GUARDAR CONTEÚDO///////////////////////////

/*
var theContent = $('#content2');
 
$('#save').on('click', function(){
  var editedContent   = theContent.html();
  localStorage.newContent = editedContent;
});
*/