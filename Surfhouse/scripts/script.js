var offset = 12;

show_more.addEventListener("click", function () {
    $.ajax({
        type: 'POST',
        url: 'models/showmore.php',
        data: "offset=" + offset,
        success: function (data) {
            $(".products").append(data);
            if (data.length == 0) {
                $("#show_more").remove();
            } else {
                $(".products").append($("#show_more"));
            }
            offset += 12;
        },
        error: function () {
            alert("Something went wrong...");
        }
    });
});

/* document.getElementsByClassName("add-to-cart").forEach(function(el) {
    el.addEventListener("click", function() {
        console.log("Done!");
    });
}); */