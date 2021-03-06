@extends('layouts.mainadmin')

@section('body')

{!! ($unproved>0)?'<div class="text-right approveAll"><button class="btn btn-primary btn-sm" id="approveAll" data-url="'.route('approveall').'">Approve all</button><br><br></div>':'' !!}
<table class="table table-bordered table-hover" id="auctions" data-cont="all">
    <tr>
        <th>Product name</th>
        <th>Price</th>
        <th>Date and Time</th>
        <th>User</th>
        <th></th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td> {{$product->minimal_price}} .TND</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->user()}}</td>
            <td class="text-center">{!! ($product->approved==0)?'<button class="btn btn-primary btn-xs approve" data-url="'.route("approve",$product->id).'">Approve</button>':'<b class="text-success">Approved</b>' !!}</td>
        </tr>
    @endforeach
</table>
@endsection