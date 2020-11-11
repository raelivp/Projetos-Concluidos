/**
*
* script do layout
*
* @author Code Universe
*
**/
(function($, URL,Helpers) {

	var form = $('form[name="formContact"]');

	var submitContact = function() {

		$('body').on('click', '#btnSubmitContact', function() {
		var cliente = $('input[name="cliente"]').val();
		var contato = $('input[name="contato"]').val();
		var modelo = $('input[name="modelo"]').val();
		var valor = $('input[name="valor"]').val();
		var obs = $('textarea[name="obs"]').val();

		if(cliente == ''){
			swal({
				type: 'error',
				title: 'Erro!',
				text: 'Preencha nome do cliente.',
			})
			return false;
		}

		if(contato == ''){
			swal({
				type: 'error',
				title: 'Erro!',
				text: 'Preencha contato.',
			})
			return false;
		}

		if(modelo == ''){
			swal({
				type: 'error',
				title: 'Erro!',
				text: 'Informe modelo do veículo.',
			})
			return false;
		}

		if(valor == ''){
			swal({
				type: 'error',
				title: 'Erro!',
				text: 'Informe valo do veículo.',
			})
			return false;
		}

		if(obs == ''){
			swal({
				type: 'error',
				title: 'Erro!',
				text: 'Escreva uma observação.',
			})
			return false;
		}

		$.ajax({
			url: URL + '/submitContact',
			type: 'POST',
			dataType: 'JSON',
			data: form.serialize(),
			complete: function(response) {
				if (response.responseJSON.result) {
					swal({
						title: 'Enviado!',
						text: 'Obrigado por entrar em contato.',
						type: 'sucess',
					}).then(function() {
						window.location.reload();
						return true;
					})
				} else {
					swal({
						title: 'Erro!',
						text: 'Ocorreu um erro',
						type: 'error',
					});
					return false;
				}
				
				
			}
		})

		});

	}

	$( document ).ready(function() {
		submitContact();
	});

})($, URL, Helpers)