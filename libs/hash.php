
<?php
/**
* 
*/
class Hash
{
	// $algo =>kind of hash 
	// salt key of hash

	/* @param string $algo the algorithm ("md5","sha1","whitepool",etc)
	@param string $data the data to encode
	@param string $salt the salt(this should be the same throught the system probably)
	@param string the hashed/salted data

	*/

	public static function create($algo ,$data,$salt)
	{
		$context=hash_init($algo,HASH_HMAC,$salt);
		hash_update($context, $data);
		return hash_final($context);
	}
}

?>