@foreach ($files as $file)
    <div>
        <a href="{{ url('mails', [preg_replace('/.+email-previews\//', '', $file)]) }}">{{ $file }}</a>
    </div>
@endforeach