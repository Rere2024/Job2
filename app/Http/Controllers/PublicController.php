<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
         return view('index');
     }


    public function about()
    {
         return view('about');
     }

     public function category()
     {
          return view('category');
      }

      public function contact()
      {
           return view('contact');
       }

       public function jobDetails()
       {
            return view('job_Details');
        }

        public function jobList()
        {
             return view('job-List');
         }

         public function testimonial()
         {
              return view('testimonial');
          }


          

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    // public function show(string $id)
    {
        return view('job-detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }




}
