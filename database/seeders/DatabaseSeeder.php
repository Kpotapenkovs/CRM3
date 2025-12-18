<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Documents;
use App\Models\Parties;
use App\Models\Cases;
use App\Models\Inspections;
use App\Models\Vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();
        foreach ($data['users'] as $userData) {
            User::create([
                'user_id' => $userData['id'],
                'username' => $userData['username'],
                'password' => bcrypt($userData['id']),
                'full_name' => $userData['full_name'],
                'role' => $userData['role'],
                'active' => $userData['active'],

            ]);
            }
            
            foreach ($data['documents'] as $documentData) {
                Documents::create([
                    'id' => $documentData['id'],
                    'case_id' => $documentData['case_id'],
                    'filename' => $documentData['filename'],
                    'mime_type' => $documentData['mime_type'],
                    'category' => $documentData['category'],
                    'pages' => $documentData['pages'],
                    'uploaded_by' => $documentData['uploaded_by'],
                ]);
            }

            foreach ($data['parties'] as $partiesData) {
                Parties::create([
                    'id' => $partiesData['id'],
                    'type' => $partiesData['type'],
                    'name' => $partiesData['name'],
                    'reg_code' => $partiesData['reg_code'],
                    'vat' => $partiesData['vat'],
                    'country' => $partiesData['country'],
                    'email' => $partiesData['email'],
                    'phone' => $partiesData['phone'],
                ]);
            }

            foreach ($data['cases'] as $casesData) {
                Cases::create([
                    'id' => $casesData['id'],
                    'external_ref' => $casesData['external_ref'],
                    'status' => $casesData['status'],
                    'priority' => $casesData['priority'],
                    'arrival_ts' => $casesData['arrival_ts'],
                    'checkpoint_id' => $casesData['checkpoint_id'],
                    'origin_country' => $casesData['origin_country'],
                    'destination_country' => $casesData['destination_country'],
                    'risk_flags' => json_encode($casesData['risk_flags']),
                    'declarant_id' => $casesData['declarant_id'],
                    'consignee_id' => $casesData['consignee_id'],
                    'vehicle_id' => $casesData['vehicle_id'],
                ]);
            }

            foreach ($data['inspections'] as $inspectionsData) {
                Inspections::create([
                    'id' => $inspectionsData['id'],
                    'case_id' => $inspectionsData['case_id'],
                    'type' => $inspectionsData['type'],
                    'requested_by' => $inspectionsData['requested_by'],
                    'start_ts' => $inspectionsData['start_ts'],
                    'location' => $inspectionsData['location'],
                    'checks' => json_encode($inspectionsData['checks']),
                    'assigned_to' => $inspectionsData['assigned_to'],
                ]);
            }

            foreach ($data['vehicles'] as $vehiclesData) {
                Vehicles::create([
                    'id' => $vehiclesData['id'],
                    'plate_no' => $vehiclesData['plate_no'],
                    'country' => $vehiclesData['country'],
                    'make' => $vehiclesData['make'],
                    'model' => $vehiclesData['model'],
                    'vin' => $vehiclesData['vin'],
                ]);
            }
       
    }
}
