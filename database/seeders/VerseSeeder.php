<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Verse;

class VerseSeeder extends Seeder
{
    public function run(): void
    {
        Verse::create([
            'book' => 'John',
            'chapter' => 3,
            'verse' => 16,
            'text' => 'For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.'
        ]);

        Verse::create([
            'book' => 'Psalm',
            'chapter' => 23,
            'verse' => 1,
            'text' => 'The Lord is my shepherd; I shall not want.'
        ]);

        Verse::create([
            'book' => 'Genesis',
            'chapter' => 1,
            'verse' => 1,
            'text' => 'In the beginning God created the heavens and the earth.'
        ]);

        Verse::create([
            'book' => 'Romans',
            'chapter' => 8,
            'verse' => 28,
            'text' => 'And we know that in all things God works for the good of those who love him, who have been called according to his purpose.'
        ]);

        Verse::create([
            'book' => 'Philippians',
            'chapter' => 4,
            'verse' => 13,
            'text' => 'I can do all things through Christ who strengthens me.'
        ]);

        Verse::create([
            'book' => 'Proverbs',
            'chapter' => 3,
            'verse' => 5,
            'text' => 'Trust in the Lord with all your heart and lean not on your own understanding.'
        ]);

        Verse::create([
            'book' => 'Proverbs',
            'chapter' => 3,
            'verse' => 6,
            'text' => 'In all your ways acknowledge him, and he will make your paths straight.'
        ]);

        Verse::create([
            'book' => 'Isaiah',
            'chapter' => 41,
            'verse' => 10,
            'text' => 'So do not fear, for I am with you; do not be dismayed, for I am your God.'
        ]);

        Verse::create([
            'book' => 'Matthew',
            'chapter' => 5,
            'verse' => 9,
            'text' => 'Blessed are the peacemakers, for they will be called children of God.'
        ]);

        Verse::create([
            'book' => 'Matthew',
            'chapter' => 11,
            'verse' => 28,
            'text' => 'Come to me, all you who are weary and burdened, and I will give you rest.'
        ]);

        Verse::create([
            'book' => 'Matthew',
            'chapter' => 22,
            'verse' => 37,
            'text' => 'Love the Lord your God with all your heart and with all your soul and with all your mind.'
        ]);

        Verse::create([
            'book' => 'Matthew',
            'chapter' => 22,
            'verse' => 39,
            'text' => 'Love your neighbor as yourself.'
        ]);

        Verse::create([
            'book' => 'John',
            'chapter' => 14,
            'verse' => 6,
            'text' => 'Jesus answered, "I am the way and the truth and the life. No one comes to the Father except through me."'
        ]);

        Verse::create([
            'book' => 'John',
            'chapter' => 11,
            'verse' => 25,
            'text' => 'Jesus said to her, "I am the resurrection and the life. The one who believes in me will live, even though they die."'
        ]);

        Verse::create([
            'book' => '2 Corinthians',
            'chapter' => 5,
            'verse' => 7,
            'text' => 'For we live by faith, not by sight.'
        ]);

        Verse::create([
            'book' => 'Jeremiah',
            'chapter' => 29,
            'verse' => 11,
            'text' => 'For I know the plans I have for you, declares the Lord, plans to prosper you and not to harm you, plans to give you hope and a future.'
        ]);

        Verse::create([
            'book' => 'Joshua',
            'chapter' => 1,
            'verse' => 9,
            'text' => 'Be strong and courageous. Do not be afraid; do not be discouraged, for the Lord your God will be with you wherever you go.'
        ]);

        Verse::create([
            'book' => '1 Corinthians',
            'chapter' => 13,
            'verse' => 4,
            'text' => 'Love is patient, love is kind. It does not envy, it does not boast, it is not proud.'
        ]);

        Verse::create([
            'book' => '1 Corinthians',
            'chapter' => 13,
            'verse' => 13,
            'text' => 'And now these three remain: faith, hope and love. But the greatest of these is love.'
        ]);
    }
}
