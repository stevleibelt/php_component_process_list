<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-15
 */

namespace Net\Bazzline\Component\ProcessList;

use Net\Bazzline\Component\Heartbeat\HeartbeatClientInterface;
use Net\Bazzline\Component\ProcessIdentity\IdentityInterface;

/**
 * Class ProcessListItemInterface
 *
 * @package Net\Bazzline\Component\ProcessList
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-15
 */
interface ProcessItemInterface extends HeartbeatClientInterface, IdentityInterface
{
}