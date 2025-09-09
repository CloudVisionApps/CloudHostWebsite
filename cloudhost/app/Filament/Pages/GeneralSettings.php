<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
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

                Section::make('Social Media Networks')
                    ->description('Configure your social media profiles dynamically')
                    ->schema([
                        Repeater::make('social_networks')
                            ->label('Social Networks')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Network Name')
                                    ->required()
                                    ->placeholder('e.g., Facebook, Instagram, TikTok'),
                                TextInput::make('url')
                                    ->label('Profile URL')
                                    ->url()
                                    ->required()
                                    ->placeholder('https://facebook.com/yourpage'),
                                Select::make('icon')
                                    ->label('Icon Class')
                                    ->options([
                                        'fab fa-facebook-f' => 'Facebook',
                                        'fab fa-twitter' => 'Twitter',
                                        'fab fa-linkedin-in' => 'LinkedIn',
                                        'fab fa-instagram' => 'Instagram',
                                        'fab fa-youtube' => 'YouTube',
                                        'fab fa-tiktok' => 'TikTok',
                                        'fab fa-discord' => 'Discord',
                                        'fab fa-github' => 'GitHub',
                                        'fab fa-telegram' => 'Telegram',
                                        'fab fa-whatsapp' => 'WhatsApp',
                                        'fab fa-snapchat' => 'Snapchat',
                                        'fab fa-pinterest' => 'Pinterest',
                                        'fab fa-reddit' => 'Reddit',
                                        'fab fa-twitch' => 'Twitch',
                                        'fab fa-vimeo' => 'Vimeo',
                                    ])
                                    ->required()
                                    ->searchable(),
                                TextInput::make('color')
                                    ->label('Brand Color (Hex)')
                                    ->placeholder('#1877F2')
                                    ->helperText('Optional: Custom brand color for this network'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Social Network')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null),
                    ]),

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
