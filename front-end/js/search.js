//Getting value from "search.php".
function fill(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#search').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#display').hide();
 }
 $(document).ready(function() {
    //On pressing a key on "Search box" in "messages.php" file. This function will be called.
    $("#search").keyup(function() {
        var name = $('#search').val();
        if (name == "") {
            //Assigning empty value to "display" div in "search.php" file.
            $("#display").html("");
        }
        else {
            $.ajax({
                type: "POST",
                url: "http://localhost/tfg/back-end/actions/search.php",
                data: {
                    search: name
                },
                success: function(html) {
                    $("#display").html(html).show();
                }
            });
        }
    });
 });