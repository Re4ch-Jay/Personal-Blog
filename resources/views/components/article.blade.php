@props(['post'])
<div>
    <div class="prose prose-slate">
        <p>{{ Illuminate\Mail\Markdown::parse($post->markdown) }}</p>
    </div>
</div>