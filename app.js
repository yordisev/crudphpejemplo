$('#dataUpdate').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var numero = button.data('numero') // Extraer la información de atributos de datos
    var id = button.data('id') // Extraer la información de atributos de datos
    var nombre = button.data('nombre') // Extraer la información de atributos de datos
    var moneda = button.data('moneda') // Extraer la información de atributos de datos
    var capital = button.data('capital') // Extraer la información de atributos de datos
    var continente = button.data('continente') // Extraer la información de atributos de datos

    var modal = $(this)
    modal.find('.modal-title').text('Modificar país: ' + nombre)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #numero').val(numero)
    modal.find('.modal-body #nombre').val(nombre)
    modal.find('.modal-body #moneda').val(moneda)
    modal.find('.modal-body #capital').val(capital)
    modal.find('.modal-body #continente').val(continente)
    $('.alert').hide(); //Oculto alert
})