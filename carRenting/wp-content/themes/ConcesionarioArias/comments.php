
<div class="form">       
<?php 
$args = array(
    'fields' => apply_filters(
        'comment_form_default_fields', array(
            'author' =>'<p class="comment-form-author">' . 
            '<input id="author" class="input-md form-control" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                '<label for="author">' . __( 'Your Name' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )  .
                '</p>'
                ,
            'email'  => '<p class="comment-form-email">' . 
            '<input id="email" placeholder="your-real-email@example.com" name="email" class="input-md form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                '<label for="email">' . __( 'Your Email' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) 
                 .
                '</p>',

        )
    ),
    'comment_field' => '<p class="comment-form-comment">' .
        '<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
        '<textarea name="comment" id="comment" class="input-md form-control" rows="6" placeholder="Enter your text here" maxlength="400"></textarea>' .
        '</p>',
    'comment_notes_after' => '',
    'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>'
    
);

comment_form($args);

?>
 </div>
 
 
 <h4 class="blog-page-title font-alt mb-0">Latest Comments</h4>
 <ul class="media-list text comment-list clearlist">
      <li class="media comment-item">
    <?php
    
    wp_list_comments(array(
                 'callback' => 'better_comments',
                  'type'=>'comment',
                  'style'=>'ul' ));
    
    ?>
    </li>
 </ul>
