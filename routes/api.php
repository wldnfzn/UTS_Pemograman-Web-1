use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ServiceApiController;
use App\Http\Controllers\Api\ContactApiController;

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::post('/contact', [ContactApiController::class,'store']); // public contact endpoint

// protected routes
Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',[AuthController::class,'logout']);
    Route::apiResource('services', ServiceApiController::class); // CRUD API for services
    Route::get('/user', function(Request $r){ return $r->user(); });
});
