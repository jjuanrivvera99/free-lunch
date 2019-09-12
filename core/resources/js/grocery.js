'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable = function() {
		var table = $('#kt_table_grocery');

		// begin first table
		dataTable = table.DataTable({
			responsive: true,
			ajax: {
				url: '/grocery/datatable',
				type: 'POST',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				data: {
					pagination: {
						perpage: 15,
					},
				},
			},
			sAjaxDataProp: "data",
			columns: [
				{data: 'ingredient_id'},
				{data: 'name'},
				{data: 'description'},
				{data: 'quantity'},
				{data: 'Actions', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {

						let name = full.name;

						let buttons =  `<span class="dropdown">
											<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
												<i class="la la-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">`;

						buttons += `<a class="dropdown-item actions" href="javascript:;" data-name="${name}" data-url="grocery/buy"><i class="la la-money"></i> Buy</a>`;

						buttons +=`</div>
							</span>`;
						
						return buttons;
					},
				},
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable();
		},

	};

}();

$(document).on("click",".actions",function(e) {
	let ingredient_name = $(this).data('name');
	let url = $(this).data('url');
	
	let data = {
		ingredient_name: ingredient_name,
	}

	let error = (response) => {
		toastr['error'](response.responseJSON.message);
	}

	ajax.post(url, data, error);
});

$(document).ready(function() {
	KTDatatablesDataSourceAjaxClient.init();
});