<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $services_data = [
            // ORD
            [
                'service_code' => 'ORD-1',
                'service_name' => 'Courtesy Visit with RD/Consultation',
                'division_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            // GD
            [
                'service_code' => 'GD-1',
                'service_name' => 'Conduct of Geohazard Identification Survey',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'GD-2',
                'service_name' => 'Review of Engineering Geological and Geohazard Assessment Report (EGGAR)',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'GD-3',
                'service_name' => 'Conduct of Megascopic Analysis',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'GD-4',
                'service_name' => 'Conduct of Geohazard Assessment of Proposed Sanitary Landfill Site',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'GD-5',
                'service_name' => 'Conduct of Geohazard Assessment for Sand and Gravel Project',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'GD-6',
                'service_name' => 'Geohazard Certification',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'GD-7',
                'service_name' => 'Request for Geohazard Map',
                'division_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            // MSESDD
            [
                'service_code' => 'MSESDD-1',
                'service_name' => 'Inspection of mechanical/electrical installations',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-2',
                'service_name' => 'Issuance of Authority to Install Electrical/Mechanical Equipment',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-3',
                'service_name' => 'Issuance of Permit to Operate Electrical/Mechanical Equipment',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-4',
                'service_name' => 'Processing and evaluation of Applications for Temporary/Permanent Safety Engineer’s/Inspector’s Permit',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-5',
                'service_name' => 'Processing and evaluation of applications for renewal for Temporary/Permanent Safety Engineer’s/Inspector’s Permit',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-6',
                'service_name' => 'Processing and endorsement of Applications for Purchaser’s License',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-7',
                'service_name' => 'Processing and endorsement of Applications for License to Purchase or Move Explosives',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-8',
                'service_name' => 'Processing and endorsement of Application for Blaster’s Foreman License',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-9',
                'service_name' => 'Evaluation and approval of Safety and Health Programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-10',
                'service_name' => 'Investigation of complaints/incidents relating to mine safety and health',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-11',
                'service_name' => 'Preliminary evaluation of Environmental Protection and Enhancement Programs/Final Mine Rehabilitation and Decommissioning Plans',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-12',
                'service_name' => 'Preliminary evaluation of Annual Environmental Protection and Enhancement Programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-13',
                'service_name' => 'Processing and issuance of Authority to Withdraw Mine Rehabilitation Fund',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-14',
                'service_name' => 'Investigation of complaints/incidents relating to mine environmental management',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-15',
                'service_name' => 'Evaluation and approval of 5-Year Social Development and Management Programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-16',
                'service_name' => 'Evaluation and approval of Annual Social Development and Management Programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-17',
                'service_name' => 'Evaluation and approval of Community Development Programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-18',
                'service_name' => 'Evaluation and approval of Community Development and Management Programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-19',
                'service_name' => 'Investigation of complaints/incidents relating to the implementation social development programs',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-20',
                'service_name' => 'Processing and issuance of Certificate of Environmental Management and Community Relations Record (CEMCRR)',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-21',
                'service_name' => 'Processing and issuance of Certificate of Exemption in lieu of Certificate of Environmental Management and Community Relations Record (CEMCRR)',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MSESDD-22',
                'service_name' => 'Capacity building on mineral resources and geosciences development through lectures/training for LGUs and other stakeholders',
                'division_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            // MMD
            [
                'service_code' => 'MMD-1',
                'service_name' => 'Processing of Petition/Request for the Declaration as Minahang Bayan for Initial Evaluation Clearance (IEC)',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-2',
                'service_name' => 'Processing of Petition/Request for the Declaration as Minahang Bayan for Final Evaluation Clearance (FEC)',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-3',
                'service_name' => 'Processing of Exploration Permit Application',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-4',
                'service_name' => 'Processing of Ore Transport Permit Application',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-5',
                'service_name' => 'Processing of Mineral Ore Export Permit Application',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-6',
                'service_name' => 'Processing of Application for Accreditation as Dealer, Trader or Retailer of Minerals/Mineral Products and or By-Products (New/Renewal)',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-7',
                'service_name' => 'Processing of ISAG Permit Application (New/Renewal)',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-8',
                'service_name' => 'Processing of Application for MGB-X Deputized Geodetic Engineer (New/Renewal)',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-9',
                'service_name' => 'Request for Certificate of Posting/Notice of Application',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-10',
                'service_name' => 'Request for Issuance of Delivery Receipts/Endorsement',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-11',
                'service_name' => 'Request for Area Status/Clearance',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-12',
                'service_name' => 'Application for Disposition of Residual Stockpile',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-13',
                'service_name' => 'Request for Tenement Map',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-14',
                'service_name' => 'Deputation Training for Mining Enforcement Officers',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'MMD-15',
                'service_name' => 'TSHES Audit/Monitoring',
                'division_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            //FAD
            [
                'service_code' => 'FAD-1',
                'service_name' => 'Payment',
                'division_id' => 5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'service_code' => 'FAD-2',
                'service_name' => 'Processing of Certified True Copy of Documents/Request for Copy of Documents',
                'division_id' => 5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        ];

        \App\Models\Service::insert($services_data);
    }
}
