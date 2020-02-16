<?php

namespace Goodwork\MailPreview;

use Illuminate\Support\Facades\File;

class MailPreviewController
{
    public function index()
    {
        $files = File::allFiles(storage_path('email-previews'));

        return view('mail-preview::list', ['files' => $files]);
    }

    public function show($name)
    {
        return view('mail-preview-html::' . str_replace('.html', '', $name));
    }
}
