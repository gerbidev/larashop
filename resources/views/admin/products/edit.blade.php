@extends('admin.layouts.master')

@section('page')
    Edit Product
@stop

@section('content')
    <div class="row">
        <div class="col-lg-10 col-md-10">

            @include('admin.layouts.message')

            <div class="card">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h4 class="title">Edit Product</h4>
                </div>

                <div class="card-body">

                    {!! Form::open(['url' => ['admin/products',$product->id],'files'=>'true','method'=>'PUT']) !!}
                    <div class="row">
                        <div class="col-md-12">

                            @include('admin.products._fields')

                            <div class="form--group">
                                {{ Form::submit('Update Product', ['class' => 'btn btn-info btn-fill btn-wd'])}}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop
