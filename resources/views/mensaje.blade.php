@component('mail::message')
{{-- # {{ $form->nombre}} le ha mandado un mensaje.

El mensaje era:<br>
Nombre: {{$form->nombre}}
Email: {{$form->email}}
Número: {{$form->phone}}
Asunto: {{$form->mensaje}}

Gracias,<br> --}}
<style>
    .p{
        font-weight: bold;
        font-size: 20px;
        color: #ffffff;
        background-color: #343434;
        border-radius: 10px;
        padding-left: 10px;
        padding-right: 10px;
    }
    table{
        background-color: #E0752F;
        border-radius: 10px;
    }
    h1{
        color: #ffffff;
    }
    p{
        color: #ffffff;
    }
    td {
        padding: 5px;
    }
    span{
        color: #ffffff;
    }
</style>
<table> 
    <tr> 
      <td>
        <p class="p">{{ $form->nombre}} le ha mandado un mensaje.</h1>
        <p>Nombre: {{$form->nombre}}</p>
        <p>Email: {{$form->email}}</p>
        <p>Número: {{$form->phone}}</p>
        <p>Asunto: {{$form->mensaje}}</p>
        <span>Gracias.</span>
      </td>
    </tr>
  </table>
{{ config('app.name') }}
@endcomponent
