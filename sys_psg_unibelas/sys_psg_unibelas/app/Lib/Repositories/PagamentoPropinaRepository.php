<?php

namespace App\Lib\Repositories;

use Exception;
use App\Models\{
    Pagamento,
    PagamentoDocumento,
    PagamentoPropina,
    User,
    UserEnterprise
};
use App\Lib\Traits\{
    UserTrait,
    EnterpriseTrait
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PagamentoPropinaRepository
{

    public function getAllPagamentos()
    {

        $results = DB::select("SELECT p.id, p.valor_pagar, p.created_at, u.nome_completo, pd.meses_pago FROM
        pagamentos p
        INNER JOIN users u ON u.id = p.user_id
        INNER JOIN pagamento_propinas pd ON pd.pagamento_id = p.id");

        return $results;
    }

    #retorna todos usuários de empresa
    // public function getAllEnterpriseUsers()
    // {

    //     $users = DB::select("SELECT ue.user_id, u.fullname, u.email, u.password, e.description AS enterprise, p.description AS permission
    //     FROM user_enterprises ue
    //     INNER JOIN users u ON u.id = ue.user_id
    //     INNER JOIN permissions p ON p.id = u.permission_id
    //     INNER JOIN enterprises e ON e.id = ue.enterprise_id");

    //     return $users;
    // }

    #retorna todos estabaelecimentos por empresa
    // public function getAllUsersOfCurrentEnterprise()
    // {
    //     $users = User::with([
    //         "enterprise"
    //     ])->whereHas("enterprise", function ($query) {
    //         $query->where("enterprise_id", "=", "{$this->getCurrentEnterpriseId()}");
    //     })->get()
    //         ->makeVisible(["password"]);

    //     return $users;
    // }

    #pega usuário de empresa pelo Id
    // public function getUserEnterpriseById(int $id)
    // {
    //     $user = User::whereId($id)
    //         ->with([
    //             "enterprise"
    //         ])->firstOrFail()
    //         ->makeVisible(["password"]);

    //     return $user;
    // }

    #insere um novo usuário empresa
    public function createPagPropina(Request $request)
    {
        DB::beginTransaction();
        try {

            $pagamento = Pagamento::create([
                "valor_pagar"      => $request->valor_pagar * $request->qtdmes,
                "user_id"         => Auth::user()->id
            ]);

            PagamentoPropina::create([
                "pagamento_id"       => $pagamento->id,
                "config_propina_id" => $request->config_propina_id,
                "mes_id" => $request->mes,
                "meses_pago" => $request->meses
            ]);

            DB::commit();

            // UserRegistrationMailerJob::dispatch($user);

            return $pagamento;
        } catch (Exception $error) {
            DB::rollBack();
            return response()->json([
                "status" => 500,
                "message" => $error->getMessage()
            ], 500);
        }
    }

    #actualiza usuário empresa
    // public function updateUserEnterprise(Request $request, int $id)
    // {
    //     DB::beginTransaction();
    //     try {
    //         $user = User::findOrFail($id);
    //         $user->update(
    //             $request->only([
    //                 "fullname",
    //                 "email",
    //                 "username",
    //                 "password"
    //             ])
    //         );
    //         if ($request->has("enterprise_id")) {
    //             UserEnterprise::whereUserId($id)
    //                 ->first()
    //                 ->update([
    //                     "enterprise_id" => $request->enterprise_id
    //                 ]);
    //         }
    //         DB::commit();
    //         return $user;
    //     } catch (Exception $error) {
    //         DB::rollBack();
    //         return response()->json([
    //             "status" => 500,
    //             "message" => $error->getMessage()
    //         ], 500);
    //     }
    // }

    #elimina usuário empresa
    public function deleteUserEnterprise(int $id)
    {
        $user = User::findOrFail($id);
        return $user->delete();
    }

}
