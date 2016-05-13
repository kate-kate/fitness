<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Custom Theme Widgets
 * Created by CMSMasters
 * 
 */


/**
 * Advertisement Widget Class
 */
class WP_Widget_Custom_Advertisement extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_advertisement_entries', 
			'description' => 	esc_attr__('Your advertisement', 'yoga-fit') 
		);
		
		$control_ops = array( 
			'width' => 	600 
		);
		
		parent::__construct('custom-advertisement', esc_attr__('Advertisement', 'yoga-fit'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Advertisement', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
        $image1 = isset($instance['image1']) ? $instance['image1'] : '';
        $link1 = isset($instance['link1']) ? $instance['link1'] : '';
        $image2 = isset($instance['image2']) ? $instance['image2'] : '';
        $link2 = isset($instance['link2']) ? $instance['link2'] : '';
        $image3 = isset($instance['image3']) ? $instance['image3'] : '';
        $link3 = isset($instance['link3']) ? $instance['link3'] : '';
        $image4 = isset($instance['image4']) ? $instance['image4'] : '';
        $link4 = isset($instance['link4']) ? $instance['link4'] : '';
        $image5 = isset($instance['image5']) ? $instance['image5'] : '';
        $link5 = isset($instance['link5']) ? $instance['link5'] : '';
        $image6 = isset($instance['image6']) ? $instance['image6'] : '';
        $link6 = isset($instance['link6']) ? $instance['link6'] : '';
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		echo '<div class="adv_image_wrap">';
		
		if ($image1 != '' && $link1 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . esc_url($link1) . '" target="_blank">' . 
					'<img src="' . esc_url($image1) . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image2 != '' && $link2 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . esc_url($link2) . '" target="_blank">' . 
					'<img src="' . esc_url($image2) . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image3 != '' && $link3 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . esc_url($link3) . '" target="_blank">' . 
					'<img src="' . esc_url($image3) . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image4 != '' && $link4 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . esc_url($link4) . '" target="_blank">' . 
					'<img src="' . esc_url($image4) . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image5 != '' && $link5 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . esc_url($link5) . '" target="_blank">' . 
					'<img src="' . esc_url($image5) . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image6 != '' && $link6 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . esc_url($link6) . '" target="_blank">' . 
					'<img src="' . esc_url($image6) . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}
		
        echo '</div>';
		
        echo $after_widget;
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['image1'] = strip_tags($new_instance['image1']);
        $instance['link1'] = strip_tags($new_instance['link1']);
        $instance['image2'] = strip_tags($new_instance['image2']);
        $instance['link2'] = strip_tags($new_instance['link2']);
        $instance['image3'] = strip_tags($new_instance['image3']);
        $instance['link3'] = strip_tags($new_instance['link3']);
        $instance['image4'] = strip_tags($new_instance['image4']);
        $instance['link4'] = strip_tags($new_instance['link4']);
        $instance['image5'] = strip_tags($new_instance['image5']);
        $instance['link5'] = strip_tags($new_instance['link5']);
        $instance['image6'] = strip_tags($new_instance['image6']);
        $instance['link6'] = strip_tags($new_instance['link6']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$image1 = isset($instance['image1']) ? esc_attr($instance['image1']) : '';
		$link1 = isset($instance['link1']) ? esc_attr($instance['link1']) : '';
		$image2 = isset($instance['image2']) ? esc_attr($instance['image2']) : '';
		$link2 = isset($instance['link2']) ? esc_attr($instance['link2']) : '';
		$image3 = isset($instance['image3']) ? esc_attr($instance['image3']) : '';
		$link3 = isset($instance['link3']) ? esc_attr($instance['link3']) : '';
		$image4 = isset($instance['image4']) ? esc_attr($instance['image4']) : '';
		$link4 = isset($instance['link4']) ? esc_attr($instance['link4']) : '';
		$image5 = isset($instance['image5']) ? esc_attr($instance['image5']) : '';
		$link5 = isset($instance['link5']) ? esc_attr($instance['link5']) : '';
		$image6 = isset($instance['image6']) ? esc_attr($instance['image6']) : '';
		$link6 = isset($instance['link6']) ? esc_attr($instance['link6']) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('image1')); ?>"><?php esc_html_e('Image', 'yoga-fit'); ?> #1:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('image1')); ?>" name="<?php echo esc_attr($this->get_field_name('image1')); ?>" type="text" value="<?php echo esc_attr($image1); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('link1')); ?>"><?php esc_html_e('Link', 'yoga-fit'); ?> #1:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link1')); ?>" name="<?php echo esc_attr($this->get_field_name('link1')); ?>" type="text" value="<?php echo esc_attr($link1); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('image2')); ?>"><?php esc_html_e('Image', 'yoga-fit'); ?> #2:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('image2')); ?>" name="<?php echo esc_attr($this->get_field_name('image2')); ?>" type="text" value="<?php echo esc_attr($image2); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('link2')); ?>"><?php esc_html_e('Link', 'yoga-fit'); ?> #2:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link2')); ?>" name="<?php echo esc_attr($this->get_field_name('link2')); ?>" type="text" value="<?php echo esc_attr($link2); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('image3')); ?>"><?php esc_html_e('Image', 'yoga-fit'); ?> #3:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('image3')); ?>" name="<?php echo esc_attr($this->get_field_name('image3')); ?>" type="text" value="<?php echo esc_attr($image3); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('link3')); ?>"><?php esc_html_e('Link', 'yoga-fit'); ?> #3:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link3')); ?>" name="<?php echo esc_attr($this->get_field_name('link3')); ?>" type="text" value="<?php echo esc_attr($link3); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('image4')); ?>"><?php esc_html_e('Image', 'yoga-fit'); ?> #4:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('image4')); ?>" name="<?php echo esc_attr($this->get_field_name('image4')); ?>" type="text" value="<?php echo esc_attr($image4); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('link4')); ?>"><?php esc_html_e('Link', 'yoga-fit'); ?> #4:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link4')); ?>" name="<?php echo esc_attr($this->get_field_name('link4')); ?>" type="text" value="<?php echo esc_attr($link4); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('image5')); ?>"><?php esc_html_e('Image', 'yoga-fit'); ?> #5:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('image5')); ?>" name="<?php echo esc_attr($this->get_field_name('image5')); ?>" type="text" value="<?php echo esc_attr($image5); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('link5')); ?>"><?php esc_html_e('Link', 'yoga-fit'); ?> #5:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link5')); ?>" name="<?php echo esc_attr($this->get_field_name('link5')); ?>" type="text" value="<?php echo esc_attr($link5); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('image6')); ?>"><?php esc_html_e('Image', 'yoga-fit'); ?> #6:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('image6')); ?>" name="<?php echo esc_attr($this->get_field_name('image6')); ?>" type="text" value="<?php echo esc_attr($image6); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('link6')); ?>"><?php esc_html_e('Link', 'yoga-fit'); ?> #6:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link6')); ?>" name="<?php echo esc_attr($this->get_field_name('link6')); ?>" type="text" value="<?php echo esc_attr($link6); ?>" />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Contact Information Widget Class
 */
class WP_Widget_Custom_Contact_Info extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_contact_info_entries', 
			'description' => 	esc_html__('Your contact information', 'yoga-fit') 
		);
		
		$control_ops = array( 
			'width' => 	600 
		);
		
		parent::__construct('custom-contact-info', esc_attr__('Contact Information', 'yoga-fit'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Contact Information', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
        $name = isset($instance['name']) ? esc_html($instance['name']) : '';
        $address = isset($instance['address']) ? esc_html($instance['address']) : '';
        $city = isset($instance['city']) ? esc_html($instance['city']) : '';
        $state = isset($instance['state']) ? esc_html($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_html($instance['zip']) : '';
        $phone = isset($instance['phone']) ? esc_html($instance['phone']) : '';
        $email = isset($instance['email']) ? sanitize_email($instance['email']) : '';
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		if ($name != '') { 
			echo '<span class="contact_widget_name">' . $name . '</span>';
		}
		
		if ($address != '' || $city != '' || $state != '' || $zip != '') {
			echo '<div class="adress_wrap">';
		}
		
		if ($address != '') { 
			echo '<span class="contact_widget_address">' . $address . '</span>';
		}
		
		if ($city != '') { 
			echo '<span class="contact_widget_city">' . $city . '</span>';
		}
		
		if ($state != '') { 
			echo '<span class="contact_widget_state">' . $state . '</span>';
		}
		
		if ($zip != '') { 
			echo '<span class="contact_widget_zip">' . $zip . '</span>';
		}
		
		if ($address != '' || $city != '' || $state != '' || $zip != '') {
			echo '</div>';
		}
		
		if ($phone != '') { 
            echo '<span class="contact_widget_phone">' . 
				'<span class="contact_widget_phone_inner">' . esc_html__('Phone', 'yoga-fit') . ':&nbsp;</span>' . 
				$phone . 
			'</span>';
		}
		
        if ($email != '') { 
            echo '<span class="contact_widget_email">' . 
				'<span class="contact_widget_email_inner">' . esc_html__('Email', 'yoga-fit') . ':&nbsp;</span>' . 
				'<a href="mailto:' . antispambot($email, 1) . '">' . antispambot($email) . '</a>' . 
			'</span>';
		}
		
        echo $after_widget;
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['name'] = strip_tags($new_instance['name']);
        $instance['address'] = strip_tags($new_instance['address']);
        $instance['city'] = strip_tags($new_instance['city']);
        $instance['state'] = strip_tags($new_instance['state']);
        $instance['zip'] = strip_tags($new_instance['zip']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        $instance['email'] = strip_tags($new_instance['email']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $name = isset($instance['name']) ? esc_attr($instance['name']) : '';
        $address = isset($instance['address']) ? esc_attr($instance['address']) : '';
        $city = isset($instance['city']) ? esc_attr($instance['city']) : '';
        $state = isset($instance['state']) ? esc_attr($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_attr($instance['zip']) : '';
        $phone = isset($instance['phone']) ? esc_attr($instance['phone']) : '';
        $email = isset($instance['email']) ? esc_attr($instance['email']) : '';
        ?>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('name')); ?>"><?php esc_html_e('Name', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" type="text" value="<?php echo esc_attr($name); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($address); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('city')); ?>"><?php esc_html_e('City', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('city')); ?>" name="<?php echo esc_attr($this->get_field_name('city')); ?>" type="text" value="<?php echo esc_attr($city); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('state')); ?>"><?php esc_html_e('State', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('state')); ?>" name="<?php echo esc_attr($this->get_field_name('state')); ?>" type="text" value="<?php echo esc_attr($state); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('zip')); ?>"><?php esc_html_e('Zip', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('zip')); ?>" name="<?php echo esc_attr($this->get_field_name('zip')); ?>" type="text" value="<?php echo esc_attr($zip); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Divider Widget Class
 */
class WP_Widget_Custom_Divider extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_divider_entries', 
			'description' => 	esc_html__('Divider for widgets rows', 'yoga-fit') 
		);
		
		parent::__construct('custom-divider', esc_attr__('Divider', 'yoga-fit'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
        $divider = isset($instance['divider']) ? $instance['divider'] : false;
        $divider_bdr = isset($instance['divider_bdr']) ? $instance['divider_bdr'] : 'solid';
		
		if ($divider) {
			echo '<div class="cmsms_widget_divider ' . esc_attr($divider_bdr) . '"></div>';
		} else {
			echo '<div class="cl"></div>';
		}
    }
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance = array( 
			'divider' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		$instance['divider_bdr'] = strip_tags($new_instance['divider_bdr']);
		
		return $instance;
	}
	
	function form($instance) {
		$instance = wp_parse_args((array) $instance, array( 
			'divider' => false 
		) );
		$divider_bdr = isset($instance['divider_bdr']) ? esc_attr($instance['divider_bdr']) : 'solid';
        ?>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['divider'], true); ?> id="<?php echo esc_attr($this->get_field_id('divider')); ?>" name="<?php echo esc_attr($this->get_field_name('divider')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('divider')); ?>"><?php esc_html_e('Show Divider Line', 'yoga-fit'); ?></label>
		</p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('divider_bdr')); ?>"><?php esc_html_e('Divider Type', 'yoga-fit'); ?>:<br />
				<select class="widefat" id="<?php echo esc_attr($this->get_field_id('divider_bdr')); ?>" name="<?php echo esc_attr($this->get_field_name('divider_bdr')); ?>">
					<option value="solid"<?php if ($divider_bdr == 'solid') { echo ' selected="selected"'; } ?>><?php esc_html_e('Solid Line', 'yoga-fit'); ?></option>
					<option value="dashed"<?php if ($divider_bdr == 'dashed') { echo ' selected="selected"'; } ?>><?php esc_html_e('Dashed Line', 'yoga-fit'); ?></option>
					<option value="dotted"<?php if ($divider_bdr == 'dotted') { echo ' selected="selected"'; } ?>><?php esc_html_e('Dotted Line', 'yoga-fit'); ?></option>
					<option value="transparent"<?php if ($divider_bdr == 'transparent') { echo ' selected="selected"'; } ?>><?php esc_html_e('Transparent Line', 'yoga-fit'); ?></option>
				</select>
            </label>
        </p>
		<?php
	}
}


/**
 * Embedded Video Widget Class
 */
class WP_Widget_Custom_Video extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_video_entries', 
			'description' => 	esc_attr__('Video from youtube, vimeo or dailymotion', 'yoga-fit') 
		);
		
		parent::__construct('custom-video', esc_attr__('Embedded Widget', 'yoga-fit'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		global $wp_embed;
		
		$wrap_embed = isset($instance['wrap_embed']) ? $instance['wrap_embed'] : true;
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Embedded Widget', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
        $url = isset($instance['url']) ? $instance['url'] : '';
        $width = isset($instance['width']) ? $instance['width'] : '';
        $height = isset($instance['height']) ? $instance['height'] : '';
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		if ($url != '') {
			if ($wrap_embed) {
				echo '<div class="cmsms_video_wrap">';
			}
			
			echo $wp_embed->run_shortcode('[embed' . 
				(($width != '' && $wrap_embed == '') ? ' width="' . esc_attr($width) . '"' : '') . 
				(($height != '' && $wrap_embed == '') ? ' height="' . esc_attr($height) . '"' : '') . 
			']' . esc_url($url) . '[/embed]');
			
			if ($wrap_embed) {
				echo '</div>';
			}
		}
		
        echo $after_widget;
    }
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance = array( 
			'wrap_embed' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['width'] = strip_tags($new_instance['width']);
        $instance['height'] = strip_tags($new_instance['height']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$url = isset($instance['url']) ? esc_attr($instance['url']) : '';
		$width = isset($instance['width']) ? esc_attr($instance['width']) : '';
		$height = isset($instance['height']) ? esc_attr($instance['height']) : '';
		$instance = wp_parse_args((array) $instance, array( 
			'wrap_embed' => true 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('url')); ?>"><?php esc_html_e('Embed URL', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('url')); ?>" name="<?php echo esc_attr($this->get_field_name('url')); ?>" type="text" value="<?php echo esc_attr($url); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('width')); ?>"><?php esc_html_e('Max Width', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('width')); ?>" name="<?php echo esc_attr($this->get_field_name('width')); ?>" type="text" value="<?php echo esc_attr($width); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('height')); ?>"><?php esc_html_e('Max Height', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('height')); ?>" name="<?php echo esc_attr($this->get_field_name('height')); ?>" type="text" value="<?php echo esc_attr($height); ?>" />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['wrap_embed'], true); ?> id="<?php echo esc_attr($this->get_field_id('wrap_embed')); ?>" name="<?php echo esc_attr($this->get_field_name('wrap_embed')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('wrap_embed')); ?>"><?php esc_html_e('If checked, ignore default video height/max-height and set a 16:9 proportion instead', 'yoga-fit'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Facebook Widget Class
 */
class WP_Widget_Custom_Facebook extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_facebook_entries', 
			'description' => 	esc_attr__('Your Facebook like box', 'yoga-fit') 
		);
		
		parent::__construct('custom-facebook', esc_attr__('Facebook', 'yoga-fit'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Facebook', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
		$url = isset($instance['url']) ? esc_url($instance['url']) : '';
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		echo '<div id="fb-root"></div>' . 
		'<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, "script", "facebook-jssdk"));
		</script>' . 
		'<div class="fb-page" data-href="' . esc_url($url) . '" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="' . esc_url($url) . '"><a href="' . esc_url($url) . '">Facebook</a></blockquote></div></div>' . 
		'<div class="cl"></div>' . 
		$after_widget;
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['url'] = strip_tags($new_instance['url']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $url = isset($instance['url']) ? esc_attr($instance['url']) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('url')); ?>"><?php esc_html_e('Facebook Page URL', 'yoga-fit'); ?> :<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('url')); ?>" name="<?php echo esc_attr($this->get_field_name('url')); ?>" type="text" value="<?php echo esc_attr($url); ?>" />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Flickr Widget Class
 */
class WP_Widget_Custom_Flickr extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_flickr_entries', 
			'description' => 	esc_attr__('Your Flickr account latest images', 'yoga-fit') 
		);
		
		parent::__construct('custom-flickr', esc_attr__('Flickr', 'yoga-fit'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Flickr', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
		$user = isset($instance['user']) ? $instance['user'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 6;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo $before_widget . 
			'<div id="flickr">';
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		echo '<div class="wrap">' . 
				'<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=' . $number . '&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=' . $user . '"></script>' . 
			'</div>' . 
			'<div class="cl"></div>' . 
			'<a href="http://www.flickr.com/photos/' . $user . '" class="more_button" target="_blank"><span>' . esc_html__('More flickr images', 'yoga-fit') . '</span></a>' . 
			'</div>' . 
		$after_widget;
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['user'] = strip_tags($new_instance['user']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $user = isset($instance['user']) ? esc_attr($instance['user']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 6;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('user')); ?>"><?php esc_html_e('Flickr ID', 'yoga-fit'); ?> (<a href="http://www.idgettr.com" target="_blank">idGettr</a>):<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('user')); ?>" name="<?php echo esc_attr($this->get_field_name('user')); ?>" type="text" value="<?php echo esc_attr($user); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest flickr images you'd like to display", 'yoga-fit'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'yoga-fit'); ?> 6</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * HTML5 Audio Widget Class
 */
class WP_Widget_Custom_HTML5_Audio extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_html5_audio_entries', 
			'description' => 	esc_attr__('Your HTML5 Audio', 'yoga-fit') 
		);
		
		$control_ops = array( 
			'width' => 	600 
		);
		
		parent::__construct('custom-html5-audio', esc_attr__('HTML5 Audio', 'yoga-fit'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('HTML5 Audio', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
        $srcmp3 = isset($instance['srcmp3']) ? $instance['srcmp3'] : '';
        $srcogg = isset($instance['srcogg']) ? $instance['srcogg'] : '';
        $srcwebm = isset($instance['srcwebm']) ? $instance['srcwebm'] : '';
        $preload = isset($instance['preload']) ? $instance['preload'] : 'none';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
        $loop = isset($instance['loop']) ? $instance['loop'] : false;
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		$attrs = array( 
			'preload' => esc_attr($preload) 
		);
		
		if ($autoplay) {
			$attrs['autoplay'] = 'on';
		}
		
		if ($loop) {
			$attrs['loop'] = 'on';
		}
		
		if ($srcmp3 != '') {
			$attrs[substr(strrchr($srcmp3, '.'), 1)] = esc_url($srcmp3);
		}
		
		if ($srcogg != '') {
			$attrs[substr(strrchr($srcogg, '.'), 1)] = esc_url($srcogg);
		}
		
		if ($srcwebm != '') {
			$attrs[substr(strrchr($srcwebm, '.'), 1)] = esc_url($srcwebm);
		}
		
		$out = '<div class="cmsms_audio">' . 
			wp_audio_shortcode($attrs) . 
		'</div>';
		
		echo $out . 
		$after_widget;
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance = array( 
			'autoplay' 	=> 0, 
			'loop' 		=> 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['srcmp3'] = strip_tags($new_instance['srcmp3']);
        $instance['srcogg'] = strip_tags($new_instance['srcogg']);
		$instance['srcwebm'] = strip_tags($new_instance['srcwebm']);
		$instance['preload'] = strip_tags($new_instance['preload']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$srcmp3 = isset($instance['srcmp3']) ? esc_attr($instance['srcmp3']) : '';
		$srcogg = isset($instance['srcogg']) ? esc_attr($instance['srcogg']) : '';
		$srcwebm = isset($instance['srcwebm']) ? esc_attr($instance['srcwebm']) : '';
		$preload = isset($instance['preload']) ? esc_attr($instance['preload']) : 'none';
		
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' 	=> false, 
			'loop' 		=> false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('srcmp3')); ?>"><?php echo esc_html__('Audio', 'yoga-fit') . ' .mp3 ' . esc_html__('File Format URL', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('srcmp3')); ?>" name="<?php echo esc_attr($this->get_field_name('srcmp3')); ?>" type="text" value="<?php echo esc_attr($srcmp3); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('srcogg')); ?>"><?php echo esc_html__('Audio', 'yoga-fit') . ' .ogg ' . esc_html__('File Format URL', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('srcogg')); ?>" name="<?php echo esc_attr($this->get_field_name('srcogg')); ?>" type="text" value="<?php echo esc_attr($srcogg); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('srcwebm')); ?>"><?php echo esc_html__('Audio', 'yoga-fit') . ' .webm ' . esc_html__('File Format URL', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('srcwebm')); ?>" name="<?php echo esc_attr($this->get_field_name('srcwebm')); ?>" type="text" value="<?php echo esc_attr($srcwebm); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('preload')); ?>"><?php esc_html_e('Preload', 'yoga-fit'); ?>:<br />
				<select class="widefat" id="<?php echo esc_attr($this->get_field_id('preload')); ?>" name="<?php echo esc_attr($this->get_field_name('preload')); ?>">
					<option value="none"<?php if ($preload == 'none') { echo ' selected="selected"'; } ?>><?php esc_html_e('Not Preload', 'yoga-fit'); ?></option>
					<option value="auto"<?php if ($preload == 'auto') { echo ' selected="selected"'; } ?>><?php esc_html_e('Preload Auto', 'yoga-fit'); ?></option>
					<option value="metadata"<?php if ($preload == 'metadata') { echo ' selected="selected"'; } ?>><?php esc_html_e('Preload as Metadata', 'yoga-fit'); ?></option>
				</select>
            </label>
        </p>
		<p class="l_half">
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Enable Autoplay', 'yoga-fit'); ?></label>
		</p>
		<p class="r_half">
			<input class="checkbox" type="checkbox" <?php checked($instance['loop'], true); ?> id="<?php echo esc_attr($this->get_field_id('loop')); ?>" name="<?php echo esc_attr($this->get_field_name('loop')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('loop')); ?>"><?php esc_html_e('Enable Repeat', 'yoga-fit'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * HTML5 Video Widget Class
 */
class WP_Widget_Custom_HTML5_Video extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_html5_video_entries', 
			'description' => 	esc_attr__('Your HTML5 Video', 'yoga-fit') 
		);
		
		$control_ops = array( 
			'width' => 	600 
		);
		
		parent::__construct('custom-html5-video', esc_attr__('HTML5 Video', 'yoga-fit'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('HTML5 Video', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
        $srcmp4 = isset($instance['srcmp4']) ? $instance['srcmp4'] : '';
        $srcogg = isset($instance['srcogg']) ? $instance['srcogg'] : '';
        $srcwebm = isset($instance['srcwebm']) ? $instance['srcwebm'] : '';
        $poster = isset($instance['poster']) ? $instance['poster'] : '';
        $text = (isset($instance['text']) && $instance['text'] != '') ? $instance['text'] : esc_html__('Your browser does not support the video tag.', 'yoga-fit');
        $preload = isset($instance['preload']) ? $instance['preload'] : 'none';
        $loop = isset($instance['loop']) ? $instance['loop'] : false;
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		$out = '<div class="cmsms_video_wrap">';
		
		$attrs = array( 
			'preload' => esc_attr($preload) 
		);
		
		if ($poster != '') {
			$attrs['poster'] = esc_url($poster);
		}
		
		if ($autoplay) {
			$attrs['autoplay'] = 'on';
		}
		
		if ($loop) {
			$attrs['loop'] = 'on';
		}
		
		if ($srcmp4 != '') {
			$attrs[substr(strrchr($srcmp4, '.'), 1)] = esc_url($srcmp4);
		}
		
		if ($srcogg != '') {
			$attrs[substr(strrchr($srcogg, '.'), 1)] = esc_url($srcogg);
		}
		
		if ($srcwebm != '') {
			$attrs[substr(strrchr($srcwebm, '.'), 1)] = esc_url($srcwebm);
		}
		
		$out .= '<div class="cmsms_video">' . 
				wp_video_shortcode($attrs) . 
			'</div>' . 
		'</div>';
		
		echo $out . 
		$after_widget;
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance = array( 
			'autoplay' 	=> 0, 
			'loop' 		=> 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['srcmp4'] = strip_tags($new_instance['srcmp4']);
        $instance['srcogg'] = strip_tags($new_instance['srcogg']);
		$instance['srcwebm'] = strip_tags($new_instance['srcwebm']);
		$instance['poster'] = strip_tags($new_instance['poster']);
		$instance['text'] = strip_tags($new_instance['text']);
		$instance['preload'] = strip_tags($new_instance['preload']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$srcmp4 = isset($instance['srcmp4']) ? esc_attr($instance['srcmp4']) : '';
		$srcogg = isset($instance['srcogg']) ? esc_attr($instance['srcogg']) : '';
		$srcwebm = isset($instance['srcwebm']) ? esc_attr($instance['srcwebm']) : '';
		$poster = isset($instance['poster']) ? esc_attr($instance['poster']) : '';
		$text = (isset($instance['text']) && $instance['text'] != '') ? esc_attr($instance['text']) : esc_attr__('Your browser does not support the video tag.', 'yoga-fit');
		$preload = isset($instance['preload']) ? esc_attr($instance['preload']) : 'none';
		
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' 	=> false, 
			'loop' 		=> false 
		) );
        ?>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('srcmp4')); ?>"><?php echo esc_html__('Video', 'yoga-fit') . ' .mp4 ' . esc_html__('File Format Source', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('srcmp4')); ?>" name="<?php echo esc_attr($this->get_field_name('srcmp4')); ?>" type="text" value="<?php echo esc_attr($srcmp4); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('srcogg')); ?>"><?php echo esc_html__('Video', 'yoga-fit') . ' .ogg ' . esc_html__('File Format Source', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('srcogg')); ?>" name="<?php echo esc_attr($this->get_field_name('srcogg')); ?>" type="text" value="<?php echo esc_attr($srcogg); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('srcwebm')); ?>"><?php echo esc_html__('Video', 'yoga-fit') . ' .webm ' . esc_html__('File Format Source', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('srcwebm')); ?>" name="<?php echo esc_attr($this->get_field_name('srcwebm')); ?>" type="text" value="<?php echo esc_attr($srcwebm); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('poster')); ?>"><?php esc_html_e('Poster URL', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('poster')); ?>" name="<?php echo esc_attr($this->get_field_name('poster')); ?>" type="text" value="<?php echo esc_attr($poster); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('preload')); ?>"><?php esc_html_e('Preload', 'yoga-fit'); ?>:<br />
				<select class="widefat" id="<?php echo esc_attr($this->get_field_id('preload')); ?>" name="<?php echo esc_attr($this->get_field_name('preload')); ?>">
					<option value="none"<?php if ($preload == 'none') { echo ' selected="selected"'; } ?>><?php esc_html_e('Not Preload', 'yoga-fit'); ?></option>
					<option value="auto"<?php if ($preload == 'auto') { echo ' selected="selected"'; } ?>><?php esc_html_e('Preload Auto', 'yoga-fit'); ?></option>
					<option value="metadata"<?php if ($preload == 'metadata') { echo ' selected="selected"'; } ?>><?php esc_html_e('Preload as Metadata', 'yoga-fit'); ?></option>
				</select>
            </label>
        </p>
        <p class="l_half">
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Enable Autoplay', 'yoga-fit'); ?></label>
        </p>
        <p class="r_half">
			<input class="checkbox" type="checkbox" <?php checked($instance['loop'], true); ?> id="<?php echo esc_attr($this->get_field_id('loop')); ?>" name="<?php echo esc_attr($this->get_field_name('loop')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('loop')); ?>"><?php esc_html_e('Enable Repeat', 'yoga-fit'); ?></label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Latest Projects Widget Class
 */
class WP_Widget_Custom_Latest_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_latest_projects_entries', 
			'description' => 	esc_attr__('Latest projects from your portfolio', 'cmsms_content_composer') 
		);
		
		parent::__construct('custom-latest-projects', esc_attr__('Latest Projects', 'cmsms_content_composer'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Latest Projects', 'cmsms_content_composer') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'project' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 	'pj-categs', 
                    'field' => 		'slug', 
                    'terms' => 		$type 
                )
            );
		}
		
        $lp = new WP_Query($queryArgs);
		
        if ($lp->have_posts()) { 
			echo $before_widget . 
				'<script type="text/javascript">' . 
					'jQuery(document).ready(function () { ' . 
						'jQuery("#' . $args['widget_id'] . ' .owl-carousel"' . ').owlCarousel( { ' . 
							'singleItem : true, ' . 
							'slideSpeed : 800, ' . 
							(($autoplay == true) ? 'autoPlay : true, ' : '') . 
							'pagination: false, ' . 
							'navigation : true, ' . 
							'navigationText : 	[ ' . 
								'"<span class=\"cmsms_prev_arrow\"></span>", ' . 
								'"<span class=\"cmsms_next_arrow\"></span>" ' . 
							'] ' . 
						'} );' . 
					'} ); ' . 
				'</script>';
			
			if ($title) { 
				echo $before_title . esc_html($title) . $after_title;
			}
			
			echo '<div class="widget_custom_projects_entries_slides owl-carousel ' . esc_attr($autoplay) . '">';
			
            while ($lp->have_posts()) : $lp->the_post();
				$pj_format = get_post_format();
				
				$img_number_list = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
				
				echo '<div class="latest_pj_item">';
				
				if ($pj_format == 'video') {
					echo '<div class="latest_pj_img">' . 
						'<span class="img_placeholder cmsms_theme_icon_video"></span>' . 
					'</div>';
				} else {
					if (has_post_thumbnail()) {
						echo '<div class="latest_pj_img">' . 
							get_the_post_thumbnail(get_the_ID(), 'project-thumb', array( 
								'class' => 'full-width', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</div>';
					} elseif (sizeof($img_number_list) > 0) {
						echo '<div class="latest_pj_img">' . 
							wp_get_attachment_image($img_number_list[0], 'project-thumb', false, array( 
								'class' => 'full-width', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</div>';
					} else {
						echo '<div class="latest_pj_img">' . 
							'<span class="img_placeholder cmsms_theme_icon_photo"></span>' . 
						'</div>';
					}
				}
				
				echo '<div class="latest_pj_content_wrap">' . 
					'<header class="entry-header">';
					
						cmsms_widget_like('l_projects');
						
						echo '<h5 class="entry-title">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'</h5>' . 
					'</header>';
					
					cmsms_widget_category(get_the_ID(), 'pj-categs', 'l_projects'); 
					
				echo'</div>' . 
			'</div>';
			endwhile;
			
			echo '</div>' . 
			$after_widget;
        }
		
		wp_reset_postdata();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
		
		$instance['autoplay'] = 0;
		
		if ($new_instance['autoplay']) {
			$instance['autoplay'] = 1;
		}
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' => false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'cmsms_content_composer'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Show Only from Projects Type', 'cmsms_content_composer'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Show all projects', 'cmsms_content_composer'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . esc_attr($pj_categ->slug) . '" selected="selected">' . $pj_categ->name . '&nbsp;</option>';
							} else {
								echo '<option value="' . esc_attr($pj_categ->slug) . '">' . $pj_categ->name . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest projects you'd like to display", 'cmsms_content_composer'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'cmsms_content_composer'); ?> 3</small><br />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Autoplay', 'yoga-fit'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Popular Projects Widget Class
 */
class WP_Widget_Custom_Popular_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_popular_projects_entries', 
			'description' => 	esc_attr__('Popular projects from your portfolio', 'cmsms_content_composer') 
		);
		
		parent::__construct('custom-popular-projects', esc_attr__('Popular Projects', 'cmsms_content_composer'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Popular Projects', 'cmsms_content_composer') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'project', 
			'order' => 					'DESC', 
			'orderby' => 				'meta_value', 
			'meta_key' => 				'cmsms_likes' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 	'pj-categs', 
                    'field' => 		'slug', 
                    'terms' => 		array($type) 
                )
            );
		}
		
        $pp = new WP_Query($queryArgs);
		
        if ($pp->have_posts()) { 
			echo $before_widget . 
				'<script type="text/javascript">' . 
					'jQuery(document).ready(function () { ' . 
						'jQuery("#' . $args['widget_id'] . ' .owl-carousel").owlCarousel( { ' . 
							'singleItem : true, ' . 
							'slideSpeed : 800, ' . 
							(($autoplay) ? 'autoPlay : true, ' : '') . 
							'pagination: false, ' . 
							'navigation : true, ' . 
							'navigationText : 	[ ' . 
								'"<span class=\"cmsms_prev_arrow\"></span>", ' . 
								'"<span class=\"cmsms_next_arrow\"></span>" ' . 
							'] ' . 
						'} );' . 
					'} ); ' . 
				'</script>';
			
			if ($title) { 
				echo $before_title . esc_html($title) . $after_title;
			}
			
			echo '<div class="widget_custom_projects_entries_slides owl-carousel">';
			
            while ($pp->have_posts()) : $pp->the_post();
				$pj_format = get_post_meta(get_the_ID(), 'pt_format', true);
				
				$img_number_list = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
				
				echo '<div class="popular_pj_item">';
				
				if ($pj_format == 'video') {
					echo '<div class="popular_pj_img">' . 
						'<span class="img_placeholder cmsms_theme_icon_video"></span>' . 
					'</div>';
				} else {
					if (has_post_thumbnail()) {
						echo '<div class="popular_pj_img">' . 
							get_the_post_thumbnail(get_the_ID(), 'blog-masonry-thumb', array( 
								'class' => 'full-width', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</div>';
					} elseif (sizeof($img_number_list) > 0 && $img_number_list[0] != '') {
						echo '<div class="popular_pj_img ' . $img_number_list[0] . '">' . 
							wp_get_attachment_image($img_number_list[0], 'blog-masonry-thumb', false, array( 
								'class' => 'full-width', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</div>';
					} else {
						echo '<div class="popular_pj_img">' . 
							'<span class="img_placeholder cmsms_theme_icon_photo"></span>' .  
						'</div>';
					}
				}
				
				echo '<div class="pj_ddn">' . 
					'<header class="entry-header">';
						
						cmsms_widget_like('l_projects');
						
						echo '<h5 class="entry-title">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'</h5>' . 
					'</header>';
					
					cmsms_widget_category(get_the_ID(), 'pj-categs', 'l_projects'); 
					
				echo'</div>' . 
			'</div>';
			endwhile;
			
			echo '</div>' . 
			$after_widget;
        }
		
		wp_reset_postdata();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
		
		$instance['autoplay'] = 0;
		
		if ($new_instance['autoplay']) {
			$instance['autoplay'] = 1;
		}
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' => false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'cmsms_content_composer'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Show Only from Projects Type', 'cmsms_content_composer'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Show all projects', 'cmsms_content_composer'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . esc_attr($pj_categ->slug) . '" selected="selected">' . $pj_categ->name . '&nbsp;</option>';
							} else {
								echo '<option value="' . esc_attr($pj_categ->slug) . '">' . $pj_categ->name . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of popular projects you'd like to display", 'cmsms_content_composer'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'cmsms_content_composer'); ?> 3</small><br />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Autoplay', 'yoga-fit'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Posts Tabs Widget Class
 */
class WP_Widget_Custom_Posts_Tabs extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_posts_tabs_entries', 
			'description' => 	esc_attr__('Latest, popular posts & recent comments', 'yoga-fit') 
		);
		
		parent::__construct('custom-posts-tabs', esc_attr__('Posts Tabs', 'yoga-fit'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$latest = isset($instance['latest']) ? $instance['latest'] : true;
		$popular = isset($instance['popular']) ? $instance['popular'] : true;
		$recent = isset($instance['recent']) ? $instance['recent'] : true;
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		echo '<div class="cmsms_tabs lpr">' . 
				'<ul class="cmsms_tabs_list">';
		
		if ($latest) {
			echo '<li class="cmsms_tabs_list_item current_tab">' . 
				'<a href="#"><span>' . esc_html__('Latest', 'yoga-fit') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($popular) {
			echo '<li class="cmsms_tabs_list_item' . ((!$latest) ? ' current_tab' : '') . '">' . 
				'<a href="#"><span>' . esc_html__('Popular', 'yoga-fit') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($recent) {
			echo '<li class="cmsms_tabs_list_item' . ((!$latest && !$popular) ? ' current_tab' : '') . '">' . 
				'<a href="#"><span>' . esc_html__('Comments', 'yoga-fit') . '</span></a>' . 
			'</li>'; 
		}
		
		if (!$latest && !$popular && !$recent) {
			echo '<li class="cmsms_tabs_list_item">' . 
				'<a href="#"><span>' . esc_html__('Latest', 'yoga-fit') . '</span></a>' . 
			'</li>'; 
		}
		
		echo '</ul>' . 
		'<div class="cmsms_tabs_wrap">';
		
		$pt_format = get_post_format();
		
		if ($pt_format == 'audio') {
			$widget_icon = 'cmsms_theme_icon_audio_post';
		} elseif ($pt_format == 'gallery') {
			$widget_icon = 'cmsms_theme_icon_gallery_post';
		} elseif ($pt_format == 'image') {
			$widget_icon = 'cmsms_theme_icon_image_post';
		} elseif ($pt_format == 'video') {
			$widget_icon = 'cmsms_theme_icon_video_post';
		} else {
			$widget_icon = 'cmsms_theme_icon_standard_post';
		}
		
		if ($latest) {
			$l = new WP_Query(array( 
				'posts_per_page' => 		$number, 
				'post_status' => 			'publish', 
				'ignore_sticky_posts' => 	1, 
				'post_type' => 				'post' 
			));
			
			if ($l->have_posts()) { 
				echo '<div class="cmsms_tab tab_latest">' . 
					'<ul>';
				
				while ($l->have_posts()) : $l->the_post();
					
					$attachments = get_children(array(
						'post_type' => 			'attachment', 
						'post_mime_type' => 	'image', 
						'post_parent' => 		get_the_ID(), 
						'orderby' => 			'menu_order', 
						'order' => 				'ASC' 
					));
					
					
					echo '<li>';
					
					if ($pt_format == 'image' || $pt_format == 'gallery') {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail()) {
							cmsms_thumb(get_the_ID(), array(60, 60), true, false, false, false, false, true, false);
						} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
							if (isset($att_counter)) {
								unset($att_counter);
							}
							
							foreach ($attachments as $attachment) { 
								if (!isset($att_counter) && $att_counter = true) { 
									cmsms_thumb(get_the_ID(), array(60, 60), true, false, false, false, false, true, $attachment->ID);
								}
							}
						} else {
							echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
								'</a>';
						}
						
						echo '</div>';
					} else {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail() && $pt_format != 'video') {
							cmsms_thumb(get_the_ID(), array(60, 60), true, false, false, false, false, true, false);
						} else {
							echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
								'</a>';
						}
						
						echo '</div>';
					}
					
						echo '<div class="ovh">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
							'<br />' . 
							'<small>' . 
								'<abbr class="published" title="' . esc_attr(get_the_time('d-m-Y')) . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . esc_html__('ago', 'yoga-fit') . '</abbr>' . 
							'</small>' . 
						'</div>' . 
						'<div class="cl"></div>' . 
					'</li>';
				endwhile;
				
				echo '</ul>' . 
				'</div>';
			}
			
			wp_reset_postdata();
		}
		
		if ($popular) {
			$p = new WP_Query(array( 
				'posts_per_page' => 		$number, 
				'post_status' => 			'publish', 
				'ignore_sticky_posts' => 	1, 
				'post_type' => 				'post', 
				'order' => 					'DESC', 
				'orderby' => 				'meta_value', 
				'meta_key' => 				'cmsms_likes' 
			));
			
			if ($p->have_posts()) { 
				echo '<div class="cmsms_tab tab_popular">' . 
					'<ul>';
				
				while ($p->have_posts()) : $p->the_post();
					$pt_format = get_post_format();
					
					$attachments = get_children(array(
						'post_type' => 			'attachment', 
						'post_mime_type' => 	'image', 
						'post_parent' => 		get_the_ID(), 
						'orderby' => 			'menu_order', 
						'order' => 				'ASC' 
					));
					
					echo '<li>';
					
					if ($pt_format == 'image' || $pt_format == 'gallery') {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail()) {
							cmsms_thumb(get_the_ID(), array(60, 60), true, false, false, false, false, true, false);
						} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
							if (isset($att_counter)) {
								unset($att_counter);
							}
							
							foreach ($attachments as $attachment) { 
								if (!isset($att_counter) && $att_counter = true) { 
									cmsms_thumb(get_the_ID(), array(60, 60), true, false, false, false, false, true, $attachment->ID);
								}
							}
						} else {
							echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
								'</a>';
						}
						
						echo '</div>';
					} else {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail() && $pt_format != 'video') {
							cmsms_thumb(get_the_ID(), array(60, 60), true, false, false, false, false, true, false);
						} else {
							echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
								'</a>';
						}
						
						echo '</div>';
					}
					
						echo '<div class="ovh">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
							'<br />' . 
							'<small>' . 
								'<abbr class="published" title="' . esc_attr(get_the_time('d-m-Y')) . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . esc_html__('ago', 'yoga-fit') . '</abbr>' . 
							'</small>' . 
						'</div>' . 
						'<div class="cl"></div>' . 
					'</li>';
				endwhile;
				
				echo '</ul>' . 
				'</div>';
			}
			
			wp_reset_postdata();
		}
		
		if ($recent) {
			$rcomments = get_comments(array( 
				'number' => 	$number, 
				'post_type' => 	'post', 
				'status' => 	'approve' 
			));
			
			if ($rcomments) { 
				echo '<div class="cmsms_tab tab_comments">' . 
					'<ul>';
				
				foreach ($rcomments as $comment) {
					$comment_post_ID = $comment->comment_post_ID;
					$comment_author = $comment->comment_author;
					$comment_author_url = $comment->comment_author_url;
					$comment_date = mysql2date('U', $comment->comment_date, false);
					$comment_content = $comment->comment_content;
					$comment_array = explode(' ', $comment_content);
					
					if (sizeof($comment_array) > 10) {
						$new_comment_content = '';
						
						for ($i = 0; $i < 10; $i++) {
							$new_comment_content .= $comment_array[$i] . ' ';
						}
						
						$new_comment_content = trim($new_comment_content) . '...';
					} else {
						$new_comment_content = $comment_content;
					}
					
					echo '<li>' . 
						(($comment_author_url != '') ? '<a href="' . esc_url($comment_author_url) . '" title="' . esc_attr($comment_author_url) . '" target="_blank">' : '') . $comment_author . (($comment_author_url != '') ? '</a>' : '') . 
						' <span class="color_2">' . esc_html__('on', 'yoga-fit') . '</span> <a href="' . get_permalink($comment_post_ID) . '#comments" rel="bookmark">' . cmsms_title($comment_post_ID, false) . '</a>' . 
						'<small>' . 
							'<abbr class="published" title="' . esc_attr(get_the_time('d-m-Y')) . '">' . human_time_diff($comment_date, current_time('timestamp')) . ' ' . esc_html__('ago', 'yoga-fit') . '</abbr>' . 
						'</small>' . 
						'<p>' . $new_comment_content . '</p>' . 
					'</li>';
				}
				
				echo '</ul>' . 
				'</div>';
			}
		}
		
		echo '</div>' . 
			'</div>' .
		$after_widget;
	}
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance = array( 
			'latest' => 0, 
			'popular' => 0, 
			'recent' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		if ($new_instance['latest'] == '' && $instance['popular'] == '' && $instance['recent'] == '') {
			$instance['latest'] = 1;
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$instance = wp_parse_args((array) $instance, array( 
			'latest' => true, 
			'popular' => true, 
			'recent' => true 
		) );
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['latest'], true); ?> id="<?php echo esc_attr($this->get_field_id('latest')); ?>" name="<?php echo esc_attr($this->get_field_name('latest')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('latest')); ?>"><?php esc_html_e('Latest Posts', 'yoga-fit'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['popular'], true); ?> id="<?php echo esc_attr($this->get_field_id('popular')); ?>" name="<?php echo esc_attr($this->get_field_name('popular')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('popular')); ?>"><?php esc_html_e('Popular Posts', 'yoga-fit'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['recent'], true); ?> id="<?php echo esc_attr($this->get_field_id('recent')); ?>" name="<?php echo esc_attr($this->get_field_name('recent')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('recent')); ?>"><?php esc_html_e('Recent Comments', 'yoga-fit'); ?></label>
		</p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of recent comments, popular and latest posts you'd like to display", 'yoga-fit'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'yoga-fit'); ?> 3</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Twitter Widget Class
 */
class WP_Widget_Custom_Twitter extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_twitter_entries', 
			'description' => 	esc_attr__('Your Twitter account latest tweets', 'yoga-fit') 
		);
		
		parent::__construct('custom-twitter', esc_attr__('Twitter', 'yoga-fit'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Twitter', 'yoga-fit') : $instance['title'], $instance, $this->id_base);
		$user = isset($instance['user']) ? $instance['user'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
		$uid = uniqid();
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 20) {
            $number = 20;
        }
		
		echo $before_widget;
		
		if ($title) { 
			echo $before_title . esc_html($title) . $after_title;
		}
		
		if ($user != '') {
			$tweets = cmsms_get_tweets($user, $number);
			
			if ($tweets != '') {
				echo '<ul class="tweet_list">' . "\n";
				
				foreach ($tweets as $t) {
					echo '<li>' . "\n" . 
						'<span class="tweet_text">' . "\n" . $t['text'] . '</span>' . "\n" . 
						'<span class="tweet_time">' . human_time_diff($t['time'], current_time('timestamp')) . ' ' . esc_html__('ago', 'cmsms_content_composer') . '</span>' . "\n" . 
					'</li>' . "\n";
				}
			} else {
				echo '<div class="cmsms_notice cmsms_notice_error cmsms-icon-cancel-2">' . "\n" . 
					'<div class="notice_content">' . "\n" . 
						'<p>' . esc_html__('Please add your Twitter API keys', 'yoga-fit') . ', ' . '<a target="_blank" href="http://docs.cmsmasters.net/admin2/twitter-functionality/">' . esc_html__('read more how', 'yoga-fit') . '</a></p>' . "\n" . 
					'</div>' . "\n" . 
				'</div>' . "\n";
			}
		}
		
		echo '</ul>' . "\n" . 
		$after_widget;
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['user'] = strip_tags($new_instance['user']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $user = isset($instance['user']) ? esc_attr($instance['user']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('user')); ?>"><?php esc_html_e('Twitter Username', 'yoga-fit'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('user')); ?>" name="<?php echo esc_attr($this->get_field_name('user')); ?>" type="text" value="<?php echo esc_attr($user); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest tweets you'd like to display", 'yoga-fit'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'yoga-fit'); ?> 3</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * PayPal Donations Widget Class
 */
class WP_Widget_Custom_PayPalDonations extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname' => 'widget_custom_paypal_donations',
			'description' => esc_attr__(
				'PayPal Donation Button',
				'yoga-fit'
			)
		);
		parent::__construct('paypal_donations', 'PayPal Donations', $widget_ops);
	}
	
	public function widget($args, $instance) {
		extract($args);
		
		$paypal_donations = PayPalDonations::getInstance();
		
		$title = 		apply_filters('widget_title', $instance['title']);
		$text = 		esc_html($instance['text']);
		$purpose = 		$instance['purpose'];
		$reference = 	$instance['reference'];
		$amount = 		$instance['amount'];
		$button_text = 	esc_html($instance['button_text']);

		echo $before_widget . 
			'<div class="cmsms_paypal_donations_widget">' . "\n";
				if ($title) {
					echo $before_title . esc_html($title) . $after_title . "\n";
				}
				
				
				if ($text) {
					echo wpautop($text) . "\n";
				}
				
				echo '<div class="cmsms_paypal_donations">' . "\n" . 
					$paypal_donations->generateHtml($purpose, $reference, $amount) . "\n" . 
					'<span class="button">' . ($button_text ? $button_text : esc_html__('Donate', 'yoga-fit')) . '</span>' . "\n" . 
				'</div>' . "\n" . 
			'</div>' . "\n" . 
		$after_widget;
    }
	
	public function update($new_instance, $old_instance) {
		$instance = $old_instance;

		$instance['title'] = 		strip_tags(stripslashes($new_instance['title']));
		$instance['text'] = 		$new_instance['text'];
		$instance['purpose'] = 		strip_tags(stripslashes($new_instance['purpose']));
		$instance['reference'] = 	strip_tags(stripslashes($new_instance['reference']));
		$instance['amount'] = 		strip_tags(stripslashes($new_instance['amount']));
		$instance['button_text'] = 	strip_tags(stripslashes($new_instance['button_text']));

		return $instance;
	}
	
    public function form($instance) {
		$defaults = array(
			'title' => 			esc_attr__('Donate', 'yoga-fit'),
			'text' => 			'',
			'purpose' => 		'',
			'reference' => 		'',
			'amount' => 		'',
			'button_text' => 	''
		);
		
		$instance = wp_parse_args((array) $instance, $defaults);

		$data = array(
			'instance' => 			$instance,
			'title_id' => 			$this->get_field_id('title'),
			'title_name' => 		$this->get_field_name('title'),
			'text_id' => 			$this->get_field_id('text'),
			'text_name' => 			$this->get_field_name('text'),
			'purpose_id' => 		$this->get_field_id('purpose'),
			'purpose_name' => 		$this->get_field_name('purpose'),
			'reference_id' => 		$this->get_field_id('reference'),
			'reference_name' => 	$this->get_field_name('reference'),
			'amount_id' => 			$this->get_field_id('amount'),
			'amount_name' => 		$this->get_field_name('amount'),
			'button_text_id' => 	$this->get_field_id('button_text'),
			'button_text_name' => 	$this->get_field_name('button_text')
		);
		
		($data) ? extract($data) : null;
		?>
		<p>
			<label for="<?php echo esc_attr($title_id); ?>"><?php esc_html_e('Title:', 'yoga-fit'); ?> 
			<input class="widefat" id="<?php echo esc_attr($title_id); ?>" name="<?php echo esc_attr($title_name); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo esc_attr($text_id); ?>"><?php esc_html_e('Text:', 'yoga-fit'); ?> 
			<textarea class="widefat" id="<?php echo esc_attr($text_id); ?>" name="<?php echo esc_attr($text_name); ?>"><?php echo esc_attr($instance['text']); ?></textarea>
			</label>
		</p>
		<p>
			<label for="<?php echo esc_attr($purpose_id); ?>"><?php esc_html_e('Purpose:', 'yoga-fit'); ?> 
			<input class="widefat" id="<?php echo esc_attr($purpose_id); ?>" name="<?php echo esc_attr($purpose_name); ?>" type="text" value="<?php echo esc_attr($instance['purpose']); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo esc_attr($reference_id); ?>"><?php esc_html_e('Reference:', 'yoga-fit'); ?> 
			<input class="widefat" id="<?php echo esc_attr($reference_id); ?>" name="<?php echo esc_attr($reference_name); ?>" type="text" value="<?php echo esc_attr($instance['reference']); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo esc_attr($amount_id); ?>"><?php esc_html_e('Amount:', 'yoga-fit'); ?> 
			<input class="widefat" id="<?php echo esc_attr($amount_id); ?>" name="<?php echo esc_attr($amount_name); ?>" type="text" value="<?php echo esc_attr($instance['amount']); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo esc_attr($button_text_id); ?>"><?php esc_html_e('Button Text:', 'yoga-fit'); ?> 
			<input class="widefat" id="<?php echo esc_attr($button_text_id); ?>" name="<?php echo esc_attr($button_text_name); ?>" type="text" value="<?php echo esc_attr($instance['button_text']); ?>" />
			</label>
		</p>
		<?php 
	}
}



function wp_custom_widgets_init() {
	if (!is_blog_installed()) {
		return;
	}
	
	
	register_widget('WP_Widget_Custom_Advertisement');
	
	register_widget('WP_Widget_Custom_Contact_Info');
	
	register_widget('WP_Widget_Custom_Divider');
	
	register_widget('WP_Widget_Custom_Video');
	
	register_widget('WP_Widget_Custom_Facebook');
	
	register_widget('WP_Widget_Custom_Flickr');
	
	register_widget('WP_Widget_Custom_HTML5_Audio');
	
	register_widget('WP_Widget_Custom_HTML5_Video');
	
	register_widget('WP_Widget_Custom_Posts_Tabs');
	
	register_widget('WP_Widget_Custom_Twitter');
	
	
	if (CMSMS_PAYPALDONATIONS) {
		register_widget('WP_Widget_Custom_PayPalDonations');
	}
}

add_action('widgets_init', 'wp_custom_widgets_init', 1);

