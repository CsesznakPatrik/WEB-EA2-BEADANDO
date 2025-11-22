<div class="container" style="max-width: 600px; margin: 40px auto;">
    <div style="background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; margin-bottom: 20px;">Beérkezett üzenetek</h2>

        @foreach($messages as $message)
            <div
                style="border: 1px solid #ddd; padding: 15px; border-radius: 6px; margin-bottom: 15px; background: #f7f7f7;">
                <p style="font-size: 16px; margin-bottom: 8px;">
                    {{ $message->message }}
                </p>
                <small style="color: #777; font-size: 13px;">
                    {{ $message->created_at->format('Y-m-d H:i') }}
                </small>
            </div>
        @endforeach

        <p style="margin-top: 20px; text-align: center;">
            <a href="{{ route('home') }}"
                style="display: inline-block; padding: 10px 20px; background: #1273eb; color: #fff; text-decoration: none; border-radius: 5px;">
                Vissza a főoldalra
            </a>
        </p>
    </div>
</div>