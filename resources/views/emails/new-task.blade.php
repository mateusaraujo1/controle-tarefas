@component('mail::message')
# {{ $task }}

Data limite de conclusão: {{ $limit_date_conclusion }}

@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
