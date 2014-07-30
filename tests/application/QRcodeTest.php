<?php
require_once "qrlib.php";

class QRcodeTest extends PHPUnit_Framework_TestCase
{
	protected function setUp()
	{
	}

	public function testSvg()
	{
		$expected = '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" width="87" height="87" viewBox="0 0 87 87">
<desc></desc>
<rect width="87" height="87" fill="#ffffff" cx="0" cy="0" />
<defs>
<rect id="p" width="3" height="3" />
</defs>
<g fill="#000000">
<use x="12" y="12" xlink:href="#p" />
<use x="15" y="12" xlink:href="#p" />
<use x="18" y="12" xlink:href="#p" />
<use x="21" y="12" xlink:href="#p" />
<use x="24" y="12" xlink:href="#p" />
<use x="27" y="12" xlink:href="#p" />
<use x="30" y="12" xlink:href="#p" />
<use x="39" y="12" xlink:href="#p" />
<use x="45" y="12" xlink:href="#p" />
<use x="48" y="12" xlink:href="#p" />
<use x="54" y="12" xlink:href="#p" />
<use x="57" y="12" xlink:href="#p" />
<use x="60" y="12" xlink:href="#p" />
<use x="63" y="12" xlink:href="#p" />
<use x="66" y="12" xlink:href="#p" />
<use x="69" y="12" xlink:href="#p" />
<use x="72" y="12" xlink:href="#p" />
<use x="12" y="15" xlink:href="#p" />
<use x="30" y="15" xlink:href="#p" />
<use x="36" y="15" xlink:href="#p" />
<use x="39" y="15" xlink:href="#p" />
<use x="45" y="15" xlink:href="#p" />
<use x="54" y="15" xlink:href="#p" />
<use x="72" y="15" xlink:href="#p" />
<use x="12" y="18" xlink:href="#p" />
<use x="18" y="18" xlink:href="#p" />
<use x="21" y="18" xlink:href="#p" />
<use x="24" y="18" xlink:href="#p" />
<use x="30" y="18" xlink:href="#p" />
<use x="36" y="18" xlink:href="#p" />
<use x="39" y="18" xlink:href="#p" />
<use x="48" y="18" xlink:href="#p" />
<use x="54" y="18" xlink:href="#p" />
<use x="60" y="18" xlink:href="#p" />
<use x="63" y="18" xlink:href="#p" />
<use x="66" y="18" xlink:href="#p" />
<use x="72" y="18" xlink:href="#p" />
<use x="12" y="21" xlink:href="#p" />
<use x="18" y="21" xlink:href="#p" />
<use x="21" y="21" xlink:href="#p" />
<use x="24" y="21" xlink:href="#p" />
<use x="30" y="21" xlink:href="#p" />
<use x="39" y="21" xlink:href="#p" />
<use x="45" y="21" xlink:href="#p" />
<use x="54" y="21" xlink:href="#p" />
<use x="60" y="21" xlink:href="#p" />
<use x="63" y="21" xlink:href="#p" />
<use x="66" y="21" xlink:href="#p" />
<use x="72" y="21" xlink:href="#p" />
<use x="12" y="24" xlink:href="#p" />
<use x="18" y="24" xlink:href="#p" />
<use x="21" y="24" xlink:href="#p" />
<use x="24" y="24" xlink:href="#p" />
<use x="30" y="24" xlink:href="#p" />
<use x="36" y="24" xlink:href="#p" />
<use x="48" y="24" xlink:href="#p" />
<use x="54" y="24" xlink:href="#p" />
<use x="60" y="24" xlink:href="#p" />
<use x="63" y="24" xlink:href="#p" />
<use x="66" y="24" xlink:href="#p" />
<use x="72" y="24" xlink:href="#p" />
<use x="12" y="27" xlink:href="#p" />
<use x="30" y="27" xlink:href="#p" />
<use x="36" y="27" xlink:href="#p" />
<use x="45" y="27" xlink:href="#p" />
<use x="48" y="27" xlink:href="#p" />
<use x="54" y="27" xlink:href="#p" />
<use x="72" y="27" xlink:href="#p" />
<use x="12" y="30" xlink:href="#p" />
<use x="15" y="30" xlink:href="#p" />
<use x="18" y="30" xlink:href="#p" />
<use x="21" y="30" xlink:href="#p" />
<use x="24" y="30" xlink:href="#p" />
<use x="27" y="30" xlink:href="#p" />
<use x="30" y="30" xlink:href="#p" />
<use x="36" y="30" xlink:href="#p" />
<use x="42" y="30" xlink:href="#p" />
<use x="48" y="30" xlink:href="#p" />
<use x="54" y="30" xlink:href="#p" />
<use x="57" y="30" xlink:href="#p" />
<use x="60" y="30" xlink:href="#p" />
<use x="63" y="30" xlink:href="#p" />
<use x="66" y="30" xlink:href="#p" />
<use x="69" y="30" xlink:href="#p" />
<use x="72" y="30" xlink:href="#p" />
<use x="36" y="33" xlink:href="#p" />
<use x="39" y="33" xlink:href="#p" />
<use x="42" y="33" xlink:href="#p" />
<use x="45" y="33" xlink:href="#p" />
<use x="48" y="33" xlink:href="#p" />
<use x="12" y="36" xlink:href="#p" />
<use x="15" y="36" xlink:href="#p" />
<use x="21" y="36" xlink:href="#p" />
<use x="30" y="36" xlink:href="#p" />
<use x="33" y="36" xlink:href="#p" />
<use x="39" y="36" xlink:href="#p" />
<use x="42" y="36" xlink:href="#p" />
<use x="54" y="36" xlink:href="#p" />
<use x="57" y="36" xlink:href="#p" />
<use x="60" y="36" xlink:href="#p" />
<use x="66" y="36" xlink:href="#p" />
<use x="69" y="36" xlink:href="#p" />
<use x="12" y="39" xlink:href="#p" />
<use x="15" y="39" xlink:href="#p" />
<use x="18" y="39" xlink:href="#p" />
<use x="21" y="39" xlink:href="#p" />
<use x="33" y="39" xlink:href="#p" />
<use x="39" y="39" xlink:href="#p" />
<use x="42" y="39" xlink:href="#p" />
<use x="54" y="39" xlink:href="#p" />
<use x="63" y="39" xlink:href="#p" />
<use x="69" y="39" xlink:href="#p" />
<use x="72" y="39" xlink:href="#p" />
<use x="12" y="42" xlink:href="#p" />
<use x="18" y="42" xlink:href="#p" />
<use x="21" y="42" xlink:href="#p" />
<use x="24" y="42" xlink:href="#p" />
<use x="27" y="42" xlink:href="#p" />
<use x="30" y="42" xlink:href="#p" />
<use x="33" y="42" xlink:href="#p" />
<use x="39" y="42" xlink:href="#p" />
<use x="42" y="42" xlink:href="#p" />
<use x="48" y="42" xlink:href="#p" />
<use x="51" y="42" xlink:href="#p" />
<use x="72" y="42" xlink:href="#p" />
<use x="21" y="45" xlink:href="#p" />
<use x="27" y="45" xlink:href="#p" />
<use x="45" y="45" xlink:href="#p" />
<use x="63" y="45" xlink:href="#p" />
<use x="72" y="45" xlink:href="#p" />
<use x="12" y="48" xlink:href="#p" />
<use x="15" y="48" xlink:href="#p" />
<use x="18" y="48" xlink:href="#p" />
<use x="24" y="48" xlink:href="#p" />
<use x="27" y="48" xlink:href="#p" />
<use x="30" y="48" xlink:href="#p" />
<use x="33" y="48" xlink:href="#p" />
<use x="36" y="48" xlink:href="#p" />
<use x="48" y="48" xlink:href="#p" />
<use x="54" y="48" xlink:href="#p" />
<use x="60" y="48" xlink:href="#p" />
<use x="72" y="48" xlink:href="#p" />
<use x="36" y="51" xlink:href="#p" />
<use x="39" y="51" xlink:href="#p" />
<use x="45" y="51" xlink:href="#p" />
<use x="57" y="51" xlink:href="#p" />
<use x="60" y="51" xlink:href="#p" />
<use x="63" y="51" xlink:href="#p" />
<use x="72" y="51" xlink:href="#p" />
<use x="12" y="54" xlink:href="#p" />
<use x="15" y="54" xlink:href="#p" />
<use x="18" y="54" xlink:href="#p" />
<use x="21" y="54" xlink:href="#p" />
<use x="24" y="54" xlink:href="#p" />
<use x="27" y="54" xlink:href="#p" />
<use x="30" y="54" xlink:href="#p" />
<use x="36" y="54" xlink:href="#p" />
<use x="51" y="54" xlink:href="#p" />
<use x="57" y="54" xlink:href="#p" />
<use x="69" y="54" xlink:href="#p" />
<use x="12" y="57" xlink:href="#p" />
<use x="30" y="57" xlink:href="#p" />
<use x="39" y="57" xlink:href="#p" />
<use x="45" y="57" xlink:href="#p" />
<use x="48" y="57" xlink:href="#p" />
<use x="51" y="57" xlink:href="#p" />
<use x="57" y="57" xlink:href="#p" />
<use x="60" y="57" xlink:href="#p" />
<use x="63" y="57" xlink:href="#p" />
<use x="72" y="57" xlink:href="#p" />
<use x="12" y="60" xlink:href="#p" />
<use x="18" y="60" xlink:href="#p" />
<use x="21" y="60" xlink:href="#p" />
<use x="24" y="60" xlink:href="#p" />
<use x="30" y="60" xlink:href="#p" />
<use x="45" y="60" xlink:href="#p" />
<use x="54" y="60" xlink:href="#p" />
<use x="57" y="60" xlink:href="#p" />
<use x="60" y="60" xlink:href="#p" />
<use x="66" y="60" xlink:href="#p" />
<use x="69" y="60" xlink:href="#p" />
<use x="72" y="60" xlink:href="#p" />
<use x="12" y="63" xlink:href="#p" />
<use x="18" y="63" xlink:href="#p" />
<use x="21" y="63" xlink:href="#p" />
<use x="24" y="63" xlink:href="#p" />
<use x="30" y="63" xlink:href="#p" />
<use x="36" y="63" xlink:href="#p" />
<use x="39" y="63" xlink:href="#p" />
<use x="45" y="63" xlink:href="#p" />
<use x="63" y="63" xlink:href="#p" />
<use x="66" y="63" xlink:href="#p" />
<use x="69" y="63" xlink:href="#p" />
<use x="72" y="63" xlink:href="#p" />
<use x="12" y="66" xlink:href="#p" />
<use x="18" y="66" xlink:href="#p" />
<use x="21" y="66" xlink:href="#p" />
<use x="24" y="66" xlink:href="#p" />
<use x="30" y="66" xlink:href="#p" />
<use x="48" y="66" xlink:href="#p" />
<use x="60" y="66" xlink:href="#p" />
<use x="72" y="66" xlink:href="#p" />
<use x="12" y="69" xlink:href="#p" />
<use x="30" y="69" xlink:href="#p" />
<use x="36" y="69" xlink:href="#p" />
<use x="51" y="69" xlink:href="#p" />
<use x="54" y="69" xlink:href="#p" />
<use x="60" y="69" xlink:href="#p" />
<use x="66" y="69" xlink:href="#p" />
<use x="12" y="72" xlink:href="#p" />
<use x="15" y="72" xlink:href="#p" />
<use x="18" y="72" xlink:href="#p" />
<use x="21" y="72" xlink:href="#p" />
<use x="24" y="72" xlink:href="#p" />
<use x="27" y="72" xlink:href="#p" />
<use x="30" y="72" xlink:href="#p" />
<use x="36" y="72" xlink:href="#p" />
<use x="42" y="72" xlink:href="#p" />
<use x="45" y="72" xlink:href="#p" />
<use x="48" y="72" xlink:href="#p" />
<use x="60" y="72" xlink:href="#p" />
<use x="63" y="72" xlink:href="#p" />
<use x="66" y="72" xlink:href="#p" />
<use x="69" y="72" xlink:href="#p" />
</g>
</svg>';

		$actual = QRcode::svg("abc");
		$this->assertEquals($expected, $actual);
	}
}
