<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(__('Please do not load this page directly. Thanks!', 'yoga-fit'));
}


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'yoga-fit') . '</p>';
	
	
    return;
}


// if (comments_open()) {
// 	if (have_comments()) {
// 		echo '<aside id="comments" class="post_comments">' . "\n" . 
// 			'<h4>';
		
// 		comments_number(esc_attr__('No Comments', 'yoga-fit'), esc_attr__('Comment', 'yoga-fit') . ' (1)', esc_html__('Comments', 'yoga-fit') . ' (%)');
		
// 		echo '</h4>' . "\n";
		
		
// 		if (get_previous_comments_link() || get_next_comments_link()) {
// 			echo '<aside class="project_navi" role="navigation">' . "\n\t" . 
// 				'<span class="fl">' . "\n\t\t";
			
// 			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'yoga-fit'));
			
// 			echo "\n\t" . '</span>' . "\n\t" . 
// 			'<span class="fr">' . "\n\t\t";
			
// 			next_comments_link(esc_attr__('Newer Comments', 'yoga-fit') . ' &rarr;');
			
// 			echo "\n\t" . '</span>' . "\r" . 
// 			'</aside>' . "\n";
// 		}
		
		
// 		echo '<ol class="commentlist">' . "\n";
		
		
// 		wp_list_comments(array( 
// 			'type' => 'comment', 
// 			'callback' => 'mytheme_comment' 
// 		));
		
		
// 		echo '</ol>' . "\n";
		
		
// 		if (get_previous_comments_link() || get_next_comments_link()) {
// 			echo '<aside class="project_navi" role="navigation">' . "\n\t" . 
// 				'<span class="fl">' . "\n\t\t";
			
// 			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'yoga-fit'));
			
// 			echo "\n\t" . '</span>' . "\n\t" . 
// 			'<span class="fr">' . "\n\t\t";
			
// 			next_comments_link(esc_attr__('Newer Comments', 'yoga-fit') . ' &rarr;');
			
// 			echo "\n\t" . '</span>' . "\r" . 
// 			'</aside>' . "\n";
// 		}
		
		
// 		echo '</aside>';
// 	}
	
	
// 	$form_fields =  array( 
// 		'author' => '<p class="comment-form-author">' . "\n" . 
// 			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_attr__('Name', 'yoga-fit') . (($req) ? ' (' . esc_attr__('Required', 'yoga-fit') . ')' : '') . '" />' . "\n" . 
// 		'</p>' . "\n", 
// 		'email' => '<p class="comment-form-email">' . "\n" . 
// 			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_attr__('Email', 'yoga-fit') . (($req) ? ' (' . esc_attr__('Required', 'yoga-fit') . ')' : '') . '" />' . "\n" . 
// 		'</p>' . "\n", 
// 		'url' => '<p class="comment-form-url">' . "\n" . 
// 			'<input type="text" id="url" name="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" placeholder="' . esc_attr__('Website', 'yoga-fit') . '" />' . "\n" . 
// 		'</p>' . "\n" 
// 	);
	
	
// 	echo "\n\n";
	
	
// 	comment_form(array( 
// 		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
// 		'comment_field' => 		'<p class="comment-form-comment">' . 
// 									'<textarea name="comment" id="comment" cols="60" rows="10"></textarea>' . 
// 								'</p>', 
// 		'must_log_in' => 		'<p class="must-log-in">' . 
// 									esc_html__('You must be', 'yoga-fit') . 
// 									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
// 										. esc_html__('logged in', 'yoga-fit') . 
// 									'</a> ' 
// 									. esc_html__('to post a comment', 'yoga-fit') . 
// 								'.</p>' . "\n", 
// 		'logged_in_as' => 		'<p class="logged-in-as">' . 
// 									esc_html__('Logged in as', 'yoga-fit') . 
// 									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
// 										$user_identity . 
// 									'</a>. ' . 
// 									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'yoga-fit') . '">' . 
// 										esc_html__('Log out?', 'yoga-fit') . 
// 									'</a>' . 
// 								'</p>' . "\n", 
// 		'comment_notes_before' => 	'<p class="comment-notes">' . 
// 										esc_html__('Your email address will not be published.', 'yoga-fit') . 
// 									'</p>' . "\n", 
// 		'comment_notes_after' => 	'', 
// 		'id_form' => 				'commentform', 
// 		'id_submit' => 				'submit', 
// 		'title_reply' => 			esc_attr__('Leave a Reply', 'yoga-fit'), 
// 		'title_reply_to' => 		esc_attr__('Leave your comment to', 'yoga-fit'), 
// 		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'yoga-fit'), 
// 		'label_submit' => 			esc_attr__('Submit Comment', 'yoga-fit') 
// 	));
// }

