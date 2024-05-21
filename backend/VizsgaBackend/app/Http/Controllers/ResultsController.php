<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Results;

class ResultsController extends Controller
{
    public function getResults() {
        $results = Results::all();
        return response()->json(["data"=>"results",200]);
    }
    
    public function addResult(Request $request){
        $input = $request->all();
        $results = new Results;
        $results-> golfTournament = $input["golfTournament"];
        $results-> playerId = $input["playerId"];
        $results-> round1 = $input["round1"];
        $results-> round2 = $input["round2"];
        $results-> round3 = $input["round3"];
        $results-> round4 = $input["round4"];
        $results-> totalRounds = $input["totalRounds"];
        $results-> save();
        return response()->json(["data"=>"results",200]);
    }

    public function getResult($id) {
        $result = Results::find($id);
        return response()->json(["data"=>"result",200]);
    }

    public function updateResult(Request $request,$id){
        $input = $request->all();
        $results = Results::find($id);
        $results-> golfTournament = $input["golfTournament"];
        $results-> playerId = $input["playerId"];
        $results-> round1 = $input["round1"];
        $results-> round2 = $input["round2"];
        $results-> round3 = $input["round3"];
        $results-> round4 = $input["round4"];
        $results-> totalRounds = $input["totalRounds"];
        $results-> save();
        return response()->json(["data"=>"results",200]);
    }

    public function deleteResult($id) {
        $result = Results::find($id);
        $result->delete();
        return response()->json(["data"=>"result",200]);
    }
}
