<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Verse::create([
            'reference' => 'Matthew 5:14-16',
            'text' => '14 Ye are the light of the world. A city that is set on an hill cannot be hid. 15 Neither do men light a candle, and put it under a bushel, but on a candlestick; and it giveth light unto all that are in the house. 16 Let your light so shine before men, that they may see your good works, and glorify your Father which is in heaven.'
        ]);

        Verse::create([
            'reference' => 'Matthew 6:24',
            'text' => '24. No man can serve two masters: for either he will hate the one, and love the other; or else he will hold to the one, and despise the other. Ye cannot serve God and mammon.'
        ]);

        Verse::create([
            'reference' => 'Matthew 16:15-19',
            'text' => '15 He saith unto them, But whom say ye that I am? 16 And Simon Peter answered and said, Thou art the Christ, the Son of the living God. 17 And Jesus answered and said unto him, Blessed art thou, Simon Bar-jona: for flesh and blood hath not revealed it unto thee, but my Father which is in heaven. 18 And I say also unto thee, That thou art Peter, and upon this rock I will build my church; and the gates of hell shall not prevail against it. 19 And I will give unto thee the keys of the kingdom of heaven: and whatsoever thou shalt bind on earth shall be bound in heaven: and whatsoever thou shalt loose on earth shall be loosed in heaven.'
        ]);
        Verse::create([
            'reference' => 'Matthew 25:40',
            'text' => '40 And the King shall answer and say unto them, Verily I say unto you, Inasmuch as ye have done it unto one of the least of these my brethren, ye have done it unto me.'
        ]);
        Verse::create([
            'reference' => 'Luke 24:36-39',
            'text' => '36 And as they thus spake, Jesus himself stood in the midst of them, and saith unto them, Peace be unto you. 37 But they were terrified and affrighted, and supposed that they had seen a spirit. 38 And he said unto them, Why are ye troubled? and why do thoughts arise in your hearts? 39 Behold my hands and my feet, that it is I myself: handle me, and see; for a spirit hath not flesh and bones, as ye see me have.'
        ]);
        Verse::create([
            'reference' => 'John 3:5',
            'text' => '5 Jesus answered, Verily, verily, I say unto thee, Except a man be born of water and of the Spirit, he cannot enter into the kingdom of God.'
        ]);
        Verse::create([
            'reference' => 'John 7:17',
            'text' => '17 If any man will do his will, he shall know of the doctrine, whether it be of God, or whether I speak of myself.'
        ]);
        Verse::create([
            'reference' => 'John 10:16',
            'text' => '16 And other sheep I have, which are not of this fold: them also I must bring, and they shall hear my voice; and there shall be one fold, and one shepherd.'
        ]);
        Verse::create([
            'reference' => 'John 14:15',
            'text' => '15 If ye love me, keep my commandments.'
        ]);
        Verse::create([
            'reference' => 'John 17:3',
            'text' => '3 And this is life eternal, that they might know thee the only true God, and Jesus Christ, whom thou hast sent.'
        ]);
        Verse::create([
            'reference' => 'Acts 7:55-56',
            'text' => '55 But he, being full of the Holy Ghost, looked up steadfastly into heaven, and saw the glory of God, and Jesus standing on the right hand of God, 56 And said, Behold, I see the heavens opened, and the Son of man standing on the right hand of God.'
        ]);
        Verse::create([
            'reference' => 'Romans 1:16',
            'text' => '16 For I am not ashamed of the gospel of Christ: for it is the power of God unto salvation to every one that believeth; to the Jew first, and also to the Greek.'
        ]);
        Verse::create([
            'reference' => '1 Corinthians 10:13',
            'text' => '13 There hath no temptation taken you but such as is common to man: but God is faithful, who will not suffer you to be tempted above that ye are able; but will with the temptation also make a way to escape, that ye may be able to bear it.'
        ]);
        Verse::create([
            'reference' => '1 Corinthians 15:20-22',
            'text' => '20 But now is Christ risen from the dead, and become the firstfruits of them that slept. 21 For since by man came death, by man came also the resurrection of the dead. 22 For as in Adam all die, even so in Christ shall all be made alive.'
        ]);
        Verse::create([
            'reference' => '1 Corinthians 15:29',
            'text' => '29 Else what shall they do which are baptized for the dead, if the dead rise not at all? why are they then baptized for the dead?'
        ]);
        Verse::create([
            'reference' => '1 Corinthians 15:40-42',
            'text' => '40 There are also celestial bodies, and bodies terrestrial: but the glory of the celestial is one, and the glory of the terrestrial is another. 41 There is one glory of the sun, and another glory of the moon, and another glory of the stars: for one star differeth from another star in glory. 42 So also is the resurrection of the dead. It is sown in corruption; it is raised in incorruption:'
        ]);
        Verse::create([
            'reference' => 'Ephisians 4:11-14',
            'text' => '11 And he gave some, apostles; and some, prophets; and some, evangelists; and some, pastors and teachers; 12 For the perfecting of the saints, for the work of the ministry, for the edifying of the body of Christ: 13 Till we all come in the unity of the faith, and of the knowledge of the Son of God, unto a perfect man, unto the measure of the stature of the fulness of Christ: 14 That we henceforth be no more children, tossed to and fro, and carried about with every wind of doctrine, by the sleight of men, and cunning craftiness, whereby they lie in wait to deceive;'
        ]);
        Verse::create([
            'reference' => '2 Thessalonians 2:1-3',
            'text' => '1 Now we beseech you, brethren, by the coming of our Lord Jesus Christ, and by our gathering together unto him, 2 That ye be not soon shaken in mind, or be troubled, neither by spirit, nor by word, nor by letter as from us, as that the day of Christ is at hand. 3 Let no man deceive you by any means: for that day shall not come, except there come a falling away first, and that man of sin be revealed, the son of perdition;'
        ]);
        Verse::create([
            'reference' => '2 Timothy 3:1-5',
            'text' => '1 This know also, that in the last days perilous times shall come. 2 For men shall be lovers of their own selves, covetous, boasters, proud, blasphemers, disobedient to parents, unthankful, unholy, 3 Without natural affection, trucebreakers, false accusers, incontinent, fierce, despisers of those that are good, 4 Traitors, heady, highminded, lovers of pleasures more than lovers of God; 5 Having a form of godliness, but denying the power thereof: from such turn away.'
        ]);
        Verse::create([
            'reference' => '2 Timothy 3:16-17',
            'text' => '16 All scripture is given by inspiration of God, and is profitable for doctrine, for reproof, for correction, for instruction in righteousness: 17 That the man of God may be perfect, throughly furnished unto all good works.'
        ]);
        Verse::create([
            'reference' => 'Hebrews 5:4',
            'text' => '4 And no man taketh this honour unto himself, but he that is called of God, as was Aaron.'
        ]);
        Verse::create([
            'reference' => 'James 1:5-6',
            'text' => '5 If any of you lack wisdom, let him ask of God, that giveth to all men liberally, and upbraideth not; and it shall be given him. 6 But let him ask in faith, nothing wavering. For he that wavereth is like a wave of the sea driven with the wind and tossed.'
        ]);
        Verse::create([
            'reference' => 'James 2:17-18',
            'text' => '17 Even so faith, if it hath not works, is dead, being alone. 18 Yea, a man may say, Thou hast faith, and I have works: shew me thy faith without thy works, and I will shew thee my faith by my works.'
        ]);
        Verse::create([
            'reference' => 'Revelation 14:6-7',
            'text' => '6 And I saw another angel fly in the midst of heaven, having the everlasting gospel to preach unto them that dwell on the earth, and to every nation, and kindred, and tongue, and people, 7 Saying with a loud voice, Fear God, and give glory to him; for the hour of his judgment is come: and worship him that made heaven, and earth, and the sea, and the fountains of waters.'
        ]);
        Verse::create([
            'reference' => 'Revelation 20:12-13',
            'text' => '12 And I saw the dead, small and great, stand before God; and the books were opened: and another book was opened, which is the book of life: and the dead were judged out of those things which were written in the books, according to their works. 13 And the sea gave up the dead which were in it; and death and hell delivered up the dead which were in them: and they were judged every man according to their works.'
        ]);
        Verse::create([
            'reference' => 'Genesis 1:26-27',
            'text' => '26 And God said, Let us make man in our image, after our likeness: and let them have dominion over the fish of the sea, and over the fowl of the air, and over the cattle, and over all the earth, and over every creeping thing that creepeth upon the earth. 27 So God created man in his own image, in the image of God created he him; male and female created he them.'
        ]);
        Verse::create([
            'reference' => 'Genesis 39:9',
            'text' => '9 There is none greater in this house than I; neither hath he kept back any thing from me but thee, because thou art his wife: how then can I do this great wickedness, and sin against God?'
        ]);
        Verse::create([
            'reference' => 'Exodus 20:3-17',
            'text' => '3 Thou shalt have no other gods before me. 4 Thou shalt not make unto thee any graven image, or any likeness of any thing that is in heaven above, or that is in the earth beneath, or that is in the water under the earth: 5 Thou shalt not bow down thyself to them, nor serve them: for I the Lord thy God am a jealous God, visiting the iniquity of the fathers upon the children unto the third and fourth generation of them that hate me; 6 And shewing mercy unto thousands of them that love me, and keep my commandments. 7 Thou shalt not take the name of the Lord thy God in vain; for the Lord will not hold him guiltless that taketh his name in vain. 8 Remember the sabbath day, to keep it holy. 9 Six days shalt thou labour, and do all thy work: 10 But the seventh day is the sabbath of the Lord thy God: in it thou shalt not do any work, thou, nor thy son, nor thy daughter, thy manservant, nor thy maidservant, nor thy cattle, nor thy stranger that is within thy gates: 11 For in six days the Lord made heaven and earth, the sea, and all that in them is, and rested the seventh day: wherefore the Lord blessed the sabbath day, and hallowed it. 12 ¶ Honour thy father and thy mother: that thy days may be long upon the land which the Lord thy God giveth thee. 13 Thou shalt not kill. 14 Thou shalt not commit adultery. 15 Thou shalt not steal. 16 Thou shalt not bear false witness against thy neighbour. 17 Thou shalt not covet thy neighbour’s house, thou shalt not covet thy neighbour’s wife, nor his manservant, nor his maidservant, nor his ox, nor his ass, nor any thing that is thy neighbour’s.'
        ]);
        Verse::create([
            'reference' => 'Exodus 33:11',
            'text' => '11 And the Lord spake unto Moses face to face, as a man speaketh unto his friend. And he turned again into the camp: but his servant Joshua, the son of Nun, a young man, departed not out of the tabernacle.'
        ]);
        Verse::create([
            'reference' => 'Leviticus 19:18',
            'text' => '18 Thou shalt not avenge, nor bear any grudge against the children of thy people, but thou shalt love thy neighbour as thyself: I am the Lord.'
        ]);
        Verse::create([
            'reference' => 'Deuteronomy 7:3-4',
            'text' => '3 Neither shalt thou make marriages with them; thy daughter thou shalt not give unto his son, nor his daughter shalt thou take unto thy son. 4 For they will turn away thy son from following me, that they may serve other gods: so will the anger of the Lord be kindled against you, and destroy thee suddenly.'
        ]);
        Verse::create([
            'reference' => 'Joshua 1:8',
            'text' => '8 This book of the law shall not depart out of thy mouth; but thou shalt meditate therein day and night, that thou mayest observe to do according to all that is written therein: for then thou shalt make thy way prosperous, and then thou shalt have good success.'
        ]);
        Verse::create([
            'reference' => 'Joshua 24:15',
            'text' => '15 And if it seem evil unto you to serve the Lord, choose you this day whom ye will serve; whether the gods which your fathers served that were on the other side of the flood, or the gods of the Amorites, in whose land ye dwell: but as for me and my house, we will serve the Lord.'
        ]);
        Verse::create([
            'reference' => '1 Samuel 16:7',
            'text' => '7 But the Lord said unto Samuel, Look not on his countenance, or on the height of his stature; because I have refused him: for the Lord seeth not as man seeth; for man looketh on the outward appearance, but the Lord looketh on the heart.'
        ]);
        Verse::create([
            'reference' => 'Job 19:25-26',
            'text' => '25 For I know that my redeemer liveth, and that he shall stand at the latter day upon the earth: 26 And though after my skin worms destroy this body, yet in my flesh shall I see God:'
        ]);
        Verse::create([
            'reference' => 'Psalm 24:3-4',
            'text' => '3 Who shall ascend into the hill of the Lord? or who shall stand in his holy place? 4 He that hath clean hands, and a pure heart; who hath not lifted up his soul unto vanity, nor sworn deceitfully.'
        ]);
        Verse::create([
            'reference' => 'Proverbs 3:5-6',
            'text' => '5 Trust in the Lord with all thine heart; and lean not unto thine own understanding. 6 In all thy ways acknowledge him, and he shall direct thy paths.'
        ]);
        Verse::create([
            'reference' => 'Isaiah 1:18',
            'text' => '18 Come now, and let us reason together, saith the Lord: though your sins be as scarlet, they shall be as white as snow; though they be red like crimson, they shall be as wool.'
        ]);
        Verse::create([
            'reference' => 'Ecclesiastes 3: 1-8',
            'text' => '1 To every thing there is a season, and a time to every purpose under the heaven: 2 A time to be born, and a time to die; a time to plant, and a time to pluck up that which is planted; 3 A time to kill, and a time to heal; a time to break down, and a time to build up; 4 A time to weep, and a time to laugh; a time to mourn, and a time to dance; 5 A time to cast away stones, and a time to gather stones together; a time to embrace, and a time to refrain from embracing; 6 A time to get, and a time to lose; a time to keep, and a time to cast away; 7 A time to rend, and a time to sew; a time to keep silence, and a time to speak; 8 A time to love, and a time to hate; a time of war, and a time of peace.'
        ]);
        Verse::create([
            'reference' => 'Ecclesiastes 4: 2-3',
            'text' => '2 Wherefore I praised the dead which are already dead more than the living which are yet alive. 3 Yea, better is he than both they, which hath not yet been, who hath not seen the evil work that is done under the sun.'
        ]);
        Verse::create([
            'reference' => 'Isaiah 29:13-14',
            'text' => '13 Wherefore the Lord said, Forasmuch as this people draw near me with their mouth, and with their lips do honour me, but have removed their heart far from me, and their fear toward me is taught by the precept of men: 14 Therefore, behold, I will proceed to do a marvellous work among this people, even a marvellous work and a wonder: for the wisdom of their wise men shall perish, and the understanding of their prudent men shall be hid.'
        ]);
        Verse::create([
            'reference' => 'Isaiah 53:3-5',
            'text' => '3 He is despised and rejected of men; a man of sorrows, and acquainted with grief: and we hid as it were our faces from him; he was despised, and we esteemed him not. 4 Surely he hath borne our griefs, and carried our sorrows: yet we did esteem him stricken, smitten of God, and afflicted. 5 But he was wounded for our transgressions, he was bruised for our iniquities: the chastisement of our peace was upon him; and with his stripes we are healed.'
        ]);
        Verse::create([
            'reference' => 'Isaiah 55:8-9',
            'text' => '8 For my thoughts are not your thoughts, neither are your ways my ways, saith the Lord. 9 For as the heavens are higher than the earth, so are my ways higher than your ways, and my thoughts than your thoughts.'
        ]);
        Verse::create([
            'reference' => 'Jeremiah 16:16',
            'text' => '16 Thy words were found, and I did eat them; and thy word was unto me the joy and rejoicing of mine heart: for I am called by thy name, O Lord God of hosts.'
        ]);
        Verse::create([
            'reference' => 'Ezekiel 37: 15-17',
            'text' => '15 The word of the Lord came again unto me, saying, 16 Moreover, thou son of man, take thee one stick, and write upon it, For Judah, and for the children of Israel his companions: then take another stick, and write upon it, For Joseph, the stick of Ephraim, and for all the house of Israel his companions: 17 And join them one to another into one stick; and they shall become one in thine hand.'
        ]);
        Verse::create([
            'reference' => 'Daniel 2:44-45',
            'text' => '44 And in the days of these kings shall the God of heaven set up a kingdom, which shall never be destroyed: and the kingdom shall not be left to other people, but it shall break in pieces and consume all these kingdoms, and it shall stand for ever. 45 Forasmuch as thou sawest that the stone was cut out of the mountain without hands, and that it brake in pieces the iron, the brass, the clay, the silver, and the gold; the great God hath made known to the king what shall come to pass hereafter: and the dream is certain, and the interpretation thereof sure.'
        ]);
        Verse::create([
            'reference' => 'Amos 3:7',
            'text' => '7 Surely the Lord God will do nothing, but he revealeth his secret unto his servants the prophets.'
        ]);
        Verse::create([
            'reference' => 'Malachi 3:8-10',
            'text' => '8 Will a man rob God? Yet ye have robbed me. But ye say, Wherein have we robbed thee? In tithes and offerings. 9 Ye are cursed with a curse: for ye have robbed me, even this whole nation. 10 Bring ye all the tithes into the storehouse, that there may be meat in mine house, and prove me now herewith, saith the Lord of hosts, if I will not open you the windows of heaven, and pour you out a blessing, that there shall not be room enough to receive it.'
        ]);
        Verse::create([
            'reference' => 'Malachi 4:5-6',
            'text' => '5 Behold, I will send you Elijah the prophet before the coming of the great and dreadful day of the Lord: 6 And he shall turn the heart of the fathers to the children, and the heart of the children to their fathers, lest I come and smite the earth with a curse.'
        ]);
        

    }
}
