function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

jq1110( document ).ready(function() {        
        var temp_source_two = getParameterByName('First');
        var importantSourceTwoVar = 'First_' + temp_source_two;

        (function($){
            // your all jQuery code inside here

            if (temp_source_two) {
                $('#First').val('First' + temp_source_two);

                if (! $.cookie('sourceTwoPersistent') ) {
                    $.cookie('sourceTwoPersistent', importantSourceTwoVar, { expires: 10, path: '/' });    
                } 

            } else {

                var importSourceTwoCookie = $.cookie('sourceTwoPersistent');
                if (importSourceTwoCookie) {
                    $('#First').val(importSourceTwoCookie);
                }
                
            }
        })(jq1110);
});