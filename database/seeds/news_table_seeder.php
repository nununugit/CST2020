<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
 
class news_table_seeder extends Seeder
{
 /**
 * Run the database seeds.
 *
 * @return void
 */
 public function run()
 {
        DB::table('news')->insert([
            'title'=> '動物園からパンダ脱走　品川区',
            'author'=> '荒井',
            'date'=>Carbon::now(),
            'content'=> '今日未明、都立鮫洲動物園からオスのパンダ美美5歳が檻から脱走していることがわかりました。
            飼育員によると「掃除のために檻を開けてしまっていた。パンダがとても心配。」とのこと。',
        ]);
    
        sleep(100);

        DB::table('news')->insert([
            'title'=> '脱走のパンダ発見　品川区',
            'author'=> '竹本',
            'date'=>Carbon::now(),
            'content'=> '本日未明都立鮫洲動物園から脱走したパンダの美美が品川駅で目撃されたとの情報がありました。
            発見した会社員の男性は「最初はぬいぐるみかと思った。パンダが見つかって良かった。」とのこと。',
        ]);
    
        DB::table('news')->insert([
            'title'=> '脱走のパンダ動物園に戻る　品川区',
            'author'=> '野矢',
            'date'=>Carbon::now(),
            'content'=> '本日未明に都立鮫洲動物園から脱走したパンダの美美が品川駅で保護され無事鮫洲動物園に戻りました。
            園長の近藤さんは「ご迷惑をおかけしてしまい申し訳ない。再発防止に努めていきたい」とのこと。',
        ]);
 
        DB::table('news')->insert([
            'title'=> '日本人画家の絵画史上最高価格で落札　フランス',
            'author'=> '近藤',
            'date'=>Carbon::now(),
            'content'=> 'フランスで行われているオークションで、日本人画家の絵画が日本人画家としては史上最高価格で落札された。
            この画家は家庭料理をモチーフとした絵画でしられ、国内のみならず海外でも高い人気を誇っている。',
        ]);

        DB::table('news')->insert([
            'title' => '幻の魚発見　東京都',
            'author' => '市村',
            'date' => Carbon::now(),
            'content' => '本日未明都立鮫洲動物園から脱走したパンダの美美が品川駅で目撃されたとの情報がありました。
            発見した会社員の男性は「最初はぬいぐるみかと思った。パンダが見つかって良かった。」とのこと。',
        ]);

        DB::table('news')->insert([
            'title' => 'アトランティス発見　太平洋',
            'author' => '跡部',
            'date' => Carbon::now(),
            'content' => 'アトランティスが鮫洲大学の研究チームにより太平洋沖深海10000m付近にて発見された。
            アトランティスは古代ギリシャの哲学者プラトンの著書「ティマイオス」の中で記述した伝説の島、およびその島で発展していたとされる帝国であり一日と一夜にして地震と津波によって滅びたとされている。',
        ]);

        DB::table('news')->insert([
            'title' => '火星人との交信に成功　東京都',
            'author' => '壁山',
            'date' => Carbon::now(),
            'content' => '火星人との交信に成功に成功したと東京都の鮫洲大学が発表した。
            今回の交信にでは火星人とお互いの言語で簡単な挨拶を交わしたとのこと。
            鮫洲大学の研究者は「これからコミュニケーションをとっていきたい。」と話す。',
        ]);

        DB::table('news')->insert([
            'title' => '脱走のパンダ発見　品川区',
            'author' => '竹本',
            'date' => Carbon::now(),
            'content' => '本日未明都立鮫洲動物園から脱走したパンダの美美が品川駅で目撃されたとの情報がありました。
            発見した会社員の男性は「最初はぬいぐるみかと思った。パンダが見つかって良かった。」とのこと。',
        ]);

        DB::table('news')->insert([
            'title' => 'ところてんブーム到来　',
            'author' => '心太',
            'date' => Carbon::now(),
            'content' => '日本ところてん財団は今年度のところてんの消費量が過去最大であると発表した。
            ところてんは若者を中心に人気を集めており原宿にはここ3か月間の間に専門店が5店舗開店したことでも話題となった。',
        ]);

        DB::table('news')->insert([
            'title' => '指相撲オリンピック正式種目に',
            'author' => '不知火',
            'date' => Carbon::now(),
            'content' => '指相撲が2020年の東京オリンピックの正式種目となることが26日の会見で発表された。
            指相撲は世界中で人気があり今回の決定も多くの人々が大いに喜んだ',
        ]);

        DB::table('news')->insert([
            'title' => '翼の生えた猫誕生',
            'author' => '荒井',
            'date' => Carbon::now(),
            'content' => '今日未明、都立鮫洲動物園からオスのパンダ美美5歳が檻から脱走していることがわかりました。
            飼育員によると「掃除のために檻を開けてしまっていた。パンダがとても心配。」とのこと。',
        ]);

        DB::table('news')->insert([
            'title' => '空飛ぶ絨毯発売決定',
            'author' => 'KC',
            'date' => Carbon::now(),
            'content' => '自動車生産会社のSAMEZUは空飛ぶ絨毯の発売日を来年の9月ごろに決定したと発表した
            空飛ぶ絨毯は廃棄ガスを排出せず電力も消費せず水をかけるだけで動くため新たな交通機関として注目を集めている',
        ]);

        DB::table('news')->insert([
            'title' => '空飛ぶ絨毯発売中止',
            'author' => '粗腎',
            'date' => Carbon::now(),
            'content' => '今日未明、都立鮫洲動物園からオスのパンダ美美5歳が檻から脱走していることがわかりました。
            飼育員によると「掃除のために檻を開けてしまっていた。パンダがとても心配。」とのこと。',
        ]);

        DB::table('news')->insert([
            'title' => '縞模様が逆のシマウマ誕生　東京都',
            'author' => '島村',
            'date' => Carbon::now(),
            'content' => '東京都の鮫洲動物園にてシマウマの赤ちゃんが誕生し話題となっている．
            この赤ちゃんにはきわめて珍しい特徴があり通常とは縞模様が逆になっており黒地に白い縞々が入っている．
            この模様のシマウマは100年に一度生まれるとされ現地では見ると幸せになれる幸運のシンボルとしてしられている．',
        ]);

        DB::table('news')->insert([
            'title' => '~ロボットアームに新たな風~　秋の新色登場',
            'author' => '株式会社鮫洲ロボット',
            'date' => Carbon::now(),
            'content' => '現在ロボットアーム業界においてシェアナンバーワンを誇る株式会社鮫洲ロボットは10月にロボットアームに新色を発売すると発表した．
            新色として発売されるのはターコイズ、マゼンタ、シトラスの三色で来週の月曜日から公式サイトにて予約を受け付けるとのこと．',
        ]);
 }
}