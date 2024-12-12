var $table = $('#table')
var $remove = $('#remove')
var selections = []

function getIdSelections() {
	return $.map($table.bootstrapTable('getSelections'), function (row) {
		return row.id
	})
}

function responseHandler(res) {
	$.each(res.rows, function (i, row) {
		row.state = $.inArray(row.id, selections) !== -1
	})
	return res
}

function detailFormatter(index, row) {
	var html = []
	$.each(row, function (key, value) {
		html.push('<p><b>' + key + ':</b> ' + value + '</p>')
	})
	return html.join('')
}

function operateFormatter(value, row, index) {
	return [
		'<button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>',
		'<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Apri</a><a class="dropdown-item" href="#">Scheda</a><a class="dropdown-item" href="#">Cancella</a></div>'
	].join('')
}

window.operateEvents = {
	'click .like': function (e, value, row, index) {
		alert('You click like action, row: ' + JSON.stringify(row))
	},
	'click .remove': function (e, value, row, index) {
		$table.bootstrapTable('remove', {
			field: 'id',
			values: [row.id]
		})
	}
}

// function totalTextFormatter(data) {
//   return 'Total'
// }

// function totalNameFormatter(data) {
//   return data.length
// }

// function totalPriceFormatter(data) {
//   var field = this.field
//   return '$' + data.map(function (row) {
//     return +row[field].substring(1)
//   }).reduce(function (sum, i) {
//     return sum + i
//   }, 0)
// }

var $table = $('#table')

$(function () {
	var data = [
		{
			'fname': 'Andrei ',
			'lname': 'Masharin',
			'type': 'Owner, Tenant',
			'phone': '777-444-6556',
			'unit': '432',
			'community': 'Los Alisos',
			'address': '2400 Harbor Boulevard ',

		},
		{
			'fname': 'Anje',
			'lname': 'Keizer',
			'type': 'N/A',
			'phone': '713-810-8418',
			'unit': '343',
			'community': 'Cameron',
			'address': '3848 Michael Street',

		},
		{
			'fname': 'Arina',
			'lname': 'Belomestnykh',
			'type': 'Owner, Tenant',
			'phone': '937-755-9651',
			'unit': '454',
			'community': 'Fort Kent',
			'address': '1918  Crim Lane',

		},
		{
			'fname': 'Darius',
			'lname': 'Cummings',
			'type': 'N/A',
			'phone': '937-755-9651',
			'unit': '123',
			'community': 'Dennehotso',
			'address': '3848  Michael Street',

		},
		{
			'fname': 'Francisco',
			'lname': 'Maia',
			'type': 'Owner, Tenant',
			'phone': '937-755-9651',
			'unit': '565',
			'community': 'Cameron',
			'address': '3848 Michael Street',

		},
		{
			'fname': 'Chinelo',
			'lname': 'Chyke',
			'type': 'N/A',
			'phone': '937-755-9651',
			'unit': '545',
			'community': 'Dennehotso',
			'address': '3848 Michael Street',

		}, {
			'fname': 'Andrei ',
			'lname': 'Masharin',
			'type': 'Owner, Tenant',
			'phone': '777-444-6556',
			'unit': '432',
			'community': 'Los Alisos',
			'address': '2400 Harbor Boulevard ',

		},
		{
			'fname': 'Anje',
			'lname': 'Keizer',
			'type': 'N/A',
			'phone': '713-810-8418',
			'unit': '343',
			'community': 'Cameron',
			'address': '3848 Michael Street',

		},
		{
			'fname': 'Arina',
			'lname': 'Belomestnykh',
			'type': 'Owner, Tenant',
			'phone': '937-755-9651',
			'unit': '454',
			'community': 'Fort Kent',
			'address': '1918  Crim Lane',

		},
		{
			'fname': 'Darius',
			'lname': 'Cummings',
			'type': 'N/A',
			'phone': '937-755-9651',
			'unit': '123',
			'community': 'Dennehotso',
			'address': '3848  Michael Street',

		},
		{
			'fname': 'Francisco',
			'lname': 'Maia',
			'type': 'Owner, Tenant',
			'phone': '937-755-9651',
			'unit': '565',
			'community': 'Cameron',
			'address': '3848 Michael Street',

		},
		{
			'fname': 'Chinelo',
			'lname': 'Chyke',
			'type': 'N/A',
			'phone': '937-755-9651',
			'unit': '545',
			'community': 'Dennehotso',
			'address': '3848 Michael Street',

		}, {
			'fname': 'Andrei ',
			'lname': 'Masharin',
			'type': 'Owner, Tenant',
			'phone': '777-444-6556',
			'unit': '432',
			'community': 'Los Alisos',
			'address': '2400 Harbor Boulevard ',

		},
		{
			'fname': 'Anje',
			'lname': 'Keizer',
			'type': 'N/A',
			'phone': '713-810-8418',
			'unit': '343',
			'community': 'Cameron',
			'address': '3848 Michael Street',

		},
		{
			'fname': 'Arina',
			'lname': 'Belomestnykh',
			'type': 'Owner, Tenant',
			'phone': '937-755-9651',
			'unit': '454',
			'community': 'Fort Kent',
			'address': '1918  Crim Lane',

		},
		{
			'fname': 'Darius',
			'lname': 'Cummings',
			'type': 'N/A',
			'phone': '937-755-9651',
			'unit': '123',
			'community': 'Dennehotso',
			'address': '3848  Michael Street',

		},
		{
			'fname': 'Francisco',
			'lname': 'Maia',
			'type': 'Owner, Tenant',
			'phone': '937-755-9651',
			'unit': '565',
			'community': 'Cameron',
			'address': '3848 Michael Street',

		}


	]

	$table.bootstrapTable({ data: data })
	$table.bootstrapTable('updateFormatText', 'formatShowingRows', 'Showing')
})

// Events
$('.dropdown-container')
	.on('click', '.dropdown-button', function () {
		$(this).siblings('.dropdown-list').toggle();
	})
	.on('input', '.dropdown-search', function () {
		var target = $(this);
		var dropdownList = target.closest('.dropdown-list');
		var search = target.val().toLowerCase();

		if (!search) {
			dropdownList.find('li').show();
			return false;
		}

		dropdownList.find('li').each(function () {
			var text = $(this).text().toLowerCase();
			var match = text.indexOf(search) > -1;
			$(this).toggle(match);
		});
	})
	.on('change', '[type="checkbox"]', function () {
		var container = $(this).closest('.dropdown-container');
		var numChecked = container.find('[type="checkbox"]:checked').length;
		container.find('.quantity').text(numChecked || 'Any');
	});



$(document).ready(function () {

	var seachHtml = "";

	var checkBoxIdNoPart = 0;
	$("table.table-bordered thead tr th div.th-inner").each(function () {
		checkBoxIdNoPart++;
		seachHtml +=
			'<input class="checkBoxClass"  value=' + checkBoxIdNoPart + ' type="checkbox">' +
			'<label for="<%= abbreviation %>">' + $(this).html() + '</label><br>';
	});

	$('.dropdown-list').append(seachHtml);

	$("#search_input").keyup(function () {
		var searchText = $(this).val().toLowerCase();
		// Show only matching TR, hide rest of them
		$.each(checkBoxValArray, function (index, value) {
			$.each($('#table tbody td:nth-child(' + value + ')'), function () {
				if ($(this).text().toLowerCase().indexOf(searchText) != -1)
					$(this).parent().show();
				else
					$(this).parent().hide();
			});
		});


	});

	var checkBoxValArray = [];
	$('.checkBoxClass').click(function () {
		checkBoxValArray.push($(this).val());
	});
});

// https://examples.bootstrap-table.com/index.html#methods/get-visible-hidden-columns.html#view-source



// Run this script after the table element is loaded
document.addEventListener("DOMContentLoaded", function () {
	var table = document.getElementById("table");
	var pagination = table.querySelector('.pagination'); // Assuming Bootstrap is used for pagination
	if (pagination) {
		var showingText = pagination.querySelector('.pagination-info'); // Adjust selector if using a different library
		if (showingText) {
			showingText.textContent = "Visualizzati"; // Replace with your desired Italian translation
		}
	}
});