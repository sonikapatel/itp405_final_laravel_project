<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Spot;
use App\Review;
use App\Favorite;
use Auth;
class SpotController extends Controller
{
  public function search(){
    return view ('search');
  }
  public function viewFav(){
    $userID = Auth::user()->id;
    $spotID= request('spotID');
    $favorites = Favorite::select('spot_id','spotName','favorites.id')
    ->where('user_id', $userID)
    ->join('spots','favorites.spot_id','=','spots.id')
    ->groupBy('spot_id')
     ->get();

    //  $fav = Favorite::select('spot_id', 'spotName', count(*))
    //  ->where ('user_id'$userID)
    //  ->join('spots','favorites')
    return view('spots.favorites',[
      'favorites'=> $favorites

    ]);
  }
  public function saveFav(Request $request){

  $favoritebtn = request('favorite');

    $favorite = new Favorite();
    $userID = Auth::user()->id;
    $favorite->user_id = $userID;
    $favorite->spot_id = request('spotID');
    $favorite->save();

  return redirect()->back()
    ->with('successStatus', 'Favorite saved successfully!');;

}
public function destroy($id)
    {
      $favorite =Favorite::where('favorites.id',$id)->first();
        // DB::table('tweets')
        //     ->where('id', '=', $songID)
        //     ->delete();
        if ($favorite != null){
          $favorite->delete();
            return redirect()->back()
              ->with('successStatus', 'Favorite deleted successfully!');
        }


    }

  public function index()
      {

        $wifi = request('wifi');
        $outlets = request('outlets');
        $coffeeshop = request('coffeeshop');
        $rooftop = request('rooftop');
        $hotel = request('hotel');
        $park = request('park');
        $library = request('library');
        $outsidepatio = request('outdoorpatio');
        $study = request('aptstudyroom');
        $closingTime  = request('closingtime');

        // $query = Spot::all();
        $query = DB::table('spots')
        ->select('spots.id','imageURL', 'spotName', 'closingTime', 'startingTime','spotType','Wifi', 'Outlets')
        ->join('spotTypeTable','spots.spot_type_id','=', 'spotTypeTable.id')
        ->join('closingTimeTable','spots.closing_time_id','=','closingTimeTable.id')
        ->join('startingTimeTable','spots.start_time_id','=','startingTimeTable.id');
        if($wifi){
          $query = $query->where('Wifi', $wifi);
        }
        if ($outlets){
          $query=$query->where('Outlets', $outlets);
        }
        // if($outlets && $wifi){
        //   $query=$query->where('Outlets', $outlets)
        //   ->orWhere('Wifi',$wifi);
        // }

       if(($coffeeshop==1)||($rooftop==2) ||($hotel==3) || ($park==4) || ($library==5)|| ($outsidepatio==6)|| ($study==7)){
        $query = $query->whereIn('spot_type_id',[$coffeeshop, $rooftop,$hotel, $park, $library, $outsidepatio, $study]);

        }
        if ($closingTime =="9 PM"){
          $query = $query->where('closing_time_id','>=','1');
        }
        if ($closingTime =="10 PM"){
          $query = $query->where('closing_time_id','>','2');
        }
        if ($closingTime =="11 PM"){
          $query = $query->where('closing_time_id','>','3');
        }
        if ($closingTime =="12 AM"){
          $query = $query->where('closing_time_id','>','4');
        }
        if ($closingTime =="1 AM"){
          $query = $query->where('closing_time_id','>','5');
        }
        if ($closingTime =="2 AM"){
          $query = $query->where('closing_time_id','>','6');
        }
        if ($closingTime =="3 AM"){
          $query = $query->where('closing_time_id','>','7');
        }



        $spots = $query->get();
    //

    //
    //
    //
    // //
    //     if(($wifi ==1) || ($outlets==1) ){
    //     $spots = Spot::where('Outlets', $outlets)
    //     ->orWhere('Wifi',$wifi)
    //     // ->orWhereIn('spot_type_id', [$study, $rooftop, $hotel, $park,$library, $outsidepatio, $coffeeshop])
    //     ->get();
    //   }
    //   if(($wifi ==1) && ($outlets==1) ){
    //   $spots = Spot::where('Outlets', $outlets)
    //   ->where('Wifi',$wifi)
    //   // ->whereIn('spot_type_id', [$study, $rooftop, $hotel, $park,$library, $outsidepatio, $coffeeshop])
    //   ->get();
    // }
    //
    //   if(($coffeeshop==1)||($rooftop==2) ||($hotel==3) || ($park==4) || ($library==5)|| ($outsidepatio==6)|| ($study==7)){
    //     $spots = Spot::whereIn('spot_type_id',[$coffeeshop, $rooftop,$hotel, $park, $library, $outsidepatio, $study])
    //     ->get();
    //   }

// $query = Spot::all();
// if ($outlets!=null) {
//   $query = $query->where('Outlets', $outlets);
// }
//
// if ($wifi!=null) {
//   $query = $query->where('Wifi', $wifi);
// }
//
// $results = $query->all();




  //     var_dump($outlets);
  //     var_dump($wifi);
  //     var_dump($rooftop);
  // var_dump($park);
        return view('spots.index', [
              'spots' => $spots
          ]);

      }


  public function viewSpot($spotID){
    $spot = Spot::find($spotID);
    $spotreviews = Spot::join('reviews', 'spots.id', '=', 'reviews.spot_id')
    ->where('reviews.spot_id', $spotID)
     ->get();
    return view('spots.eachspot',[
      'spot'=> $spot,
      'reviews'=>$spotreviews
    ]);
  }
  public function store(Request $request)
    {


            // DB::table('tweets')->insert([
            //     'tweet' => request('tweet')
            // ]);
            $theID = request('spot_id');
            $review = new Review();
            $review->review = request('review');
            $review->spot_id = $theID;
            $review->save();
           return redirect()->back();



    }


  }
