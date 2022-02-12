@php
    $form_mode = !isset($form_mode) ? 'default' : $form_mode;
    switch ($form_mode) {
        case "delete":
            $action=route('equipamento.destroy', ['equipamento' => $eqp->id]);
            $bot_label="Deletar equipamento";
            break;
        case "edit":
            $action=route('equipamento.update', ['equipamento' => $eqp]); 
            $bot_label="Atualizar equipamento";
            break;
        default:
            $action=route("equipamento.store");
            $bot_label="Salvar equipamento";
            break;
    }
@endphp

<form action={{$action}} method="post">
    @csrf
    @if ($form_mode == "delete")
        @method('DELETE')
    @endif
    @if ($form_mode == "edit")
        @method('PUT')
    @endif
   
    <div>
        <label for="tipo">Tipo Equipamento</label>
        <input type="text" id="tipo" name="tipo">
    </div>
    <div>
        <label for="modelo">Modelo Equipamento</label>
        <input type="text" id="modelo" name="modelo">
    </div>
    <div>
        <label for="fabricante">Fabricante Equipamento</label>
        <input type="text" id="fabricante" name="fabricante">
    </div>