!function(t){var e={};function n(a){if(e[a])return e[a].exports;var r=e[a]={i:a,l:!1,exports:{}};return t[a].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,a){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(a,r,function(e){return t[e]}.bind(null,r));return a},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=40)}({40:function(t,e,n){t.exports=n(41)},41:function(t,e,n){"use strict";var a={init:function(){var t;t=$("#kt_table_grocery"),dataTable=t.DataTable({responsive:!0,ajax:{url:"/grocery/datatable",type:"POST",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},data:{pagination:{perpage:15}}},sAjaxDataProp:"data",columns:[{data:"ingredient_id"},{data:"name"},{data:"description"},{data:"quantity"},{data:"Actions",responsivePriority:-1}],columnDefs:[{targets:-1,title:"Actions",orderable:!1,render:function(t,e,n,a){var r=n.name,o='<span class="dropdown">\n\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class="la la-ellipsis-h"></i>\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t<div class="dropdown-menu dropdown-menu-right">';return o+='<a class="dropdown-item actions" href="javascript:;" data-name="'.concat(r,'" data-url="grocery/buy"><i class="la la-money"></i> Buy</a>'),o+="</div>\n\t\t\t\t\t\t\t</span>"}}]})}};$(document).on("click",".actions",function(t){var e=$(this).data("name"),n=$(this).data("url"),a={ingredient_name:e};ajax.post(n,a,function(t){toastr.error(t.responseJSON.message)})}),$(document).ready(function(){a.init()})}});