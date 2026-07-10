<?php

namespace App\Http\Controllers\Concerns;

use App\Data\LoveThaiHome\PropertyData;
use App\Services\LoveThaiHome\Exceptions\LoveThaiHomeApiException;
use App\Services\LoveThaiHome\LoveThaiHomeService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

trait LoadsRecommendedProperties
{
    /**
     * @return Collection<int, PropertyData>
     */
    private function loadRecommendedProperties(LoveThaiHomeService $api, int $perPage = 24): Collection
    {
        try {
            $response = $api->properties([
                'is_recommend' => 'Y',
                'per_page' => $perPage,
                'page' => 1,
            ]);

            return collect($response->data)
                ->map(fn (array $item) => PropertyData::fromArray($item))
                ->filter(fn (PropertyData $property) => $property->isRecommend)
                ->values();
        } catch (LoveThaiHomeApiException $exception) {
            Log::warning('Failed to load recommended properties from API.', [
                'message' => $exception->getMessage(),
                'status' => $exception->statusCode,
            ]);

            return collect();
        }
    }
}
