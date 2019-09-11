/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/request.js":
/*!*********************************!*\
  !*** ./resources/js/request.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var KTBootstrapSwitch = function () {
  // Private functions
  var demos = function demos() {
    // minimum setup
    $('[data-switch=true]').bootstrapSwitch({
      onSwitchChange: function onSwitchChange(e, state) {
        $("#request-qty").toggle('slow', 'swing');
      }
    });
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}();

var KTDatatablesDataSourceAjaxClient = function () {
  var initTable = function initTable() {
    var table = $('#kt_table_1'); // begin first table

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
            perpage: 15
          }
        }
      },
      sAjaxDataProp: "data",
      columns: [{
        data: 'RequestID'
      }, {
        data: 'User'
      }, {
        data: 'Kitchener'
      }, {
        data: 'Plate'
      }, {
        data: 'Date'
      }, {
        data: 'Status'
      }, {
        data: 'Actions',
        responsivePriority: -1
      }],
      columnDefs: [{
        targets: -1,
        title: 'Actions',
        orderable: false,
        render: function render(data, type, full, meta) {
          var requestID = full.RequestID;
          var buttons = "<span class=\"dropdown\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-clean btn-icon btn-icon-md\" data-toggle=\"dropdown\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-ellipsis-h\"></i>\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">";
          buttons += "<a class=\"dropdown-item\" href=\"#\"><i class=\"la la-edit\"></i> View</a>";

          if (can('request.assign')) {
            buttons += "<a class=\"dropdown-item assign-to-me\" href=\"#\" data-request=\"".concat(requestID, "\"><i class=\"la la-leaf\"></i> Assign to me</a>");
          }

          buttons += "</div>\n\t\t\t\t\t\t\t</span>";
          return buttons;
        }
      }, {
        targets: -2,
        render: function render(data, type, full, meta) {
          var status = {
            1: {
              'title': 'Sended',
              'class': 'kt-badge--info'
            },
            2: {
              'title': 'Assigned',
              'class': ' kt-badge--warning'
            },
            3: {
              'title': 'Waiting',
              'class': ' kt-badge--primary'
            },
            4: {
              'title': 'Processing',
              'class': ' kt-badge--info'
            },
            5: {
              'title': 'Done',
              'class': ' kt-badge--success'
            }
          };

          if (typeof status[data] === 'undefined') {
            return data;
          }

          return '<span class="kt-badge ' + status[data]["class"] + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
        }
      }]
    });
  };

  return {
    //main function to initiate the module
    init: function init() {
      initTable();
    }
  };
}();

$(document).on("click", ".assign-to-me", function (e) {
  var requestId = $(this).data('request');
  $.ajax({
    url: '/request/assign',
    type: 'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
      request_id: requestId,
      request_state_id: 2
    },
    error: function error(response) {
      toastr['error'](response.responseJSON.message);
    }
  });
});
$(document).on("click", "#submit-request", function (e) {
  var input = $("#request-qty-input");
  var val = 1;

  if (input.is(':visible')) {
    if (input.val()) {
      val = input.val();
    } else {
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
    success: function success() {
      toastr['success']('The order was sended');
      $("#kt_modal").modal('hide');
      input.val("");
    },
    error: function error() {
      toastr['success']('An error has ocurred');
    }
  });
});
$(document).ready(function () {
  KTDatatablesDataSourceAjaxClient.init();
  KTBootstrapSwitch.init();
});

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/request.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/resources/js/request.js */"./resources/js/request.js");


/***/ })

/******/ });