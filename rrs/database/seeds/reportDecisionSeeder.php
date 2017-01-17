<?php

use Illuminate\Database\Seeder;
use App\Eloquent\ReportDecision;

class reportDecisionSeeder extends Seeder
{
    protected $reportDecision;

    public function __construct(ReportDecision $reportDecision)
    {
        $this->reportDecision = $reportDecision;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('rrs_report_decision')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data = array(
            '1' => array(
                'group_id' => 10,
                'category_id' => 101,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '2' => array(
                'group_id' => 10,
                'category_id' => 101,
                'score' => 2,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '3' => array(
                'group_id' => 10,
                'category_id' => 101,
                'score' => 5,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '4' => array(
                'group_id' => 10,
                'category_id' => 102,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '5' => array(
                'group_id' => 10,
                'category_id' => 102,
                'score' => 6,
                'evaluation_id' => 20,
                'is_active' => 1,
            ),
            '6' => array(
                'group_id' => 10,
                'category_id' => 102,
                'score' => 9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '7' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '8' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 1,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '9' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 2,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '10' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 3,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '11' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 4,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '12' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 5,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '13' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 6,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '14' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 7,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '15' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 8,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '16' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 9,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '17' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 10,
                'evaluation_id' => 20,
                'is_active' => 1,
            ),
            '18' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 11,
                'evaluation_id' => 20,
                'is_active' => 1,
            ),
            '19' => array(
                'group_id' => 10,
                'category_id' => 103,
                'score' => 12,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '20' => array(
                'group_id' => 10,
                'category_id' => 104,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '21' => array(
                'group_id' => 10,
                'category_id' => 104,
                'score' => 1,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '22' => array(
                'group_id' => 10,
                'category_id' => 104,
                'score' => 4,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '23' => array(
                'group_id' => 10,
                'category_id' => 104,
                'score' => 6,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '24' => array(
                'group_id' => 20,
                'category_id' => 201,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '25' => array(
                'group_id' => 20,
                'category_id' => 201,
                'score' => 3,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '26' => array(
                'group_id' => 20,
                'category_id' => 201,
                'score' => 4,
                'evaluation_id' => 20,
                'is_active' => 1,
            ),
            '27' => array(
                'group_id' => 20,
                'category_id' => 201,
                'score' => 5,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '28' => array(
                'group_id' => 20,
                'category_id' => 202,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '29' => array(
                'group_id' => 20,
                'category_id' => 202,
                'score' => 1,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '30' => array(
                'group_id' => 20,
                'category_id' => 202,
                'score' => 3,
                'evaluation_id' => 20,
                'is_active' => 1,
            ),
            '31' => array(
                'group_id' => 20,
                'category_id' => 202,
                'score' => 4,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '32' => array(
                'group_id' => 20,
                'category_id' => 203,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '33' => array(
                'group_id' => 20,
                'category_id' => 203,
                'score' => 2,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '34' => array(
                'group_id' => 20,
                'category_id' => 203,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '35' => array(
                'group_id' => 20,
                'category_id' => 204,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '36' => array(
                'group_id' => 20,
                'category_id' => 204,
                'score' => 1,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '37' => array(
                'group_id' => 20,
                'category_id' => 204,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '38' => array(
                'group_id' => 20,
                'category_id' => 205,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '39' => array(
                'group_id' => 20,
                'category_id' => 205,
                'score' => 1,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '40' => array(
                'group_id' => 20,
                'category_id' => 205,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '41' => array(
                'group_id' => 20,
                'category_id' => 206,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '42' => array(
                'group_id' => 20,
                'category_id' => 206,
                'score' => 1,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '43' => array(
                'group_id' => 20,
                'category_id' => 206,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '44' => array(
                'group_id' => 20,
                'category_id' => 207,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '45' => array(
                'group_id' => 20,
                'category_id' => 207,
                'score' => 1,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '46' => array(
                'group_id' => 20,
                'category_id' => 207,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '47' => array(
                'group_id' => 20,
                'category_id' => 208,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '48' => array(
                'group_id' => 20,
                'category_id' => 208,
                'score' => 1,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '49' => array(
                'group_id' => 20,
                'category_id' => 208,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '50' => array(
                'group_id' => 20,
                'category_id' => 209,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '51' => array(
                'group_id' => 20,
                'category_id' => 209,
                'score' => 1,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '52' => array(
                'group_id' => 20,
                'category_id' => 209,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '53' => array(
                'group_id' => 20,
                'category_id' => 210,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '54' => array(
                'group_id' => 20,
                'category_id' => 210,
                'score' => 1,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '55' => array(
                'group_id' => 20,
                'category_id' => 210,
                'score' => 2,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '56' => array(
                'group_id' => 30,
                'category_id' => 301,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '57' => array(
                'group_id' => 30,
                'category_id' => 301,
                'score' => 1,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '58' => array(
                'group_id' => 30,
                'category_id' => 302,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '59' => array(
                'group_id' => 30,
                'category_id' => 302,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '60' => array(
                'group_id' => 30,
                'category_id' => 303,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '61' => array(
                'group_id' => 30,
                'category_id' => 303,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '62' => array(
                'group_id' => 30,
                'category_id' => 304,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '63' => array(
                'group_id' => 30,
                'category_id' => 304,
                'score' => 1,
                'evaluation_id' => 40,
                'is_active' => 1,
            ),
            '64' => array(
                'group_id' => 30,
                'category_id' => 304,
                'score' => 2,
                'evaluation_id' => 30,
                'is_active' => 1,
            ),
            '65' => array(
                'group_id' => 30,
                'category_id' => 304,
                'score' => 3,
                'evaluation_id' => 20,
                'is_active' => 1,
            ),
            '66' => array(
                'group_id' => 30,
                'category_id' => 304,
                'score' => 4,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '67' => array(
                'group_id' => 40,
                'category_id' => 401,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '68' => array(
                'group_id' => 40,
                'category_id' => 401,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '69' => array(
                'group_id' => 40,
                'category_id' => 401,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '70' => array(
                'group_id' => 40,
                'category_id' => 402,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '71' => array(
                'group_id' => 40,
                'category_id' => 402,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '72' => array(
                'group_id' => 40,
                'category_id' => 402,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '73' => array(
                'group_id' => 40,
                'category_id' => 403,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '74' => array(
                'group_id' => 40,
                'category_id' => 403,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '75' => array(
                'group_id' => 40,
                'category_id' => 403,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '76' => array(
                'group_id' => 40,
                'category_id' => 404,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '77' => array(
                'group_id' => 40,
                'category_id' => 404,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '78' => array(
                'group_id' => 40,
                'category_id' => 404,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '79' => array(
                'group_id' => 40,
                'category_id' => 405,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '80' => array(
                'group_id' => 40,
                'category_id' => 405,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '81' => array(
                'group_id' => 40,
                'category_id' => 405,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '82' => array(
                'group_id' => 40,
                'category_id' => 406,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '83' => array(
                'group_id' => 40,
                'category_id' => 406,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '84' => array(
                'group_id' => 40,
                'category_id' => 406,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '85' => array(
                'group_id' => 40,
                'category_id' => 407,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '86' => array(
                'group_id' => 40,
                'category_id' => 407,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '87' => array(
                'group_id' => 40,
                'category_id' => 407,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '88' => array(
                'group_id' => 40,
                'category_id' => 408,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '89' => array(
                'group_id' => 40,
                'category_id' => 408,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '90' => array(
                'group_id' => 40,
                'category_id' => 408,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '91' => array(
                'group_id' => 40,
                'category_id' => 409,
                'score' => 0,
                'evaluation_id' => 50,
                'is_active' => 1,
            ),
            '92' => array(
                'group_id' => 40,
                'category_id' => 409,
                'score' => 3,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
            '93' => array(
                'group_id' => 40,
                'category_id' => 409,
                'score' => -9,
                'evaluation_id' => 10,
                'is_active' => 1,
            ),
        );

        $this->reportDecision->insert($data);
    }
}
