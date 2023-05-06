<?php
/*
Plugin Name: TT Widget
Author: ThanhTai
*/

//Khởi tạo widget
add_action('widgets_init','create_thanhtai_widget');

function create_thanhtai_widget(){
    register_widget('Thanhtai_Widget');
}


//Tạo widget


class Thanhtai_Widget extends WP_Widget{

    //thông tin widget
    function __construct(){
        parent::__construct(
            'thanhtai_widget',//id đại diện cho widget
            'TT Widget',
            array(
                'description' => 'Widget ví dụ của Thanh Tài'
            )
        );
    }

    //thiết lập trường nhập liệu
    function form( $instance ){
        $default = array(
            'title' => 'TT Widget',
            'content' => 'Nhập nội dung'
        );
        $instance = wp_parse_args($instance, $default);//hàm wp_parse_args có ý nghĩa khi chưa có data sẽ lấy data mặc định gán cho biến instance

       echo(
        'Title : <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$instance['title'].'"/>'
       );

       echo(
        'Nhập nội dung : <textarea class="widefat" name="'.$this->get_field_name('content').'"> '.$instance['content'].'</textarea>'
       );
    }

    //lưu dữ liệu từ form
    function update( $new_instance, $old_instance){
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['content'] = $new_instance['content'];
        return $instance;
    }

    //hiển thị widget ra bên ngoài
    function widget( $args, $instance){
        extract( $args );//tách key trong biến args ra thành các biến riêng để dễ sử dụng
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        echo $before_title.$title.$after_title;
        echo '<div class="tt_content">'.$instance['content'].'</div>';
        echo $after_widget;
    }
}

