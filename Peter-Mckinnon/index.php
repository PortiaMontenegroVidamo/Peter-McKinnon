<?php
	require('config/config.php');
	require('config/db.php');

    include('assets/inc/featured_post.inc.php');
    include('assets/inc/header.php');
    include('assets/inc/navbar_client.php');
    
?>








    

<!-- Main Body -->
<main>
    <!-- landing page -->
    <div class="landing-page">
        <div class="landing-text">
            <h1>Inspire. Travel. Learn.</h1>
            <p>Photographer & Filmmaker. Lover of coffee and good stories.</p>
        </div>
    </div>
    <!-- End of Landing Page -->
<hr>
    <!-- Featured Articles -->
    <div class="featured-articles d-flex justify-content-center flex-wrap">
        <?php foreach($posts as $post) : ?>
            <div class="card-box col-lg-5">
                <div class="cards border-dark d-flex">
                    <div class="article-thumbnail"></div>
                        <div class="card-content">
                            <div class="d-flex justify-content-between">
                                <div class="card-header author"><?php echo $post['art_author']; ?><br><small class="badge badge-info"><?php echo $post['art_date']; ?></small>
                                <a class="badge badge-primary" href="<?php echo ROOT_URL; ?>pages/articles.php?art_id=<?php echo $post['art_id']; ?>">Read More</a>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $post['art_title']; ?></h4>
                                <div class="card-text"><?php echo $post['art_desc']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

   





<hr>
    <!-- Profile  -->
    <div class="team-polarpro-page">
       
            
        <div class="header" style='background: url(https://cdn.shopify.com/s/files/1/1050/9944/t/30/assets/Background-1545072902753.png?9066169048032531273); background-size: cover; display: block; height: 50vw; max-width: 50vw;'>
             
              <img src="https://cdn.shopify.com/s/files/1/1050/9944/t/30/assets/McKinnonProfile-1545072902782.png?8307029976075919746" alt="" class='profile-img'>
        </div>
        <div class="container">
        <div class="visionary-text">
                <div class='main-bio'>
                        <p>Accomplished Photographer &amp; Filmmaker, Peter McKinnon has amassed a large following on several platforms including over 2.7 million on his self titled YouTube Channel. His Video center around strong storytelling, industry tutorials and his love for coffee. The Toronto resident takes his viewers along on his globetrotting travels, creating amazing videos and photographs as he goes. Sprinkled into his video catalog you will find short film projects that are nothing short of amazing. "The Bowl","The Owl", &amp; "For her." are just a few examples worth pausing what you are dooing to give them a watch. Seriously, go give them a watch..... we will wait.</p><p>While McKinnon's film work is impressive enough, he also creates some of the most unique and well composed photos in the industry. @petermckinnon boasts over 1.3 million followers who turn to him for Inspiration. Numbers aside, it's easy to tell what separates McKinnon from the rest of the pack.</p><p>He is constantly staying ahead of the project at hand and publishing videos at a strong pace.</p>
                </div>
        </div>
        </div>
        
    </div>
<hr>
    <!-- Work with us -->

    <div class="contact">
        <div class="contact-us row">
            <form class="card-message col-lg-3" action="" method="post">
                    <Legend class="d-flex"><h3>Work with us</h3></Legend>
                <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleTextarea">Message</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div><legend></legend></div>
               
                <button type="submit" class="btn btn-light btn-submit" >Submit</button>
            </form>
           
        </div>
    </div>

</main>
<!-- Main Body -->

<footer>
    <div class="footer-container">
        <div class="footer-brand-name" >
            <p class="footer">Peter Mckinnon</p>
        </div>
    </div>
</footer>
</body>
</html>