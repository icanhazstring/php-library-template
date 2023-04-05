<?php
declare(strict_types=1);

namespace LibraryNamespace\Test\Unit;

use LibraryNamespace\PlaceHolder;
use PHPUnit\Framework\TestCase;

final class PlaceHolderTest extends TestCase
{
    /**
     * @test
     */
    public function returnString(): void
    {
        $placeHolder = new PlaceHolder();
        expect($placeHolder->getOutput())->toBeString();
    }
}
