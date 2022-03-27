@extends('admin.includes.master')
@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Meals list</h4>
                    <div class="add-product">
                        <a href="/admin/meals/create">Add meal</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Meal ID</th>
                                <th>Meal Name</th>
                                <th>Meal Description</th>
                                <th>Meal price</th>
                                <th>Meal Sale_Price</th>
                                <th>Meal In_Stock</th>
                                <th>Meal Fats</th>
                                <th>Meal Proteins</th>
                                <th>Meal Carbohydrates</th>
                                <th> Meal Status</th>
                                <th>Meal Image</th>
                                <th>Meal category_id</th>
                                <th> Settings</th>
                            </tr>
                        </thead>
                        @foreach ($meals as $meal)
                        <tr>
                            <td> {{$meal-> id}}</td>
                            <td> {{$meal-> name}}</td>
                            <td> {{$meal-> description}}</td>
                            <td> {{$meal-> price}}</td>
                            <td> {{$meal-> sale_price}}</td>
                            <td> {{$meal-> in_stock}}</td>
                            <td> {{$meal-> fats}}</td>
                            <td> {{$meal-> proteins}}</td>
                            <td> {{$meal-> carbohydrates}}</td>
                            <td> {{$meal->status}}</td>
                            <td> {{$meal-> image}}</td>
                            <td> {{$meal-> category_id}}</td>
                            <td> 
                            <form action="{{route('meals.destroy',$meal->id)}}" method="POST">
                                         <a href="{{route('meals.edit',$meal->id)}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o"></i></a>

                                         @csrf
                                         @method('Delete')
                                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o"></i></button>
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