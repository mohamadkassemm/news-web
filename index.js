const $content= $('#content') 
    $.ajax({
        type: 'GET',
        URL: 'http://localhost/news-web/apis/news.php',
        dataType : `json`,
        success: function(data){
            console.log('success', data);
            $.each(data,function(data){
                $content.append('<div class="row"> <div class="col-lg"> <h3 class="mb-4">News content</h3> <p>news:'data.news_content'</p> <p>published at:'data.created_at'</p></div></div>')
            }) 
        }
    });
