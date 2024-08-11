<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
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
            return view('job-Details');
        }

        public function jobList()
        {
             return view('job-List');
         }

         public function testimonial()
         {
              return view('testimonial');
          }





}
