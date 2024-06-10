<?php

namespace App\Imports;

// use Faker\Provider\ar_EG\Person;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Person;

class PersonImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {


            Person::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'phone' => $row['phone'],
            ]);
        }
    }
}
