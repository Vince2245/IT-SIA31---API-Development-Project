use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VerseController;

Route::get('/verses', [VerseController::class, 'index']);      // All verses
Route::get('/verses/{id}', [VerseController::class, 'show']);  // Specific verse
Route::get('/search', [VerseController::class, 'search']);     // Search verse
