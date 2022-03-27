@extends('admin/includes/master')
@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can add Meals here</h4>
                    <div class="add-product">
                        <a href="/admin/meals">Show meals</a>
                    </div>

                    <form method="post" style="padding: 50px 0 !important;" action="{{route('meals.store')}}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">
                                <div class="form-group">
                                    <label for="name" class="form-label">Meal Name </label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description </label>
                                    <input name="description" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price" class="form-label">Price </label>
                                    <input name="price" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sale_price" class="form-label">Sale_Prise </label>
                                    <input name="sale_price" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="in_stock" class="form-label">In_Stock </label>
                                    <input name="in_stock" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fats" class="form-label">Fats </label>
                                    <input name="fats" type="text" class="form-control">
                                </div>
                               
                                <div class="form-group">
                                    <label for="proteins" class="form-label">Proteins </label>
                                    <input name="proteins" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="carbohydrates" class="form-label">Carbohydrates </label>
                                    <input name="carbohydrates" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="status" class="form-label">Status </label>
                                    <input name="status" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-label">Image </label>
                                    <input name="image" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category_id" class="form-label">Category_ID</label>
                                    <input name="category_id" type="text" class="form-control">
                                </div>


                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection