<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $req)
    {
        $faker=Faker::create();
        foreach(range(1,10) as $index)
        {
            $q=new Question();
            DB::table('questions')->insert(
                [
                    $q->question=$req->question,
                    $q->formula=$req->opa,
                    $q->yechish=$req->opb,
                    $q->javob=$req->opc
                ]
                );
        }
    }
}
