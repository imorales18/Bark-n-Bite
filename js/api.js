
//Api request
function searchApi(search) {
    var apiSearch = 'https://www.googleapis.com/youtube/v3/search';
    var request = {
        key: 'AIzaSyD9AgVoZdi-hA4qUjNJ0wwUsbkjxr0zDUw',
        part: 'snippet',
        type: 'video',
        q: search,
        order: 'relevance',
        maxResults: 5
    };

    $.getJSON(apiSearch, request, display);
}
//Api display content
function display(results) {
    var insert = "";
    var reponse = results.items;
    
    $.each(reponse, function (index, item) {
        var title = item.snippet.title;
        var channel = item.snippet.channelTitle;
        var video = item.id.videoId;
        insert += '<h4>' + title + '</h4>';
        insert += '<p>' + channel + '</p>'; 
        //insert +='<iframe src="' + video + '"></iframe>'; //GET undefined. Will not display...WTF.
        insert += '<iframe src=\"//www.youtube.com/embed/'+ video +'\"></iframe>'; //throws ERR_BLOCKED_BY_CLIENT due to use of embed and no OAuth. Videos do load however.
    }); 
    $('#results-related').html(insert);
}


//form input and submission
$(document).ready(function () {
    $('#channel-form').submit(function(e) {
        e.preventDefault();
        var searchInput = $('#search-input').val();
        searchApi(searchInput); 
    });
});
