const inputOperacion = document.getElementById('operador');

const regex = /^[/*+-]]*$/;

inputOperacion.addEventListener('input', () => {
    
    if (!regex.test(inputOperacion.value)) {
      // Si no coincide, puedes eliminar los caracteres no válidos
      inputOperacion.value = '';
    }
});