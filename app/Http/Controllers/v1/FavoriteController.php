<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function index()
    {

        if ($favorit = auth()->user()->favorites()->paginate(20)) {
            return $favorit;
        } else {
            return response(['success' => false, 'message' => 'Favorites does not exist']);
        }


    }

//    public function store()
//    {
//        try
//        {
//            $user = auth()->user();
//            $productId = Product::get('product_id');
//            $user->favourites()->toggle($user);
//            $letting = User::find($productId);
//            $user->recordActivity('favorited', $letting);
//        } catch (FavouriteNotFoundException $e)
//        {
//            throw new FavouriteNotFoundException($e->getMessage());
//        }
//        return redirect()->back();
//    }


    public function store(Request $request)
    {
        $favoriteStore =  auth()->user()->favorites()->attach($request->product_id);

        return $this->success('Favorite is add', [$favoriteStore]);
    }


    public function destroy($favorite_id)
    {
        if (auth()->user()->hasFavorite($favorite_id)) {
            auth()->user()->favorites()->detach($favorite_id);


            return $this->success('destroy is successfully');
        }


//        return response(['success' => false, 'message' => 'Favorites does not exist']);
        return $this->error('Favorites does not exist');
    }
}
