<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://linkedin.com/in/oluwaseye
 * @since      1.0.0
 *
 * @package    Wp_Gramfeed
 * @subpackage Wp_Gramfeed/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<br/>
<h1><?php esc_attr_e( 'Avalanche Instagram Feed', 'WpAdminStyle' ); ?></h1>
<!--<h2 class="nav-tab-wrapper">
	<a href="configure" class="nav-tab">1. Configure</a>
	<a href="#" class="nav-tab ">2. Choose Display</a>
	<a href="#" class="nav-tab">3. Customize</a>
    <a href="#" class="nav-tab">Support</a>
</h2>-->
    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
<div class="wrap" id="wpgf_admin">
 <hr>   

<p>Don't know where to find it ?</p>
  <p><img src="<?php echo plugins_url().'/'.$this->plugin_name ?>/admin/img/help.jpg" alt="" width="24%"></p>
    <div>
        <form method="post" name="cleanup_options" action="options.php">
        
        <?php
	//Grab all options
		$options = get_option($this->plugin_name);
		// Cleanup
		
		$gramId = $options['gramId'];
//		$secretKey = $options['secretKey'];
//		$apiCallback = $options['apiCallback'];
	?>


	<?php
		settings_fields( $this->plugin_name );
		do_settings_sections( $this->plugin_name );
	?>

        <label for="Instagram ID">Your Instagram ID</label>
        <input type="text" value="<?php echo $gramId ?>" class="regular-text" id="<?php echo $this->plugin_name; ?>-gramId" name="<?php echo $this->plugin_name; ?>[gramId]"/><br>
<!--
        <label for="Secret Key">Secret Key</label>
        <input type="text" value="<?php echo $secretKey ?>" class="regular-text" id="<?php echo $this->plugin_name; ?>-secretKey" name="<?php echo $this->plugin_name; ?>[secretKey]" /><br>
        
        <label for="Callback URI">API Callback</label>
        <input type="text" value="<?php echo $apiCallback ?>" class="regular-text" id="<?php echo $this->plugin_name; ?>-apiCallback" name="<?php echo $this->plugin_name; ?>[apiCallback]"/><br>-->


         <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
        </form>
    </div>
<hr>

<!--<h3>Step 2: Login to your Instagram Account</h3> 

    <div> <a href="" class="wpgf_admin_btn">To get your Access Token and User ID</a></div>
     
       -->
    
    

    

</div>