<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Archivio Ventole</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<link rel="stylesheet" href="./style.css">


</head>

<body>
	<!-- partial:index.partial.html -->
	<!-- <div id="toolbar">
  <button id="remove" class="btn btn-danger" disabled>
    <i class="fa fa-remove"></i> Delete
  </button>
</div>  -->


	<div id="toolbar">
		<div class="d-flex justify-content-center">
			<button type="button" class="btn btn-light btn-md "> <i class="fa-solid fa-plus"></i> Aggiungi
				Ventola</button>
			<div class="dropdown-container">
				<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sliders"></i> Ricerca Avanzata</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-list">
						<input id="search_input" type="search" placeholder="Ricerca" class="dropdown-search" />
						<ul></ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<table id="table" data-locale="it-IT" data-toolbar="#toolbar" data-search="true" data-show-refresh="false" data-show-toggle="false" data-show-fullscreen="false" data-show-columns="true" data-detail-view="false" data-show-export="false" data-click-to-select="true" data-detail-formatter="detailFormatter" data-minimum-count-columns="2" data-show-pagination-switch="false" data-pagination="true" data-id-field="id" data-pagination-pre-text="Precedente" data-pagination-next-text="Prossimo" data-page-list="[5,10, 25, 50, 100, all]" data-show-footer="false">
		<thead>
			<tr>
				<th data-field="fname" data-sortable="true">Codice</th>
				<th data-field="lname" data-sortable="true">Descrizione </th>
				<th data-field="type" data-sortable="true">Codice Cliente </th>
				<th data-field="phone" data-sortable="true">Cliente</th>
				<th data-field="unit" data-sortable="true">Rotazione</th>
				<th data-field="community" data-sortable="true">Num.Pale</th>
				<th data-field="address" data-sortable="true">Materiale</th>
				<th data-formatter="operateFormatter" data-events="operateEvents">
					Azione per ogni riga
				</th>
			</tr>
		</thead>
	</table>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
	<script src='https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js'></script>
	<script src='https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js'></script>
	<script src='https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table-locale-all.min.js'></script>
	<script src='https://unpkg.com/bootstrap-table@1.15.4/dist/extensions/export/bootstrap-table-export.min.js'></script>
	<script src="./script.js"></script>



</body>

</html>