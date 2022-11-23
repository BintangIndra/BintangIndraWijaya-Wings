@extends('welcome')

@section('content')
<style type="text/css">
    .dot {
        height: 25px;
        width: 25px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }

</style>

<div class="container">
    <div class="card d-flex justify-content-center" style="width: 80%;">
        <div class="card-body">

            <div class="row justify-content-center mb-4">
                <div class="col-lg-4 d-flex justify-content-start">
                    <span class="dot"></span>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <span class="dot"></span>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <span class="dot"></span>
                </div>
            </div>
            
            @foreach($products as $val)
                <div class="row">
                    <div class="col-lg-2">
                        <img src="" style="width:100%;height:100%;" onclick="openDetail('{{ $val->Product_code }}')">
                    </div>
                    <div class="col-lg-8">
                        {{ $val->Product_Name }}<br>
                        {{ $val->Price }}<br>
                        {{ $val->Discount }}<br>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-primary" style="height:100%;width:100%;" onclick="addToCart(`{{ $val->Product_code }}`)">Buy</button>
                    </div>
                </div>
            @endforeach
            
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-5">Check Out</button>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="detailBarang">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title">Product Detail</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <img style="width:100%;height:100%;">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <p id="detailNamaBarang"></p><br>
                        <p id="detailHarga"></p><br>
                        <p id="detailDimension"></p><br>
                        <p id="detailUnit"></p><br>
                    </div>
                    <div class="col-lg-6 mb-2">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <button class="btn btn-primary" style="height:100%;width:100%;" onclick="addToCart(`{{ $val->Product_code }}`)">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var cart = [];
    function addToCart(params) {
        if (cart[params] == undefined) {
            cart[params] = 1; 
        }else{
            cart[params] += 1;
        }
        
        console.log(cart[params]);
    }

    function openDetail(id) {
        $.ajax({
            url: "{{ route('product.show') }}",
            data: {
                data : 'detail',    
                idTransaksi : id,
            },
            success:function(data){
                $('#detailNamaBarang').html(data.Product_Name);
                $('#detailHarga').html(data.Price);
                $('#detailDimension').html(data.Dimension);
                $('#detailUnit').html(data.Unit);

            }
        });

        $('#detailBarang').modal('show');
    }
</script>

@endsection