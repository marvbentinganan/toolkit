@if($filter == 'departments')
	<table class="ui compact striped table">
		<thead>
			<th class="center aligned">Name of Department</th>
			<th colspan="2" class="four wide center aligned">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->name }}</td>
				@if($record->deleted_at)
				<td colspan="2" class="four wide"><button class="ui fluid mini yellow icon button" onclick="restoreData('departments', {{ $record->id }})"><i class="undo icon"></i> Restore</button></td>
				@else
				<td class="two wide"><button class="ui fluid mini green icon button" onclick="getData('departments', {{ $record->id }})"><i class="edit icon"></i> Update</button></td>
				<td class="two wide"><button class="ui fluid mini red icon button" onclick="deleteData('departments', {{ $record->id }})"><i class="remove icon"></i> Delete</button></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@endif

@if($filter == 'states')
	<table class="ui compact striped table">
		<thead>
			<th class="center aligned">Name of State</th>
			<th colspan="2" class="four wide center aligned">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->name }}</td>
				@if($record->deleted_at)
				<td colspan="2" class="four wide"><button class="ui fluid mini yellow icon button" onclick="restoreData('states', {{ $record->id }})"><i class="undo icon"></i> Restore</button></td>
				@else
				<td class="two wide"><button class="ui fluid mini green icon button" onclick="getData('states', {{ $record->id }})"><i class="edit icon"></i> Update</button></td>
				<td class="two wide"><button class="ui fluid mini red icon button" onclick="deleteData('states', {{ $record->id }})"><i class="remove icon"></i> Delete</button></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@endif

@if($filter == 'ownerships')
	<table class="ui compact striped table">
		<thead>
			<th class="center aligned">Name of Ownership</th>
			<th colspan="2" class="four wide center aligned">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->name }}</td>
				@if($record->deleted_at)
				<td colspan="2" class="four wide"><button class="ui fluid mini yellow icon button" onclick="restoreData('ownerships', {{ $record->id }})"><i class="undo icon"></i> Restore</button></td>
				@else
				<td class="two wide"><button class="ui fluid mini green icon button" onclick="getData('ownerships', {{ $record->id }})"><i class="edit icon"></i> Update</button></td>
				<td class="two wide"><button class="ui fluid mini red icon button" onclick="deleteData('ownerships', {{ $record->id }})"><i class="remove icon"></i> Delete</button></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@endif

@if($filter == 'types')
	<table class="ui compact striped table">
		<thead>
			<th class="center aligned">Item Type</th>
			<th colspan="2" class="four wide center aligned">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->name }}</td>
				@if($record->deleted_at)
				<td colspan="2" class="four wide"><button class="ui fluid mini yellow icon button" onclick="restoreData('types', {{ $record->id }})"><i class="undo icon"></i> Restore</button></td>
				@else
				<td class="two wide"><button class="ui fluid mini green icon button" onclick="getData('types', {{ $record->id }})"><i class="edit icon"></i> Update</button></td>
				<td class="two wide"><button class="ui fluid mini red icon button" onclick="deleteData('types', {{ $record->id }})"><i class="remove icon"></i> Delete</button></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@endif

@if($filter == 'manufacturers')
	<table class="ui compact striped table">
		<thead>
			<th class="three wide center aligned">Name</th>
			<th class="three wide center aligned">Website</th>
			<th class="three wide center aligned">Email</th>
			<th class="three wide center aligned">Contact Number</th>
			<th colspan="2" class="four wide center aligned">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td class="three wide">{{ $record->name }}</td>
				<td class="three wide center aligned">
					@if($record->website)
					<a target="_blank" href="{{ $record->website }}">Visit Site <i class="external icon"></i></a>
					@endif
				</td>
				<td class="three wide">{{ $record->email }}</td>
				<td class="three wide center aligned">{{ $record->contact_number }}</td>
				@if($record->deleted_at)
				<td colspan="2" class="four wide"><button class="ui fluid mini yellow icon button" onclick="restoreData('manufacturers', {{ $record->id }})"><i class="undo icon"></i> Restore</button></td>
				@else
				<td><button class="ui fluid mini green icon button" onclick="getData('manufacturers', {{ $record->id }})"><i class="edit icon"></i> Update</button></td>
				<td><button class="ui fluid mini red icon button" onclick="deleteData('manufacturers', {{ $record->id }})"><i class="remove icon"></i> Delete</button></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@endif

@if($filter == 'suppliers')
	<table class="ui compact striped table">
		<thead>
			<th class="center aligned">Supplier</th>
			<th class="center aligned">Contact Number</th>
			<th colspan="2" class="four wide center aligned">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->name }}</td>
				<td>{{ $record->contact_number }}</td>
				@if($record->deleted_at)
				<td colspan="2" class="four wide"><button class="ui fluid mini yellow icon button" onclick="restoreData('suppliers', {{ $record->id }})"><i class="undo icon"></i> Restore</button></td>
				@else
				<td class="two wide"><button class="ui fluid mini green icon button" onclick="getData('suppliers', {{ $record->id }})"><i class="edit icon"></i> Update</button></td>
				<td class="two wide"><button class="ui fluid mini red icon button" onclick="deleteData('suppliers', {{ $record->id }})"><i class="remove icon"></i> Delete</button></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@endif