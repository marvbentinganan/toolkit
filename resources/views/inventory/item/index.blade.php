@extends('layouts.inventory')
@section('title')
	Add New Item | Inventory | Toolkit
@endsection
@section('content')
	<div class="ui segment">
		<form action="" class="ui form">
			{{ csrf_field() }}
			<div class="three fields">
				<div class="field">
					<label for="">Item Type</label>
		            <select class="ui fluid search dropdown" name="type" onchange="getOptions(this);">
		                <option value="">None</option>
		                @foreach ($types as $type)
		                <option value="{{ $type->id }}">{{ $type->name }}</option>
		                @endforeach
		            </select>
				</div>
				<div class="field" id="manufacturer">
					<label for="">Manufacturer</label>
				</div>
				<div class="field">
					<label for="">Supplier</label>
		            <select class="ui fluid search dropdown" name="supplier">
		                <option value="">None</option>
		                @foreach ($suppliers as $supplier)
		                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
		                @endforeach
		            </select>
				</div>
			</div>
			<div class="three fields">
				<div class="field">
					<label for="">Department</label>
		            <select class="ui fluid search dropdown" name="department">
		                <option value="">None</option>
		                @foreach ($departments as $department)
		                <option value="{{ $department->id }}">{{ $department->name }}</option>
		                @endforeach
		            </select>
				</div>
				<div class="field">
					<label for="">State</label>
		            <select class="ui fluid search dropdown" name="state">
		                <option value="">None</option>
		                @foreach ($states as $state)
		                <option value="{{ $state->id }}">{{ $state->name }}</option>
		                @endforeach
		            </select>
				</div>
				<div class="field">
					<label for="">Ownership</label>
		            <select class="ui fluid search dropdown" name="state">
		                <option value="">None</option>
		                @foreach ($ownerships as $ownership)
		                <option value="{{ $ownership->id }}">{{ $ownership->name }}</option>
		                @endforeach
		            </select>
				</div>
			</div>
			<div class="three fields">
				<div class="field">
					<label for="">Serial Number</label>
					<div class="ui left icon input">
						<input type="text" name="serial" id="serial" placeholder="Serial...">
						<i class="ion-pound icon"></i>
					</div>
				</div>
				<div class="field">
					<label for="">Model</label>
					<div class="ui left icon input">
						<input type="text" name="model" id="model" placeholder="Model...">
						<i class="ion-compose icon"></i>
					</div>
				</div>
				<div class="field">
					<label for="">Capacity (Optional)</label>
		            <select class="ui fluid search dropdown" name="capacity">
		                <option value="">None</option>
		                @foreach ($storage as $capacity)
		                <option value="{{ $capacity }}">{{ $capacity }}</option>
		                @endforeach
		            </select>
				</div>
			</div>
			<div class="two fields">
				<div class="field">
					<label for="">Description</label>
					<textarea name="description" id="description" rows="5"></textarea>
				</div>
				<div class="field">
					<label for="">Remarks</label>
					<textarea name="remarks" id="remarks" rows="5"></textarea>
				</div>
			</div>
			<div class="field">
				<button type="submit" class="ui primary submit icon button"><i class="save icon"></i> Add Item</button>
			</div>
		</form>
	</div>
@endsection
@section('scripts')
	<script src="{{ asset('plugins/axios/js/axios.min.js') }}"></script>
	<script>
		function getOptions(id){
			axios.get('{{ route('getOptions') }}', {
				params:{
					id : id.value,
				}
			})
			.then(response => $('#manufacturer').html(response.data));
		};
	</script>
@endsection