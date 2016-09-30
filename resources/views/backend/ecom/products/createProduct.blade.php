@extends('backend/layout/clip')

@section('topscripts')
        <link rel="stylesheet" href="/clip/assets/plugins/select2/select2.css">
        <link rel="stylesheet" href="/clip/assets/plugins/datepicker/css/datepicker.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="/clip/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="/clip/assets/plugins/summernote/build/summernote.css">
@endsection

@section('pagetitle')
    <div class="row">
    <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Products</li>
            </ol>
            <div class="page-header">
                     <h1 class="pull-left">Create New Product</h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection

@section('content')
<div class="container-fluid add-product">
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif
	<form action="{!! route('product.store') !!}" method="post" enctype="multipart/form-data">


<div class="col-lg-12">
  <div class="tabbable">
  <h3>TAB SELECTION:</h3>
    <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
        <li class="active"> <a data-toggle="tab" href="#panel_tab_overview"><i class="pink fa fa-dashboard"></i> OVERVIEW </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_image"> IMAGES &amp; FILES </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_pricing"> PRICING / TAX / SHIPPING </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_meta"> META / SEO </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_additional"> ADDITIONAL </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_developer"> DEVELOPER </a> </li>
    </ul>
    <div class="tab-content">
        <div id="panel_tab_overview" class="tab-pane active">
        @include('backend.ecom.products.create-sections.overview-fields')
        <br style="clear:both" />
        </div>
        <div id="panel_tab_image" class="tab-pane">
        @include('backend.ecom.products.create-sections.image-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_pricing" class="tab-pane">
        @include('backend.ecom.products.create-sections.pricing-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_meta" class="tab-pane">
        @include('backend.ecom.products.create-sections.meta-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_additional" class="tab-pane">
        @include('backend.ecom.products.create-sections.additional-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_developer" class="tab-pane">
        @include('backend.ecom.products.create-sections.developer-fields')
         <br style="clear:both" />
        </div>
        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Add Product', ['class' => 'btn btn-primary' ]) !!}
            <a href="{!! url(getLang().'.admin.products.index') !!}" class="btn btn-default">Cancel</a>
        </div>

         <br style="clear:both" />
    </div>
  </div>
</div>











	{{--<hr>--}}
	{{--<div class="row options">--}}
		{{--<div class="form-group col-md-12">--}}
			{{--<label for="options">Product Options : </label>--}}
			{{--<div id="add_product_option">Add Option</div>--}}
			{{--<div class="options-group row">--}}
				{{--<div class="option col-md-3" op-index="0">--}}
					{{--<span class="fa fa-times fa-lg remove-option"></span>--}}
					{{--<label for="options">Option Name : </label>--}}
					{{--<input type="text" name="options[0][name]"><br>--}}
					{{--<div class="add_option_value">+ Add Value</div>--}}
					{{--<ul class="values">--}}
						{{--<li><input type="text" name="options[0][values][]"></li>--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{--</div>--}}

		{{--</div>--}}
	{{--</div>--}}
	{{--<div class="row">--}}
		{{--<div class="form-group col-md-7">--}}
			{{--<input id="submit" type="submit" class="form-control btn btn-primary prod-submit" value="Add Product">--}}
		{{--</div>--}}
	{{--</div>--}}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
        {!! Form::close() !!}
        <div class="clearfix"></div>
</div>
@stop

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="/ckeditor-basic/ckeditor.js"></script>
	<script>
	$(document).ready(function(){
		//CKEDITOR.replace('details');
        //CKEDITOR.replace('description');
		var options_counter = 0;
		$('.sidebar #products').addClass('active-section');

		$('#add_album_image').click(function(){
			$('.album').append('<input id="album" type="file" name="album[]" class="form-control">');
		});

		$('#add_product_option').click(function(){
			options_counter++;
			$('.options-group').append('<div class="option col-md-3" op-index="'+options_counter+'"><span class="fa fa-times fa-lg remove-option"></span><label for="options">Option Name : </label><input type="text" name="options['+options_counter+'][name]"><br><div class="add_option_value">+ Add Value</div><ul class="values"><li><input type="text" name="options['+options_counter+'][values][]"></li></ul></div>');
		});

		$(document).on("click", ".remove-option", function() {
			$(this).parent().remove();
		});

		$(document).on("click", ".add_option_value", function() {
			$(this).parent().find('.values').append('<li><input type="text" name="options['+$(this).parent().attr('op-index')+'][values][]"><i class="fa fa-minus remove-value"></i></li>');
		});

		$(document).on("click", ".remove-value", function() {
			$(this).parent().remove();
		});

	});

	</script>
@endsection

@section('clipinline')
    FormElements.init();

@endsection
