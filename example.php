add_filter( 'wbk_field_before_book', 'custom_wbk_field_before_book', 10, 2 );
function custom_wbk_field_before_book( $input, $field ){
	if ( $field == 'name' ){
		$input = str_replace( 'á', 'a', $input ); 
		$input = str_replace( 'Á', 'A', $input ); 
		$input = str_replace( 'é', 'e', $input ); 
		$input = str_replace( 'É', 'E', $input ); 
		$input = str_replace( 'í', 'i', $input ); 
		$input = str_replace( 'Í', 'I', $input ); 
		$input = str_replace( 'ó', 'o', $input );
		$input = str_replace( 'Ó', 'O', $input );
		$input = str_replace( 'ú', 'u', $input );
		$input = str_replace( 'Ú', 'U', $input );
		
	}
	return $input;
}
