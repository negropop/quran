<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use Illuminate\Http\Request;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $count = DB::table('posts')->count();
        $reader = DB::table('readers')->count();
        return view('welcome')->with('count' , $count)->with('reader' , $reader);
    }
    public function index()
    {
        $explor = DB::table('posts')->orderBy('title', 'ASC')->get();

       return view('explorer')->with('explorer' , $explor);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('posts')
         ->where('title', 'like', '%'.$query.'%')->orderBy('id', 'desc')
        //  ->limit(4)
         ->get();
         
      }
     
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>

         <td>
         <a href="'.$row->id.'/listen">'.$row->title.'</a>
         </td>
         <td>'.$row->reader.'</td>
         <td>'.$row->title.'</td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">لم يتم العثور على اي نتائج</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
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
    public function listen($id)
    {
        $users = DB::table('posts')->orderBy('title', 'ASC')->limit(5)->get();

        $explor = Posts::find($id);
        return view('listen')->with('explorer' , $explor)->with('rand' , $users);
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
    public function update ($id)
    {
        $id = Posts::find($id);
        $id->liked +=1;
    

        $id->save();
        return Response()->json(["success"=>"Image Upload Successfully"]);

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
