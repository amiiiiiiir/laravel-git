<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('amir',function(){
//    return 'سلاااام';
//});
//Route::get('post/{id}',function ($id){
//    return 'آی دی این پست برابر است با :' . $id;
//});

//Route::get('post/{id}/{name?}',function ($id,$name=null){
//    return 'آی دی برابر است با :'."".$id."$name";
//});

//naming in route
//Route::get('admin/post/example',function (){
//    $url = route('admin');
//    return 'این آدرس برای این url  برابر با :'.$url;
//})->name('admin');
//
////Redirect in Route
//Route::redirect('/login','/post/example',301);

// Group in Route
//Route::prefix('user')->group(function (){
//    Route::get('posts/example',function (){
//        return 'group Admin';
//    });
//    Route::get('login',function (){
//       return 'login page';
//    });
//});

//// Route with Controller
//Route::get('posts','PostsController@index');

//Route::get('posts/{id}','postsController@index');
//
//Route::get('show-view','PostsController@showMyView');
//
////send id to view
//Route::get('show-view/{id}','PostsController@showMyView');
//
////send multi parameter to view
//Route::get('show-view/{id}/{name}/{password}','PostsController@showMyView');
//
//Route::get('contact','PostsController@contact');
//
////insert data with DB::
//Route::get('insert','PostsController@insert');
//
////select data with DB::
//Route::get('select','PostsController@select');
//
////update data with DB::
//Route::get('update-post','PostsController@updatePost');
//
////Select with Eloquent
//Route::get('posts','PostsController@getAllPost');
//
////Where with Eloquent
//Route::get('where','PostsController@where');
//
////insert with Eloquent
//Route::get('save-post','PostsController@savePost');
//
////update with Eloquent
//Route::get('update-post','PostsController@updatePost');
//
////Delete and SoftDelete with Eloquent
//Route::get('delete-post','PostsController@deletePost');
//
////show deleted post
//Route::get('data-trash','PostsController@workWithTrash');
//
////Restore Posts that soft delete
//Route::get('restore-post','PostsController@restorePost');
//
////Force Delete soft delete's Post
//Route::get('force-delete-post','PostsController@forceDelete');

//Eloquent one to one Relation
//Route::get('user/{id}/posts', function ($id){
//    $user_post = \App\User::find($id)->post->user_id;
//    return $user_post;
//});

////Eloquent one to one Relation (inverse)
//Route::get('post/{id}/user',function ($id){
//    $post_user = \App\Post::find($id)->user;
//    return $post_user;
//});
//
////Eloquent one to Many Relation
//Route::get('user/{id}/posts',function ($id){
//    return \App\User::find($id)->posts;
//});
//
////Eloquent Many to Many Relation
//Route::get('user/{id}/roles',function ($id){
//    return \App\User::find($id)->roles;
//
//});
//
//Route::get('user/pivot',function (){
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->pivot->created_at;
//        echo "<br>";
//    }
//});
//
//Route::get('user/country',function (){
//   $country = \App\Country::find(1);
//   foreach ($country->posts as $post){
//       echo $post->title;
//       echo "<br>";
//   }
//});
//
//Route::get('user/photos',function (){
//    $user  = \App\User::find(1);
//    foreach ($user->photos as $photo){
//        echo $photo->path;
//        echo "<br>";
//    }
//});
//
//Route::get('post/photos',function (){
//   $post = \App\Post::find(1);
//   foreach ($post->photos as $photo){
//       echo $photo->path;
//       echo "<br>";
//   }
//});
//
//Route::get('photo/{id}/post',function ($id){
//   $photo = \App\Photo::find($id);
//   return $photo->imageable;
//});
//
//Route::get('video/tags',function (){
//
//    $video = \App\Video::find(1);
//    foreach($video->tags as $tag){
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('tag/{id}/post',function ($id){
//
//    $tag = \App\Tag::find($id);
//    foreach ($tag->posts as $post){
//        echo $post->title;
//        echo "<br>";
//    }
//});

//// CRUD One To Many Relationship
//Route::get('create',function (){
//   $user = \App\User::find(1);
//   $post = new \App\Post();
//   $post->title='عنوان ایجاد CRUD';
//   $post->body = 'توضیحات ایجاد CRUD';
//   $user->posts()->save($post);
//});
//
//Route::get('read',function (){
//   $user = \App\User::find(1);
//   foreach ($user->posts as $post){
//       echo $post->title;
//       echo "<br>";
//   }
//});
//
//Route::get('update',function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(7)->update(['title'=>'آپدیت crud','body'=>'آپدیت توضیحت']);
//
//});
//
//Route::get('delete',function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(7)->delete();
//});

////CRUD Many To Many Relationship
//Route::get('create',function (){
//   $user = \App\User::find(1);
//   $role = new \App\Role();
//   $role->name = 'ویراستار';
//   $user->roles()->save($role);
//});
//
//Route::get('read',function (){
//   $user = \App\User::find(1);
//   foreach ($user->roles as $role){
//       echo $role->name;
//       echo "<br>";
//   }
//
//});
//
//Route::get('update',function (){
//    $user = \App\User::find(1);
//    if ($user->has('roles')){
//        foreach ($user->roles as $role){
//            if ($role->name =="کاربر خبره"){
//                $role->name = 'Expert';
//                $role->save();
//            }
//        }
//    }
//});
//
//Route::get('delete',function (){
//   $user = \App\User::find(1);
//   foreach ($user->roles as $role){
//       if ($role->name = 'Expert'){
//           $role->delete();
//       }
//   }
//});
//
//Route::get('detach',function (){
//   $user = \App\User::find(1);
//   $user->roles()->detach(5);
//});
//
//Route::get('attach',function (){
//   $user = \App\User::find(1);
//   $user->roles()->attach(5);
//});
//
//Route::get('sync',function (){
//   $user = \App\User::find(1);
//   $user->roles()->sync([3,5,6]);
//});

////CRUD Polymorphic Relationship
//
//Route::get('create',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->create(['name'=>'morph video']);
//});
//
//Route::get('read',function (){
//    $video = \App\Video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('update',function (){
//    $video = \App\Video::find(1);
//    $tag = $video->tags;
//    $newtags = $tag->where('id',3)->first();
//    $newtags->name = 'تگ جدید';
//    $newtags->save();
//});
//
//Route::get('delete',function (){
//    $video = \App\Video::find(1);
//    $tag = $video->tags;
//    $deleteTag = $tag->where('id',3)->first();
//    $deleteTag->delete();
//});
//
//Route::get('sync',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->sync([3,2]);
//});

//Form Routes
//use Illuminate\Support\Facades\Storage;
//
//Route::get('file',function (){
////   $file = Storage::disk('public')->get('images/it8C0eYesL1FqzYlnxd0o7j54Bk7iu3xR1jTrPDb.jpeg');
//   return Storage::disk('public')->download('images/it8C0eYesL1FqzYlnxd0o7j54Bk7iu3xR1jTrPDb.jpeg');
//});
Auth::routes(['verify'=>true]);

//Route::get('/home', 'HomeController@index')->middleware(['auth','verified'])->name('home');
Route::get('/admin',function (){
    echo "Hello To Admin Page";
})->middleware('isAdmin:نویسنده');
use Illuminate\Http\Request;
Route::get('session',function (Request $request ){
    $request->session()->keep('message');
//    session(["email"=>"amir@gmail.com"]);
    return $request->session()->all();
});

Route::middleware(['auth','verified'])->group(function (){
    Route::get('/');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/posts','PostsController');


});
//Route::get('/',function (){
//
//    $user = Auth::loginUsingId(6);
//    dd($user);

//    Auth::logout();

//    $email = 'amir@gmail.com';
//    $password = "123456";
//    $auth = Auth::once(['email'=>$email,'password'=>$password]);
//    dd($auth);

//    $user = Auth::user();
//    $id = Auth::id();
//    if(Auth::check()){
//        echo $user->name."سلام به تو ای ";
//        echo "<br/>";
//        echo "User Id :".$id;
//    }
//    else{
//        return redirect()->to('home');
//    }
// ایجاد تغییر 
