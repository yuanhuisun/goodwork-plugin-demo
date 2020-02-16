<?php

use Goodwork\MailPreview\MailPreviewController;
use Illuminate\Support\Facades\Route;

Route::get('mails/list', [MailPreviewController::class, 'index']);

Route::get('mails/{file}', [MailPreviewController::class, 'show']);