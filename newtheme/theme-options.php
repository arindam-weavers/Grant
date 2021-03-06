<?php
add_action('init','grant_theme_options');
if(!function_exists('grant_theme_options')){
	function grant_theme_options(){
		$imagepath=get_stylesheet_directory_uri().'/images/';
		$options=array(
		/* --------------- */
		/* General Setting */
		/* --------------- */
		array("name"    => "General Settings",
			  "type"    => "heading"),		
		array("name"    => "Header Primary Logo",
			  "desc"    => "Optimal size: 298px width by 69px height.",				  			  
			  "id"      => "grant_theme_general_header_logo",
			  "std"		=> all_default_values('grant_theme_general_header_logo'),
			  "type"	=> "upload"),
		array("name"    => "Footer Secondary Logo",
			  "desc"    => "Optimal size: 424px width by 58px height.",		  			  
			  "id"      => "grant_theme_general_footer_logo",
			  "std"		=> all_default_values('grant_theme_general_footer_logo'),
			  "type"	=> "upload"),		
		/* --------------- */
		/* Top Bar Setting */
		/* --------------- */
		array("name"    => "Top Header Notice",
			  "type"    => "heading"),
		array("desc"    => "Activate top notification bar option",
			  "id"      => "grant_theme_notice_actsale_optn",
			  "options" => array(1),
			  "std"     => "1",
			  "type"    => "checkbox"),
		array("name"    => "Activate Default Banner Tab",
			  "desc"    => "Choose default tab to be selected on site load.",
			  "id"      => "grant_theme_notice_default_banr",
			  "options" => array('Commercial'=>'commercial','Residential'=>'residential'),
			  "std"     => "",
			  "type"    => "select"),			
		array("name"    => "Sale Background Color",
			  "desc"    => "Select color to change top notification background",		  
			  "id"      => "grant_theme_notice_sale_backgrd",
			  "std"		=> all_default_values('grant_theme_notice_sale_backgrd'),
			  "type"    => "color"),
		array("name"    => "Sale Text Color",
			  "desc"    => "Select color to change top notification text content",		  
			  "id"      => "grant_theme_notice_sale_textclr",
			  "std"		=> all_default_values('grant_theme_notice_sale_textclr'),
			  "type"    => "color"),
		array("name"    => "Sale Text",
			  "desc"    => "Enter top notification text content",				  
			  "id"      => "grant_theme_notice_sale_cnttext",
			  "std"		=> all_default_values('grant_theme_notice_sale_cnttext'),
			  "type"    => "textarea"),
		array("name"    => "Sale Text Link",
			  "desc"    => "Enter top notification text link",					  
			  "id"      => "grant_theme_notice_sale_lnktext",
			  "std"		=> all_default_values('grant_theme_notice_sale_lnktext'),
			  "type"    => "text"),
		/* --------------- */
		/* Top Contact Info */
		/* --------------- */  
		array("name"    => "Top Contact Info",
			  "type"    => "heading"),		
		array("name"    => "Site Logo",
			  "desc" 	=> "Optimal size: 298px width by 69px height.",
			  "id"      => "grant_theme_topcontct_site_logo",		
			  "std"		=> all_default_values('grant_theme_topcontct_site_logo'),	  
			  "type"    => "upload"),
		array("name"    => "Top Content",
			  "desc"    => "Enter top content above the contact form",		  			  
			  "id"      => "grant_theme_topcontct_txt_cntnt",
			  "std"		=> all_default_values('grant_theme_topcontct_txt_cntnt'),
			  "type"    => "textarea"),
		array("name"    => "Shortcode",
			  "desc"    => "Enter contact form shortcode here",
			  "id"      => "grant_theme_topcontct_txt_shtce",
			  "std"		=> all_default_values('grant_theme_topcontct_txt_shtce'),
			  "type"    => "textarea"),
		/* --------------- */
		/* Social Setting */
		/* --------------- */  
		array("name"    => "Social Settings",
			  "type"    => "heading"),		
		array("name"    => "Facebook Link",
			  "desc"    => "Enter facebook page link here",				  			  
			  "id"      => "grant_theme_social_link_facebok",
			  "std"		=> all_default_values('grant_theme_social_link_facebok'),
			  "type"    => "text"),
		array("name"    => "Twitter Link",
			  "desc"    => "Enter twitter page link here",		  			  
			  "id"      => "grant_theme_social_link_twitter",
			  "std"		=> all_default_values('grant_theme_social_link_twitter'),
			  "type"    => "text"),
		array("name"    => "Youtube Link",
			  "desc"    => "Enter youtube page link here",
			  "id"      => "grant_theme_social_link_youtube",
			  "std"		=> all_default_values('grant_theme_social_link_youtube'),
			  "type"    => "text"),	
		/* --------------- */
		/* Best Sellers */
		/* --------------- */  
		array("name"    => "Best Sellers",
			  "type"    => "heading"),
		array("name"    => "Commercial Tab",
			  "type"    => "info"), 		
		array("name"    => "Section Title",
			  "desc"    => "Enter section title text",		  			  
			  "id"      => "grant_theme_cmrclbstsellr_title",
			  "std"		=> all_default_values('grant_theme_cmrclbstsellr_title'),
			  "type"    => "text"),
		array("name"    => "Section Content",
			  "desc"    => "Enter section content text",
			  "id"      => "grant_theme_cmrclbstsellr_cotnt",
			  "std"		=> all_default_values('grant_theme_cmrclbstsellr_cotnt'),
			  "type"    => "textarea"),		
		array("name"    => "Residential Tab",
			  "type"    => "info"), 		
		array("name"    => "Section Title",
			  "desc"    => "Enter section title text",		  			  
			  "id"      => "grant_theme_rsdntbstsellr_title",
			  "std"		=> all_default_values('grant_theme_rsdntbstsellr_title'),
			  "type"    => "text"),
		array("name"    => "Section Content",
			  "desc"    => "Enter section content text",
			  "id"      => "grant_theme_rsdntbstsellr_cotnt",
			  "std"		=> all_default_values('grant_theme_rsdntbstsellr_cotnt'),
			  "type"    => "textarea"),
		/* --------------- */
		/* First Parrallax */
		/* --------------- */  
		array("name"    => "First Parrallax",
			  "type"    => "heading"),
		array("name"    => "Commercial Tab",
			  "type"    => "info"), 
		array("name"    => "Parallax Image",
			  "desc" 	=> "Optimal size: 1920px width by 775px height.",
			  "id"      => "grant_theme_cmrclfrstprlx_image",	
			  "std"		=> all_default_values('grant_theme_cmrclfrstprlx_image'),	  
			  "type"    => "upload"),
		array("name"    => "Section Title",
			  "desc"    => "Enter parallax section title text",		  			  
			  "id"      => "grant_theme_cmrclfrstprlx_title",
			  "std"		=> all_default_values('grant_theme_cmrclfrstprlx_title'),
			  "type"    => "text"),
		array("name"    => "Section Content",
			  "desc"    => "Enter parallax section content text",
			  "id"      => "grant_theme_cmrclfrstprlx_cotnt",
			  "std"		=> all_default_values('grant_theme_cmrclfrstprlx_cotnt'),
			  "type"    => "textarea"),
		array("name"    => "Section Button Image",
			  "desc" 	=> "Optimal size: 326px width by 28px height.",  			  
			  "id"      => "grant_theme_cmrclfrstprlx_bnimg",
			  "std"		=> all_default_values('grant_theme_cmrclfrstprlx_bnimg'),
			  "type"    => "upload"),
		array("name"    => "Section Button Link",
			  "desc"    => "Enter parallax section button link",
			  "id"      => "grant_theme_cmrclfrstprlx_bnlnk",
			  "std"		=> all_default_values('grant_theme_cmrclfrstprlx_bnlnk'),
			  "type"    => "text"),
		array("name"    => "Residential Tab",
			  "type"    => "info"), 
		array("name"    => "Parallax Image",
			  "desc" 	=> "Optimal size: 1920px width by 775px height.",
			  "id"      => "grant_theme_rsdntfrstprlx_image",	
			  "std"		=> all_default_values('grant_theme_rsdntfrstprlx_image'),	  
			  "type"    => "upload"),
		array("name"    => "Section Title",
			  "desc"    => "Enter parallax section title text",		  			  
			  "id"      => "grant_theme_rsdntfrstprlx_title",
			  "std"		=> all_default_values('grant_theme_rsdntfrstprlx_title'),
			  "type"    => "text"),
		array("name"    => "Section Content",
			  "desc"    => "Enter parallax section content text",
			  "id"      => "grant_theme_rsdntfrstprlx_cotnt",
			  "std"		=> all_default_values('grant_theme_rsdntfrstprlx_cotnt'),
			  "type"    => "textarea"),
		array("name"    => "Section Button Image",
			  "desc" 	=> "Optimal size: 326px width by 28px height.",  			  
			  "id"      => "grant_theme_rsdntfrstprlx_bnimg",
			  "std"		=> all_default_values('grant_theme_rsdntfrstprlx_bnimg'),
			  "type"    => "upload"),
		array("name"    => "Section Button Link",
			  "desc"    => "Enter parallax section button link",
			  "id"      => "grant_theme_rsdntfrstprlx_bnlnk",
			  "std"		=> all_default_values('grant_theme_rsdntfrstprlx_bnlnk'),
			  "type"    => "text"),
		/* --------------- */
		/* Second Parrallax */
		/* --------------- */  
		array("name"    => "Second Parrallax",
			  "type"    => "heading"),
		array("name"    => "Commercial Tab",
			  "type"    => "info"), 
		array("name"    => "Parallax Image",
			  "desc" 	=> "Optimal size: 1920px width by 775px height.",
			  "id"      => "grant_theme_cmrclscndprlx_image",	
			  "std"		=> all_default_values('grant_theme_cmrclscndprlx_image'),	  
			  "type"    => "upload"),
		array("name"    => "Quote Text",
			  "desc"    => "Enter parallax section quote text",		  			  
			  "id"      => "grant_theme_cmrclscndprlx_quote",
			  "std"		=> all_default_values('grant_theme_cmrclscndprlx_quote'),
			  "type"    => "textarea"),
		array("name"    => "Author Text",
			  "desc"    => "Enter parallax section author text",
			  "id"      => "grant_theme_cmrclscndprlx_athor",
			  "std"		=> all_default_values('grant_theme_cmrclscndprlx_athor'),
			  "type"    => "text"),		
		array("name"    => "Residential Tab",
			  "type"    => "info"), 
		array("name"    => "Parallax Image",
			  "desc" 	=> "Optimal size: 1920px width by 775px height.",
			  "id"      => "grant_theme_rsdntscndprlx_image",	
			  "std"		=> all_default_values('grant_theme_rsdntscndprlx_image'),	  
			  "type"    => "upload"),
		array("name"    => "Quote Text",
			  "desc"    => "Enter parallax section quote text",		  			  
			  "id"      => "grant_theme_rsdntscndprlx_quote",
			  "std"		=> all_default_values('grant_theme_rsdntscndprlx_quote'),
			  "type"    => "textarea"),
		array("name"    => "Author Text",
			  "desc"    => "Enter parallax section author text",
			  "id"      => "grant_theme_rsdntscndprlx_athor",
			  "std"		=> all_default_values('grant_theme_rsdntscndprlx_athor'),
			  "type"    => "text"),
			);		
		grant_theme_update_option('of_template',$options);
		}
	}
?>