<?php

namespace Test\Box\Component\Archive\Exception;

use Box\Component\Archive\Exception\Exception;
use PHPUnit\Framework\TestCase;

/**
 * Verifies that the base exception class functions as intended.
 *
 * @author Kevin Herrera <kevin@herrera.io>
 *
 * @covers \Box\Component\Archive\Exception\Exception
 */
class ExceptionTest extends TestCase
{
    /**
     * Verify that a new exception can be created without arguments.
     */
    public function testCreateNewExceptionWithoutArguments()
    {
        $exception = new Exception();

        self::assertEquals(
            '',
            $exception->getMessage(),
            'The exception message should not be set.'
        );

        self::assertEquals(
            0,
            $exception->getCode(),
            'The exception code should not be set.'
        );

        self::assertNull(
            $exception->getPrevious(),
            'There should be no previous exception set.'
        );
    }

    /**
     * Verify that a new exception can be created with arguments.
     */
    public function testCreateNewExceptionWithArguments()
    {
        $message = 'This is a test exception message.';
        $previous = new \Exception();
        $exception = new Exception($message, $previous);

        self::assertEquals(
            $message,
            $exception->getMessage(),
            'The exception message was not set properly.'
        );

        self::assertSame(
            $previous,
            $exception->getPrevious(),
            'The previous exception was not set.'
        );
    }
}
