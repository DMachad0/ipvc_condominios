$(document).ready(function() {
    var datatable = $('#tableHome').dataTable({
    	"language": {
    		"lengthMenu": "_MENU_"
    	},
		"ajax": {
            "url": "/api/admins",
            "dataSrc": ""
        },
		columns: [
			{ data: 'nome' },
			{ data: 'email' },
			{ data: 'telefone' },
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

	$(".atualizarTabela").click(function(){ 
		datatable.api().ajax.url('/api/' + $(this).data("id")).load();
    });
});