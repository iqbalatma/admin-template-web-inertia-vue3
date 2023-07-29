<?php

use Illuminate\Support\Facades\View;
/**
 * Use to share data to blade
 *
 * @param array $data
 * @return void
 */
function viewShare(array $data): void
{
    foreach ($data as $key => $value) {
        View::share($key, $value);
    }
}
