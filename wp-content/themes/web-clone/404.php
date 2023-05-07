<?php get_header(); ?>

<div class="container">
    <div class="content">
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>:(</h1>
                </div>
                <h2>404 - Page not found</h2>
                <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                <a href="/hothanhtai_wp">home page</a>
                <?php
                     get_search_form(); 
                ?>
            </div>
        </div>
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

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 710px;
  width: 100%;
  padding-left: 190px;
  line-height: 1.4;
}

.notfound .notfound-404 {
  position: absolute;
  left: 0;
  top: 0;
  width: 150px;
  height: 150px;
}

.notfound .notfound-404 h1 {
  font-family: 'Passion One', cursive;
  color: #00b5c3;
  font-size: 150px;
  letter-spacing: 15.5px;
  margin: 0px;
  font-weight: 900;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound h2 {
  font-family: 'Raleway', sans-serif;
  color: #292929;
  font-size: 28px;
    font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  margin-top: 0;
}

.notfound p {
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 400;
  margin-top: 0;
  margin-bottom: 15px;
  color: #333;
}

input#s {
    width: 198px;
    padding: 13px;
    margin: 10px;
    border-radius: 15px;
}

input#searchsubmit {
    background-color: #00b5c3;
    padding: 3px;
    color: white;
    border-radius: 5px;
    border : none;
    outline : none;
}

input#searchsubmit:hover{
    opacity: 0.7;
}

.notfound a {
    margin-bottom: 3px;
    border: 1px solid #00b5c3;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  text-decoration: none;
  text-transform: uppercase;
  background: #fff;
  display: inline-block;
  padding: 15px 30px;
  border-radius: 40px;
  color: #292929;
  font-weight: 700;
  -webkit-box-shadow: 0px 4px 15px -5px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 4px 15px -5px rgba(0, 0, 0, 0.3);
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  color: #fff;
  background-color: #00b5c3;
}

@media only screen and (max-width: 480px) {
  .notfound {
    text-align: center;
  }
  .notfound .notfound-404 {
    position: relative;
    width: 100%;
    margin-bottom: 15px;
  }
  .notfound {
    padding-left: 15px;
    padding-right: 15px;
  }
}

}
</style>

<?php get_footer(); ?>

