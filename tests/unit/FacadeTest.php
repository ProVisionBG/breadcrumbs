<?php

class FacadeTest extends TestCase {

	public function testFacade()
	{
		$this->assertInstanceOf('ProVision\Breadcrumbs\Manager', Breadcrumbs::getFacadeRoot());
		$this->assertSame($this->app['breadcrumbs'], Breadcrumbs::getFacadeRoot());
	}

}
