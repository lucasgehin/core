<?php

/**
 * @package    contao-bootstrap
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Bootstrap\Core\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class GetMultipleConfigNamesEvent is emitted when getting names of multiple config types.
 *
 * @package Netzmacht\Bootstrap\Core\Event
 */
class GetMultipleConfigNamesEvent extends Event
{
    const NAME = 'bootstrap.config.get-multiple-config-names';

    /**
     * Config model.
     *
     * @var \Database\Result
     */
    private $model;

    /**
     * Options.
     *
     * @var array
     */
    private $options = array();

    /**
     * Construct.
     *
     * @param \Database\Result $model Config model.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Get model.
     *
     * @return \Database\Result
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get options.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set config name options.
     *
     * @param array $options Name options.
     *
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }
}
