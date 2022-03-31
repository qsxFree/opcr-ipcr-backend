<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder {

    public function run() {
        DB::table('office')->insert([
            [
                'code' => "OP",
                'name' => 'Office of the College President',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "QMR",
                'name' => 'Quality Management Representative',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "OBS",
                'name' => 'Office of the Board Secretary',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "PICRO",
                'name' => 'Public Information and Community Relations Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "AdC",
                'name' => 'Administrative Council',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "AC",
                'name' => 'Academic Council',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "REC",
                'name' => 'Research and Extension Council',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "IPDO",
                'name' => 'Institutional Planning and Development Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "ICO",
                'name' => 'Internal Control Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "PS",
                'name' => 'Presidential Staff',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "MIS",
                'name' => 'Management Information System Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "AAO",
                'name' => 'Alumni Affairs Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "VPAA",
                'name' => 'Vice President for Academic Affairs',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "NSTP",
                'name' => 'National Service Training Program Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "QAO",
                'name' => 'Quality Assurance Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "RO",
                'name' => "Registrar's Office",
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "OSSD",
                'name' => "Office of Students' Services and Development",
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "SDO",
                'name' => 'Sports Development Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "SWF",
                'name' => 'Sentro ng Wikang Filipino',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "CL",
                'name' => 'College Library',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "GTAO",
                'name' => 'Guidance, Testing, and Admissions Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "ILO",
                'name' => 'International Linkages Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "VPRE",
                'name' => 'Vice President for Research and Extension',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "ODRS",
                'name' => 'Office of the Director for Research Services',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "ODES",
                'name' => 'Office of the Director for Extension Services',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "GDO",
                'name' => 'Gender and Development Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "SPRC",
                'name' => 'Social and Policy Research Center',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "IPRPU",
                'name' => 'Intellectual Property Rights and Protection Unit',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "ALC",
                'name' => 'Analytical Laboratory Centert',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "TLC",
                'name' => 'Technology and Livelihood Center',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "VPAF",
                'name' => 'Vice President for Administration and Finance',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "ODAS",
                'name' => 'Office of the Director for Auxilliary Servces',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "MaD",
                'name' => 'Medical and Dental',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "DH",
                'name' => 'Dormitory/Hostel',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "PPO",
                'name' => 'Printing and Publication Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "BDM",
                'name' => 'IGP/Business Development and Management',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "CEAP",
                'name' => 'College Entrepreneurial and Agribusiness Program',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "CCS",
                'name' => 'Canteen/Catering Services',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "SP",
                'name' => 'Special Projects',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "OCAO",
                'name' => 'Office of the Chief Administrative Officer',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "AO",
                'name' => 'Accounting Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "BO",
                'name' => 'Budget Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "CO",
                'name' => 'Cashiering Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "RMO",
                'name' => 'Records Management Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "HRDO",
                'name' => 'Human Resource Development Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "PGM",
                'name' => 'Physical and Ground Maintenance',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "SPMO",
                'name' => 'Supply and Property Management Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "SSMO",
                'name' => 'Security and Safety Management Office',
                'is_delivery_unit' => false,
                'head' => null
            ],
            [
                'code' => "MP",
                'name' => 'Motorpool',
                'is_delivery_unit' => false,
                'head' => null
            ],


        ]);
    }
}
