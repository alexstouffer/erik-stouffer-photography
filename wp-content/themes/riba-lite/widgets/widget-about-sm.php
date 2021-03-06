<?php


class Riba_Lite_Widget_About extends WP_Widget {

    function Riba_Lite_Widget_About() {

        $widget_ops = array(
            'classname' => 'riba_lite_widget_about',
            'description' => __('A widget that displays about text & social media counts. Designed for footer', 'riba-lite')
        );

        $control_ops = array(
            'width' => 300,
            'height' => 350,
            'id_base' => 'riba_lite_widget_about'
        );

        parent::__construct( 'riba_lite_widget_about', __('[MT] - About', 'riba-lite'), $widget_ops, $control_ops );
    }


    function widget( $args, $instance ) {
        extract( $args );
        global $post;

        $title = apply_filters('widget_title', $instance['title'] );

        if(!$instance['about_text']) {
            $instance['about_text'] = '';
        }

        echo $before_widget;

        echo '<div class="fixed">';

        $title = apply_filters('widget_title', $instance['title'] );
         if ( $title )
            echo $before_title . $title . $after_title;
            echo '<p class="footer-descr">';
                echo esc_textarea( $instance['about_text'] );
            echo '</p>';

       
        echo '</div>';

        echo $after_widget;
    }


    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title']                       = esc_html( $new_instance['title'] );
        $instance['about_text']                  = esc_html( $new_instance['about_text'] );

        return $instance;
    }


    function form( $instance ) {

        $defaults = array(
            'title' => null,
            'about_text' => null,
        );


        $instance = wp_parse_args( (array) $instance, $defaults ); ?>

        <div class="macho-meta">
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'riba-lite'); ?></label>
                <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" style="width:100%;" />
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('about_text'); ?>"><?php _e('About us', 'riba-lite'); ?></label>
                <textarea class="widefat" id="<?php echo $this->get_field_id('about_text'); ?>" rows="10" cols="10" name="<?php echo $this->get_field_name('about_text'); ?>"><?php echo esc_textarea( $instance['about_text'] ); ?></textarea>
            </p>

        </div>

    <?php
    }
}


// register the shortcode
register_widget('riba_lite_widget_about');