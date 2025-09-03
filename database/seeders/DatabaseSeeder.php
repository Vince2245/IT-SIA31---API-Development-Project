use Database\Seeder;
use App\Models\Verse;

class VerseSeeder extends Seeder
{
    public function run()
    {
        Verse::create([
            'book' => 'John',
            'chapter' => 3,
            'verse' => 16,
            'text' => 'For God so loved the world that he gave his one and only Son...'
        ]);

        Verse::create([
            'book' => 'Psalm',
            'chapter' => 23,
            'verse' => 1,
            'text' => 'The Lord is my shepherd; I shall not want.'
        ]);
    }
}
