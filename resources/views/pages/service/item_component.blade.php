@foreach ($items as $key => $item)
    <div class="row mt-3" style="cursor:pointer">
        <input type="text" style="opacity:0;display:none;" name="totalItem" value={{$key}}>
        <div class="col-md-12">
            <a onclick="addItemToCart({{$key}},{{$item['price']}})">
                <div id="item-{{$key}}" class="card-shadow round-15">
                    <div class="card-body">
                        <input class="form-check-input" 
                            style="display: block;mr-5"
                            type="checkbox" 
                            name="item-cb-{{$key}}" 
                            id="item-cb-{{$key}}" 
                            value={{$item['_id']}} >
                        {{ $item['name'] }}
                        <span class="float-right">Rp. {{ $item['price']}}</span>
                    </div>
                </div>
            </a>
        </div>
        {{-- <div class="col-md-4">
            <a onclick="addItemToCart({{$key}},{{$item['price']}})">
                <div id="item-{{$key}}" class="card-shadow round-5">
                    <div class="card-body form-check form-check-label" for="item-cb-{{$key}}">
                        <input class="form-check-input" 
                            style="display: block;opacity:0;"
                            type="checkbox" 
                            name="item-cb-{{$key}}" 
                            id="item-cb-{{$key}}" 
                            value={{$item['_id']}} >
                        {{ $item['name'] }}
                        <span>{{ $item['price']}}</span>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>
    
@endforeach 