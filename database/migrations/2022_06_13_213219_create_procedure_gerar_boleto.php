<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedureGerarBoleto extends Migration
{
    public function up()
    {
        $procedure = "CREATE PROCEDURE [dbo].[GERAR_BOLETO]
            (
                @VEICULO_ID int
            )
            AS
            --DECLARE @VEICULO_ID int = 1
            select distinct

                'Valores referentes ao veículo placa ('+ v.placa +'), modelo ('+ v.modelo +') com ano de fabricação ' + v.ano_fab + '.'  as a,
                v.placa,
                p.nome,
                s.titulo,
                s.valor as valorServico,
                os.valor_total_material,
                SUM(s.valor + os.valor_total_material) valorTotal

            from veiculo v
            join pessoa p on p.id = v.id_pessoa
            join ordem_servico os on os.id_veiculo = v.id
            join servico s on s.id = os.id_servico

            where v.id = @VEICULO_ID
            and os.status_pagamento = 0

            group by v.placa, v.modelo, v.ano_fab, p.nome, s.titulo, s.valor, os.valor_total_material";

        \DB::unprepared($procedure);
    }

    public function down()
    {
        //
    }
}
