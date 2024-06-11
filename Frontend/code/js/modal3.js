// Obtener elementos
var modalPedido = document.getElementById('modalPedido');
var modalContentPedido = document.querySelector('.modal-content-pedido');
var misPedidosBtn = document.getElementById('misPedidosBtn');
var misPedidosContent = document.getElementById('misPedidosContent');

// Cuando se hace clic en el botón "Mis pedidos", mostrar el modal
misPedidosBtn.addEventListener('click', function() {
  modalPedido.style.display = 'block';
  // Aquí podrías cargar el contenido de los pedidos en el modal
  var misPedidos = JSON.parse(localStorage.getItem('misPedidos')) || [];
  misPedidosContent.innerHTML = ''; // Vacía el contenido previo
  misPedidos.forEach(function(pedido) {
    var p = document.createElement('p');
    p.textContent = pedido.nombre + ' - ' + pedido.precio;
    misPedidosContent.appendChild(p);
  });
});

// Cuando se hace clic en la 'x', cerrar el modal
modalContentPedido.querySelector('.close-pedido').addEventListener('click', function() {
  modalPedido.style.display = 'none';
});

// Cuando se hace clic fuera del modal, cerrarlo también
window.addEventListener('click', function(event) {
  if (event.target === modalPedido) {
    modalPedido.style.display = 'none';
  }
});
