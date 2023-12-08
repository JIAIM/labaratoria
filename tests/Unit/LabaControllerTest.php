<?php

    namespace Tests\Unit;

    use App\Models\Visit;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

    class LabaControllerTest extends TestCase
    {
        use RefreshDatabase;

        public function test_store_visit_with_valid_data()
        {
            $response = $this->post('/store_visit', [
                'name' => 'Іван',
                'surname' => 'Іванович',
                'time_in' => '10:30',
                'time_out' => '12:30',
                'subject' => 'Фізика',
            ]);

            $response->assertStatus(200);
            $response->assertViewIs('visits');


            $this->assertDatabaseHas('visits', [
                'name' => 'Іван',
                'surname' => 'Іванович',
                'time_in' => '10:30',
                'time_out' => '12:30',
                'subject' => 'Фізика',
            ]);
        }

        public function test_store_visit_with_invalid_data()
        {
            $response = $this->post('/store_visit', [
                // Неправильно введені дані
                'name' => 'Ів4Н',
                'surname' => 'Iв,ано.вич',
                'time_in' => 'ік',
                'time_out' => '10:65',
                'subject' => 'Математика',
            ]);

            $response->assertSessionHasErrors([
                'name', 'surname', 'time_in', 'time_out', 'subject'
            ]);

        }
    }
