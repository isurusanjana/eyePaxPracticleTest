<?php

namespace App\Http\Controllers;
use App\Models\sales_representatives;

use Illuminate\Http\Request;

class SaleRepresentativesController extends Controller
{
    /*
    * @desc : to show the sales representatives list 
    * @path : GET /salesteam
    */
    public function showTeams() {
        // $salesTeam = new sales_representatives();
        $salesTeam = sales_representatives::where('is_deleted','N')->get();
        // var_dump($salesTeam);die;
        return view('salesteam/show_team', ['salesTeam' => $salesTeam]);
    }
    
    /*
    * @desc : to show the sales representatives list 
    * @path : GET /editteam/{team member id}
    * @param: {number} team member auto incremented id
    */
    public function editTeamMember($id) {
        $teamMember = sales_representatives::where('id',$id)->get();
        return view('salesteam/edit_team', ['teamMember' => $teamMember]);
    }
}
