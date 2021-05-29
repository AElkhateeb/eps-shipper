<?php

namespace App\Exports;

use App\Models\Withdrawal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class WithdrawalsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Withdrawal::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.withdrawal.columns.id'),
            trans('admin.withdrawal.columns.price'),
            trans('admin.withdrawal.columns.status'),
            trans('admin.withdrawal.columns.in_out'),
            trans('admin.withdrawal.columns.enabled'),
            trans('admin.withdrawal.columns.from_id'),
            trans('admin.withdrawal.columns.to_id'),
            trans('admin.withdrawal.columns.way_id'),
        ];
    }

    /**
     * @param Withdrawal $withdrawal
     * @return array
     *
     */
    public function map($withdrawal): array
    {
        return [
            $withdrawal->id,
            $withdrawal->price,
            $withdrawal->status,
            $withdrawal->in_out,
            $withdrawal->enabled,
            $withdrawal->from_id,
            $withdrawal->to_id,
            $withdrawal->way_id,
        ];
    }
}
