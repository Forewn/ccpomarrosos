function openResidencyModal(citizen, citizenid) {
    swal({
      title: "Datos del solicitante",
      html: `
        <form>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col">
              <input type="text" id="solicitante" class="mdl-textfield__input" disabled placeholder="Solicitante" value="`+citizen+`" required>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <a href="#!" class="mdl-button mdl-button--colored mdl-button--info mdl-js-button mdl-js-ripple-effect" onclick="selectCitizen()">
                <i class="material-symbols-outlined">filter_list</i>
              </a> 
            </div>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" type="text" id="motivo" required></textarea>
            <label class="mdl-textfield__label" for="motivo">Motivo de solicitud</label>
            <span class="mdl-textfield__error">motivo invalido</span>
          </div>
        </form>
      `
    },
    function(isConfirm) {
      if (isConfirm) {
        if(document.getElementById('solicitante').value != ""){
          if(document.getElementById('motivo').value != ""){
          
            window.location= `./carta_residencia.php?id=${citizenid}&solicitud=${document.getElementById('motivo').value}`; 
          }
          else{
            alert('El motivo de su solicitud es obligatorio');
          }
        }
        else{
          alert('Es obligatorio indicar los datos del solicitante');
        }
      }
    });
  }

function openAvalModal(bussiness, bussinessID){
  swal({
    title: "Datos de la empresa solicitante",
    html: `
        <form>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col">
              <input type="text" id="solicitante" class="mdl-textfield__input" disabled placeholder="Solicitante" value="`+bussiness+`" required>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <a href="#!" class="mdl-button mdl-button--colored mdl-button--info mdl-js-button mdl-js-ripple-effect" onclick="selectBussiness()">
                <i class="material-symbols-outlined">filter_list</i>
              </a> 
            </div>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" type="text" id="motivo" required></textarea>
            <label class="mdl-textfield__label" for="motivo">Motivo de solicitud</label>
            <span class="mdl-textfield__error">motivo invalido</span>
          </div>
        </form>
        `
  })
}

function selectCitizen(){
    swal({
        title: "Seleccionar solicitante:",
        width: '800px',
        grow: 'fullscreen',
        html: `
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col">
                <input class="mdl-textfield__input cell--9-col" type="text" id="searchInput" style='border: 1px blue;' oninput="doSearchCitizen(this)">
            </div>
            <div class="mdl-cell mdl-cell--3-col">
                <a href='#!' value="" class="mdl-button mdl-js-button mdl-button--icon cell-3-col" onclick="doSearchCitizen(document.getElementById('searchInput'))">
                    <i class="material-symbols-outlined">search</i>
                </a>
            </div>
        </div>
        <div style="max-height: 60vh; overflow-x: scroll;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                <thead>
                    <tr>
                        <th style="text-align: center;">Nombre</th>
                        <th style="text-align: center;">Apellido</th>                          
                    </tr>
                </thead>
                <tbody id="lista">
                    	
                </tbody>
            </table>
        </div>
        `
    });
}

function selectBussiness(){
  swal({
    title: "Seleccionar solicitante:",
    width: '800px',
    grow: 'fullscreen',
    html: `
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--9-col">
            <input class="mdl-textfield__input cell--9-col" type="text" id="searchInput" style='border: 1px blue;' oninput="doSearchBussiness(this)">
        </div>
        <div class="mdl-cell mdl-cell--3-col">
            <a href='#!' value="" class="mdl-button mdl-js-button mdl-button--icon cell-3-col" onclick="doSearchBussiness(document.getElementById('searchInput'))">
                <i class="material-symbols-outlined">search</i>
            </a>
        </div>
    </div>
    <div style="max-height: 60vh; overflow-x: scroll;">
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
            <thead>
                <tr>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">Apellido</th>                          
                </tr>
            </thead>
            <tbody id="lista">
                  
            </tbody>
        </table>
    </div>
    `
});
}

function doSearchCitizen(input){
    const lista = document.getElementById('lista');
    var request = new XMLHttpRequest();
    request.open('POST', './php/searchCitizen.php');
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.onload = function(){
        table = buildTable(JSON.parse(request.responseText));
        lista.innerHTML = table;
    }
    request.send("nombre="+input.value);
}

function doSearchBussiness(input){
  const lista = document.getElementById('lista');
  // var request = new XMLHttpRequest();
  // request.open('POST', './php/searchCitizen.php');
  // request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  // request.onload = function(){
  //     table = buildTable(JSON.parse(request.responseText));
  //     lista.innerHTML = table;
  // }
  // request.send("nombre="+input.value);
}

function buildTable(data) {
  var string = "";
  data.forEach(persona => {
    string += "<tr data-persona='" + JSON.stringify(persona) + "' onclick='saveData(this)'>";
    string += "<td>" + persona.first_name + " " + persona.second_name + "</td>";
    string += "<td>" + persona.last_name + "</td>";
    string += "</tr>";
  });

  return string;
}

function saveData(row){
  var data = JSON.parse(row.dataset.persona)
  openResidencyModal(data.first_name, data.id);
}
