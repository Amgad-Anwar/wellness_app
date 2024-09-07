<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AgeGroup;
use App\Models\AnatomyLayer;
use App\Models\Coverage;
use App\Models\CPTCategory;
use App\Models\CPTService;
use App\Models\CPTServiceAgeGroup;
use App\Models\CPTServiceAnatomyLayer;
use App\Models\CPTServiceCoverage;
use App\Models\CPTServiceCPTType;
use App\Models\CPTServiceGender;
use App\Models\CPTServiceMedicalSpeciality;
use App\Models\CPTType;
use App\Models\Gender;
use App\Models\MedicalSpecialty;
use App\Models\ProviderLevel;
use App\Models\ProviderService;
use App\Models\ProviderType;
use Database\Factories\AgeGroupFactory;
use Database\Factories\CPTCategoryFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CptCategoriesTableSeeder::class);
        $this->call(CptServicesTableSeeder::class);
        DB::table('languages')->update(['image_dir'=>'/images/countries/160x120/','created_at'=>now()]);
        DB::table('countries')->update(['flag_dir'=>'/images/countries/160x120/','flag_size'=>'160x120','created_at'=>now()]);
        DB::table('states')->update(['created_at'=>now()]);
        DB::table('cities')->update(['created_at'=>now()]);

        CPTCategory::factory()->count(30)->create();
        ProviderLevel::factory()->count(5)->create();
        for ($x=0;$x<=30;$x++){
            $providerType=ProviderType::factory()->has(ProviderService::factory()->count(4))->create();
            MedicalSpecialty::factory()->for($providerType)->count(30)->create();
        }
        Coverage::factory()->count(30)->create();
        Gender::factory([
            'title'=>'male',
        ])->create();
        Gender::factory([
            'title'=>'female',
        ])->create();
        CPTType::factory()->count(30)->create();
        AnatomyLayer::factory()->count(30)->create();
        AgeGroup::factory()->count(30)->create();
        foreach (CPTCategory::take(3)->inRandomOrder()->get() as $cptCategory){
            CPTService::factory()->for($cptCategory,'category')->count(10)->create();
        }
        foreach (CPTService::pluck('id') as $id){
            for ($x=0;$x<=fake()->randomNumber(1,4);$x++){
                CPTServiceMedicalSpeciality::create([
                    'cpt_service_id'=>$id,
                    'medical_speciality_id'=>fake()->randomNumber(1,930)
                ]);
                CPTServiceCoverage::create([
                    'cpt_service_id'=>$id,
                    'coverage_id'=>fake()->randomNumber(1,30)
                ]);
                CPTServiceAgeGroup::create([
                    'cpt_service_id'=>$id,
                    'age_group_id'=>fake()->randomNumber(1,30)
                ]);
                CPTServiceGender::create([
                    'cpt_service_id'=>$id,
                    'gender_id'=>fake()->randomNumber(1,2)
                ]);
                CPTServiceCPTType::create([
                    'cpt_service_id'=>$id,
                    'cpt_type_id'=>fake()->randomNumber(1,30)
                ]);
                CPTServiceAnatomyLayer::create([
                    'cpt_service_id'=>$id,
                    'anatomy_layer_id'=>fake()->randomNumber(1,30)
                ]);
            }

        }
        $db_host=env('DB_HOST');
        $db_name=env('DB_DATABASE');
        $db_user=env('DB_USERNAME');
        $db_pass=env('DB_PASSWORD');
        $script_path=base_path('icd10.sql');
        $command = "mysql --user={$db_user} --password='{$db_pass}' ". "-h {$db_host} -D {$db_name} < {$script_path}";
        shell_exec($command);
        $script_path=base_path('medicines.sql');
        $command = "mysql --user={$db_user} --password='{$db_pass}' ". "-h {$db_host} -D {$db_name} < {$script_path}";
        shell_exec($command);
        $script_path=base_path('import_our_price_tables.sql');
        $command = "mysql --user={$db_user} --password='{$db_pass}' ". "-h {$db_host} -D {$db_name} < {$script_path}";
        shell_exec($command);
    }
}
