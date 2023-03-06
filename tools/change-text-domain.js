const wpTextdomain = require( 'wp-textdomain' );

wpTextdomain(
	'packages/**/*.php',
	{
		domain: 'pronamic-pay-with-mollie-for-gravity-forms',
		fix: true
	}
);
