$(document).ready(function () {
    $("#shop_metafield_table").DataTable({
        searching: true,
    });
    $("#value_type").on("change", function () {
        console.log($(this).val());
    });
});
