'use strict';

var KTBootstrapSwitch = function () {

    // Private functions
    var demos = function () {
        // minimum setup
        $('[data-switch=true]').bootstrapSwitch({
			onSwitchChange: function(e, state) {
				$("#request-qty").toggle('slow','swing');
				$(".bootstrap-switch-container").css("width", "350px");
			}
		});

		$(".bootstrap-switch-container").css("width", "350px");
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
				{data: 'request_id'},
				{data: 'user'},
				{data: 'kitchener'},
				{data: 'plate'},
				{data: 'date'},
				{data: 'status'},
				{data: 'actions', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {

						let requestID = full.request_id;

						let buttons =  `<span class="dropdown">
											<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
												<i class="la la-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">`;

						buttons += `<a class="dropdown-item" href="javascript:;"><i class="la la-edit"></i> View</a>`;

						if(can('request.assign') && full.status == 1){
							buttons += `<a class="dropdown-item actions" href="javascript:;" data-url="/request/assign" data-state="2" data-request="${requestID}"><i class="la flaticon-user-add"></i> Assign to me</a>`;
						}

						if(can('request.ingredients') && full.status == 2){
							buttons += `<a class="dropdown-item actions" href="javascript:;" data-url="/request/ingredients" data-state="3" data-request="${requestID}"><i class="fa fa-pizza-slice"></i> Request Ingredients</a>`;
						}

						if(can('request.deliver') && full.status == 3){
							buttons += `<a class="dropdown-item actions" href="javascript:;" data-url="/request/deliver" data-state="4" data-request="${requestID}"><i class="la flaticon-paper-plane-1"></i> Deliver Ingredients</a>`;
						}

						if(can('request.buy')){
							buttons += `<a class="dropdown-item actions" href="javascript:;" data-url="/request/buy" data-state="" data-request="${requestID}"><i class="la la-money"></i> Buy Ingredients</a>`;
						}

						if(can('plate.prepare') && full.status == 4){
							buttons += `<a class="dropdown-item actions" href="javascript:;" data-url="/request/prepare" data-state="5" data-request="${requestID}"><i class="la flaticon2-checkmark"></i> Prepare</a>`;
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
							4: {'title': 'Ready', 'class': ' kt-badge--info'},
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

$(document).on("click",".actions",function(e) {
	let requestId = $(this).data('request');
	let url = $(this).data('url');
	let state = $(this).data('state');
	
	let data = {
		request_id: requestId,
		request_state_id: state,
	}

	let error = (response) => {
		toastr['error'](response.responseJSON.message);
	}

	ajax.post(url, data, error);
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

	let url = '/request/create';
	
	let data = {
		quantity: val
	}

	let error = () => {
		toastr['success']('An error has ocurred');
	}

	let success = () => {
		$("#kt_modal").modal('hide');
		input.val("");
	}

	ajax.post(url, data, error, success);
});

$(document).ready(function() {
	KTDatatablesDataSourceAjaxClient.init();
	KTBootstrapSwitch.init();
});