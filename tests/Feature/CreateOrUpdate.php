<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repository\UserRepository;
class CreateOrUpdate extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $request = [
            'role' => 'customer',
            'name' => 'John Doe',
            'company_id' => '',
            'department_id' => '',
            'email' => 'john@example.com',
            'dob_or_orgid' => '01/01/1990',
            'phone' => '1234567890',
            'mobile' => '9876543210',
            'password' => 'password123',
            "consumer_type"=>"paid",
            "customer_type"=>"customer_type",
            "post_code"=>"test_data",
            "address"=>"test_data",
            "city"=>"test_data",
            "town"=>"test_data",
            "country"=>"test_data",
            "reference"=>"test_data",
            "additional_info"=>"test_data",
            "cost_place"=>"test_data",
            "fee"=>"test_data",
            "time_to_charge"=>"test_data",
            "time_to_pay"=>"test_data",
            "charge_ob"=>"test_data",
            "customer_id"=>"test_data",
            "charge_km"=>"test_data",
            "maximum_km"=>"test_data",
            "translator_ex"=>"test_data",
        ];
        $controller = new UserRepository();
        $result = $controller->createOrUpdate(null, $request);
        $this->assertNotFalse($result);
        $this->assertEquals('customer', $result->user_type);

        // Assert that the user name is set correctly.
        $this->assertEquals('John Doe', $result->name);

        // Assert that the user email is set correctly.
        $this->assertEquals('john@example.com', $result->email);
    }
}
