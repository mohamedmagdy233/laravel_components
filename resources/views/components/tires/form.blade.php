@props(['data','action','method'])

<form method="{{$method}}"  action="{{$action}}" enctype="multipart/form-data">
    @csrf

    @if(isset($data) && $action !== route('tires.store') && $action !== route('engines.store'))
        <input type="hidden" name="id" value="{{ $data->id }}">
        @method('PUT')
    @endif


    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $data->name ?? '' }}" id="name" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="start">price</label>
        <input type="text" class="form-control" name="price" value="{{ $data->price ?? '' }}" placeholder="Enter price" >
    </div>

    <div class="form-group">
        <label for="end">quantity</label>
        <input type="number" class="form-control" min="1" name="quantity" value="{{ $data->quantity ?? '' }}" id="end" placeholder="Enter quantity" >

    </div>

    <div class="form-group">
        <label for="end">image</label>
        <input type="file" class="form-control"  name="image"  id="end"  >

    </div>
    <button type="submit" class="btn btn-primary">submit</button>



</form>

