<?php


class DiscountCalculatorTest
{
    public function ShouldApplyWhenValueIsAboveTheMinimium(){
        $discountCalculator = new DiscountCalculator();
        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 110;
        return $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    public function assertEquals($expectedValue, $actualValue){
        if($expectedValue !== $actualValue){
            $message = 'Expected: ' . $expectedValue . ' but god: ' . $actualValue;
            throw  new \Exception($message);
        }

        echo "Test Passed";
    }
}