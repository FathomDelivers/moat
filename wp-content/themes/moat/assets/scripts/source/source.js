function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

jq1110( document ).ready(function() {
        var temp_source = getParameterByName('source');
        var importantSourceVar = 'Source_' + temp_source;

        (function($){
            // your all jQuery code inside here

            if (temp_source) {
                $('#source').val('Source_' + temp_source);

                if (! $.cookie('sourcePersistent') ) {
                    $.cookie('sourcePersistent', importantSourceVar, { expires: 10, path: '/' });    
                } 

            } else {

                var importSourceCookie = $.cookie('sourcePersistent');
                if (importSourceCookie) {
                    $('#source').val(importSourceCookie);
                }
                
            }
        })(jq1110);
});