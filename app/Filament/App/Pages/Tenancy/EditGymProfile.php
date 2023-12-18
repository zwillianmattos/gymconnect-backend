<?php

namespace App\Filament\App\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Section;

class EditGymProfile extends EditTenantProfile
{
      public static function getLabel(): string
      {
            return 'Gym profile';
      }

      public function form(Form $form): Form
      {
            return $form
                  ->schema([
                        Section::make('Informações')
                              ->schema([
                                    TextInput::make('name')
                                          ->label('Nome')
                                          ->placeholder('Digite o nome')
                                          ->required(),
                                    TextInput::make('slug')->unique()->readOnly()->disabled(),
                                    TextInput::make('cnpj')
                                          ->label('CNPJ')
                                          ->placeholder('Digite o CNPJ')
                                          ->required(),
                                    TextInput::make('email')
                                          ->label('E-mail')
                                          ->placeholder('Digite o e-mail')
                                          ->email()
                                          ->required(),
                                    TextInput::make('phone')
                                          ->label('Telefone')
                                          ->placeholder('Digite o telefone')
                                          ->required(),

                                    TextInput::make('address')
                                          ->label('Endereço')
                                          ->placeholder('Digite o endereço')
                                          ->required(),

                                    Textarea::make('description')
                                          ->label('Descrição')
                                          ->placeholder('Digite uma breve descrição')
                                          ->required(),

                              ]),
                        Section::make('Personalização')
                              ->schema([
                                    FileUpload::make('Logo')
                                          ->image()
                                          ->imageEditor()
                                          ->imageEditorViewportWidth('512')
                                          ->imageEditorViewportHeight('512'),
                                    FileUpload::make('Banner')
                                          ->image()
                                          ->imageEditor()
                                          ->imagePreviewHeight('250')
                                          ->imageCropAspectRatio('16:9')
                                          ->imageEditorViewportWidth('1920')
                                          ->imageEditorViewportHeight('1080'),
                              ]),
                  ]);
      }
}
