<div class="col-md-12">

<div class="row">
        <div class="form-group col-md-7">
            <label for="thumbnail">Thumbnail Photo : </label>
            <input id="thumbnail" name="thumbnail" type="file" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-7">
{{-- <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
<img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
</div> --}}
            <label for="album">Photo Album : </label>
            <input id="album" type="file" name="album[]" class="form-control">
            <div class="album"></div>
           
            <div id="add_album_image" class="btn btn-light-grey"><i class="fa fa-picture-o"></i> Select image</div>

        </div>
    </div>


    <table id="product-review" class="table">
        <thead>
            <tr>
                <th style="min-width:100px"><strong>Preview</strong>
                </th>
                <th style="min-width:150px"><strong>Label</strong>
                </th>
                <th><strong>Main image</strong>
                </th>
                <th><strong>Thumbnail</strong>
                </th>
                <th><strong>Gallery</strong>
                </th>
                <th class="text-center"><strong>Actions</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:20%">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('thumbnail', null, array('class'=>'form-control', 'id' => 'thumbnail', 'value'=>Input::old('thumbnail'))) !!}
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                            </a>
                        </div>
                    </div>
                </td>
                <td>

                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10" checked=""></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td class="text-center">
                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                </td>
                <div id="add_album_image">Add Image</div>
            </tr>

        </tbody>
    </table>
</div>
