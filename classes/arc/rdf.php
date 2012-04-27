<?php defined('SYSPATH') or die('No direct script access.');

if ( ! class_exists('ARC2', FALSE))
{
	// Load ARC2
	require Kohana::find_file('vendor', 'arc2/ARC2');
}

class ARC_RDF extends ARC2
{

}