document.getElementById("crearhabitacio").onclick = function() {crearhabitacio()};
document.getElementById("crearusuari").onclick = function() {crearusuari()};

function crearhabitacio() {
  document.getElementById("div-crearhabitacio").style.display = 'block';
  document.getElementById("div-crearusuari").style.display = 'none';

}
function crearusuari() {
  document.getElementById("div-crearhabitacio").style.display = 'none';
  document.getElementById("div-crearusuari").style.display = 'block';
}