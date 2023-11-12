var urlProvinsi = "data/provinsi.json";
var urlKabupaten = "data/kabupaten/";
var urlKecamatan = "data/kecamatan/";
var urlKelurahan = "data/kelurahan/";

function clearOptions(id) {
    console.log("on clearOptions :" + id);

    //$('#' + id).val(null);
    $('#' + id).empty().trigger('change');
}

console.log('Load Provinsi...');
$.getJSON(urlProvinsi, function (res) {

    res = $.map(res, function (obj) {
        obj.text = obj.nama
        return obj;
    });

    data = [{
        id: "",
        nama: "- Pilih Provinsi -",
        text: "- Pilih Provinsi -"
    }].concat(res);

    //implemen data ke select provinsi
    $("#select2-provinsi").select2({
        dropdownAutoWidth: true,
        width: '100%',
        data: data
    })
});

var selectProv = $('#select2-provinsi');
$(selectProv).change(function () {
    var value = $(selectProv).val();
    clearOptions('select2-kabupaten');

    if (value) {
        console.log("on change selectProv");

        var text = $('#select2-provinsi :selected').text();
        console.log("value = " + value + " / " + "text = " + text);

        console.log('Load Kabupaten di '+text+'...')
        $.getJSON(urlKabupaten + value + ".json", function(res) {

            res = $.map(res, function (obj) {
                obj.text = obj.nama
                return obj;
            });

            data = [{
                id: "",
                nama: "- Pilih Kabupaten -",
                text: "- Pilih Kabupaten -"
            }].concat(res);

            //implemen data ke select provinsi
            $("#select2-kabupaten").select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: data
            })
        })
    }
});

var selectKab = $('#select2-kabupaten');
$(selectKab).change(function () {
    var value = $(selectKab).val();
    clearOptions('select2-kecamatan');

    if (value) {
        console.log("on change selectKab");

        var text = $('#select2-kabupaten :selected').text();
        console.log("value = " + value + " / " + "text = " + text);

        console.log('Load Kecamatan di '+text+'...')
        $.getJSON(urlKecamatan + value + ".json", function(res) {

            res = $.map(res, function (obj) {
                obj.text = obj.nama
                return obj;
            });

            data = [{
                id: "",
                nama: "- Pilih Kecamatan -",
                text: "- Pilih Kecamatan -"
            }].concat(res);

            //implemen data ke select provinsi
            $("#select2-kecamatan").select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: data
            })
        })
    }
});

var selectKec = $('#select2-kecamatan');
$(selectKec).change(function () {
    var value = $(selectKec).val();
    clearOptions('select2-kelurahan');

    if (value) {
        console.log("on change selectKec");

        var text = $('#select2-kecamatan :selected').text();
        console.log("value = " + value + " / " + "text = " + text);

        console.log('Load Kelurahan di '+text+'...')
        $.getJSON(urlKelurahan + value + ".json", function(res) {

            res = $.map(res, function (obj) {
                obj.text = obj.nama
                return obj;
            });

            data = [{
                id: "",
                nama: "- Pilih Kelurahan -",
                text: "- Pilih Kelurahan -"
            }].concat(res);

            //implemen data ke select provinsi
            $("#select2-kelurahan").select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: data
            })
        })
    }
});

var selectKel = $('#select2-kelurahan');
$(selectKel).change(function () {
    var value = $(selectKel).val();

    if (value) {
        console.log("on change selectKel");

        var text = $('#select2-kelurahan :selected').text();
        console.log("value = " + value + " / " + "text = " + text);
    }
});