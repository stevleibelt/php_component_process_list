<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-15
 */

namespace Net\Bazzline\Component\ProcessList;

/**
 * Class ProcessItem
 *
 * @package Net\Bazzline\Component\ProcessList
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-15
 */
class ProcessItem implements ProcessItemInterface
{
    /**
     * This method returns the current timestamp as heartbeat.
     *
     * @return integer - current timestamp, if not, the heart is broken
     * @author stev leibelt <artodeto@arcor.de>
     * @since  2013-07-11
     */
    public function knock()
    {
        // TODO: Implement knock() method.
    }

    /**
     * Returns uptime of the current client in seconds.
     *
     * @return integer - runtime in seconds
     * @author stev leibelt <artodeto@arcor.de>
     * @since  2013-07-11
     */
    public function getUptime()
    {
        // TODO: Implement getUptime() method.
    }

    /**
     * Returns memory usage of the current client.
     *
     * @return integer - memory usage in bytes
     * @author stev leibelt <artodeto@arcor.de>
     * @since  2013-07-11
     */
    public function getMemoryUsage()
    {
        // TODO: Implement getMemoryUsage() method.
    }

    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since  2013-07-11
     */
    public function getId()
    {
        // TODO: Implement getId() method.
    }
}