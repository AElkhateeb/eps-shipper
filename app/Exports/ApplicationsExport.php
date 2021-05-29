<?php

namespace App\Exports;

use App\Models\Application;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ApplicationsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Application::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.application.columns.id'),
            trans('admin.application.columns.fullname'),
            trans('admin.application.columns.job_id'),
            trans('admin.application.columns.bday'),
            trans('admin.application.columns.male'),
            trans('admin.application.columns.military'),
            trans('admin.application.columns.email'),
            trans('admin.application.columns.phone'),
            trans('admin.application.columns.phone_2'),
            trans('admin.application.columns.city'),
            trans('admin.application.columns.area'),
            trans('admin.application.columns.education'),
            trans('admin.application.columns.experience'),
        ];
    }

    /**
     * @param Application $application
     * @return array
     *
     */
    public function map($application): array
    {
        return [
            $application->id,
            $application->fullname,
            $application->job_id,
            $application->bday,
            $application->male,
            $application->military,
            $application->email,
            $application->phone,
            $application->phone_2,
            $application->city,
            $application->area,
            $application->education,
            $application->experience,
        ];
    }
}
