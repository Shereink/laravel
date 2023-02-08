<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index(){

      

            $postes=post::paginate(3);
            // dd($postes);

            

   return view('posts.table',['postes' => $postes]
    );


    }


    public function show ( $postid){
         
    //    $post=post::where('id',$postid)->get();
         $post=post::find($postid);
        //  $user=User::all();

               
                
        
            return view("posts.show",["post"=>$post]);
           
      

    }

    public function create (){

        return view("posts.create");
    }
    

    public function store(Request $request)
    {
       $data=$request->all();
       $title=$data["title"];
       $description=$data["description"];
       $post_creator=$data["post_creator"];
            
       post::create(["title"=>$title,"description"=>$description,"post_creator"=>$post_creator]);
          
       return redirect("posts/");
    }



    public function edit( $postid){

        $post=post::find($postid);
        // dd($post);

        return view("posts.edit",["post"=>$post]);
    }


    public function update( Request $request , $postid ){

             
       $post=post::find($postid);
       $data=$request->all();
    //    dd($data);
       $title=$data["title"];
       $description=$data["description"];
       $post_creator=$data["post_creator"];
      

        $post->update(["title"=>$title,"description"=>$description,"post_creator"=>$post_creator]);

        return redirect("posts/");
    }



    public function destroy( $postid)
    {
        // $postid->delete();

        // dd($postid);
            // $postid->all();
    //       if($postid->trashed()){
    //     $postid->forceDelete();

    //     return view("posts/");
    // }
      
        
      post::find($postid)->delete();

   
        
        return redirect("posts/");

    }


    public function archive(){
          

        $postes=post::onlyTrashed()->get();
            
        // dd($postes);
        return view("posts.archive",["post"=>$postes]);

    
    }


    public function restore(Request $request ,post $postid){
             
        //    $post->all();
            //  dd($postid);
        $postid->restore();

        return redirect()->to("posts/");

    }

}
