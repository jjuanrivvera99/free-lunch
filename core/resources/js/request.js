'use strict';

var KTBootstrapSwitch = function () {

    // Private functions
    var demos = function () {
        // minimum setup
        $('[data-switch=true]').bootstrapSwitch({
			onSwitchChange: function(e, state) {
				$("#request-qty").toggle('slow','swing');
			}
		});
    };

    return {
        // public functions
        init: function () {
            demos();
        },
    };
}();

var KTDatatablesDataSourceAjaxClient = function() {

	var initTable = function() {
		var table = $('#kt_table_1');

		// begin first table
		dataTable = table.DataTable({
			responsive: true,
			ajax: {
				url: '/request/list',
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
				{data: 'RequestID'},
				{data: 'User'},
				{data: 'Kitchener'},
				{data: 'Plate'},
				{data: 'Date'},
				{data: 'Status'},
				{data: 'Actions', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {

						let requestID = full.RequestID;

						let buttons =  `<span class="dropdown">
											<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
												<i class="la la-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">`;

						buttons += `<a class="dropdown-item" href="#"><i class="la la-edit"></i> View</a>`;

						if(can('request.assign')){
							buttons += `<a class="dropdown-item assign-to-me" href="#" data-request="${requestID}"><i class="la la-leaf"></i> Assign to me</a>`;
						}

						buttons +=`</div>
							</span>`;
						
						return buttons;
					},
				},
				{
					targets: -2,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Sended', 'class': 'kt-badge--info'},
							2: {'title': 'Assigned', 'class': ' kt-badge--warning'},
							3: {'title': 'Waiting', 'class': ' kt-badge--primary'},
							4: {'title': 'Processing', 'class': ' kt-badge--info'},
							5: {'title': 'Done', 'class': ' kt-badge--success'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
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

$(document).on("click",".assign-to-me",function(e) {
	let requestId = $(this).data('request');

	$.ajax({
		url: '/request/assign',
		type: 'POST',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		data: {
			request_id: requestId,
			request_state_id: 2,
		},
		error: (response) => {
			toastr['error'](response.responseJSON.message);
		}
	});
});

$(document).on("click","#submit-request",function(e){

	let input = $("#request-qty-input");

	let val = 1;

	if(input.is(':visible')){
		if(input.val()){
			val = input.val();
		}else{
			toastr['error']("Value missing");
			return false;
		}
	}

	$.ajax({
		url: '/request/create',
		type: 'POST',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		data: {
			quantity: val
		},
		success: () => {
			toastr['success']('The order was sended');
			$("#kt_modal").modal('hide');
			input.val("");
		},
		error: () => {
			toastr['success']('An error has ocurred');
		}
	});
});

$(document).ready(function() {
	KTDatatablesDataSourceAjaxClient.init();
	KTBootstrapSwitch.init();
});