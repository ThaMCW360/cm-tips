function openModal(el) {
    var id = $(el).attr("modal");
    var modal = $("#" + id);
    var close = modal.find($(".close-modal"));

    modal.prepend("<div class='overlay'></div>");
    var overlay = modal.find($(".overlay"));
    modal.css({ "display": "flex" });

    // When the user clicks on <span> (x), close the modal
    close-modal.click(function(event) {
        closeModal(event);
    });

    overlay.click(function(event) {
        closeModal(event);
    });
}


function closeModal(src) {
    var id = $(($(src)[0].target)).parents(".modal").attr("id");
    var modal = $("#" + id);
    modal.find(".overlay").remove();
    modal.hide();
}