<?php

namespace App\Exports;

use App\Models\Reservation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Reservation::all();
    }
    public function headings(): array
    {
        return ["reservation_id", "name", "phonenumber", "datereservation", "timerange", "reservationnotes", "roomnumber", "reservation_type", "status", "created_at", "updated_at"];
    }
}
