<?php

namespace App\Exports;

use App\Models\Receivere;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReceiveresExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Receivere::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
        ];
    }

    /**
     * @param Receivere $receivere
     * @return array
     *
     */
    public function map($receivere): array
    {
        return [
        ];
    }
}
