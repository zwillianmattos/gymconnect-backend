<?php

namespace App\Filament\App\Pages\Tenancy;

use App\Models\Gym;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Select;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Support\Collection;

class RegisterGym extends RegisterTenant
{

      public static function getLabel(): string
      {
            return 'Register Gym';
      }

      public function form(Form $form): Form
      {
            return $form
                  ->schema([
                        TextInput::make('name'),
                        TextInput::make('slug'),
                  ]);
      }

      protected function handleRegistration(array $data): Gym
      {
            $gym = Gym::create($data);
            $gym->members()->attach(auth()->user());

            return $gym;
      }
}
