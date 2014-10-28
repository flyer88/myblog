@if (!empty($comment))
{{ $comment->name}}
 {{ $comment->title}}
 {{ $comment->content}}
 @else
 {{ 'no comment'}}
@endif
