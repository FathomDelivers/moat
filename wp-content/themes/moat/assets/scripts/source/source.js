function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

jq1110( document ).ready(function() {
        var temp_lead_source = getParameterByName('lead_source');
        var importantSourceVar = 'Source_' + temp_lead_source;

        (function($){
            // your all jQuery code inside here

            if (temp_lead_source) {
                $('#lead_source').val(temp_lead_source);

                if (! $.cookie('lead_sourcePersistent') ) {
                    $.cookie('lead_sourcePersistent', importantSourceVar, { expires: 10, path: '/' });    
                } 

            } else {

                var importSourceCookie = $.cookie('lead_sourcePersistent');
                if (importSourceCookie) {
                    $('#lead_source').val(importSourceCookie);
                }
                
            }
        })(jq1110);
});