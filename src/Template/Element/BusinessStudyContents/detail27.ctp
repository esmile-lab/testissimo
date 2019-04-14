<style>
    .tabs .box-child__content {
        margin-bottom:40px;
    }
    .bcolor h4 {
        border-left: 5px solid #ef6ebf;
    }
    .bcolor h4 span {
        color: #ef6ebf;
    }
</style>

<div>
    <div class="tabs">
        <input id="study" type="radio" name="tab_item" checked>
        <label class="tab_item" for="study">学習用</label>
        <input id="answer" type="radio" name="tab_item">
        <label class="tab_item" for="answer">解説用</label>
        <!-- 学習用 -->
        <div class="tab_content" id="study_content">
            <div class="box-child__content">
              <h4><span>課題1.</span> 変数の宣言</h4>
              <p>変数【test1】を宣言し、初期値に文字列「こんにちは」を代入してください。</p>
              <p><b class="error-message">解答：</b>変数【test1】= </p>

              <h4><span>課題2.</span> 定数の宣言</h4>
              <p>定数【TEST2】を宣言し、初期値に数値「1000」を代入してください。</p>
              <p><b class="error-message">解答：</b>定数【TEST2】= </p>

              <h4><span>課題3.</span> 配列の宣言</h4>
              <p>配列【test3】を宣言し、初期値に文字列「朝」、文字列「昼」、文字列「夜」を順番に代入してください。</p>
              <p><b class="error-message">解答：</b>配列【test3】= </p>

              <h4><span>課題4.</span> 配列要素を変数へ代入</h4>
              <p>配列【test3】から文字列「昼」を変数【test4】に代入してください。</p>
              <p><b class="error-message">解答：</b>変数【test4】 = </p>

              <h4><span>課題5.</span> 配列要素の追加</h4>
              <p>配列【test3】を配列【test5】に代入し、配列【test5】に文字列「深夜」を要素として追加してください。</p>
              <p><b class="error-message">解答：</b>配列【test5】 = </p>

              <h4><span>課題6.</span> 連想配列の宣言</h4>
              <p>
                以下の要素を持つ連想配列【test6】を宣言してください。<br>
                キー「name」、値「山田太郎」<br>
                キー「sex」、値「男」<br>
                キー「height」、値「170cm」
              </p>
              <p><b class="error-message">解答：</b>連想配列【test6】 = </p>

              <h4><span>課題7.</span> 連想配列要素を変数へ代入</h4>
              <p>連想配列【test6】からキー「height」の値を変数【test7】に代入してください。</p>
              <p><b class="error-message">解答：</b>変数【test7】 = </p>

              <h4><span>課題8.</span> 連想配列要素の追加</h4>
              <p>連想配列【test6】を変数【test8】に代入し、連想配列【test8】にキー「weight」、値「200kg」の要素を追加してください。</p>
              <p><b class="error-message">解答：</b>連想配列【test8】 = </p>

              <h4><span>課題9.</span> 多次元連想配列要素を変数へ代入</h4>
              <p>
                以下のコードを記述してください。
                </p>
<pre class="prettyprint">
$test9 = '';
$test9_2 = ['color', ['red', 'blue', 'black']];
</pre>
              <p>
                多次元配列【test9_2】から2番目の要素にある文字列「black」を変数【test9】に代入してください。<br>
              </p>
              <p><b class="error-message">解答：</b>変数【test9】 = </p>

              <h4><span>課題10.</span> 後置加算</h4>
              <p>
                以下のコードを記述してください。
              </p>
<pre class="prettyprint">
$test10_2 = 10;
</pre>
              <p>
                変数【test10_2】に後置加算した値を変数【test10】に代入してください。<br>
              </p>
              <p><b class="error-message">解答：</b>変数【test10】 = </p>

              <h4><span>課題11.</span> 前置減算</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test11_2 = 10;
</pre>
              <p>
                変数【test11_2】に前置減算した値を変数【test11】に代入してください。<br>
              </p>
              <p><b class="error-message">解答：</b>変数【test11】 = </p>

              <h4><span>課題12.</span> 文字列連結</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test12 = '';
$test12_2 = '松竹';
</pre>
              <p>
                変数【test12_2】の後ろに文字列「梅」を連結し、変数【test12】に代入してください。<br>
              </p>
              <p><b class="error-message">解答：</b>変数【test12】 = </p>

              <h4><span>課題13.</span> ビット演算（シフト）</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test13_2 = 200;
</pre>
              <p>
                変数【test13_2】に、左へ「2」ビットシフトした値を変数【test13】に代入してください。<br>
              </p>
              <p><b class="error-message">解答：</b>変数【test13】 = </p>

              <h4><span>課題14.</span> 参照渡し</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test14  = 200;
$test14_2 = $test14;
$test14 = 300;
</pre>
              <p>
                このコードを修正し、参照渡しにより変数【test14_2】にも変数【test14】と同じ値が入るようにしてください。
              </p>
              <p><b class="error-message">解答：</b>変数【test14_2】 = </p>

              <h4><span>課題15.</span> 比較演算子</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test15  = '';

if (7 == '7') {
    $test15 = '同じ値';
} else {
    $test15 = '違う値';
}
</pre>
              <p>
                現状は、変数【test15】に「同じ値」が代入されます。<br>
                このif文内にある比較演算子を同じデータ型まで判定するように修正し、変数【test15】に「違う値」が代入されるようにしてください。
              </p>
              <p><b class="error-message">解答：</b>変数【test15】 = </p>

              <h4><span>課題16.</span> 三項演算子</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test16 = '';
$test16_2 = mt_rand(1, 100);
</pre>
              <p>
                変数【test16_2】には1～100までの乱数が入ります。<br>
                75点より小さい場合は「不合格」、75点以上の場合は「合格」という文字列を、三項演算子を使用して変数【test16】に代入してください。<br>
              </p>
              <p><b class="error-message">解答：</b>変数【test16】 = </p>

              <h4><span>課題17.</span> 条件式</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test17  = 'false';
$test17_2 = 5;

if (条件式を追加) {
    $test17 = 'true';
}
</pre>
              <p>
                変数【test17_2】の値を「3より大きい場合」かつ、「7より小さい場合」のif文に通し、変数【test17】に「true」が表示されるようにしてください。
              </p>
              <p><b class="error-message">解答：</b>変数【test17】 = </p>

              <h4><span>課題18.</span> switch文</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test18 = '';
$test18_2 = mt_rand(1, 5);
</pre>
              <p>
                変数【test18_2】には1～5までの乱数が入ります。<br>
                switch文を用いて、1～5までのcase処理を作成し、数値に紐づく「月（英語）」を変数【test18】に代入してください。<br>
                例）$test18_2 = 1なら$test18 = 'January';
              </p>
              <p><b class="error-message">解答：</b>変数【test18】 = </p>

              <h4><span>課題19.</span> while文</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test19 = [];
$num = 1;
</pre>
              <p>
                while文を用いて、1周する度に変数【num】をインクリメントし、配列【test19】に変数【num】の値を代入する課題を記述してください。<br>
                ループは5周で抜けるように設定してください。
              </p>
              <p><b class="error-message">解答：</b>変数【test19】 = </p>

              <h4><span>課題20.</span> for文</h4>
              <p>
                以下のコードを解答に記述してください。
              </p>
<pre class="prettyprint">
$test20 = [];
</pre>
              <p>
                for文を用いて、1周する度に変数【num】をインクリメントし、配列【test20】に変数【num】の値を代入する処理を記述してください。<br>
                ループは10周で抜けるように設定してください。
              </p>
              <p><b class="error-message">解答：</b>変数【test20】 = </p>

            </div>

        </div>

        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">
<pre class="prettyprint">
/*
 *  解答ファイル study.php
 *  各課題の解答を記述してください。
 */

// 課題1解答
$test1 = 'こんにちは';

// 課題2解答
const TEST2 = 1000;

// 課題3解答
$test3 = ['朝', '昼', '夜'];

// 課題4解答
$test4 = $test3[1];

// 課題5解答
$test5 = $test3;
$test5[] = '深夜';

// 課題6解答
$test6 = ['name' => '山田太郎', 'sex' => '男', 'hight' => '170cm'];

// 課題7解答
$test7 = $test6['hight'];

// 課題8解答
$test8 = $test6;
$test8['weight'] = '200kg';

// 課題9解答
$test9 = '';
$test9_2 = ['color', ['red', 'blue', 'black']];
$test9 = $test9_2[1][2];

// 課題10解答
$test10_2 = 10;
$test10 = $test10_2++;

// 課題11解答
$test11_2 = 10;
$test11 = --$test11_2;

// 課題12解答
$test12 = '';
$test12_2 = '松竹';
$test12 = $test12_2 . '梅';

// 課題13解答
$test13_2 = 200;
$test13 = $test13_2 <<= 2;

// 課題14解答
$test14  = 200;
$test14_2 = &$test14;
$test14 = 300;

// 課題15解答
$test15 = '';
if (7 === '7') {
    $test15 = '同じ値';
} else {
    $test15 = '違う値';
}

// 課題16解答
$test16  = '';
$test16_2 = mt_rand(1, 100);
$test16 = $test16_2 >= 75 ? '合格' : '不合格';

// 課題17解答
$test17  = 'false';
$test17_2 = 5;
if (($test17_2 > 3) && ($test17_2 < 7)) {
    $test17 = 'true';
}

// 課題18解答
$test18 = '';
$test18_2 =  mt_rand(1, 5);

switch ($test18_2) {
    case 1:
        $test18 = 'January';
         break;
    case 2:
        $test18 = 'February';
        break;
    case 3:
        $test18 = 'March';
        break;
    case 4:
        $test18 = 'April';
        break;
    case 5:
        $test18 = 'May';
        break;
    default:
        $test18 = '該当月はありません';
        break;
}

// 課題19解答
$test19 = [];
$num = 1;
while ($num <= 5) {
    $test19[] = $num;
    $num++;
}

// 課題20解答
$test20 = [];
for ($num = 1; $num <= 10; $num++) {
    $test20[] = $num;
}
</pre>

        </div>
    </div>
</div>