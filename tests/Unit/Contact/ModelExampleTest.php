<?php

namespace SnowIO\BrightpearlDataModel\Test\Unit\Contact;

use PHPUnit\Framework\TestCase;
use SnowIO\BrightpearlDataModel\ModelExample;

class ModelExampleTest extends TestCase
{
    /**
     * @return array
     */
    private function getJsonData(): array
    {
        return [
            "name" => "H Simpson",
            "isInUk" => false,
            "phoneNumber" =>  5557246,
            "cartItems" => [
                "Duff Beer",
                "Donuts",
                "Butterfingers"
                ]
        ];
    }

    /**
     * @return void
     */
    public function testFromJsonToJson()
    {
        $data = $this->getJsonData();
        $modelExample = ModelExample::fromJson($data);
        self::assertEquals($data, $modelExample->toJson());
    }

    /**
     * @return void
     */
    public function testWithers()
    {
        $modelExample = ModelExample::create()
            ->withName("H Simpson")
            ->withIsInUk(false)
            ->withPhoneNumber(5557246)
            ->withCartItems([
                "Duff Beer",
                "Donuts",
                "Butterfingers"
            ]);

        self::assertEquals($this->getJsonData(), $modelExample->toJson());
    }

    /**
     * @return void
     */
    public function testGetters()
    {
        $data = $this->getJsonData();
        $modelExample = ModelExample::fromJson($data);

        self::assertEquals("H Simpson", $modelExample->getName());
        self::assertEquals(false, $modelExample->getIsInUk());
        self::assertEquals(5557246, $modelExample->getPhoneNumber());
        self::assertEquals([
            "Duff Beer",
            "Donuts",
            "Butterfingers"
        ], $modelExample->getCartItems());

    }

    /**
     * @return void
     */
    public function testEquals()
    {
        $data = $this->getJsonData();
        $modelExample1 = ModelExample::fromJson($data);
        $modelExample2 = ModelExample::fromJson($data);
        self::assertTrue($modelExample1->equals($modelExample2));
    }
}