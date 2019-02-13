<div class="sidebar_news card">
    <p class="title">پربازدید ترین اخبار</p>
    <div class="items ">
        <?php
        $visited_ids = $db->get_all_most_visited_ids();
        foreach ($visited_ids as $id) {
            $post = new post(1, $id);
            ?>
            <a class="main-link" href="single.php?n=<?php echo $post->getId(); ?>">
                <div class="item row">
                    <div class="caption col-lg-8">
                        <p><?php echo $post->getTitle(); ?></p>
                        <p><?php echo $post->getAdmin()->getName(); ?></p>
                    </div>
                    <img class="col-lg-4 news_img_shahab"
                         src="<?php echo $post->getImgLink(); ?>">
                </div>
            </a>
            <?php
        }
        ?>
    </div>
    <a href="#" class="show_more">
        <
        <همه اخبار
    </a></div>