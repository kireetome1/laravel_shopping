<h2>enter items</h2>
<form action="{{ route('admin.item.update', $items->id) }}" method="post">
    @csrf

    <div>
        <label for="">{{ __('Item Name') }}</label>
        <input type="text" name="name" value="{{ $items->name }}">
    </div>
    <div>
        <label for="">{{ __('Item Code') }}</label>
        <input type="text" name="code" value="{{ $items->code }}">
    </div>
    <div>
        <label for="">{{ __('Price') }}</label>
        <input type="text" name="price" value="{{ $items->price }}">
    </div>
    <div>
        <label for="">{{ __('Stock') }}</label>
        <input type="text" name="stock" value="{{ $items->stock }}">
    </div>

    <button>{{ __('Update') }}</button>
    <a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>
</form>