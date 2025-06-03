// routes/web.php
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk CRUD Pegawai
Route::resource('pegawai', PegawaiController::class);
