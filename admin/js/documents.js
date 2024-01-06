function openResidencyModal(citizen) {
    swal({
      title: "Datos del solicitante",
      html: `
        <form>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col">
              <input type="text" class="mdl-textfield__input" disabled placeholder="Solicitante" value="`+citizen+`">
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <a href="#!" class="mdl-button mdl-button--colored mdl-button--info mdl-js-button mdl-js-ripple-effect" onclick="selectCitizen()">
                <i class="material-symbols-outlined">filter_list</i>
              </a>
            </div>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" type="text" id="addressClient2"></textarea>
            <label class="mdl-textfield__label" for="addressClient2">Motivo de solicitud</label>
            <span class="mdl-textfield__error">Invalid address</span>
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
                <input class="mdl-textfield__input cell--9-col" type="text" id="searchInput" style='border: 1px blue;' oninput="doSearch(this)">
            </div>
            <div class="mdl-cell mdl-cell--3-col">
                <a href='#!' class="mdl-button mdl-js-button mdl-button--icon cell-3-col" onclick="doSearch(this)">
                    <i class="material-symbols-outlined">search</i>
                </a>
            </div>
        </div>
        <div style="height: 150px; overflow-x: scroll;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                <thead>
                    <tr>
                        <th style="text-align: center;">Nombre</th>
                        <th style="text-align: center;">Apellido</th>                          
                    </tr>
                </thead>
                <tbody id="lista">
                    <tr>
                        <td style="text-align: center;">Jhosmar</td>
                        <td style="text-align: center;">Suarez</td>
                    </tr>
                    <tr>
                    <td style="text-align: center;">Jhosmar</td>
                    <td style="text-align: center;">Suarez</td>
                    </tr>		
                </tbody>
            </table>
        </div>
        `
    });
}

function doSearch(input){
    const lista = document.getElementById('lista');
    var request = new XMLHttpRequest();
    request.open('POST', './php/searchCitizen.php');
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.onload = function(){
        console.log(request.responseText);
    }
    request.send("nombre="+input.value);
}