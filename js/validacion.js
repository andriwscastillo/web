function validarCampos()
{
	var nombre = document.frCliente.txtUsuario.value;
	if(document.frCliente.txtUsuario.value.length==0)
	{
		alert("Debe escribir el nombre de usuario")
		document.frCliente.txtUsuario.focus()
		return false
		
	}	
	if(document.frCliente.txtEmail.value.length==0)
	{
		alert("Debe escribir los Apellidos")
		document.frCliente.txtEmail.focus()
		return false
		
	}	
		if(document.frCliente.txtDireccion.value.length==0)
	{
		alert("Favor escriba su Direccion")
		document.frCliente.txtDireccion.focus()
		return false
		
	}
	if(document.frCliente.txtTelefono.selectedIndex==0)
	{
		alert("Debe seleccionar su teléfono")
		document.frCliente.txtTelefono.focus()
		return false
		
	}
	if(document.frCliente.txtOtroContacto.selectedIndex==0)
	{
		alert("Debe seleccionar su otro contactos")
		document.frCliente.txtOtroContacto.focus()
		return false
		
	}
	if(document.frCliente.txtOtroContacto.selectedIndex==0)
	{
		alert("Debe escribir otro contacto")
		document.frCliente.txtOtroContacto.focus()
		return false
	}	
	alert("Su formulario ha sido validado, Bienvenido "+nombre )
}
