$(document).ready(function(){
    $("#form").submit(function(){
        if ($("#type").val() == "") {
        alert("分组关键字不能为空");
        return false;
        }
        for(var i=1;i<=8;i++){
            var now="#site"+i;
            if($(now).val() == "") {
            alert("网站名"+i+"不能为空");
            return false;
            }
        }
        for(var i=1;i<=8;i++){
            var now="#url"+i;
            if($(now).val() == "") {
            alert("网站地址"+i+"不能为空");
            return false;
            }
        }
    });

    $("#rank").on("click",function(){
        if ($("#type").val() == "") {
        alert("分组关键字不能为空");
        return;
        }
        var nowtext = "word="+$('#type').val();
        $("#rank").html('Ranking...');
        //alert(nowtext);
        $.get('./pagerank/ranknow.php',nowtext,function(array){
                if(array=='has'){
                    alert('该分组已存在');
                }
                else{
                    for(var i=1;i<=8;i++){
                    var now="#url"+i;
                    $(now).val('http://'+array[i]);
                    }
                }
                $("#rank").html('PageRankIt!');           
        },
        "json"
        );
        
    })

    // $.get('init.php',"",
    //     function(msg){
    //         if(msg!="No"){//如果已经登陆，去选他的收藏
    //             SavaOrDelete=0;//切换到删除模式
    //             var sites_num = msg.length;
    //             var count = 0;
    //                 for (var i = 1; i<=8; i++)
    //                  {
    //                     var nowlink= "#link"+i;
    //                     var nowpara="#p"+i;
    //                     if(count<sites_num)
    //                     {
    //                         $(nowlink).attr("href",msg[count]['site_url']);
    //                         $(nowpara).html(msg[count]['site_name']);
    //                         count++;
    //                     }
    //                 }
    //             first = false;
    //         }
    //     },
    // "json"
    // );

});