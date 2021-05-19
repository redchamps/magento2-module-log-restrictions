<?php
namespace RedChamps\LogRestrictions\Plugin;

use Magento\Framework\App\State;
use Monolog\Handler\AbstractHandler;

class AbstractHandlerPlugin
{
    private $state;

    private $disAllowedLogs;

    private $effectiveModes;

    public function __construct(
        State $state,
        $disAllowedLogs = [],
        $effectiveModes = []
    ) {
        $this->state = $state;
        $this->disAllowedLogs = $disAllowedLogs;
        $this->effectiveModes = $effectiveModes;
    }

    public function afterIsHandling(AbstractHandler $subject, $result, $record)
    {
        if ($result && in_array($this->state->getMode(), $this->effectiveModes)) {
            return !in_array($record["level"], $this->disAllowedLogs);
        }
        return $result;
    }
}
