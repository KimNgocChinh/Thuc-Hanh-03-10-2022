var is_busy = false;
     
var page = 1;
 
var record_per_page = 3;
 
var stopped = false;
 
$(document).ready(function()
{

    $('#load_more').click(function()
    {

        $element = $('#content');
 
        $button = $(this);
         
        if (is_busy == true) {
            return false;
        }
         
        page++;

        $button.html('LOADDING ...');
 

        $.ajax(
        {
            type: 'get',
            dataType: 'json',
            url: 'data.php',
            data: {page: page},
            success: function(result)
            {
                var html = '';
 

                if (result.length <= record_per_page)
                {

                    $.each(result, function (key, obj){
                        html += '<div>'+obj.id+' - '+obj.name+'-'+obj.website+'</div>';
                    });
 

                    $element.append(html);
 

                    $button.remove();
                }
                else{ 

                    $.each(result, function (key, obj){
                        if (key < result.length - 1){
                            html += '<div>'+obj.id+' - '+obj.name+'-'+obj.website+'</div>';
                        }
                    });
 

                    $element.append(html);
                }
 
            }
        })
        .always(function()
        {

            $button.html('LOAD MORE');
            is_busy = false;
        });
 
    });
});