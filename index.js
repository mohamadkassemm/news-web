
    $.ajax({
        type: 'GET',
        URL: 'http://localhost/news-web/apis/news.php',
        success: function(data){
            console.log('success', data);
        }
    });
