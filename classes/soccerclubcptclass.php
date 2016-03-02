<?php
/**
 * SoccerClub Custom Post Type Class
 *
 * Used to help create custom post types for SoccerClub theme.
 * @version 1.0
 */
 
class posttypeFactory
{
	public $post_type_name;
	public $singular;
	public $add_new;
	
	public $args = [];
	public $labels = [];
	
	public function __construct($name,$post_type_detail)
	{
		$this->args = $post_type_detail['args'];
		$this->labels = $post_type_detail['labels'];
		$this->args['labels'] = $post_type_detail['labels'];
		
		$this->post_type_name = strtolower( str_replace( ' ', '_', $name ) );		

		if( ! post_type_exists( $this->post_type_name ) )
		{
			register_post_type( $this->post_type_name, $this->args );
		}
	}
	
} 
 
class SoccerClubCPTClass
{	

	private $post_type_details;	
	
	
	public function __construct($post_type_details)
	{
		$this->post_type_details = $post_type_details;
		add_action( 'init', array( $this, 'soccerclub_register_post_type' ) );
	}
	
	public function soccerclub_register_post_type()
	{
		foreach($this->post_type_details as $name => $post_type_detail)
		{
			new posttypeFactory($name,$post_type_detail);
		}
	}//end of fucntion
	
}
 
 