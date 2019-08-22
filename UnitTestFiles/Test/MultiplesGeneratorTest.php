<?php
declare(strict_types = 1);

namespace UnitTestFiles\Test;

use PHPUnit\Framework\TestCase;

require_once 'MultiplesGenerator.php';

/**
 * Description of MultiplesGeneratorTest
 *
 * @author jaga
 */
class MultiplesGeneratorTest extends TestCase {
    
    /**
     * @test
     */
    public function _inputThree(): void {
        $sut = new MultiplesGenerator();
        $actual = $sut->translate(3);
        $this->assertSame("Linio", $actual);
    }

    /**
     * @test
     */
    public function _inputFive(): void {
        $sut = new MultiplesGenerator();
        $actual = $sut->translate(5);
        $this->assertSame("IT", $actual);
    }

    /**
     * @test
     */
    public function _inputFifteen(): void {
        $sut = new MultiplesGenerator();
        $actual = $sut->translate(15);
        $this->assertSame("Linianos", $actual);
    }

    /**
     * @test
     */
    public function _multiple(): void {
        $sut = new MultiplesGenerator();
        $actual = $sut->run(100);
        $this->assertEquals(100, count($actual));
    }

}
