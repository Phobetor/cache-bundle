<?php
/**
 * @author    Aaron Scherer <aequasi@gmail.com>
 * @date 2013
 * @license   http://www.apache.org/licenses/LICENSE-2.0.html Apache License, Version 2.0
 */

namespace Doctrine\Bundle\DoctrineBundle\Tests;

/**
 * Class ContainerTest
 *
 * @package Doctrine\Bundle\DoctrineBundle\Tests
 */
class ContainerTest extends TestCase
{

	/**
	 *
	 */
	public function testContainer()
	{
		$container = $this->createYamlBundleTestContainer();

		$this->assertInstanceOf(
			'Aequasi\Bundle\MemcachedBundle\Service\MemcachedService',
			$container->get( 'memcached' )
		);
	}
}