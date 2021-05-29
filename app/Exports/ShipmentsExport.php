<?php

namespace App\Exports;

use App\Models\Shipment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ShipmentsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Shipment::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.shipment.columns.id'),
            trans('admin.shipment.columns.weight'),
            trans('admin.shipment.columns.pkg_num'),
            trans('admin.shipment.columns.status'),
            trans('admin.shipment.columns.published_at'),
            trans('admin.shipment.columns.end_at'),
            trans('admin.shipment.columns.prod_kind'),
            trans('admin.shipment.columns.prod_price'),
            trans('admin.shipment.columns.way_id'),
            trans('admin.shipment.columns.from_user_id'),
            trans('admin.shipment.columns.to_user_id'),
            trans('admin.shipment.columns.pay_way'),
        ];
    }

    /**
     * @param Shipment $shipment
     * @return array
     *
     */
    public function map($shipment): array
    {
        return [
            $shipment->id,
            $shipment->weight,
            $shipment->pkg_num,
            $shipment->status,
            $shipment->published_at,
            $shipment->end_at,
            $shipment->prod_kind,
            $shipment->prod_price,
            $shipment->way_id,
            $shipment->from_user_id,
            $shipment->to_user_id,
            $shipment->pay_way,
        ];
    }
}
