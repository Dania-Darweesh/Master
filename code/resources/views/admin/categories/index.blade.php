@extends('admin.includes.master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Categories list</h4>
                    <div class="add-product">
                        <a href="/admin/categories/create">Add category</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th> Category Name</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td> {{$category-> id}}</td>
                            <td> {{$category-> name}}</td>
                            <td>
                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                    <a href="{{route('categories.edit',$category->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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