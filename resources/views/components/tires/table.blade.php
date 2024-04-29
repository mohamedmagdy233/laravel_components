<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <a href="{{route($word.'.create')}}" class="card-description"> Add </a>


            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>

                    <tr>
                        <th> id </th>
                        <th>  name </th>
                        <th> price </th>
                        <th> quantity </th>
                        <th> image </th>
                        <th> added by </th>
                        <th> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $tire)
                    <tr>
                        <td class="py-1">

                            {{$tire->id}}
                        </td>
                        <td> {{$tire->name}} </td>

                        <td>{{$tire->price}}</td>
                        <td>{{$tire->quantity}}</td>
                        <td>
                            @if($tire->image)
                                <img src="{{ asset($word . '/' . $tire->image) }}">
                            @else
                                <img src="data:image/jpeg;base64,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">
                            @endif


                        </td>
                        <td>{{$tire->user->name}}</td>
                        <td>
                            @if($word=="tires")
                                <a href="{{route('tires.edit',$tire->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('tires.destroy', $tire->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tire->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $tire->id }}" action="{{ route('tires.destroy', $tire->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            @elseif($word=="engines")
                                <a href="{{route('engines.edit',$tire->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('engines.destroy', $tire->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tire->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $tire->id }}" action="{{ route('engines.destroy', $tire->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            @elseif($word=="filters")
                                <a href="{{route('filters.edit',$tire->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('filters.destroy', $tire->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tire->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $tire->id }}" action="{{ route('filters.destroy', $tire->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            @elseif($word=="batteries")
                                <a href="{{route('batteries.edit',$tire->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('batteries.destroy', $tire->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tire->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $tire->id }}" action="{{ route('batteries.destroy', $tire->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            @elseif($word=="accessories")
                                <a href="{{route('accessories.edit',$tire->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('accessories.destroy', $tire->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tire->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $tire->id }}" action="{{ route('accessories.destroy', $tire->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            @endif



                        </td>


                    </tr>
                    @empty
                        <td>
                            There is no users available
                        </td>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
