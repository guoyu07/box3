<?php

namespace Box\Component\Archive\Exception;

/**
 * Serves as the base exception class for the component.
 *
 * @author Kevin Herrera <kevin@herrera.io>
 */
class Exception extends \Exception
{
    /**
     * Initializes the new exception.
     *
     * @param string     $message  The exception message.
     * @param \Exception $previous The previous exception.
     */
    public function __construct($message = '', \Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
