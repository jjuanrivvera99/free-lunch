'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable = function() {
		var table = $('#kt_table_plates');

		// begin first table
		dataTable = table.DataTable({
			responsive: true,
			ajax: {
				url: '/plates/datatable',
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
				{data: 'plate_id'},
				{data: 'name'},
				{data: 'description'},
				{data: 'Actions', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {

						let id = full.plate_id;

						let buttons =  `<span class="dropdown">
											<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
												<i class="la la-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">`;

						buttons += `<a class="dropdown-item actions" href="javascript:;" data-toggle="modal" data-target="#kt_modal" data-plate="${id}" data-url="/plates/ingredients"><i class="la la-edit"></i> View Ingredients</a>`;

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
	let id = $(this).data('plate');
	let url = $(this).data('url');

	let data = {
		plate_id: id,
	}

	let success = (response) => {
		$("#ingredients-table").html(response);
	}

	let error = (response) => {
		toastr['error'](response.responseJSON.message);
	}

	ajax.post(url, data, error, success);
});

$(document).ready(function() {
	KTDatatablesDataSourceAjaxClient.init();
});
