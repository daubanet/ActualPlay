<?php

use App\Http\Controllers\Api\V1\Admin\CampaignApiController;
use App\Http\Controllers\Api\V1\Admin\GameApiController;
use App\Http\Controllers\Api\V1\Admin\PlayerApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Campaign
    Route::post('campaigns/media', [CampaignApiController::class, 'storeMedia'])->name('campaigns.store_media');
    Route::apiResource('campaigns', CampaignApiController::class);

    // Game
    Route::apiResource('games', GameApiController::class);

    // Player
    Route::apiResource('players', PlayerApiController::class);
});
