<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Pages\Auth\Register;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Wizard;
use Illuminate\Support\Facades\Blade;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
class CustomRegister extends Register
{
    // protected static ?string $navigationIcon = 'heroicon-o-document-text';

    // protected static string $view = 'filament.pages.custom-register';

    protected ?string $maxWidth = '5xl';
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Contact')
                        ->schema([
                            $this->getUsernameFormComponent(),
                            $this->getNameFormComponent(),
                            $this->getEmailFormComponent(),
                        ]),
                    Wizard\Step::make('Profile')
                        ->schema([
                            $this->getFirstNameFormComponent(),
                            $this->getLastNameFormComponent(),
                        ]),
                    Wizard\Step::make('Password')
                        ->schema([
                            $this->getPasswordFormComponent(),
                            $this->getPasswordConfirmationFormComponent(),
                        ]),
                ])->submitAction(new HtmlString(Blade::render(<<<BLADE
                    <x-filament::button
                        type="submit"
                        size="md"
                        wire:submit="register"
                    >
                        Register
                    </x-filament::button>
                    BLADE))),
            ]);
    }
 
    protected function getFormActions(): array
    {
        return [];
    }
 
    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Username'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }

    protected function getFirstNameFormComponent(): Component
    {
        return TextInput::make('firstname')
            ->label(__('First Name'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }

    protected function getLastNameFormComponent(): Component
    {
        return TextInput::make('lastname')
            ->label(__('Last Name'))
            ->required()
            ->maxLength(255);
    }

    protected function getGithubFormComponent(): Component
    {
        return TextInput::make('github')
            ->prefix('https://github.com/')
            ->label(__('GitHub'))
            ->maxLength(255);
    }
 
    protected function getTwitterFormComponent(): Component
    {
        return TextInput::make('twitter')
            ->prefix('https://x.com/')
            ->label(__('Twitter (X)'))
            ->maxLength(255);
    }
}
