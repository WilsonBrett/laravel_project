$(function() {

    var delete_confirm = $('#delete_confirm');
    delete_confirm.dialog({
        autoOpen: false,
        resizable: false,
        height: "auto",
        width: "auto",
        modal: true,
        closeOnEscape: true,
        draggable: false,
        title: "Confirm Delete",
        buttons: {
            "Delete User": function() {
                $( this ).dialog( "close" );
                $('#deleteForm').submit();
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });

    $('#deleteBtn').click(function(e) {
        e.preventDefault();
        delete_confirm.dialog('open');
    });
});
