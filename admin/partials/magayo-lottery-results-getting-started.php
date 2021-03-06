<?php

/**
 * Provide a admin area view for the plugin - Getting started tab
 *
 * @link       https://www.magayo.com
 * @since      1.0.0
 *
 * @package    Magayo_Lottery_Results
 * @subpackage Magayo_Lottery_Results/admin/partials
 */
 
// Version 2: Highlight (bold) API key sent to email
?>

<div id="getting-started" class="wrap metabox-holder columns-2 magayo-lottery-results-metaboxes">

	<h2><?php _e( 'API Account Registration', $this->plugin_name ); ?></h2>
        <p><?php _e('Please register for an API account and <strong>the API key will be sent to your email address</strong>. The API key is required to retrieve the draw results and lottery jackpots.', $this->plugin_name);?><br />
        <?php _e('Data is exchanged securely with our web server @ magayo.com via SSL.', $this->plugin_name);?><br />
        <?php _e('We respect your privacy and your email will never be provided to a third-party. You may like to refer to our <a href="https://www.magayo.com/privacy-policy/" target="_blank">Privacy Policy</a>.', $this->plugin_name);?><br />
        <?php _e('By registering for an API account, you agree to our <a href="https://www.magayo.com/site-terms/" target="_blank">terms of use</a>.', $this->plugin_name);?></p>
        <p><?php _e('Step 1: Enter your email and click Save. The API key will be sent to your email address. You may like to check your spam folder if you do not notice our email.', $this->plugin_name);?></p>
        <p><?php _e('Step 2: After retrieving your API key, enter your API key and click Save. You can then proceed to configure the display and select the lottery games.', $this->plugin_name);?></p>

	<table class="form-table">
		<tr>
			<td>
				<label for="email_address"><?php _e('Email address', $this->plugin_name);?></label>
			</td>
			<td>
				<input type="email" class="regular-text" id="email_address" name="email_address" value="<?php if(!empty($email_address)) echo $email_address;?>" placeholder="my.email@gmail.com"/>
			</td>
		</tr>
		<tr>
			<td>
				<label for="api_key"><?php _e('API key', $this->plugin_name);?></label>
			</td>
			<td>
				<input type="text" class="regular-text" id="api_key" name="api_key" value="<?php if(!empty($api_key)) echo $api_key;?>" placeholder="" <?php if (strlen($email_address) <= 0) echo 'disabled'; ?> />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<?php submit_button(__('Save', $this->plugin_name), 'primary','submit_getting_started', TRUE); ?>
			</td>
		</tr>
	</table>
	
</div>
