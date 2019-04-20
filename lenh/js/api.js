
//Api request
function searchApi(search) {
    var apiSearch = 'https://www.googleapis.com/youtube/v3/search';
    var request = {
        key: 'AIzaSyD9AgVoZdi-hA4qUjNJ0wwUsbkjxr0zDUw',
        part: 'snippet',
        type: 'video',
        q: search,
        order: 'relevance',
        maxResults: 12
    };

    $.getJSON(apiSearch, request, display);
}
//Api display content
function display(results) {
    var insert1 = "";
    var insert2 = "";
    var insert3 = "";
    var reponse = results.items;
    
    $.each(reponse, function (index, item) {
        var title = item.snippet.title;
        var channel = item.snippet.channelTitle;
        var video = item.id.videoId;
        var video2 = item.id.videoId;
        var video3 = item.id.videoId;
        //insert += '<h4>' + title + '</h4>';
        //insert += '<p>' + channel + '</p>'; 
        //insert +='<iframe src="' + video + '"></iframe>'; //GET undefined. Will not display...WTF.
        insert1 += '<div class="col-4"><iframe width="100%" height="auto" src=\"//www.youtube.com/embed/'+ video +'\" allowfullscreen></iframe></div>';
    
    }); 
    $('#result').html(insert1);
}


//form input and submission
$(document).ready(function () {
    $('#channel-form').submit(function(e) {
        e.preventDefault();
        var searchInput = $('#search-input').val();
        searchApi(searchInput); 
    });
});