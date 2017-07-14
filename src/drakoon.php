<?
/**
 * drakoon-php
 * @author  Peter Blaho <info@peterblaho.com>
 * @link    https://github.com/Warloxk/drakoon-php-core
 */

class DR
{
	public static $set = array(
		'siteName' => 'siteName',
		);

	public static function Init()
	{
		// need some times
		self::$time['now']         = date( 'Y-m-d H:i:s', time() ) ;
		self::$time['currentHour'] = date( 'Y-m-d H', time() ) . ':00:00';
		self::$time['thisMonday']  = date( 'Y-m-d', time() + ( 1 - date('w') ) * 86400 ) . ' 00:00:00';
	}

	public static function IncCSS( $file, $autoVersion = true )
	{
		return sprintf( '<link rel="stylesheet" href="/%s?v=%d">', $file, filemtime( $file ) );
	}

	public static function IncJS( $file, $autoVersion = true )
	{
		return sprintf( '<script src="/%s?v=%d"></script>', $file, filemtime( $file ) );
	}
}
