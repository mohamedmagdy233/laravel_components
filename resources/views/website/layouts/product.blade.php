<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Our best offers to tires </h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">

                @forelse($tires as $tire)

                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img"><img src="{{asset('tires'."/".$tire->image)}}"></div>
                            <h3 class="types_text">{{$tire->name}}</h3>
                            <p class="looking_text">Start per day {{$tire->price}}</p>
                            <p class="looking_text">Quantity available {{$tire->quantity}}</p>
                            <div class="read_bt"><a href="#">Book Now</a></div>
                        </div>
                    </div>
                @empty

                        There is no users available

                @endforelse

            </div>
        </div>
    </div>
</div>




<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Our best offers to filters</h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">

                @forelse($filters as $filter)

                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img"><img src="{{asset('tires'."/".$filter->image)}}"></div>
                            <h3 class="types_text">{{$filter->name}}</h3>
                            <p class="looking_text">Start per day {{$filter->price}}</p>
                            <p class="looking_text">Quantity available {{$filter->quantity}}</p>
                            <div class="read_bt"><a href="#">Book Now</a></div>
                        </div>
                    </div>
                @empty

                    There is no users available

                @endforelse

            </div>
        </div>
    </div>
</div>





<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Our best offers to filters</h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">

                @forelse($engines as $engine)

                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img"><img src="{{asset('tires'."/".$engine->image)}}"></div>
                            <h3 class="types_text">{{$engine->name}}</h3>
                            <p class="looking_text">Start per day {{$engine->price}}</p>
                            <p class="looking_text">Quantity available {{$engine->quantity}}</p>
                            <div class="read_bt"><a href="#">Book Now</a></div>
                        </div>
                    </div>
                @empty

                    There is no users available

                @endforelse

            </div>
        </div>
    </div>
</div>


<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Our best offers to batteries</h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">

                @forelse($batteries as $battery)

                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img"><img src="{{asset('tires'."/".$battery->image)}}"></div>
                            <h3 class="types_text">{{$battery->name}}</h3>
                            <p class="looking_text">Start per day {{$battery->price}}</p>
                            <p class="looking_text">Quantity available {{$battery->quantity}}</p>
                            <div class="read_bt"><a href="#">Book Now</a></div>
                        </div>
                    </div>
                @empty

                    There is no users available

                @endforelse

            </div>
        </div>
    </div>
</div>


<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Our best offers to accessories</h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">

                @forelse($accessories as $accessory)

                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img"><img src="{{asset('tires'."/".$accessory->image)}}"></div>
                            <h3 class="types_text">{{$accessory->name}}</h3>
                            <p class="looking_text">Start per day {{$accessory->price}}</p>
                            <p class="looking_text">Quantity available {{$accessory->quantity}}</p>
                            <div class="read_bt"><a href="#">Book Now</a></div>
                        </div>
                    </div>
                @empty

                    There is no users available

                @endforelse

            </div>
        </div>
    </div>
</div>


