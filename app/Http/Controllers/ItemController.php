<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ゆるキャラ一覧
     */
    public function index()
    {
        // ゆるキャラ一覧取得
        $items = Item
            //::where('items.status', 'active')
            ::select()
            ->get();

        return view('item.index', compact('items'));
    }

    /**
     * ゆるキャラ登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
                'postcode' => 'required', 'regex:/^[0-9]{3}-[0-9]{4}$/',
                'pref_id' => 'required',
                'city' => 'required|max:50',
                'town' => 'required|max:50',
                'building' => 'max:50',
            ],
            [
                'name.required' => 'ゆるキャラ名を入力してください。',
                'name.max' => '50文字以内で入力してください。',
                'postcode.required' => '郵便番号を入力してください。',
                'postcode.regex' => '郵便番号は、半角数字3桁、半角ハイフン、半角数字4桁、の形式で入力してください。',
                'pref_id.required' => '都道府県を選択してください。',
                'city.required' => '市区町村を入力してください。',
                'city.max' => '市区町村は50文字以内で入力してください。',
                'town.required' => '町名番地等を入力してください。',
                'town.max' => '町名番地等は50文字以内で入力してください',
                'building.required' => '建物等は50文字以内で入力してください。',
            ]);

            // ゆるキャラ登録
            Item::create([
                'name' => $request->name,
                'postcode' => $request->postcode,
                'pref_id' => $request->pref_id,
                'city' => $request->city,
                'town' => $request->town,
                'building' => $request->building,
                'detail' => $request->detail,
            ]);

            return redirect('/index');
        }

        return view('item.add');
    }

        /**
    * ゆるキャラ削除
    *
    * @param Request $request
    * @param Task $task
    * @return Response
    */
    public function destroy(Request $request, Item $item)
    {
        $this->authorize('destroy', $item);

        $item->delete();
        return redirect('/index');
    } 
    
    public function destroyById($id)
    {
    Item::destroy($id);
        return redirect('/index');   
    }

    public function edit($id){
    //  リクエストのデータをlogに出力
    //  \Log::channel('debug')->info($edit時に送信するID);
    //  \Log::channel('debug')->info($request->id);
    
        //一覧から指定されたIDと同じIDのレコードを取得する
        $item = Item::find($id);
    
        return view('item.edit')->with([
            'item' => $item,
        ]);
        }

    public function UserEdit($id,Request $request){
    $item = Item::find($id);

    $item->name = $request->name;
    $item->postcode = $request->postcode;
    $item->pref_id = $request->pref_id;
    $item->city = $request->city;
    $item->town = $request->town;
    $item->building = $request->building;
    $item->detail = $request->detail;
    $item->save();

    return redirect('/index');
    }
}