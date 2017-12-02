@extends('layouts.inventory')
@section('title')
	Toolkit | Inventory | Add Item Type
@endsection
@section('content')
	<div class="ui segment">
		<form action="" method="POST" class="ui form" id="add-form">
			{{ csrf_field() }}
			<div class="ui dividing header">Item Type</div>
			<input type="hidden" name="added_by" value="{{ Auth::user()->id }}">
			<div class="fields">
				<div class="six wide field">
					<div class="ui left icon input">
						<input type="text" name="name" id="name" placeholder="Type of Item">
						<i class="edit icon"></i>
					</div>
				</div>
				<div class="eight wide field">
		             <select class="ui fluid search dropdown" name="manufacturer[]" multiple="">
		                <option value="">Manufacturers</option>
		                @foreach ($manufacturers as $manufacturer)
		                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
		                @endforeach
		            </select>
	            </div>
				<div class="two wide field">
					<button type="submit" class="ui fluid primary submit icon button"><i class="add circle icon"></i> Add</button>
				</div>
			</div>
		</form>
		<div class="ui dividing header">List of Item Types</div>
		<section id="data-container"></section>
	</div>
	{{-- Modal --}}
	<div class="ui modal" id="data-modal">
		<div class="header">Update Record</div>
		<div class="content">
			<div id="data-content"></div>
		</div>
	</div>
@endsection
@section('scripts')
	<script src="{{ asset('plugins/axios/js/axios.min.js') }}"></script>

	<script>
		loadData();

		function loadData(){
			var filter = 'types';
			axios.get('{{ route('getAllData') }}', {
				params:{
					filter : filter
				}
			})
			.then(response => $('#data-container').html(response.data));
		};

		function getData(filter, id){
			axios.get('{{ route('getData') }}', {
				params:{
					filter : filter,
					id : id
				}
			})
			.then(response => $('#data-content').html(response.data), $('#data-modal').modal('setting', 'transition', 'fade up').modal('show'));
		};

		function deleteData(filter, id){
			axios.get('{{ route('deleteData') }}', {
				params:{
					filter : filter,
					id : id
				}
			})
			.then(response => loadData(), notify('Item Type Deleted Successfully', 'success', 'check icon', 'true'));
		};

		function restoreData(filter, id){
			axios.get('{{ route('restoreData') }}', {
				params:{
					filter : filter,
					id : id
				}
			})
			.then(response => loadData(), notify('Item Type Restored Successfully', 'success', 'check icon', 'true'));
		};

		$('#add-form').submit(function(e){
		    e.preventDefault();
		    var data = $('#add-form').serialize();
		    $.ajax({
		      type: 'POST',
		      url: '{{ route('addItemType') }}',
		      data: data,
		      success: function(response){
		      	$('#name').val("");
		        notify('Item Type Added Successfully', 'success', 'check icon', 'true');
		        loadData();
		      },
		      error: function(reponse){
		        notify('Processing Unsuccessful', 'error', 'warning icon', 'true');
		      }
		    });
    	});
	</script>
@endsection