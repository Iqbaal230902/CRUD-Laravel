<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $label = 'Data Murid';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Murid')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('fullname')
                                    ->label('Nama Lengkap')
                                    ->required()
                                    ->maxLength(150),
                                Forms\Components\TextInput::make('nickname')
                                    ->label('Nama Panggilan')
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('gender')
                                    ->label('Jenis Kelamin')
                                    ->required()
                                    ->maxLength(20),
                                Forms\Components\DatePicker::make('dob')
                                    ->label('Tanggal Lahir')
                                    ->required(),
                                Forms\Components\TextInput::make('pob')
                                    ->label('Tempat Lahir')
                                    ->required()
                                    ->maxLength(250),
                                Forms\Components\TextInput::make('religion')
                                    ->label('Agama')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('citizen')
                                    ->label('Kewarganegaraan')
                                    ->required()
                                    ->maxLength(60),
                                Forms\Components\TextInput::make('status_child')
                                    ->label('Status Anak')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('language')
                                    ->label('Bahasa yang Dikuasai')
                                    ->required()
                                    ->maxLength(70),
                            ]),
                        Forms\Components\Textarea::make('address')
                            ->label('Alamat')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Data Keluarga')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('father_name')
                                    ->label('Nama Ayah')
                                    ->required()
                                    ->maxLength(150),
                                Forms\Components\TextInput::make('mother_name')
                                    ->label('Nama Ibu')
                                    ->required()
                                    ->maxLength(150),
                                Forms\Components\TextInput::make('father_religion')
                                    ->label('Agama Ayah')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('mother_religion')
                                    ->label('Agama Ibu')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('father_citizen')
                                    ->label('Kewarganegaraan Ayah')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('mother_citizen')
                                    ->label('Kewarganegaraan Ibu')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('father_last_education')
                                    ->label('Pendidikan Terakhir Ayah')
                                    ->required()
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('mother_last_education')
                                    ->label('Pendidikan Terakhir Ibu')
                                    ->required()
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('father_job')
                                    ->label('Pekerjaan Ayah')
                                    ->required()
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('mother_job')
                                    ->label('Pekerjaan Ibu')
                                    ->required()
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('father_phone')
                                    ->label('No. HP Ayah')
                                    ->tel()
                                    ->required()
                                    ->maxLength(20),
                                Forms\Components\TextInput::make('mother_phone')
                                    ->label('No. HP Ibu')
                                    ->tel()
                                    ->required()
                                    ->maxLength(20),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Textarea::make('father_address')
                                    ->label('Alamat Ayah')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('mother_address')
                                    ->label('Alamat Ibu')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('father_job_address')
                                    ->label('Alamat Kantor Ayah')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('mother_job_address')
                                    ->label('Alamat Kantor Ibu')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                    ]),


                Forms\Components\Section::make('Data Wali')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('guardian_name')
                                    ->label('Nama Wali')
                                    ->maxLength(150),
                                Forms\Components\TextInput::make('guardian_relation')
                                    ->label('Hubungan dengan Wali')
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('guardian_last_education')
                                    ->label('Pendidikan Terakhir Wali')
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('guardian_job')
                                    ->label('Pekerjaan Wali')
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('guardian_phone')
                                    ->label('No. HP Wali')
                                    ->tel()
                                    ->maxLength(20),
                            ]),
                        Forms\Components\Textarea::make('guardian_address')
                            ->label('Alamat Wali')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Data Kesehatan')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('blood_type')
                                    ->label('Golongan Darah')
                                    ->required()
                                    ->maxLength(10),
                                Forms\Components\TextInput::make('height')
                                    ->label('Tinggi Badan (cm)')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('weight')
                                    ->label('Berat Badan (kg)')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('disease')
                                    ->label('Riwayat Penyakit')
                                    ->maxLength(200),
                                Forms\Components\TextInput::make('imunization')
                                    ->label('Riwayat Imunisasi')
                                    ->maxLength(200),
                            ]),
                    ]),

                Forms\Components\Section::make('Data Lainnya')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('child_order')
                                    ->label('Anak Ke-')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('sibling_blood')
                                    ->label('Saudara Kandung')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('sibling_step')
                                    ->label('Saudara Tiri')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('sibling_adoption')
                                    ->label('Saudara Angkat')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('ideal_job')
                                    ->label('Cita-cita')
                                    ->maxLength(200),
                            ]),
                    ]),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->query(fn() => Auth::user()->roles->contains('name', 'super_admin') ? Student::query() : Student::query()->where('user_id', Auth::id()))
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('accepted_at')
                    ->label('Tanggal Diterima')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view_detail')
                    ->icon('heroicon-o-eye')
                    ->label('Detail')
                    ->modalHeading('Detail Pendaftar')
                    ->form(fn($record) => [
                        Forms\Components\Section::make('Data Murid')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('fullname')->label('Nama Lengkap')->readOnly()->default($record->fullname),
                                        Forms\Components\TextInput::make('nickname')->label('Nama Panggilan')->readOnly()->default($record->nickname),
                                        Forms\Components\TextInput::make('gender')->label('Jenis Kelamin')->readOnly()->default($record->gender),
                                        Forms\Components\DatePicker::make('dob')->label('Tanggal Lahir')->readOnly()->default($record->dob),
                                        Forms\Components\TextInput::make('pob')->label('Tempat Lahir')->readOnly()->default($record->pob),
                                        Forms\Components\TextInput::make('religion')->label('Agama')->readOnly()->default($record->religion),
                                        Forms\Components\TextInput::make('citizen')->label('Kewarganegaraan')->readOnly()->default($record->citizen),
                                        Forms\Components\TextInput::make('status_child')->label('Status Anak')->readOnly()->default($record->status_child),
                                        Forms\Components\TextInput::make('language')->label('Bahasa yang Dikuasai')->readOnly()->default($record->language),
                                    ]),
                                Forms\Components\Textarea::make('address')->label('Alamat')->readOnly()->default($record->address),
                            ]),

                        Forms\Components\Section::make('Data Keluarga')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('father_name')->label('Nama Ayah')->readOnly()->default($record->father_name),
                                        Forms\Components\TextInput::make('mother_name')->label('Nama Ibu')->readOnly()->default($record->mother_name),
                                        Forms\Components\TextInput::make('father_religion')->label('Agama Ayah')->readOnly()->default($record->father_religion),
                                        Forms\Components\TextInput::make('mother_religion')->label('Agama Ibu')->readOnly()->default($record->mother_religion),
                                        Forms\Components\TextInput::make('father_citizen')->label('Kewarganegaraan Ayah')->readOnly()->default($record->father_citizen),
                                        Forms\Components\TextInput::make('mother_citizen')->label('Kewarganegaraan Ibu')->readOnly()->default($record->mother_citizen),
                                        Forms\Components\TextInput::make('father_last_education')->label('Pendidikan Terakhir Ayah')->readOnly()->default($record->father_last_education),
                                        Forms\Components\TextInput::make('mother_last_education')->label('Pendidikan Terakhir Ibu')->readOnly()->default($record->mother_last_education),
                                        Forms\Components\TextInput::make('father_job')->label('Pekerjaan Ayah')->readOnly()->default($record->father_job),
                                        Forms\Components\TextInput::make('mother_job')->label('Pekerjaan Ibu')->readOnly()->default($record->mother_job),
                                        Forms\Components\TextInput::make('father_phone')->label('No. HP Ayah')->readOnly()->default($record->father_phone),
                                        Forms\Components\TextInput::make('mother_phone')->label('No. HP Ibu')->readOnly()->default($record->mother_phone),
                                    ]),
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\Textarea::make('father_address')->label('Alamat Ayah')->readOnly()->default($record->father_address),
                                        Forms\Components\Textarea::make('mother_address')->label('Alamat Ibu')->readOnly()->default($record->mother_address),
                                        Forms\Components\Textarea::make('father_job_address')->label('Alamat Kantor Ayah')->readOnly()->default($record->father_job_address),
                                        Forms\Components\Textarea::make('mother_job_address')->label('Alamat Kantor Ibu')->readOnly()->default($record->mother_job_address),
                                    ]),
                            ]),

                        Forms\Components\Section::make('Data Wali')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('guardian_name')->label('Nama Wali')->readOnly()->default($record->guardian_name),
                                        Forms\Components\TextInput::make('guardian_relation')->label('Hubungan dengan Wali')->readOnly()->default($record->guardian_relation),
                                        Forms\Components\TextInput::make('guardian_last_education')->label('Pendidikan Terakhir Wali')->readOnly()->default($record->guardian_last_education),
                                        Forms\Components\TextInput::make('guardian_job')->label('Pekerjaan Wali')->readOnly()->default($record->guardian_job),
                                        Forms\Components\TextInput::make('guardian_phone')->label('No. HP Wali')->readOnly()->default($record->guardian_phone),
                                    ]),
                                Forms\Components\Textarea::make('guardian_address')->label('Alamat Wali')->readOnly()->default($record->guardian_address),
                            ]),

                        Forms\Components\Section::make('Data Kesehatan')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('blood_type')->label('Golongan Darah')->readOnly()->default($record->blood_type),
                                        Forms\Components\TextInput::make('height')->label('Tinggi Badan (cm)')->readOnly()->default($record->height),
                                        Forms\Components\TextInput::make('weight')->label('Berat Badan (kg)')->readOnly()->default($record->weight),
                                        Forms\Components\TextInput::make('disease')->label('Riwayat Penyakit')->readOnly()->default($record->disease),
                                        Forms\Components\TextInput::make('imunization')->label('Riwayat Imunisasi')->readOnly()->default($record->imunization),
                                    ]),
                            ]),

                        Forms\Components\Section::make('Data Lainnya')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('child_order')->label('Anak Ke-')->readOnly()->default($record->child_order),
                                        Forms\Components\TextInput::make('sibling_blood')->label('Saudara Kandung')->readOnly()->default($record->sibling_blood),
                                        Forms\Components\TextInput::make('sibling_step')->label('Saudara Tiri')->readOnly()->default($record->sibling_step),
                                        Forms\Components\TextInput::make('sibling_adoption')->label('Saudara Angkat')->readOnly()->default($record->sibling_adoption),
                                        Forms\Components\TextInput::make('ideal_job')->label('Cita-cita')->readOnly()->default($record->ideal_job),
                                    ]),
                            ]),
                    ])
                    ->action(fn($record) => $record),

                Tables\Actions\EditAction::make()->label('Edit')
                    ->icon('heroicon-o-pencil')
                    ->visible(fn() => Auth::user()->roles->contains('name', 'super_admin') ? false : true),

                Tables\Actions\Action::make('change_status')
                    ->label('Terima Siswa')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->action(fn($record) => $record->update([
                        'status' => 'Diterima',
                        'accepted_at' => now(),
                    ]))
                    ->visible(fn() => Auth::user()->roles->contains('name', 'super_admin') ? true : false),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus'),
                ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
