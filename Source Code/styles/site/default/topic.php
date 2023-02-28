<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo $item->question ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> Beranda</a></li>
                            <li><a href="<?php echo site_url('department/' . $item->category_id . '-' . permalink($item->category)) ?>"><?php echo $item->category ?></a></li>
                            <li class="active"><?php echo $item->question ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="frequently_asked_question section_padding_100 clearfix cat-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Heading Text  -->
                <div class="topic-details" id="topic-details">
                    <div class="heading_text text-left">
                        <h2><?php echo $item->question ?></h2>

                        <div class="topic-details-head">
                            <div class="pull-left mini-de">
                                <span class="date"><i class="fa fa-clock-o"></i> <?php echo date('d M, Y', strtotime($item->created)) ?></span>
                                <span class="date"><i class="fa fa-eye"></i> <?php echo $item->visits ?></span>
                                <a href="<?php echo site_url('department/' . $item->category_id . '-' . permalink($item->category)) ?>"><i class="fa fa-folder-open"></i> <?php echo $item->category ?></a>
                            </div>
                        </div>
                        <div class="line-shape"></div>
                    </div>
                    <div class="content-topic">
                        <p><?php echo $item->answer ?></p>
                    </div>

                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://lapfas-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>
            </div>
            <div class="col-md-4">
                <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                    <input class="form-control" type="search" placeholder="Jalan Berlubang" name="question" value="<?php echo set_value('question') ?>">
                </form>
                <div class="related-topics">
                    <h3>Topik Terkait</h3>
                    <?php foreach ($related_items as $faq) : ?>
                        <a href="<?php echo site_url('topic/' . $faq->faq_id . '-' . permalink($faq->question)) ?>">
                            <i class="fa fa-angle-double-right"></i>
                            <?php if (strlen($faq->question) > 35) : ?> <?php echo substr($faq->question, 0, 35) . ".."; ?> <?php else : ?> <?php echo $faq->question; ?> <?php endif ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="related-topics">
                    <h3>Topik Terbaru</h3>
                    <?php foreach ($recent_items as $recent) : ?>
                        <a href="<?php echo site_url('topic/' . $recent->faq_id . '-' . permalink($recent->question)) ?>">
                            <i class="fa fa-angle-double-right"></i>
                            <?php if (strlen($recent->question) > 35) : ?> <?php echo substr($recent->question, 0, 35) . ".."; ?> <?php else : ?> <?php echo $recent->question; ?> <?php endif ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </diV>
</section>