<?php

namespace App\Exports;

use App\Models\Branch;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BranchesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Branch::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.branch.columns.id'),
            trans('admin.branch.columns.location'),
            trans('admin.branch.columns.name'),
            trans('admin.branch.columns.governrate'),
            trans('admin.branch.columns.is_published'),
            trans('admin.branch.columns.manger'),
        ];
    }

    /**
     * @param Branch $branch
     * @return array
     *
     */
    public function map($branch): array
    {
        return [
            $branch->id,
            $branch->location,
            $branch->name,
            $branch->governrate,
            $branch->is_published,
            $branch->manger,
        ];
    }
}
