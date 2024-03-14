<h3> admin - fornecedores - index </h3>

{{-- COMENTÁRIO QUE SERÁ DESCATARDO PELO INTERPRETADOR DO BLADE --}}


@dd($fornecedores);

@if (count($fornecedores) > 0 && count($fornecedores) <10)
    <h3> Existem alguns fornecedores cadastrados </h3>

    @elseif (count($fornecedores) >10)
    <h3> Existem vários fornecedores cadastrados </h3>

    @else
    <h3> Não existem fornecedores cadastrados </h3>
@endif
