<div class="comment-big-div" style="margin-top:40px;">Bình luận ( 
    
    <?php 
        if(! have_comments()){
            echo "0";
        }else{
            echo get_comments_number();
        } 
    ?> 
    
)</div>

<table class="dis" style="width:100%;">
            <tbody id="_wc7d461">
                <!-- <tr class="comment" id="comment239004">
                    <td class="col1">
                        <a href="https://hotoc.vn/account/info/eca2f4b6-29bdfbb7d-4"><img src="https://hotoc.vn/content/images/gia-pha-tot-male_64.png"></a> 
                    </td>
                    <td>
                        <div class="comment">
                            khi phải đóng phí, hotoc.vn đã cung cấp số tài khoản, nhưng không biết tên họ tộc nào đã chuyển. làm thế nào để biết được tên người chuyển
                            <div class="trace"><a href="https://hotoc.vn/account/info/eca2f4b6-29bdfbb7d-4" class="link-u">Cao Văn Thăng</a> - 30/08/2020 11:22</div>
                        </div>
                    </td>
                </tr> -->
                <tr>
                    <?php 
                        wp_list_comments(
                            array(
                                'avatar_size' => 60,
                                'style' => 'div'
                            )
                        );
                    ?>  
                </tr>

            </tbody>
</table>
<div id="_x393b1d" class="comment-editor" style="margin-bottom:40px;">
    <div class="cmds">
        <?php 
            if( comments_open() ){
                comment_form(
                    array(
                        'class_form' => '',
                        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                        'title_reply_after' => '</h2>'
                    )
                );
            }
        ?> 
       
    </div>
    <div class="clr"></div>
</div>