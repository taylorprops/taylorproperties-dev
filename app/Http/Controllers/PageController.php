<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use App\TblAgent;
use App\Listing;
use App\TPLocation;

use Mail;
use App\Mail\ContactEmail;
use Laracasts\Flash\Flash;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    public function about()
    {
        //
        return view('about.about');
    }

    public function team()
    {
        //
        return view('about.team');
    }
    public function partners()
    {
        //
        return view('about.partners');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    public function offices()
    {
        $locations = TPLocation::orderBy('name')->get();
        return view('about.offices')->with('locations',$locations);
    }

    public function allAgents()
    {
        $agents = Agent::where('company','Taylor Properties')
        ->orderBy('designations','desc')
        ->paginate(30);

        return view('agents')->with('agents',$agents);
    }

    public function agentSearch(Request $request)
    {
        $query = $request->input('q');
        $agents = Agent::where('fullname','LIKE','%'.$query.'%')
            ->orWhere('cell','LIKE','%'.$query.'%')
            ->orWhere('bio','LIKE','%'.$query.'%')
            ->orWhere('designations','LIKE','%'.$query.'%')
            ->paginate(12);

        // append search query parameter to search results
        $pagination = $agents->appends(array('q' => $query));

        if(count($agents) > 0)
        {
            return view('agent_search')->with(['agents'=>$agents,'query'=>$query]);
        }
        else 
        {
            flash('No results found for "'.$query.'". Try another search.')->error();
            return view ('agents')->with('agents',$agents);
        }
    }

    public function showAgent($id)
    {
        // find agent
        $agent = Agent::find($id);
        // Get agent id
        $agent_id = $agent->agent_id;
        //Get mris_id by agent_id from different table
        $mris_id = TblAgent::find($agent_id)->mris_id_tp_md;

        if ($mris_id == null || $mris_id == '')
        {
            $mris_id = TblAgent::find($agent_id)->mris_id_aap;
            if ($mris_id == null || $mris_id == '')
            {
                $mris_id = TblAgent::find($agent_id)->mris_id_tp_va;
            }
        }

        //Get listings by mris_id
        $listings = Listing::where('ListAgentMlsId', $mris_id)->get();

        return view('agent_profile')->with(['agent'=>$agent,'listings'=>$listings]);
    }

    public function emailAgent(Request $request,$id)
    {
        $agent = Agent::find($id);
        $agent_email = $agent->email;

        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['phone'] = $request->get('phone');
        $contact['body'] = $request->get('body');

        // Mail delivery logic goes here
        //Mail::to('gary@taylorprops.com')->send(new ContactEmail($contact));
        Mail::send(new ContactEmail($contact));

        flash('Thank you! Your message has been sent!')->success();

        return redirect()->back();
        //return view('agents');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
