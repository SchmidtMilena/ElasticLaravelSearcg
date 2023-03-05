<?php

declare(strict_types=1);

namespace App\Services\Elasticsearch;

use App\Models\Abstracts\AbstractElasticsearchModel;
use Elastic\Elasticsearch\Client;

class ElasticsearchObserver
{
    public function __construct(private readonly Client $elasticsearchClient)
    {
    }

    public function saved(AbstractElasticsearchModel $elasticModel): void
    {
        $elasticModel->elasticSearchIndex($this->elasticsearchClient);
    }

    public function deleted(AbstractElasticsearchModel $elasticModel): void
    {
        $elasticModel->elasticSearchDelete($this->elasticsearchClient);
    }
}
