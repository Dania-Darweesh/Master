@extends('admin.includes.master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Orders list</h4>
                    
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Order Details</th>
                                <th>Order Location</th>
                                <th>Order Mobile</th>
                                <th>Order User Name</th>
                                <th>Order Date</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Order User ID</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                        <tr>
                            <td> {{$order-> order_details}}</td>
                            <td> {{$order-> order_location}}</td>
                            <td> {{$order-> order_mobile}}</td>
                            <td> {{$order-> order_user_name}}</td>
                            <td> {{$order-> order_date}}</td>
                            <td> {{$order-> order_total}}</td>
                            <td> {{$order-> order_status}}</td>
                            <td> {{$order-> order_user_id}}</td>
                            <td>
                                <form action="{{route('orders.destroy',$order->id)}}" method="post">
                                    <a href="{{route('orders.edit',$order->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection