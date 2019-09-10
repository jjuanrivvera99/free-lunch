'use strict';

var KTBootstrapSwitch = function () {

    // Private functions
    var demos = function () {
        // minimum setup
        $('[data-switch=true]').bootstrapSwitch();
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
		table.DataTable({
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
						return `
                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>`;
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

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxClient.init();
	KTBootstrapSwitch.init();
});