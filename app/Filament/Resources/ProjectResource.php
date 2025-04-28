<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?string $navigationLabel = 'Project';

    protected static ?string $navigationGroup = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('')
                    ->columns(1)
                    ->schema([

                        Forms\Components\Select::make('project_category_id')
                            ->label('Category')
                            ->options(ProjectCategory::all()->pluck('name', 'id'))
                            ->required(),

                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Title'),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->label('Description'),

                        Forms\Components\FileUpload::make('image')
                            ->imageEditor()
                            ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                            ->moveFiles()
                            ->required()
                            ->directory('projects')
                            ->label('Image'),

                        Forms\Components\TextInput::make('goal_amount')
                            ->numeric()
                            ->required()
                            ->label('Goal Amount'),

                        Forms\Components\TextInput::make('current_amount')
                            ->numeric()
                            ->default(0)
                            ->label('Current Amount'),

                        Forms\Components\DatePicker::make('deadline_date')
                            ->native(false)
                            ->required()
                            ->label('Deadline Date'),
                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('index')
                    ->label('#')
                    ->rowIndex(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('projectCategory.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('goal_amount')
                    ->label('Goal Amount')
                    ->sortable(),

                Tables\Columns\TextColumn::make('current_amount')
                    ->label('Current Amount')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->hiddenLabel()
                    ->icon('heroicon-s-eye'),

                Tables\Actions\EditAction::make()
                    ->hiddenLabel()
                    ->icon('heroicon-s-pencil'),

                Tables\Actions\DeleteAction::make()
                    ->hiddenLabel()
                    ->icon('heroicon-s-trash')
                    ->requiresConfirmation()
                    ->action(function (ProjectCategory $record) {
                        $record->delete();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
