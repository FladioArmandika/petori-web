@foreach ($items as $key => $item)
    <input type="text" style="opacity:0;display:none;" name="totalItem" value={{$key}}>
    <div class="col-md-4">
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
    </div>
@endforeach 