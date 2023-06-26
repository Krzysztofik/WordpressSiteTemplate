<?php
add_filter('advanced_import_welcome_message', 'sports_blogger_modify_welcome_message');
function sports_blogger_modify_welcome_message(){
  $message = '
   <div class="ai-header">
      <h1>
         '.esc_html__('Welcome to Sports Blogger Demo Import Page. What is the', 'sports-blogger').' <a href="'.esc_url('https://www.smarterthemes.com/').'" target="_blank">'.esc_html__('Difference Between Free & Pro Version.?', 'sports-blogger').'</a>
      </h1>
      <p>'.esc_html__( 'Thank you for choosing the Sports Blogger theme. This quick demo import setup will help you configure your new website like theme demo. It will install the required WordPress plugins, default content and tell you a little about Help &amp; Support options. It should only take less than 5 minutes.', 'sports-blogger' ).'</p>
   </div>
   ';

      return $welcome_msg;
}