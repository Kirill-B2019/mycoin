
$(".denomination").click(function (event) {
    $(".denomination").removeClass("selected").prop("checked", false);
    $(".inp input").removeClass("selected").val("");
    $(this).addClass("selected");
    $(this).children(":first").prop("checked", true);

    $("#InAmm").text($(this).children(":first").val());
    $("#hid_adm").val($(this).children(":first").val());
    $(".inp input").val($(this).children(":first").val());

});
$(".inp input").on("keypress", function (event) {
    // allow only int values
    // TODO: remove leading 0
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
    $(".denomination").removeClass("selected").prop("checked", false);
    $(this).addClass("selected");
    var $i = String($(this).val()).replace(/(.)(?=(\d{2})+$)/g,'$1 ');
    //$("#InAmm").text($(this).val() + key);
    $("#hid_adm").val($(this).val()+key);
    $("#InAmm").text($i + key);
});
