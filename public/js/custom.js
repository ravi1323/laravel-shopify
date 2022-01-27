$(document).ready(function () {
    $("#shop_metafield_table").DataTable({
        searching: true,
    });
    $("#value_type").on("change", function () {
        var example = $("option:selected", this).attr("data-example");
        if (example !== undefined) {
            $("#example").html(
                `<p><b><small>Example : ${example}</small></b></p>`
            );
        } else {
            $("#example").html("");
        }
    });
});
