<?php


class DiscountCalculatorTest
{
    public function ShouldApplyWhenValueIsAboveTheMinimium(){
        $discountCalculator = new DiscountCalculator();
        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 110;
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    public function ShouldApplyWhenValueIsBellowTheMinimium(){
        $discountCalculator = new DiscountCalculator();
        $totalValue = 90;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 90;
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    private function assertEquals($expectedValue, $actualValue){
        if($expectedValue !== $actualValue){
            $message = 'Expected: ' . $expectedValue . ' but god: ' . $actualValue;
            throw  new \Exception($message);
        }

        echo "Test Passed" . PHP_EOL;
    }
}