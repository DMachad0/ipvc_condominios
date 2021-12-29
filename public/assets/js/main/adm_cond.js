$(document).ready(function() {
	if (document.getElementById("tableHome")) {
		var datatable = $('#tableHome').dataTable({
			"language": {
				"lengthMenu": "_MENU_"
			},
			"ajax": {
				"url": "/api/minhas_habitacoes",
				"dataSrc": ""
			},
			columns: [
				{ data: 'portaria' },
				{ data: 'tipo' },
				{ data: null,
						render: function (data, type, row) {
							return '<a href="/proprietarios/' + data.id_user +'">' + data.nome +'</a>';
					} 
				},
				{ data: null,
						render: function (data, type, row) {
							return '<div class="btn-group dropdown">' +
							'<a class="btn btn-xs btn-success btn-raised" href="detalhes/' + data.id +'">Detalhes</a>' +
							'<button class="btn btn-xs btn-success btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>' +
							'<ul class="dropdown-menu" role="menu">' +
								'<li><a href="editar/' + data.id +'">Editar</a></li>' +
							'</ul>' +
						'</div>';
					} 
				}
			]
		});
		
		$('.dataTables_filter input').attr('placeholder','Procurar...');
	
	
		//DOM Manipulation to move datatable elements integrate to panel
		$('.panel-ctrls').append($('.dataTables_filter').addClass("pull-right")).find("label").addClass("panel-ctrls-center");
		$('.panel-ctrls').append("<i class='separator'></i>");
		$('.panel-ctrls').append($('.dataTables_length').addClass("pull-left")).find("label").addClass("panel-ctrls-center");
	
		$('.panel-footer').append($(".dataTable+.row"));
		$('.dataTables_paginate>ul.pagination').addClass("pull-right m-n");
	} else if (document.getElementById("formNovaHabitacao")) {
		$('#tipoHabitacoes').on('change', function() {
			if (this.value == "outro") {
				bootbox.prompt("Digite o novo tipo de habitação.", function(result) {
					if (result === null) {
						$("#tipoHabitacoes").val($("#tipoHabitacoes option:first").val());
					} else {
						var data = {};
						data.novaHabitacao = result;
						data._method = 'POST';
						$.ajax({
							url: "/api/novaHabitacao",
							type:"POST",
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
							data: {
								'novaHabitacao': result
							},
							success:function(response){
								$("#tipoHabitacoes option[value='outro']").remove();
								$("#tipoHabitacoes").append(new Option(result, response));
								$("#tipoHabitacoes").val($("#tipoHabitacoes option:last").val());
								$("#tipoHabitacoes").append(new Option("Outro", "outro"));
							},
							error: function(error) {
								console.log(error);
							}
						 });
					}
				});
			}
		});

		$("#cc").on("input", function() {           
			var value = $(this).val();
            if (value.length == 8) {

				new PNotify({
					title: 'Informação',
					text: 'A procurar um utilizador com o cartão de cidadão ' + value + '.',
					type: 'info',
					icon: 'ti ti-close',
					styling: 'fontawesome'
				});

				axios.get('/api/proprietario/' + value)
				.then((response) => {
					if (response.data[0]) {
						new PNotify({
							title: 'Informação',
							text: 'O utilizador for encontrado e os dados foram preenchidos.',
							type: 'success',
							icon: 'ti ti-close',
							styling: 'fontawesome'
						});

						$("#nome").val(response.data[0].nome);
						$("#email").val(response.data[0].email);
						$("#telefone").val(response.data[0].telefone);

						$('#nome').prop("readonly", true);
						$("#email").prop("readonly", true);
						$("#telefone").prop("readonly", true);
					} else {
						new PNotify({
							title: 'Informação',
							text: 'Não foi encontrado nenhum utilizador terá de o preencher manualmente.',
							type: 'notice',
							icon: 'ti ti-close',
							styling: 'fontawesome'
						});

						$("#nome").val("");
						$("#email").val("");
						$("#telefone").val("");

						$('#nome').prop("readonly", false);
						$("#email").prop("readonly", false);
						$("#telefone").prop("readonly", false);
					}
				})
				.catch((error) => {
					new PNotify({
						title: 'Oops!',
						text: 'Ocorreu um erro por favor tente mais tarde.',
						type: 'error',
						icon: 'ti ti-close',
						styling: 'fontawesome'
					});
				});
			}
		});
	}
    
});