<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Abstracts\AbstractElasticsearchModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Invoice extends AbstractElasticsearchModel
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    public function toElasticsearchDocumentArray(): array
    {
        return [];
    }
}
