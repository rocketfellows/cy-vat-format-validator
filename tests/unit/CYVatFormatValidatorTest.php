<?php

namespace rocketfellows\CYVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\CYVatFormatValidator\CYVatFormatValidator;

class CYVatFormatValidatorTest extends TestCase
{
    /**
     * @var CYVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new CYVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => '00000000A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678B',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678C',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678D',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678E',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678F',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678G',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678H',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678I',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678J',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678K',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678L',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678M',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678N',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678O',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678P',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678Q',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678R',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678S',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678T',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678U',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678V',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678W',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678X',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678Y',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678Z',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY00000000A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY11111111A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY99999999A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678B',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678C',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678D',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678E',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678F',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678G',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678H',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678I',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678J',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678K',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678L',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678M',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678N',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678O',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678P',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678Q',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678R',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678S',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678T',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678U',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678V',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678W',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678Y',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CY12345678Z',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789X',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678XL',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CY12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CY1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CY123456789X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CY1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'C12345678L',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Y12345678L',
                'isValid' => false,
            ],
        ];
    }
}
