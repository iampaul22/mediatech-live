var fbURL = "https://mediatech.ventures/wp-json/wpe/cache-plugin/v1/clear_all_caches";

$.ajax({
    url: fbURL,
    type: 'POST',
    success: function (resp) {
        alert('123');
    },
    error: function (e) {
        alert('Error: ' + e);
    }
});
