/**
 * Created by Phillip on 9/6/2016.
 */


$(window).load(function () {

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

    $("#addRow").click(function (e) {
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
});















$(window).load(function () {

    dummy = 0;

    if (dummy == true) {

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

        $("#addRow").click(function (e) {
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
        });
        $("table#product-pricing-table tbody").append(row);

    } else {

        $("#addRow").click(function () {
            var row = $("<tr>" +
                "<td><input type='text' class='form-control' name='price[]'></td>" +
                "<td><input type='text' class='form-control' name='quantity[]'></td>" +
                "<td><input type='text' class='form-control' name='model[]'></td>" +
                "<td><input type='text' class='form-control' name='sku[]'></td>" +
                "<td><input type='text' class='form-control' name='upc[]' value='636343'></td>" +
                "</tr>");
        });
        $("table#product-pricing-table tbody").append(row);
    }
});


