<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class GeneralSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = \App\Settings\GeneralSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Company Information')
                    ->description('Basic company information and contact details')
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->required(),
                        TextInput::make('tagline')
                            ->label('Tagline')
                            ->required(),
                        TextInput::make('phone')
                            ->label('Phone Number')
                            ->tel()
                            ->required(),
                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->required(),
                        TextInput::make('address')
                            ->label('Address')
                            ->required(),
                        TextInput::make('website')
                            ->label('Website URL')
                            ->url()
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Social Media Links')
                    ->description('Social media profile URLs')
                    ->schema([
                        TextInput::make('facebook')
                            ->label('Facebook URL')
                            ->url(),
                        TextInput::make('twitter')
                            ->label('Twitter URL')
                            ->url(),
                        TextInput::make('linkedin')
                            ->label('LinkedIn URL')
                            ->url(),
                        TextInput::make('instagram')
                            ->label('Instagram URL')
                            ->url(),
                        TextInput::make('youtube')
                            ->label('YouTube URL')
                            ->url(),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->description('Support and contact details')
                    ->schema([
                        TextInput::make('support_hours')
                            ->label('Support Hours')
                            ->required(),
                        TextInput::make('response_time')
                            ->label('Response Time')
                            ->required(),
                        TextInput::make('emergency_phone')
                            ->label('Emergency Phone')
                            ->tel()
                            ->required(),
                    ])
                    ->columns(1),

                Section::make('Company Features')
                    ->description('Key company statistics and features')
                    ->schema([
                        TextInput::make('uptime')
                            ->label('Uptime Guarantee')
                            ->required(),
                        TextInput::make('customers')
                            ->label('Number of Customers')
                            ->required(),
                        TextInput::make('experience')
                            ->label('Years of Experience')
                            ->required(),
                        TextInput::make('support')
                            ->label('Support Availability')
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('SEO Settings')
                    ->description('Search engine optimization settings')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('SEO Title')
                            ->required(),
                        Textarea::make('seo_description')
                            ->label('SEO Description')
                            ->rows(3)
                            ->required(),
                        Textarea::make('seo_keywords')
                            ->label('SEO Keywords')
                            ->rows(2)
                            ->required(),
                        TextInput::make('seo_author')
                            ->label('SEO Author')
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }
}
