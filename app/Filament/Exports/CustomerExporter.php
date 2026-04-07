<?php

namespace App\Filament\Exports;

use App\Models\Customer;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class CustomerExporter extends Exporter
{
    protected static ?string $model = Customer::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')->label('ID'),
            ExportColumn::make('organization_name')->label('Tên tổ chức'),
            ExportColumn::make('email')->label('Email'),
            ExportColumn::make('representative_name')->label('Người đại diện'),
            ExportColumn::make('country')->label('Quốc gia'),
            ExportColumn::make('tax_code')->label('Mã số thuế'),
            ExportColumn::make('province')->label('Tỉnh thành'),
            ExportColumn::make('representative_phone')->label('SĐT người đại diện'),
            ExportColumn::make('address')->label('Địa chỉ'),
            ExportColumn::make('gender')->label('Giới tính'),
            ExportColumn::make('representative_dob')->label('Ngày sinh'),
            ExportColumn::make('created_at')->label('Ngày tạo'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export hoàn tất: ' . number_format($export->successful_rows) . ' dòng.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' dòng thất bại.';
        }

        return $body;
    }
}
