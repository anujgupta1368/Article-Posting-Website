$(document).ready(function(){

    var API_KEY = "AIzaSyC2gRJcnJWdXi-dttS7KZ7O7NtMAAh32Bg"

    var video = ''

    $("#form").submit(function (event){
        event.preventDefault()

        var search = $("#search-box").val()
        videoSearch(API_KEY, search, 10)
    })

    function videoSearch(key, search, maxResults) {
        $.get("https://www.googleapis.com/youtube/v3/search?key="+ key + "&type=video&part=snippet&q=" + search + "&maxResults=" + maxResults, function(data){
            console.log(data);
            
            $("#videos").empty();
            
            data.items.forEach(item => {
                video = `
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/${item.id.videoId}"></iframe>
                `;
    
                $("#videos").append(video);
            });
        });
    }    
})