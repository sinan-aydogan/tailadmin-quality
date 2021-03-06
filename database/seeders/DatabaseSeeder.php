<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Admin Seeder*/
        $this->call(UserSeeder::class);

        /*Random Customer Factory*/
        Customer::factory(10)->create();

        /*Random Manufacturer Factory*/
        Supplier::factory(10)->create();

        /*Department Seeder*/
        $this->call(DepartmentSeeder::class);

        /*Product Type Seeder*/
        $this->call(ProductTypeSeeder::class);

        /*Products Seeder*/
        $this->call(ProductSeeder::class);

        /*Raw Material Seeder*/
        $this->call(RawMaterialSeeder::class);

        /*Raw Material Type Seeder*/
        $this->call(RawMaterialTypeSeeder::class);

        /*Machine Seeder*/
        $this->call(MachineSeeder::class);

        /*Machine Type Seeder*/
        $this->call(MachineTypeSeeder::class);

        /*Job Description Seeder*/
        $this->call(JobDescriptionSeeder::class);

        /*Standard Seeder*/
        $this->call(StandardSeeder::class);

        /*Random User Factory*/
        User::factory(30)->create();

        /*Complaint Type Seeder*/
        $this->call(ComplaintTypeSeeder::class);

        /*Quality Spect Seeder*/
        $this->call(QualitySpectSeeder::class);

        /*Property Type Seeder*/
        $this->call(PropertyTypeSeeder::class);

        /*Property Seeder*/
        $this->call(PropertySeeder::class);



        /* if(App::environment('local')){
            $this->call([

                       UserSeeder::class,

                       DepartmentSeeder::class,

            ]);
        } */

    }
}
