<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OfferTemplateFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            [
                'category' => 'documents',
                'code'     => 'submission_document',
                'name'     => 'Submission Document',
                'type'     => 'file',
                'options'  => json_encode(['max_size' => 10, 'extensions' => ['pdf', 'docx']]),
                'remark'   => 'Required for all offers',
            ],
            [
                'category' => 'contact',
                'code'     => 'contact_person',
                'name'     => 'Contact Person',
                'type'     => 'text',
                'options'  => null,
                'remark'   => 'Full name of the primary contact',
            ],
            [
                'category' => 'contact',
                'code'     => 'contact_phone',
                'name'     => 'Phone Number',
                'type'     => 'text',
                'options'  => null,
                'remark'   => 'Include country code',
            ],
            [
                'category' => 'contact',
                'code'     => 'contact_email',
                'name'     => 'Email Address',
                'type'     => 'email',
                'options'  => null,
                'remark'   => 'Work email only',
            ],
            [
                'category' => 'education',
                'code'     => 'highest_degree',
                'name'     => 'Highest Degree',
                'type'     => 'select',
                'options'  => json_encode(['Bachelor', 'Master', 'PhD', 'Diploma']),
                'remark'   => 'Select the highest earned degree',
            ],
            [
                'category' => 'education',
                'code'     => 'institution_name',
                'name'     => 'Institution Name',
                'type'     => 'text',
                'options'  => null,
                'remark'   => 'University or college name',
            ],
            [
                'category' => 'education',
                'code'     => 'graduation_year',
                'name'     => 'Graduation Year',
                'type'     => 'number',
                'options'  => json_encode(['min' => 1950, 'max' => 2026]),
                'remark'   => 'Four-digit year',
            ],
            [
                'category' => 'professional',
                'code'     => 'years_experience',
                'name'     => 'Years of Experience',
                'type'     => 'number',
                'options'  => json_encode(['min' => 0, 'max' => 50]),
                'remark'   => 'Total relevant work experience',
            ],
            [
                'category' => 'professional',
                'code'     => 'current_employer',
                'name'     => 'Current Employer',
                'type'     => 'text',
                'options'  => null,
                'remark'   => 'Name of current company',
            ],
            [
                'category' => 'additional',
                'code'     => 'cover_letter',
                'name'     => 'Cover Letter',
                'type'     => 'textarea',
                'options'  => json_encode(['rows' => 5]),
                'remark'   => 'Optional motivation letter',
            ],
        ];

        foreach ($fields as $field) {
            DB::table('offer_template_fields')->insert([
                'category'   => $field['category'],
                'code'       => $field['code'],
                'name'       => $field['name'],
                'type'       => $field['type'],
                'options'    => $field['options'],
                'remark'     => $field['remark'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}