<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;          // ← Adicione isso
use Filament\Panel;                                 // ← Adicione isso também
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser  // ← Adicione implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Autoriza acesso ao Filament panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Para teste rápido: permite QUALQUER usuário logado acessar (use temporariamente)
        return true;

        // Opção segura para produção (ex: só usuários com email específico ou admin flag):
        // return $this->email === 'seu@email.com';  // ou $this->is_admin === true; se tiver campo is_admin
    }
}