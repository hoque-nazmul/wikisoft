<div class="comments-wrap">
    <div id="comments" class="row">
        <div class="col-full">
            <!-- Comment Counter -->
            <h3 class="h2">
                <?php 
                    $comments_num = get_comments_number();
                    if ($comments_num <= 1) {
                        _e($comments_num. ' Comment', 'wikisoft');
                    } else {
                        _e($comments_num. ' Comments', 'wikisoft');
                    }
                ?>
            </h3>
            <!-- commentlist -->
            <ol class="commentlist">
                <?php wp_list_comments(); ?>
            </ol> 

            <div class="comment-pagination">
                <?php 
                    get_the_comments_pagination([
                        'screen_reader_text' => __(' ', 'wikisoft'),
                        'prev_text' => __('Prev Comments', 'wikisoft'),
                        'next_text' => __('Next Comments', 'wikisoft')
                    ])
                ?>
            </div>
            <!-- Comment Form -->
            <div class="respond">
                <?php 
                    comment_form([
                        'label_submit' => __('Submit', 'wikisoft'),
                        'title_reply' => __('Add Comment', 'wikisoft')
                    ]);
                ?>
            </div> 
        </div> 
    </div>
</div>