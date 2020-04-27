<?php

return [
    "apple" => [
        "redirect" => env("APPLE_REDIRECT_URI"),
        "key_id" => env("APPLE_KEY_ID"),
        "team_id" => env("APPLE_TEAM_ID"),
        "auth_key" => env("APPLE_AUTH_KEY"),
        "client_id" => env("APPLE_CLIENT_ID"),
        "client_secret" => env("APPLE_CLIENT_SECRET"),
        "client_secret_updated_at" => env("APPLE_CLIENT_SECRET_UPDATED_AT"),
        "refresh_token_interval_days" => env("APPLE_REFRESH_TOKEN_INTERVAL_DAYS"),
    ],
];
