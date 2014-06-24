<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-07-15
 */

namespace Net\Bazzline\Component\ProcessList;

/**
 * Class ProcessListInterface
 *
 * @package Net\Bazzline\Component\ProcessList
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-07-15
 */
interface ProcessListInterface
{
    /**
     * Adds a item to the process list
     *
     * @param ProcessItemInterface $item
     * @return $this
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2013-07-15
     */
    public function attach(ProcessItemInterface $item);

    /**
     * Removes a item to the process list
     *
     * @param ProcessItemInterface $item
     * @return $this
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2013-07-15
     */
    public function detach(ProcessItemInterface $item);

    /**
     * @return array
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2013-07-15
     * @todo implement output formatter
     */
    public function top();
}