<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\School;

class SchoolTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_successExistSchoolById()
    {
        $school = School::inRandomOrder()->first();
        //dd($school);
        $response = $this->get('/api/school/'.$school->id);

        $response->assertStatus(200);
        $response->assertJsonStructure(['id','name', 'address']);
    }

    public function test_NotExistSchoolById()
    {
        $school = School::all()->last();
        dd($school->id+1);
        $response = $this->get('/api/school/'.$school->id+1);

        $response->assertStatus(404);
        $response->assertJsonStructure(['id','name', 'address']);
    }
    public function test_fakeAddToSchool()
    {
        $faker = \Faker\Factory::create();
        $faker->name();
        $faker->address();
    }
}
