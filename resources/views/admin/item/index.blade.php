<h2>Item name</h2>
<table class="table">
<tr>
<th></th>
<th>{{ __('Item Name') }}</th>
<th>{{ __('Item Code') }}</th>
<th>{{ __('Price') }}</th>
</tr>
@if ($items)
@foreach ($items as $item)
<tr>
<td>
    <a href="{{route('admin.item.edit',$item->id)}}">{{__("Edit")}}</a>
</td>
<td>{{ $item->name }}</td>
<td>{{ $item->code }}</td>
<td>{{ $item->price }}</td>
</tr>
@endforeach
@endif
</table>


<a href="{{route('admin.item.create')}}">new items</a>