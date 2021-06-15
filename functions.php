/* ===========================================
This code is a hack to turn off the autocomplete
function from Chrome.
It works on wp-admin -> add new user
  ============================================ */

function action_user_new_form_tag(  ) { 
    echo 'autocomplete="off">
    <input name="username" type="text" id="username" value="" autocapitalize="none" autocorrect="off" maxlength="60" style="opacity: 0;"';
}; 
add_action( 'user_new_form_tag', 'action_user_new_form_tag', 10, 0 ); 
