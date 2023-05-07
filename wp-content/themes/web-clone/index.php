<?php get_header(); ?>

<div class="container">
    <div class="content">
        <?php
            if(have_posts()){
                while(have_posts()){
                   
                    the_post();

                    get_template_part( 'template-parts/content', 'archive' ); 
                }
            }
        ?>
    </div>

    <div class="page-post">
        <?php
            the_posts_pagination();
        ?>
    </div>

</div>

<style>
.container{
    height: 100%;
    padding: 10px 100px;
    margin: 0px 258px;
    background-color: #fff;
}

.nav-links{
    border-top: 1px solid #000;
    margin-top: 40px;
    text-align: center;
    padding-top: 10px;
}

span.page-numbers.current {
    padding: 6px 11px;
    border: 1px solid;
    background-color: #000;
    color: white;
    text-decoration : none;
    border-radius: 3px;


}

a.page-numbers {
    padding: 6px 11px;
    border: 1px solid;
    background-color: #fff;
    color: black;
    text-decoration : none;
    border-radius: 3px;

}

a.prev.page-numbers,
a.next.page-numbers {
    text-decoration : none;
    border-radius: 3px;

}


</style>

<?php get_footer(); ?>

