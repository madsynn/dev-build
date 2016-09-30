var PhillipsCustom = function () {

    var MaxInputs = 50;
    var InputsWrapper = $("#InputsWrapper"); //Input boxes wrapper ID
    var AddButton2 = $("#AddMoreFileBox"); //Add button ID
    var FeatureInputsWrapper = $("#FeatureInputsWrapper"); //Input boxes wrapper ID
    var AddButton = $("#AddMoreFeatureBox"); //Add button ID
    var x = FeatureInputsWrapper.length; //initlal text box count
    var FieldCount = 1; //to keep track of text box added

    var runPricingJSDummy = function () {

        var price = Math.floor(Math.random() * 1E3);
        $('table input[name*="price"]').val(price);

        var quantity = Math.floor(Math.random() * 1E2);
        $('table input[name*="quantity"]').val(quantity);

        var model = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
        $('table input[name*="model"]').val(model);

        var sku = Math.floor(Math.random() * 1E6);
        $('table input[name*="sku"]').val(sku);

        var upc = Math.random().toString().slice(-6);
        $('table#product-pricing-table input[name*="upc"]').val("636343" + upc);

        console.log("PRICE: " + price, "QTY: " + quantity, "MODEL: " + model, "SKU: " + sku, "UPC: " + upc);

        $("#addRow").click(function(e) {
            var randomprice = Math.floor(Math.random() * 1E3);
            var randomquantity = Math.floor(Math.random() * 1E2);
            var randommodel = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
            var randomupc = Math.random().toString().slice(-6);
            var randomsku = Math.floor(Math.random() * 1E6);

            console.log("Insert Data For New Product Price");
            console.log("PRICE: " + randomprice, "QTY: " + randomquantity, "MODEL: " + randommodel, "SKU: " + randomsku, "UPC: " + randomupc);

            e.preventDefault();

            var row = $("<tr>" +
                "<td><input type='text' class='form-control' name='price[]' value=" + randomprice + "></td>" +
                "<td><input type='text' class='form-control' name='quantity[]' value=" + randomquantity + "></td>" +
                "<td><input type='text' class='form-control' name='model[]' value=" + randommodel + "></td>" +
                "<td><input type='text' class='form-control' name='sku[]' value=" + randomsku + "></td>" +
                "<td><input type='text' class='form-control' name='upc[]' value='636343" + randomupc + "'></td>" +
                "</tr>");

            $("table#product-pricing-table tbody").append(row);
        });

    };

    var runPricingJS = function () {
        $("#addRow").click(function () {
            var row = $("<tr>" +
                "<td><input type='text' class='text-center form-control' name='model[]' /></td>" +
                "<td><input type='text' class='text-center form-control  currency' name='price[]' placeholder='$0.00' data-affixes-stay='false' data-prefix='$ ' data-thousands=',' data-decimal='.' /></td>" +
                "<td><input type='text' class='text-center form-control' name='quantity[]' /></td>" +
                "<td><input type='text' class='text-center form-control' name='sku[]' /></td>" +
                "<td><input type='text' class='text-center form-control' name='upc[]' value='636343' /></td>" +
                "</tr>" +
                "<tr><td colspan='5'><input type='text' class='form-control' name='details[]' placeholder='Details:' /></td></tr>" +
                "<tr class='spacer invis'><td colspan='5'></td></tr>");
            $("table#product-pricing-table tbody").append(row);
            $('table#product-pricing-table input.currency').maskMoney();
        });
        $(function () {
            $('table#product-pricing-table input.currency').maskMoney();
        });
    };

    var runFeaturesJS = function () {

    };

    var runProductAttributeJS = function () {
      
    }

    var runAlbumUploadJS = function () {
        $('#add_album_image').click(function () {
            $("#additional-images").find('tbody').append('<tr><td style="width:40%"> <div class="form-group col-md-12 ">' +
                '<input type="file" id="album" name="album[]" class="file form-control input-preview"></div> </td>' +
                '<td style="width:30%"> <div class="form-group col-md-12 "> <div class="input-group">' +
                '<input type="text" id="caption" name="caption[]" class="form-control"> ' +
                '<div class="input-group-addon">caption</div> </div> </div> <div class="form-group col-md-12 ">' +
                '<div class="input-group"> <input type="text" id="alt" name="alt[]" class="form-control">' +
                '<div class="input-group-addon">alt</div> </div> </div> <div class="form-group col-md-12 ">' +
                '<div class="input-group"> <div class="input-group-addon">info</div> <input type="text" id="photoinfo" name="photoinfo[]" class="form-control">' +
                '</div> </div> </td> <td > <input type="checkbox" name="use_main[]" value="1" class="m-t-10" checked></td>' +
                '<td><input type="checkbox" name="use_thumb[]" value="1" class="m-t-10"> </td> <td> <input type="checkbox" name="use_gallery[]" value="1" class="m-t-10"></td>' +
                '<td class="text-center"> <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a></td>');
            $(".input-preview").fileinput();
        });
    };


    var runProductOptionJS = function () {

        $(function () {
            var options_counter = 0;
            $('.sidebar #products').addClass('active-section');


            $('#add_product_option').click(function () {
                options_counter++;
                $('.options-group').append('<div class="option col-md-3" op-index="' + options_counter + '">' + '<span class="fa fa-times fa-lg remove-option"></span>' + '<label for="options">Option Name:</label>' + '<strong><input type="text" name="options[' + options_counter + '][name]"></strong><br>' + '<div class="add_option_value">+ Add Value</div>' + '<ul class="values"><li>' + '<input type="text" name="options[' + options_counter + '][values][]"></li>' + '</ul>' + '</div>');
            });
            $(document).on("click", ".remove-option", function () {
                $(this).parent().remove();
            });
            $(document).on("click", ".add_option_value", function () {
                $(this).parent().find('.values').append('<li>' +
                    '<input type="text" name="options[' + $(this).parent().attr('op-index') + '][values][]">' +
                    '<i class="fa fa-minus remove-value"></i>' + '</li>');
            });
            $(document).on("click", ".remove-value", function () {
                $(this).parent().remove();
            });
        });

    };


    var runFileInput = function () {
    
    };


    //function to initiate summernote
    var runSummerNote = function () {
        $('input[type="textarea"]').summernote();
        $('.summernote').summernote();
        $('textarea.form-control.summernote').summernote();
    };


    return {
        init: function () {
            runFileInput();
            runFeaturesJS();
            runProductAttributeJS();
            runAlbumUploadJS();
            //runPricingJS();
            //runProductOptionJS();
            runSummerNote();
            runPricingJSDummy();
        }
    };
}