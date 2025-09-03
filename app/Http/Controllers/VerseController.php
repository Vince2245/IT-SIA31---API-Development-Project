namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    // Get all verses
    public function index()
    {
        return response()->json(Verse::all());
    }

    // Get a specific verse
    public function show($id)
    {
        $verse = Verse::find($id);

        if (!$verse) {
            return response()->json(['message' => 'Verse not found'], 404);
        }

        return response()->json($verse);
    }

    // Search by book, chapter, verse
    public function search(Request $request)
    {
        $query = Verse::query();

        if ($request->has('book')) {
            $query->where('book', $request->book);
        }

        if ($request->has('chapter')) {
            $query->where('chapter', $request->chapter);
        }

        if ($request->has('verse')) {
            $query->where('verse', $request->verse);
        }

        return response()->json($query->get());
    }
}
