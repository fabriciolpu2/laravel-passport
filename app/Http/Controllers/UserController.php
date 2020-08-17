<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\BaseController;

class UserController extends Controller
{
    public function details()
    {
        $user = \Auth::user();
        // $sql = "SELECT U.USUA_DS_LOGIN, P.PESS_DS_NOME, PR.COAC_PERFIL_CD, PR.PERF_DS_TITULO
        //     FROM TB_COAC_USUARIO U
        //     JOIN TB_CDCO_PESSOA P ON (P.CDCO_PESSOA_CD = U.CDCO_PESSOA_CD)
        //     JOIN TB_COAC_USUARIO_PERFIL R ON (R.USUA_ID_CODIGO = U.USUA_ID_CODIGO)
        //     JOIN TB_COAC_PERFIL PR ON (PR.COAC_PERFIL_CD = R.COAC_PERFIL_CD)
        //     WHERE U.USUA_ID_CODIGO = $user->usua_id_codigo
        //     AND PR.COAC_PERFIL_CD IN (41, 42)";
        // $data = \DB::connection('oracle')->select($sql);
        //var_dump($data);
        return response()->json([
            'user' => $user,
            'message' => 'Usuario encontrado'
            ], 200);
        //return $this->sendResponse($user, "Registro retornado com sucesso.");
    }
}
