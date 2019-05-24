<div class="row">
    @foreach ($orders as $order)
        <div class="col-md-6 mb-2">
            <div class="card-shadow">
                <div class="card-body">
                        {{ $order['dateOrdered'] }}
                        <small>{{ $order['status'] }}</small>
                </div>
            </div>
        </div>
        
    @endforeach
</div>