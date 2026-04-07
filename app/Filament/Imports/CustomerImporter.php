<?php

namespace App\Filament\Imports;

use App\Models\Customer;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class CustomerImporter extends Importer
{
    protected static ?string $model = Customer::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('organization_name')
                ->label('Tên tổ chức')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('email')
                ->label('Email')
                ->rules(['nullable', 'email', 'max:255']),
            ImportColumn::make('representative_name')
                ->label('Người đại diện')
                ->rules(['nullable', 'max:255']),
            ImportColumn::make('country')
                ->label('Quốc gia')
                ->rules(['nullable', 'max:100']),
            ImportColumn::make('tax_code')
                ->label('Mã số thuế')
                ->rules(['nullable', 'max:20']),
            ImportColumn::make('province')
                ->label('Tỉnh thành')
                ->rules(['nullable', 'max:40']),
            ImportColumn::make('representative_phone')
                ->label('SĐT người đại diện')
                ->rules(['nullable', 'max:20']),
            ImportColumn::make('address')
                ->label('Địa chỉ')
                ->rules(['nullable', 'max:255']),
            ImportColumn::make('gender')
                ->label('Giới tính')
                ->rules(['nullable', 'in:male,female']),
            ImportColumn::make('representative_dob')
                ->label('Ngày sinh người đại diện')
                ->rules(['nullable', 'date']),
        ];
    }

    public function resolveRecord(): ?Customer
    {
        return new Customer();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Import hoàn tất: ' . number_format($import->successful_rows) . ' dòng thành công.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' dòng thất bại.';
        }

        return $body;
    }
}
