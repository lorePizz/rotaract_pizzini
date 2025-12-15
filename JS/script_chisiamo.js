
function cambia_anno(id) {

    const annoAttuale = new Date().getFullYear();
    const annoSuccessivo = annoAttuale + 1;

    document.getElementById(id).textContent =
        `Consiglio Direttivo A/R ${annoAttuale}-${annoSuccessivo}`;

}    

cambia_anno("annoConsiglio")

const annoCorrente = new Date().getFullYear();
document.getElementById("annoFinale").textContent = annoCorrente+1;