<?php

declare(strict_types=1);

namespace Tests\Unit\PayNL\Sdk\AuthAdapter;

use Codeception\{
    Lib\ManagerTestTrait,
    Test\Unit as UnitTest
};
use PayNL\Sdk\{
    AuthAdapter\AdapterInterface,
    AuthAdapter\Manager,
    Service\AbstractPluginManager
};

/**
 * Class ManagerTest
 *
 * @package Tests\Unit\PayNL\Sdk\AuthAdapter
 */
class ManagerTest extends UnitTest
{
    use ManagerTestTrait {
        testItIsAManager as traitTestItIsAManager;
    }

    /**
     * @return void
     */
    public function _before(): void
    {
        $this->manager = new Manager();
    }

    /**
     * @inheritDoc
     */
    public function testItIsAManager(): void
    {
        $this->traitTestItIsAManager();

        verify($this->manager)->isInstanceOf(AbstractPluginManager::class);

        $this->assertObjectHasAttribute('instanceOf', $this->manager);
    }

    /**
     * @return void
     */
    public function testItHasADefinedInstanceOfAttribute(): void
    {
        /** @var string $instanceOf */
        $instanceOf = $this->tester->invokeMethod($this->manager, 'getInstanceOf');
        verify($instanceOf)->string();
        verify($instanceOf)->notEmpty();
        verify($instanceOf)->equals(AdapterInterface::class);
    }
}