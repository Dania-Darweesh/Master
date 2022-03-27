@extends('admin/includes/master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can update orders here</h4>
                    <form method="post" action="{{route('orders.update',$ordersEdit->id)}}" class="dropzone dropzone-custom needsclick add-professors">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">

                                <div class="form-group">
                                    <label for="order_details" class="form-label">Order Details</label>
                                    <input name="order_details" type="text" class="form-control" value="{{$ordersEdit->order_details}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_location" class="form-label">Order Location</label>
                                    <input name="order_location" type="email" class="form-control" value="{{$ordersEdit->order_location}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_mobile" class="form-label">Order Mobile </label>
                                    <input name="order_mobile" type="text" class="form-control" value="{{$ordersEdit->order_mobile}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_user_name" class="form-label">Order User Name </label>
                                    <input name="order_user_name" type="text" class="form-control" value="{{$ordersEdit->order_user_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_date" class="form-label">Order Date</label>
                                    <input name="order_date" type="text" class="form-control" value="{{$ordersEdit->order_date}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_total" class="form-label">Order Total ID</label>
                                    <input name="order_total" type="text" class="form-control" value="{{$ordersEdit->order_total}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_status" class="form-label">Order Status</label>
                                    <input name="order_status" type="text" class="form-control" value="{{$ordersEdit->order_status}}">
                                </div>
                                <div class="form-group">
                                    <label for="order_user_id" class="form-label">Order User Id</label>
                                    <input name="order_user_id" type="text" class="form-control" value="{{$ordersEdit->order_user_id}}">
                                </div>

                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection