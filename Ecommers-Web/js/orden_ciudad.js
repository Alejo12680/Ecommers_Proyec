const ciudadSelect = document.getElementById("ciudad");

const ciudades = ["Leticia", "Medellín", "Arauca", "Barranquilla", "Bogotá", "Cartagena", "Tunja", "Manizales", "Florencia", "Yopal", "Popayán", "Valledupar", "Quibdó", "Montería", "Inírida", "SanJosé", "Neiva", "Rioacha", "SantaMarta", "Villavicencio", "Pasto", "Cúcuta", "Mocoa", "Armenia", "Pereira", "Bucaramanga", "Sincelejo", "Ibagué", "Calí", "Mitú", "PuertoCarreño"];

/* ciudadSelect.value = "Seleccione"; */

ciudadOrder = ciudades.sort();

for (let i = 0; i < ciudadOrder.length; i++) {
    const option = document.createElement("option");
    option.textContent = ciudadOrder[i];
    ciudadSelect.appendChild(option);    
}



