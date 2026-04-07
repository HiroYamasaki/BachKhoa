<?php

namespace App\Filament\Resources;

use App\Filament\Exports\CustomerExporter;
use App\Filament\Imports\CustomerImporter;
use App\Filament\Resources\CustomerResource\Pages;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Table;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Khách hàng tổ chức';

    protected static ?string $modelLabel = 'Khách hàng';

    protected static ?string $pluralModelLabel = 'Khách hàng tổ chức';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin tổ chức')
                    ->schema([
                        Forms\Components\TextInput::make('organization_name')
                            ->label('Tên tổ chức')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Nhập tên tổ chức'),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255)
                            ->placeholder('Nhập email'),
                        Forms\Components\TextInput::make('tax_code')
                            ->label('Mã số thuế')
                            ->maxLength(20)
                            ->placeholder('Nhập mã số thuế tổ chức'),
                        Forms\Components\Select::make('country')
                            ->label('Quốc gia')
                            ->options([
                                'Việt Nam' => 'Việt Nam',
                                'Nhật Bản' => 'Nhật Bản',
                                'Hàn Quốc' => 'Hàn Quốc',
                                'Trung Quốc' => 'Trung Quốc',
                                'Mỹ' => 'Mỹ',
                                'Khác' => 'Khác',
                            ])
                            ->default('Việt Nam')
                            ->searchable()
                            ->placeholder('-- Vui lòng chọn --'),
                        Forms\Components\TextInput::make('province')
                            ->label('Tỉnh thành')
                            ->maxLength(40)
                            ->placeholder('Nhập tỉnh thành từ 2-40 ký tự'),
                        Forms\Components\TextInput::make('address')
                            ->label('Địa chỉ (Số nhà/thôn/xóm)')
                            ->maxLength(255)
                            ->placeholder('Số nhà/đường/phố/xóm/ấp/thôn'),
                    ])->columns(2),

                Forms\Components\Section::make('Thông tin người đại diện')
                    ->schema([
                        Forms\Components\TextInput::make('representative_name')
                            ->label('Người đại diện')
                            ->maxLength(255)
                            ->placeholder('Nhập họ tên người đại diện'),
                        Forms\Components\TextInput::make('representative_phone')
                            ->label('Số điện thoại người đại diện')
                            ->tel()
                            ->maxLength(20)
                            ->placeholder('Nhập số điện thoại'),
                        Forms\Components\Select::make('gender')
                            ->label('Giới tính')
                            ->options([
                                'male' => 'Nam',
                                'female' => 'Nữ',
                            ])
                            ->default('male'),
                        Forms\Components\DatePicker::make('representative_dob')
                            ->label('Ngày sinh người đại diện')
                            ->displayFormat('d/m/Y')
                            ->placeholder('dd/mm/yyyy'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('organization_name')
                    ->label('Tên tổ chức')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('representative_name')
                    ->label('Người đại diện')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tax_code')
                    ->label('Mã số thuế')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province')
                    ->label('Tỉnh thành')
                    ->sortable(),
                Tables\Columns\TextColumn::make('representative_phone')
                    ->label('SĐT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->label('Quốc gia')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('province')
                    ->label('Tỉnh thành')
                    ->options(fn () => Customer::query()
                        ->whereNotNull('province')
                        ->distinct()
                        ->pluck('province', 'province')
                        ->toArray()
                    )
                    ->searchable(),
                Tables\Filters\Filter::make('tax_code')
                    ->label('Mã số thuế')
                    ->form([
                        Forms\Components\TextInput::make('tax_code')
                            ->label('Mã số thuế')
                            ->placeholder('Nhập mã số thuế'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query->when(
                            $data['tax_code'],
                            fn ($q, $v) => $q->where('tax_code', 'like', "%{$v}%")
                        );
                    }),
                Tables\Filters\Filter::make('representative_phone')
                    ->label('Số điện thoại')
                    ->form([
                        Forms\Components\TextInput::make('representative_phone')
                            ->label('SĐT người đại diện')
                            ->placeholder('Nhập số điện thoại'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query->when(
                            $data['representative_phone'],
                            fn ($q, $v) => $q->where('representative_phone', 'like', "%{$v}%")
                        );
                    }),
                Tables\Filters\SelectFilter::make('country')
                    ->label('Quốc gia')
                    ->options([
                        'Việt Nam' => 'Việt Nam',
                        'Nhật Bản' => 'Nhật Bản',
                        'Hàn Quốc' => 'Hàn Quốc',
                        'Trung Quốc' => 'Trung Quốc',
                        'Mỹ' => 'Mỹ',
                        'Khác' => 'Khác',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                ImportAction::make()
                    ->importer(CustomerImporter::class)
                    ->label('Import'),
                ExportAction::make()
                    ->exporter(CustomerExporter::class)
                    ->label('Export'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
