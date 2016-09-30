
<div class="row options">
    <div class="form-group col-md-12">
        <label for="options">{{trans('product.productoptions')}} : </label>
        <div id="add_product_option" class=" btn btn-sm btn-primary">+ Add Option</div>
        <div class="options-group row">
            <div class="option col-md-3" op-index="0">
                <span class="fa fa-times fa-lg remove-option"></span>
                <label for="options">{{trans('product.product_option_name')}} : </label>
                <input type="text" name="options[0][name]">

                <ul class="values">
                    <li><input type="text" name="options[0][values][]"></li>
                </ul>
                <div class="add_option_value btn btn-sm btn-primary">+ Add Value</div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="row">
            </div>
        </div>
    </div>
</div> --}}

