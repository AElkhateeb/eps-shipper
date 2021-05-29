<?php

namespace App\Exports;

use App\Models\Way;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class WaysExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Way::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.way.columns.id'),
            trans('admin.way.columns.price'),
            trans('admin.way.columns.time'),
            trans('admin.way.columns.enabled'),
            trans('admin.way.columns.from_id'),
            trans('admin.way.columns.to_id'),
        ];
    }

    /**
     * @param Way $way
     * @return array
     *
     */
    public function map($way): array
    {
        return [
            $way->id,
            $way->price,
            $way->time,
            $way->enabled,
            $way->from_id,
            $way->to_id,
        ];
    }
}
