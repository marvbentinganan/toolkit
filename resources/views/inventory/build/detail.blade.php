@if($filter == 'departments')
<form action="{{ route('updateData') }}" method="POST" class="ui form" id="update-form">
	{{ csrf_field() }}
	<div class="fields">
		<div class="twelve wide field">
			<div class="ui left icon input">
				<input type="text" name="name" value="{{ $department->name }}" placeholder="Name of Department">
				<input type="hidden" name="id" value="{{ $department->id }}">
				<input type="hidden" name="filter" value="{{ $filter }}">
				<i class="edit icon"></i>
			</div>
		</div>
		<div class="four wide field">
			<button type="submit" class="ui fluid primary submit icon button"><i class="save icon"></i> Update</button>
		</div>
	</div>
</form>
@endif

@if($filter == 'states')
<form action="{{ route('updateData') }}" method="POST" class="ui form" id="update-form">
	{{ csrf_field() }}
	<div class="fields">
		<div class="twelve wide field">
			<div class="ui left icon input">
				<input type="text" name="name" value="{{ $state->name }}" placeholder="Name of State">
				<input type="hidden" name="id" value="{{ $state->id }}">
				<input type="hidden" name="filter" value="{{ $filter }}">
				<i class="edit icon"></i>
			</div>
		</div>
		<div class="four wide field">
			<button type="submit" class="ui fluid primary submit icon button"><i class="save icon"></i> Update</button>
		</div>
	</div>
</form>
@endif

@if($filter == 'ownerships')
<form action="{{ route('updateData') }}" method="POST" class="ui form" id="update-form">
	{{ csrf_field() }}
	<div class="fields">
		<div class="twelve wide field">
			<div class="ui left icon input">
				<input type="text" name="name" value="{{ $ownership->name }}" placeholder="Name of Ownership">
				<input type="hidden" name="id" value="{{ $ownership->id }}">
				<input type="hidden" name="filter" value="{{ $filter }}">
				<i class="edit icon"></i>
			</div>
		</div>
		<div class="four wide field">
			<button type="submit" class="ui fluid primary submit icon button"><i class="save icon"></i> Update</button>
		</div>
	</div>
</form>
@endif

@if($filter == 'types')
<form action="{{ route('updateData') }}" method="POST" class="ui form" id="update-form">
	{{ csrf_field() }}
	<div class="fields">
		<div class="six wide field">
			<label for="">Item Type</label>
			<div class="ui left icon input">
				<input type="text" name="name" value="{{ $type->name }}" placeholder="Type of Item">
				<input type="hidden" name="id" value="{{ $type->id }}">
				<input type="hidden" name="filter" value="{{ $filter }}">
				<i class="edit icon"></i>
			</div>
		</div>
		<div class="eight wide field">
			<label for="">Manufacturers</label>
			{!! Form::select('manufacturer[]', $manufacturers->pluck('name', 'id')->toArray(), $type->manufacturer->pluck('id')->toArray(), ['class' => 'ui fluid search dropdown', 'multiple' => 'multiple']) !!}
           {{--  <select class="ui fluid search dropdown" name="manufacturer[]" multiple="">
                <option value="">Manufacturers</option>
                @foreach ($manufacturers as $manufacturer)
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                @endforeach
            </select> --}}
        </div>
		<div class="two wide field">
			<label for="">Action</label>
			<button type="submit" class="ui fluid primary submit icon button"><i class="save icon"></i> Update</button>
		</div>
	</div>
</form>
@endif

@if($filter == 'manufacturers')
<form action="{{ route('updateData') }}" method="POST" class="ui form" id="update-form">
	{{ csrf_field() }}
	<div class="fields">
		<div class="four wide field">
			<div class="ui left icon input">
				<input type="text" name="name" value="{{ $manufacturer->name }}" placeholder="Name">
				<input type="hidden" name="id" value="{{ $manufacturer->id }}">
				<input type="hidden" name="filter" value="{{ $filter }}">
				<i class="edit icon"></i>
			</div>
		</div>
		<div class="four wide field">
			<div class="ui left icon input">
				<input type="text" name="website" value="{{ $manufacturer->website }}" placeholder="Website">
				<i class="world icon"></i>
			</div>
		</div>
		<div class="three wide field">
			<div class="ui left icon input">
				<input type="email" name="email" value="{{ $manufacturer->email }}" placeholder="Email">
				<i class="mail icon"></i>
			</div>
		</div>
		<div class="three wide field">
			<div class="ui left icon input">
				<input type="telno" name="contact_number" value="{{ $manufacturer->contact_number }}" placeholder="Contact Number">
				<i class="phone icon"></i>
			</div>
		</div>
		<div class="two wide field">
			<button type="submit" class="ui fluid primary submit icon button"><i class="save icon"></i> Update</button>
		</div>
	</div>
</form>
@endif

@if($filter == 'suppliers')
<form action="{{ route('updateData') }}" method="POST" class="ui form" id="update-form">
	{{ csrf_field() }}
	<div class="fields">
		<div class="eight wide field">
			<div class="ui left icon input">
				<input type="text" name="name" value="{{ $supplier->name }}" placeholder="Name of Ownership">
				<input type="hidden" name="id" value="{{ $supplier->id }}">
				<input type="hidden" name="filter" value="{{ $filter }}">
				<i class="edit icon"></i>
			</div>
		</div>
		<div class="four wide field">
			<div class="ui left icon input">
				<input type="telno" name="contact_number" value="{{ $supplier->contact_number }}" placeholder="Name of Supplier">
				<i class="phone icon"></i>
			</div>
		</div>
		<div class="four wide field">
			<button type="submit" class="ui fluid primary submit icon button"><i class="save icon"></i> Update</button>
		</div>
	</div>
</form>
@endif

<script>
	$('.dropdown').dropdown();
</script>