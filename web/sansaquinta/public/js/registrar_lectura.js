
const cargarMedidas = async()=>{
    let resultado = await axios.get("api/medidas/get");
    let medidas = resultado.data;

    let medidaSelect = document.querySelector('#tipoMedida-select');
    medidaSelect.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcasSelect.appendChild(option);
    });
};

cargarMedidas();