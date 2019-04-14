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
    .table {
	border-collapse: collapse;
}
td {
	border: solid 1px;
	padding: 0.5em;
}
    
    .tab_content .list {
        line-height: 1.8;
    }
    .imgcenter{
        padding-left: 15px;
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
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
            <div class="box-child__content">
               <h4><span>課題1.</span>JavaScriptの記述場所</h4>
               <p>
                   ダウンロードした教材に対し、2つの記述パターンでjs（JavaScript）のコードを反映させてみましょう。<br>下記の情報を参考に、ページを完成させてください。
               </p>
                   <br>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>「index.html」に直接jsのコードを記述し、ページが表示される時にダイアログを表示してください。</b>
                           </p>
                           <p>
                               <b>・alert()</b>を使用し、「課題1-1」という文字をダイアログで出力します。
                           </p>
                               <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img1.png');?>" alt="img1" style="width:38%;">
                               </div>
                               <br>
                               <br>
                       </li>
                       <li class="list">
                           <p>
                               <b>「js/app.js」を「index.html」から読み込み、ページが表示される時にコンソールに出力してください。</b>
                           </p>
                           <p>
                               <b>・console.log()</b>を使用し、「課題1-2」という文字をコンソールに出力します。<br>※コンソールは、開発者ツールから確認する事ができます。
                           </p>
                       </li>
                           <br>
                           <br>
            
                               <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img2.png');?>" alt="img2" style="width:38%;">
                               </div>
                               <br>
                               <br>
                   </ol>  
            </div>
            
            <div class="box-child__content">
               <h4><span>課題2.</span>変数／関数</h4>
               <p>
                   ここからの課題は全て「js/app.js」に処理を記述していきます。<br>下記の情報を参考にしながら<b>「app.js」</b>に処理を記述し、<b>「index.html」</b>を完成させてください。
               </p>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>変数「num」を初期値「1000」で宣言し、ページが表示される時にコンソールに変数「num」を出力してください。</b>
                           </p>
                           <p>
                               <b>・console.log()</b>を使用し、変数「num」を出力します。
                           </p>
                       <li class="list">
                           <p>
                               <b>変数「str1」の初期値を「こんにちは」、変数「str2」の初期値を「花子さん」と宣言し、ページが表示される時に2つの変数を連結した値をコンソールに出力してください。</b>
                           </p>
                           <p>
                               ・変数「str1」、変数「str2」を宣言し、連結した文字を<b>console.log()</b>を使用して出力します。
                           </p>
                       <li class="list">
                           <p>
                               <b>四角形の面積を求める関数「getSquare」、変数「width」、「height」を宣言し、好きな値を代入してください。</b>
                           </p>
                           <p>
                               <b>変数「width」、「height」を関数「getSquare」の引数に渡し、合計面積をコンソールに出力してください。</b>
                           </p>
                           <p>
                               ・第一引数に横幅、第二引数に縦幅を取り、引数で取得した値を元に四角形の合計面積を戻り値として返却する関数「getSquare」を定義します。<br>・変数「width」、「height」を宣言し、好きな数値を代入します。<br>・関数「getSquare」に変数「width」、「height」を渡し、<b>console.log()</b>を使って合計面積を出力します。<br><br>
                           </p>
                           <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img3.png');?>" alt="img3" style="width:38%;">
                           </div>
                           <br>
                           <br>
                       </ol>
            </div>
            
            <div class="box-child__content">
               <h4><span>課題3.</span>DOM操作</h4>
               <p>
                   下記の情報を参考にしながら<b>「app.js」</b>（必要であれば index.html）に処理を記述し、<b>「index.html」</b>を完成させてください。<br>※app.js にのみ記述、index.htmlとapp.js両方に記述する2つの方法がありますが、どちらの方法を使ってもOKとします。
               </p>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>文字列「はじめまして」を、ページが表示される時に文字列「さようなら」に変更してください。</b>
                           </p>
                           <p>
                               ・ページが読み込まれたタイミングでDOMを使って「はじめまして」を「さようなら」に変更します。
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>文字列「こんにちは」の文字色を、ページが表示される時に「黒(#000000)」から「赤(#ff0000)」に変更してください。</b>
                           </p>
                           <p>
                               ・ページが読み込まれたタイミングでDOMを使って「こんにちは」の文字色を赤に変更します。
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>リンク「Amazon」を、ページが表示される時にリンク先を「https://yahoo.co.jp」に変更してください。</b>
                           </p>
                           <p>
                               ・ページが読み込まれたタイミングでDOMを使ってリンク「Amazon」のリンク先を変更します。
                           </p>
                       </li>
                    </ol>
                    <br>
                
                <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img4.png');?>" alt="img4" style="width:38%;">
                </div><br><br>
            </div>
            
            <div class="box-child__content">
               <h4><span>課題4.</span>ユーザー操作</h4>
               <p>
                   下記の情報を参考にしながら<b>「app.js」</b>に処理を記述し、<b>「index.html」</b>を完成させてください。<br>※app.js にのみ記述、index.htmlとapp.js両方に記述する2つの方法がありますが、どちらの方法を使ってもOKとします。
               </p>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>「結果出力」ボタンをクリックした時に、ダイアログを表示してください。</b>
                           </p>
                           <p>
                               ・index.htmlのコードを参照しながら、<b>alert()</b>を使用し「課題4-1」という文字をダイアログで出力します。
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>「結果出力」ボタンをクリックした時に、解答エリアに2つの入力ボックスの合計値を表示してください。</b>
                           </p>
                           <p>
                               ・index.html のコードを参照しながら、クリックした時のイベントを取得します。<br>・DOMを使って2つの入力ボックスの値を取得します。<br>・解答エリア部分にDOMを使って合計値を表示させます。
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>2つの入力ボックスどちらかの値が変更される度に、解答エリアに更新された合計値を表示してください。</b>
                           </p>
                           <p>
                               ・index.htmlのコードを参照しながら、値が変わった時のイベントを取得します。<br>・DOMを使って2つの入力ボックスの値を取得します。<br>・解答エリア部分にDOMを使って合計値を表示させます。
                           </p>
                       </li>
                       <li class="list">
                           <p>
                               <b>画像「img_1jpg」にマウスが当たった時に、画像「img_2.jpg」に切り替わり、離れた時に元の画像を表示されるようにしてください。</b>
                           </p>
                           <p>
                               ・index.htmlのコードを参照しながら、マウスが当たった時と離れた時のイベントを取得します。<br>・DOMを使って画像の情報を取得します。<br>・イベントによって画像のパスを切り替えます。
                           </p>
                       </li>
                   </ol>
            </div>
            
            <div class="box-child__content">
                
               <h4><span>課題5.</span>フォーム操作</h4>
               <p>
                   下記の情報を参考にしながら<b>「app.js」</b>（必要であれば index.html）に処理を記述し、<b>「index.html」</b>を完成させてください。<br>※app.jsにのみ記述、index.htmlとapp.js両方に記述する2つの方法がありますが、どちらの方法を使ってもOKとします。
               </p>
                   <ol>
                       <li>
                           <p>
                               <b>「登録する」ボタンをクリックした時に、確認ダイアログを表示してください。</b>
                           </p>
                           <p>
                               ・index.htmlのコードを参照しながら、クリックした時のイベントを取得します。<br>・<b>confirm()</b>を使用し「登録します。よろしですか？」という文字をダイアログで出力します。<br>・ダイアログがキャンセルされた時に、<b>alert()</b>を使用し「キャンセルされました」という文字をダイアログで出力します。
                           </p>
                       </li>
                       <li>
                           <p>
                               <b>「登録する」ボタンをクリックした時に、確認ダイアログがOKなら入力項目をダイアログで表示してください。
                               </b></p>
                           <p>・index.htmlのコードを参照しながら、DOMを使って2つの入力ボックス、セレクトボックスの値を取得します。<br>・alert()を使用し、3つの値をダイアログで出力します。
                           </p>
                       </li>
                       <li>
                           <p>
                               <b>「登録する」ボタンをクリックした時に、必須項目が入力されていなければダイアロを表示してください。</b>
                           </p>
                           <p>
                               ・index.htmlのコードを参照しながら、DOMを使って2つの入力ボックスの値を取得します。<br>・取得した値を判定し、入力されていなければ<b>alert()</b>を使用し、「【入力されてない項目名】が入力されていません」をダイアログで出力します。
                           </p>
                       </li>
                    </ol>
            </div>
        </div>

        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>_answer.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
            
            <div class="box-child__content">
                <h4><span>課題1.</span>JavaScriptの記述場所</h4>
                <p>
                    ダウンロードした教材に対し、2つの記述パターンでjs（JavaScript）のコードを反映させてみましょう。<br>下記の情報を参考に、ページを完成させてください。
                </p>
                <br>
                    <ol class="list">
                        <li class="list">
                            <p>
                                <b>「index.html」に直接jsのコードを記述し、ページが表示される時にダイアログを表示してください。</b>
                            </p>
                            <p>
                                <b>・alert()</b>を使用し、「課題1-1」という文字をダイアログで出力します。
                            </p>
                        </li>
                    
                            <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img1.png');?>" alt="img1s" style="width:38%;">
                            </div>        
                            <br>
                            <br>
                        <li class="list">
                            <p>
                                <b>「js/app.js」を「index.html」から読み込み、ページが表示される時にコンソールに出力してください。
                                </b>
                            </p>
                            <p>
                                <b>・console.log()</b>を使用し、「課題1-2」という文字をコンソールに出力します。<br>※コンソールは、開発者ツールから確認する事ができます。
                            </p>
                        </li>
                        <br>
            
                            <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img2.png');?>" alt="img2" style="width:38%;">
                            </div>
                            <br>
                            <br>
                    </ol>
                
                <p>
                    <b class="error-message">【解説】</b>
                </p>
                <br>
                    <p>
                        ※ソースコードは解答用の教材ファイルを参照してください。
                    </p>
                    <br>
                        <ol class="list">
                            <li class="list">
                                <p>
                                    <b>「index.html」に直接jsのコードを記述し、ページが表示される時にダイアログを表示してください。</b>
                                </p>
                                <p>
                                    「index.html」
                                </p>
                                
<pre class="lang-html prettyprint">
～ 省略 ～
  &lt;script&gt;
    alert("課題 1-1");
  &lt;/script&gt;
&lt;/body&gt;
</pre>
                               <p>
                                   jsコードをHTMLファイルに直書きするには、コード部分を&lt;script&gt;タグで囲う必要があります。<br>コードは色々な場所に記述する事ができますが、&lt;body&gt;タグの直前に書く事で、画面の読込みが完了した後にjsを実行する事ができます。<br>alert()を使用してダイアログを表示する事ができます。<br>コードの終端はセミコロン（;）で閉じるのを忘れないようにしましょう。
                               </p>
                               <br>
                     
                           <li class="list">
                               <p>
                                   <b>「js/app.js」を「index.html」から読み込み、ページが表示される時にコンソールに出力してください。</b>
                               </p>
                               <p>
                                   「index.html」
                               </p>
                               
<pre class="lang-html prettyprint">
～ 省略 ～
  &lt;script src="./js/test.js"&gt;&lt;/script&gt;
&lt;/body&gt;
</pre>
                               <p>
                                   「app.js」
                               </p>
                               
<pre class="lang-js prettyprint">
 console.log("課題 1-2");
</pre>                             
                               <p>
                                   JSファイルをHTMLファイルから読込むには、&lt;script&gt;にsrc属性でファイルが配置されている場所を指定してあげる必要があります。<br>課題1-1同様に&lt;body&gt;タグの直前に書く事で、画面の読込みが完了した後にjsを実行する事ができます。<br>console.log()を使用して、出力したログを開発者ツールで確認する事ができます。
                               </p>
                               <br>
                               <b class="error-message">・POINT・開発者ツール</b>
                               <br>
                               <br>
                               <p>
                                   あまり馴染みのない「コンソール」という言葉ですが、簡単に言うとプログラミング時の確認機能です。<br>これからWeb制作をしていく上で必ず必要になってくるので開発者ツールと合わせて紹介しておきます。<br>開発者ツールは、HTML、CSS、JavaScriptなどフロントエンド開発には欠かせないツールです。<br>ほとんどのWebブラウザに標準で搭載されていますが、ここではGoogleChromeを使って進めていきます。<br>サーバーとのデータ通信など、今の段階でわからない言葉もいくつか出てくると思いますが、JavaScriptのスキルが上がるにつれて、少しずつ使える機能も増えていくはずです。
                               </p>
                               <p>
                                   <b>-Google Chromeでの起動方法-</b>
                               </p>
                               <p>
                                   Web画面から以下の操作で起動する事ができます。<br>[Google Chromeの設定] → [その他のツール] → [デベロッパーツール]もしくは「F12」キー開発者ツールを起動すると最上部にメニュータブが表示されていると思います。<br>タブによって機能が分かれているので、よく使われるタブをいくつか紹介します。
                               </p>
                               <p>
                                   <b>- Elements -</b>
                               </p>
                               <p>
                                   HTMLのソースをツリー表示できます。<br>JavaScriptで動的に操作された結果が反映されているので、スクリプトの実行結果も確認する事ができます。
                               </p>
                               <p>
                                   <b class="error-message">- Console –</b>
                               </p>
                               <p>
                                   <b>今回必ず覚えてほしい機能で、先程の課題もこのメニューから確認する事ができます。</b><br>デバッグに欠かせない主な2つの役割があり、1つはエラーメッセージやログの確認、もう一つは対話的にJavaScriptのコードを実行する事ができます。
                               </p>
                               <p>
                                   <b>- Sources -</b>
                               </p>
                               <p>
                                   JavaScriptのデバッグツールとして使用する事ができます。<br>コード左の行番号をクリックする事で、ブレイクポイントを設置できます。<br>ブレイクポイントとは、実行中にスクリプトを一時停止させるための機能、または停止させるポイントのことです。<br>デバッグでは、ブレイクポイントでスクリプトを中断させながら、処理の状態を確認していくのが基本です。
                               </p>
                               <p>
                                   <b>- Network -</b>
                               <p/>
                               <p>
                                   ブラウザ上で発生した通信を確認できます。<br>特にAjaxによって発生した非同期通信時に発生したデータのリクエストとレスポンスが確認できる為、テストツールとしても使用する事ができます。<br>Timelineでは、ダウンロードにかかった時間も表示されるので、表示のボトルネックとなっている要素を特定するのにも利用できます。
                               </p>
                               <p>
                                   <b>- Application -</b>
                               </p>
                               <p>
                                   現在のページを構成するファイルのほか、ストレージやクッキーの情報も確認する事ができます。
                               </p>
                           </li>
                       </ol>
            </div>
        
            <div class="box-child__content">
                <h4><span>課題2.</span>変数／関数</h4>
                <p>
                    ここからの課題は全て「js/app.js」に処理を記述していきます。<br>下記の情報を参考にしながら<b>「app.js」</b>に処理を記述し、<b>「index.html」</b>を完成させてください。
                </p>
                <ol class="list">
                    <li class="list">
                        <p>
                            <b>変数「num」を初期値「1000」で宣言し、ページが表示される時にコンソールに変数「num」を出力してください。</b>
                        </p>
                        <p>
                            <b>・console.log()</b>を使用し、変数「num」を出力します。
                        </p>
                    </li>
                    <li class="list">
                        <p>
                            <b>変数「str1」の初期値を「こんにちは」、変数「str2」の初期値を「花子さん」と宣言し、ページが表示される時に2つの変数を連結した値をコンソールに出力してください。</b>
                        </p>
                        <p>
                            ・変数「str1」、変数「str2」を宣言し、連結した文字を<b>console.log()</b>を使用して出力します。
                        </p>
                    </li>
                    <li class="list">
                        <b>四角形の面積を求める関数「getSquare」、変数「width」、「height」を宣言し、好きな値を代入してください。<br>
                            変数「width」、「height」を関数「getSquare」の引数に渡し、合計面積をコンソールに出力してください。</b>
                        <p>
                           ・第一引数に横幅、第二引数に縦幅を取り、引数で取得した値を元に四角形の合計面積を戻り値として返却する関数「getSquare」を定義します。<br>
                            ・変数「width」、「height」を宣言し、好きな数値を代入します。<br>
                            ・関数「getSquare」に変数「width」、「height」を渡し、<b>console.log()</b>を使って合計面積を出力します。
                        </p>
                    </li>
                </ol>
                <div class="imgcenter">
                    <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img3.png');?>" alt="img3" style="width:38%;">
                </div>
                    <br>
                
                <p>
                    <b class="error-message">【解説】</b>
                </p>
                <br>
                <p>
                    ※ソースコードは解答用の教材ファイルを参照してください。
                </p>
                    <ol>
                        <li class="list">
                            <p>
                                <b>変数「num」を初期値「1000」で宣言し、ページが表示される時にコンソールに変数「num」を出力してください。</b>
                            </p>
                            <p>「app.js」</p>
                            
<pre class="lang-js prettyprint">
var num = 1000;
console.log(num);
</pre>
                        </li>
                        <li class="list">
                            <p>
                                <b>変数「str1」の初期値を「こんにちは」、変数「str2」の初期値を「花子さん」と宣言し、ページが表示される時に2つの変数を連結した値をコンソールに出力してください。</b>
                            </p>
                            <p>
                                「app.js」
                            </p>
<pre class="lang-js prettyprint">
var str1 = "こんにちは";
var str2 = "花子さん";
console.log(str1 + str2);
</pre>
                            <p>
                                jsで文字列同士を連結する場合は、「＋」を使ってつなげる事ができます。
                            </p>
                        </li>
                        <li class="list">
                            <p>
                                <b>四角形の面積を求める関数「getSquare」、変数「width」、「height」を宣言し、好きな値を代入してください。<br>変数「width」、「height」を関数「getSquare」の引数に渡し、合計面積をコンソールに出力してください。</b>
                            </p>
                            <p>
                                「app.js」
                            </p>
                            
<pre class="lang-js prettyprint">
// 四角形の面積を求める関数 getSquare
function getSquare(width, height) {
    var area = width * height;
    return area;
}
// 変数の値は自由に設定
var width = 100;
var height = 50;

console.log(getSquare(width, height));
</pre>
<br>
                            <p>
                                <b class="error-message">・POINT・変数／関数について</b>
                            </p>
                            <p>
                                <b>- 変数 -</b><br>変数とは、一言で言えば「データの入れ物」です。<br>データを一時的に保存するのが、変数の役割になります。<br>変数を利用するには、あらかじめ変数を宣言しておく必要があります。<br>変数を宣言する事で変数名をJavaScript に登録し、値を格納する為の領域をメモリ上に確保する事ができます。<br>他の言語には変数を宣言する為の型が必要になりますが、JavaScriptでは全て「var」で宣言する事ができます。
                            </p>
                            <p>
                                var変数名;もしくはvar変数名 = 初期値;として初期値を設定する事ができます。<br>例)
                            </p>
<pre class="lang-js prettyprint">
var testName = "Yamada";
var testNumber = 1000;
</pre>
<br>
                            <p>
                                JavaScriptでは、明示的にvarを宣言しなくても変数に値が代入されたタイミングで暗黙的に変数を宣言してくれます。<br><br>
                                <b><font color="#99CCFF">変数名</font>=<font color="#99CCFF">初期値</font>;</b><br><br>
                                しかし、宣言の省略は原則行わず、常にvarを使う癖をつけておきましょう。<br>
                                JavaScriptは比較的自由に変数名をつける事ができますが、命名規則として以下の4項目を覚えておきましょう。
                            </p>
                        </li>
                    </ol>
                    <ol class="list">
                        <li class="list">
                            <p>
                                1文字目は、英字、_(アンダースコア)、$(ドルマーク)のいずれかであること
                            </p>
                        <li class="list">
                            <p>
                                2文字目以降は、1文字目で使える文字、もしくは数字のいずれかであること
                            </p>
                        <li class="list">
                            <p>
                                変数名に含まれる英字の大文字/小文字は区別される
                            </p>
                        <li class="list">
                            <p>
                                JavaScriptで使用されている予約語ではないこと（if、forなど）
                            </p>
                    </ol>
                <p>
                    ※予約語の一覧はWEB情報や書籍などで参照<br>
                    その他にも読みやすいコードを実装する為のコーディング規約的な記法も参考にしましょう。
                </p>
                    <ol class="list">
                        <li class="list">
                            <p>
                                変数名からデータの中身が推察しやすい
                            </p>
                        <li class="list">
                            <p>
                                長すぎず短すぎず、記述しやすい
                            </p>
                        <li class="list">
                            <p>
                                基本的には英単語とする
                            </p>
                        <li class="list">
                            <p>
                                camelCase記法を使用する
                            </p>
                    </ol>
                <p>
                    camelCase記法とは、先頭単語の頭文字は小文字、それ以降の単語の頭文字は大文字という記法です。<br>例えば、「firstName」、「lastDate」などが該当します。<br>絶対というわけではありませんが、記法を統一する事で自分がコードを読み返す時はもちろん、他の人がコードを解読する時もルールとして決まっていれば可読性を上げる事ができます。
                </p>
                <p>
                    <b>- 関数 -</b><br>関数とは、与えられたパラメーターに基づいてなんらかの処理を行い、その結果を返す機能の事です。<br>JavaScriptは、デフォルトでも多くの関数が用意されていますが、開発者が自分で関数を定義する事も可能です。<br>これを標準の関数と区別して、ユーザー定義関数といいます。<br>関数の定義はいくつか記述方法がありますが、ここでは一番基本的な「function命令での定義」を使って説明していきます。<br>下記コードが関数の記述方法になります。
                </p>
                
<pre class="lang-js prettyprint">
function 関数名(引数 1, 引数 2,…) {
    関数内での処理
    return 戻り値;
}
</pre>
<br>

                <p>
                    前項の変数名と同様に、関数名も読みやすいコードを実装する為のコーディング規約的な記法を参考にしましょう。
                </p>
                    <ol class="list">
                        <li class="list">
                            <p>
                                その関数がどのような処理を担っているのかすぐに理解できる
                            </p>
                        <li class="list">
                            <p>
                                動詞+名詞の形式で命名
                            </p>
                        <li class="list">
                            <p>
                                camelCase記法を使用する
                            </p>
                <p>
                    関数は、様々な処理を担当する部分なので、変数名のような名詞だけでつけられる事は少ないと思います。<br>例えば、メッセージを出力する為の関数であれば、show+messageとし、これをcamelCase記法で記述すると、showMessageとなります。
                </p>
                <p>
                   例）<br>四角形の面積を求める関数
                </p>
                
<pre class="lang-js prettyprint">
function getSquare(width, height) {
    var area = width * height;
    nreturn area;
}
</pre>
<br>
                            <p>
                               オブジェクト指向の第一歩かもしれませんが、関数の基本的な考え方は共通化です。<br>関数を定義しておく事で、よく使う処理を何度も記述しなくて済むようになります。<br>処理を一ヶ所にまとめる事によって、処理内で変更があった場合も修正が一ヶ所で済むという事です。
                            </p>
                    </ol>
            </div>
        
            <div class="box-child__content">
                <h4><span>課題3.</span>DOM操作</h4>
                <p>
                    下記の情報を参考にしながら<b>「app.js」</b>（必要であれば index.html）に処理を記述し、<b>「index.html」</b>を完成させてください。<br>※app.js にのみ記述、index.htmlとapp.js両方に記述する2つの方法がありますが、どちらの方法を使ってもOKとします。
                </p>
                    <ol class="list">
                        <li class="list">
                            <p>
                                <b>文字列「はじめまして」を、ページが表示される時に文字列「さようなら」に変更してください。</b>
                            </p>
                            <p>
                                ・ページが読み込まれたタイミングでDOMを使って「はじめまして」を「さようなら」に変更します。
                            </p>
                        <li class="list">
                            <p>
                                <b>文字列「こんにちは」の文字色を、ページが表示される時に「黒(#000000)」から「赤(#ff0000)」に変更してください。</b>
                            </p>
                            <p>
                                ・ページが読み込まれたタイミングでDOMを使って「こんにちは」の文字色を赤に変更します。
                            </p>
                        <li class="list">
                            <p>
                                <b>リンク「Amazon」を、ページが表示される時にリンク先を「https://yahoo.co.jp」に変更してください。</b>
                            </p>
                            <p>
                                ・ページが読み込まれたタイミングでDOMを使ってリンク「Amazon」のリンク先を変更します。
                            </p>
                        </li>
                        <br>
                               
                    <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_4/img4.png');?>" alt="img4" style="width:38%;">
                    </div>
                    <br>
                    <br>
                        
                    </ol>
                <p>
                    <b class="error-message">【解説】</b><br>
                </p>
                <br>
                <p>
                ※ソースコードは解答用の教材ファイルを参照してください。
                </p>
                    <ol class="list">
                        <li class="list">
                            <p>
                                <b>文字列「はじめまして」を、ページが表示される時に文字列「さようなら」に変更してください。</b>
                            </p>
                            <p>
                                「app.js」
                            </p>
<pre class="lang-js prettyprint">
var elem1 = document.getElementById('test3_result1');
elem1.textContent = 'さようなら';
</pre>
                        </li>
                           
                        <li class="list">
                            <p>
                                <b>文字列「こんにちは」の文字色を、ページが表示される時に「黒(#000000)」から「赤(#ff0000)」に変更してください。</b>
                            </p>
                            <p>
                                「app.js」
                            </p>
<pre class="lang-js prettyprint">
var elem2 = document.getElementById('test3_result2');
elem2.style.color = '#ff0000';
</pre>
                           
                        <li class="list">
                            <p>
                                <b>リンク「Amazon」を、ページが表示される時にリンク先を「https://yahoo.co.jp」に変更してください。</b>
                            </p>
                        <p>
                            「app.js」
                        </p>
<pre class="lang-js prettyprint">
var elem3 = document.getElementById('test3_result3');
elem3.setAttribute('href', 'https://yahoo.co.jp');
</pre>
                        </li>
<br>
                    </ol>
                
                <p>
                    <b class="error-message">・POINT・DOMについて</b><br>
                </p>        
                    <p>
                        JavaScriptからHTMLを編集する為には、DOM（Document Object Model）という仕組みを使います。<br>DOMは、HTMLやXMLなどのマークアップ言語で書かれたドキュメントにアクセスする為の標準的な仕組みで、JavaScriptに限らず現在よく利用されている言語のほとんどがサポートしています。<br>DOMでは、文書に含まれる要素や属性、テキストをそれぞれオブジェクトとみなし、オブジェクトの階層関係と考えます。<br>文書を構成する要素や属性、テキストといったオブジェクトのことをノードとも呼びます。<br>オブジェクトの概念はもう少し経験を積んでからの方が理解しやすいので、ここではノードというキーワードを覚えておきましょう。<br>ノードは、ツリー構造のような階層関係にあるものです。
                    </p>
                        <p>・ノードの種類</p>
                            <table>
                                <tr>
                                    <td>
                                        ルートノード
                                    </td>
                                    <td>
                                        ツリーの最上位に位置するノード
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        親ノード/子ノード
                                    </td>
                                    <td>
                                       上下関係にあるノード。<br>直接つながっているノードで、ルートノードに近いノードを親ノード、遠いノードを子ノード
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        兄弟ノード
                                    </td>
                                    <td>
                                        同じ親を持つノード同士
                                    </td>
                                </tr>
                            </table>
                            <br>
                           
                           <p><b>- 要素の取得 -</b></p>
                           <p>
                               HTMLを操作する為には、まずはどの部分に処理を反映させるかを指定しなければならないのですが、その指定を要素ノードで行います。<br>要素ノードを取得する事がDOM操作の基点になります。<br>JavaScriptで要素を取得するにはいくつか方法がありますが、ここでは実務で使う事が多い方法を挙げておきます。<br><br>
                               <b>・タグのid属性値をキーに、要素を取得する<br>document.getElementById(<font color="#99CCFF">取得したいタグのid値</font>)</b>
                           </p>
                           <p>
                               「html」
                           </p>
<pre class="lang-html prettyprint">
&lt;div id="test1"&gt;aaa&lt;/div&gt;
</pre>
                           <p>
                               「js」
                           </p>
<pre class="lang-js prettyprint">
var test1 = document.getElementById("test1");
</pre>

                           <p>
                               <b>・タグのname属性値をキーに、要素を取得する<br>document.getElementsByName(<font color="#99CCFF">取得したいタグのname値</font>)</b>
                           </p>
                           <p>
                               「html」
                           </p>
<pre class="lang-html prettyprint">
&lt;div name="test2"&gt;bbb&lt;/div&gt;
&lt;div name="test2"&gt;ccc&lt;/div&gt;
</pre>
                           <p>
                               「js」
                           </p>
<pre class="lang-js prettyprint">
var test2 = document.getElementsByName("test2");
</pre>
            
                           <p>
                               <b>-タグのclass属性値をキーに要素を取得する-<br>document.getElementsByClassName(<font color="#99CCFF">取得したいタグのclass値</font>)</b>
                           </p>
                           <p>
                               「html」
                           </p>
<pre class="lang-html prettyprint">
&lt;div name="test3"&gt;
  &lt;p class="css1"&gt;ccc&lt;/p&gt;
  &lt;p class="css1"&gt;ddd&lt;/p&gt;
  &lt;p class="css1"&gt;eee&lt;/p&gt;
&lt;/div&gt;
</pre>
                           <p>
                               「js」
                           </p>
<pre class="lang-js prettyprint">
var test3 = document.getElementsByClassName ("test3");
            
// 取得した要素群test3を1つずつ取得
for (var i = 0; I &lt; test3.length; i++) {
    test3.item(i).値の操作を記述;
}
</pre>
<br>
                     
                           <p>
                               id値は、ページ内で1つしか存在しない為、取得要素数は1になりますが、name値とclass値は複数の要素が存在する為、要素群をfor文などで回して要素を1つずつ取得する必要があります。
                           </p>
                           <p>
                               以上3つが基本となる取得方法です。
                           </p>
                           <p>
                               取得メソッドの前にdocumentがついていますが、これはdocumentオブジェクト内で定義されているメソッド群の為、このような記法になっています。<br>この3つ以外にも、CSSのセレクター記述を使った「querySelector」や「querySelectorAll」なども用意されていますので、取得方法に慣れてきたら試してみましょう。
                           </p>
                           <p>
                               <b>- 値の操作 -</b><br>取得した要素に対して、値の取得や設定を行います。ここでは実装によく使われ、且つ
                               値操作の基本となる属性、テキスト、スタイルの操作を説明します。
                           </p>
                           <p>
                               <b>・属性値の操作</b><br>属性値を取得：<font color="#99CCFF">要素</font>.getAttribute("<font color="#99CCFF">属性名</font>");<br>属性値を設定：<font color="#99CCFF">要素</font>.setAttribute("<font color="#99CCFF">属性名</font>", "<font color="#99CCFF">設定値</font>");<br>属性を削除：<font color="#99CCFF">要素</font>.removeAttribute("<font color="#99CCFF">属性名</font>");
                           </p>
                           <p>
                               「html」
                           </p>
<pre class="lang-html prettyprint">
&lt;div id="test4"&gt;
  &lt;a href="https://google.co.jp">googleリンク&lt;/a&gt;
&lt;/div&gt;
</pre>
                           <p>
                               「js」
                           </p>
<pre class="lang-js prettyprint">
// getElementById を使って要素を取得
var test4 = document.getElementById("test4");
// a タグの href 属性値を取得 https://google.co.jp
var link1 = test4.getAttribute("href");
// a タグの href 属性値を設定
test4.setAttribute("href", "https://yahoo.co.jp");
// a タグの href 属性を削除
test4.removeAttribute("href");
</pre>
<br>
                           <p>
                               <b>・テキストの操作</b>
                           </p>
                           <p>
                               要素配下のテキストを取得／設定するには、「textContent」もしくは「innerHTML」というプロパティを利用します。<br>innerHTMLは、与えられたテキストをHTML文字列として認識するので、入力値にスクリプトを埋め込む事などもできてしまいます。<br>その為、セキュリティ上ユーザーから入力された値をそのまま取得しないようにする必要があります。<br>そのようなリスクを回避でき、且つ高速なtextContentを優先して利用するようにしましょう。
                           </p>
                           <p>
                               「html」
                           </p>
<pre class="lang-html prettyprint">
&lt;div id="test5"&gt;このテキストを操作&lt;/div&gt;
</pre>
                           <p>
                               「js」
                           </p>
<pre class="lang-js prettyprint">
// getElementById を使って要素を取得
var test5 = document.getElementById("test5");
// div タグ内のテキストを変更
test5.textContent = "新しいテキスト";
</pre>
                           <p>
                               <b>・スタイルの操作</b>
                           </p>
                           <p>
                               JavaScriptでスタイルを操作するには2つの方法があります。
                           </p>
                               <ol class="list">
                                   <li class="list">
                                       <p>
                                           インラインスタイルで操作する
                                       </p>
                                       <p>
                                           インラインスタイルとは、個々の要素（タグ）に対してstyle属性で設定されているスタイルの事です。<br><font color="#99CCFF">要素</font>.style.<font color="#99CCFF">スタイルプロパティ</font>;
                                       </p>
                                    
                                       <p>
                                           「html」
                                       </p>       
<pre class="lang-html prettyprint">
&lt;div id="test6"&gt;このテキストを操作&lt;/div&gt;
</pre>
                                       <P>
                                           「js」
                                       </P>
<pre class="lang-js prettyprint">
// getElementById を使って要素を取得
var test6 = document.getElementById("test6");
// div タグにインラインスタイルを追加し、背景色を赤に設定
test6.style.backgroundColor = "#ff0000";
</pre>
<br>
                                       <p>
                                           プロパティの指定は、基本的にCSSプロパティ名の「ハイフン（-）を取り除いて、2単語目以降の頭文字が大文字」になります。<br>ただし、例外のプロパティもあるという事と、CSSのプロパティ記述名が一致していない事にやや使いづらさを感じます。
                                       </p>
                                   </li>
                                       <br>
                                   <li class="list">
                                       <p>
                                           外部のスタイルシートを適用する
                                       </p>
                                       <p>
                                           個々の要素（タグ）に対してclass属性を設定する事ができます。<br>CSSで記述したクラス名でスタイルを切り替える方法です。
                                       </p>
                                       <p>
                                           「html」
                                       </p>
<pre class="lang-html prettyprint">
&lt;div id="test7"&gt;このテキストを操作&lt;/div&gt;
</pre>
                                       <p>
                                           「css」
                                       </p>
<pre class="lang-css prettyprint">
.class2 { background-color:#ff0000; }
</pre>
                                       <p>
                                           「js」
                                       </p>
<pre class="lang-js prettyprint">
// getElementById を使って要素を取得
var test7 = document.getElementById("test7");
// div タグに class 属性を追加し、背景色を赤に設定
test6.className = "class2";
</pre>
                                   </li>
                               </ol>
                               <br>
                           <p>
                               以上2つの方法を説明しました。<br>1はJavaScriptで指定するプロパティ名を覚えなければならない事と、CSSの学習時にも書いたようにスタイル定義とスクリプトが混在する事で保守性を下げてしまうという事にもなります。<br>小規模なページなら良いかもしれませんが、ある程度の規模で実装する場合は2を使うようにしましょう。
                           </p>
                           
            </div>
            
            <div class="box-child__content">
               <h4><span>課題4.</span>ユーザー操作</h4>
               <p>
                   下記の情報を参考にしながら<b>「app.js」</b>に処理を記述し、<b>「index.html」</b>を完成させてください。<br>※app.js にのみ記述、index.htmlとapp.js両方に記述する2つの方法がありますが、どちらの方法を使ってもOKとします。
               </p>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>「結果出力」ボタンをクリックした時に、ダイアログを表示してください。</b>
                           </p>
                           <p>
                               ・index.htmlのコードを参照しながら、alert()を使用し「課題4-1」という文字をダイアログで出力します。
                           </p>
                       </li>
                       <li class="list">
                            <p>
                                <b>「結果出力」ボタンをクリックした時に、解答エリアに2つの入力ボックスの合計値を表示してください。</b>
                            </p>
                            <p>
                                ・index.html のコードを参照しながら、クリックした時のイベントを取得します。<br>・DOMを使って2つの入力ボックスの値を取得します。<br>・解答エリア部分にDOMを使って合計値を表示させます。
                            </p>
                       </li>
                       <li class="list">
                            <p>
                                <b>2つの入力ボックスどちらかの値が変更される度に、解答エリアに更新された合計値を表示してください。</b><br>・index.htmlのコードを参照しながら、値が変わった時のイベントを取得します。<br>・DOMを使って2つの入力ボックスの値を取得します。<br>・解答エリア部分にDOMを使って合計値を表示させます。
                            </p>
                       </li>
                       <li class="list">
                            <p>
                                <b>画像「img_1jpg」にマウスが当たった時に、画像「img_2.jpg」に切り替わり、離れた時に元の画像を表示されるようにしてください。</b>
                            </p>
                            <p>
                               ・index.html のコードを参照しながら、マウスが当たった時と離れた時のイベントを取得します。<br>・DOM を使って画像の情報を取得します。<br>・イベントによって画像のパスを切り替えます。
                            </p>
                       </li>       
                   </ol>
                   <br>
                   <p>
                       <b class="error-message">【解説】</b>
                   </p>
                   <br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。
                   </p>
                   <br>
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>「結果出力」ボタンをクリックした時に、ダイアログを表示してください。</b><br>
                               </p>
                               <p>
                                   「app.js」
                               </p>
<pre class="lang-js prettyprint">
var elem4 = document.getElementById('test4_event1');
elem4.addEventListener('click', function () {
    alert('課題 4-1');
});
</pre>
<br>
                   <p>
                       ここではイベントリスナーで「クリック」イベントを取得しています。<br>変数「elem4」には「結果出力」ボタンのタグ情報が入っています。
                   </p>
                           </li>
                           <li class="list">
                               <p>
                                   <b>「結果出力」ボタンをクリックした時に、解答エリアに2つの入力ボックスの合計
                                       値を表示してください。</b><br>
                               </p>
                               <p>
                                   「app.js」
                               </p>
<pre class="lang-js prettyprint">
var elem5 = document.getElementById('test4_val1');
var elem6 = document.getElementById('test4_val2');
var elem7 = document.getElementById('test4_event2');
var elem8 = document.getElementById('test4_result2');

elem7.addEventListener('click', function () {
    elem8.textContent = Number(elem5.value) + Number(elem6.value);
});
</pre>
                           </li>
<br>
                   <p>
                       ここもイベントリスナーで「クリック」イベントを取得しています。<br>今回はわかりやすいよう処理に関係する全てのタグ情報を変数に格納しています。<br>入力ボックスの値は「value」で取得する事ができるのですが、取得したまま＋してしまうと文字列として扱われる為、Number()で一度数値に変換してから加算しています。
                   </p>

                            <li class="list">
                                <p>
                                    <b>2つの入力ボックスどちらかの値が変更される度に、解答エリアに更新された合計値を表示してください。</b>
                                </p>
                                <p>
                                    「index.html」
                                </p>
<pre class="lang-html prettyprint">
～ 省略 ～
&lt;p&gt;
  &lt;input type="text" id="test4_val3" value="0" onchange="changeNum();" /&gt;
  &nbsp;+&nbsp;
  &lt;input type="text" id="test4_val4" value="0" onchange="changeNum();" /&gt;&nbsp;
  &lt;b&gt;解答：&lt;/b&gt;&lt;span id="test4_result3"&gt;0&lt;/span&gt;
&lt;/p&gt;
</pre>
                                <p>
                                    「app.js」
                                </p>
<pre class="lang-js prettyprint">
function changeNum() {
    var elem9 = document.getElementById('test4_val3');
    var elem10 = document.getElementById('test4_val4');
    var elem11 = document.getElementById('test4_result3');

    elem11.textContent = Number(elem9.value) + Number(elem10.value);
}
</pre>
                           </li>
<br>
                   <p>
                       今までの2つの取得方法とは違い、イベントハンドラ方式でイベントを取得しています。<br>対象となるタグにイベントを直接記述し、JSファイルにイベント用の関数を定義してあります。
                   </p>
                            <li class="list">
                                <p>
                                    <b>画像「img_1jpg」にマウスが当たった時に、画像「img_2.jpg」に切り替わり、離れた時に元の画像を表示されるようにしてください。</b><br>
                                </p>
                                <p>
                                    「index.html」
                                </p>
 <pre class="lang-html prettyprint">
～ 省略 ～
&lt;div&gt;
  &lt;img id="test4_img4" src="./img/img_1.jpg" onmouseover="changeImage('img_2.jpg');" onmouseout="changeImage('img_1.jpg');" /&gt;
&lt;/div&gt;
</pre>
                                <p>
                                    「app.js」
                                </p>
<pre class="lang-js prettyprint">
function changeImage(imgFile) {
    var imagePath = document.getElementById('test4_img4');
    imagePath.src = './img/' + imgFile;
}
</pre>
                           </li>
                       </ol>
                       <br>
                   <p>
                       ここでもイベントハンドラ方式でイベントを取得しています。<br>マウスが当たった時と離れた時のイベントを&lt;img&gt;タグ内に記述して、イベントが発火した時にJSファイルに定義してある関数「changeImage」が呼び出され、処理を行います。
                   </p>
                   <br>
                   <p>
                       <b class="error-message">・POINT・イベントについて</b><br>
                   </p>
                
                   <p>
                       JavaScriptは、クライアント言語と言われている事もあり、ユーザーが操作したイベントを取得する機能が用意されています。<br>・ボタンがクリックされた<br>・マウスポインタ-が画像に乗った、外れた<br>
                       など、ユーザーの操作によって様々なイベントが発生します。<br>この時、各イベントに対して処理内容を定義するコードのかたまり（関数）の事をイベントハンドラと言います。
                   </p>
                   <br>
                   <p>
                       例）<br>該当箇所でマウスをクリックした時 <b>onclick</b><br>該当箇所でキーボードを押した時 <b>onkeydown</b><br>
                       など、様々なイベントハンドラが用意されています。<br>マウスやキーボードからのアクションによって発生するものだけでなく、webブラウザから自動的に呼び出されるイベントもあります。<br>イベントハンドラの一覧をWeb情報や書籍などから確認しておきましょう。
                   </p>

                   <p>
                       <b>- イベントの取得方法 -</b><br>イベントハンドラの記述にはいくつか方法がありますが、ここでは基本的な宣言方法として、「HTMLタグ内の属性として宣言する」方法を説明します。
                   </p>
                   <p>
                       <b><font color="#99CCFF">&lt;HTMLタグ名イベントハンドラ</font>="<font color="#99CCFF">JavaScript処理コードor関数名</font>"&gt;</b><br><br>HTMLタグは、基本的にトリガーとして使えるようなタグが対象となります。<br>Inputタグ、imgタグ、aタグなども使う事ができます。<br>イベントハンドラは「onclick」などハンドラの種類を記述します。<br>処理内容に関しては、1行で済むような短い処理であれば直接記述する事もできますが、レイアウトとスクリプトが混在してしまうとコードの可読性が落ちてしまう為、あまりおすすめはできません。<br>できるかぎり処理は外出し（関数）にしましょう。<br>タグ内の属性値を引数として関数に渡す事もできます。
                   </p>
                   <br>
                
                   <p>
                       例）ボタンをクリックされたら、メッセージを出力する為の関数showMessage();を呼び出す<br>
                   </p>
<pre class="lang-js prettyprint">
&lt;input type="button" onclick="showMessage();"&gt;
</pre>
                   <p>
                       ※showMessage関数は外部ファイルに記述
                   </p>
                   <br>
                
                   <p>
                      <b>- イベントリスナー -</b><br>
                      現在はイベントハンドラで処理を記述するよりも、イベントリスナーで処理を記述するやり方が主流になっています。<br>記法の違いとしては、HTMLタグにイベントを記述する必要がない事や１つのタグに対して複数のイベントを紐づけられる（イベントハンドラではできない）などのメリットがあります。<br>
                      イベントハンドラはイベントに対して紐付けられる処理なので複数記述する事できませんが、イベントリスナーはイベントにイベントハンドラを紐付ける、言わばイベントハンドラの前段階という事になります。<br>やや記述方法が難しいですが、今後はなるべくこっちを優先して書けるようにしましょう。<br>
                   </p>
                
                   <p>
                       <b>element.addEventListener("<font color="#99CCFF">イベント</font>" , 関数);</b><br><br>取得したエレメントに対してイベントリスナーを登録します。
                   </p>
                   <p>第一引数にはリスナー用のイベント、第二引数には処理用の関数を記述します。<br>※イベントは、ハンドラと基本的に一緒ですが、先頭の「on」が付いてないなどの違いがあります。
                   </p>
                   <p>
                       「html」
                   </p>
                
<pre class="lang-html prettyprint">
&lt;button id="test5" value="ボタン" /&gt;
</pre>
                   <p>
                       「js」
                   </p>
<pre class="lang-js prettyprint">
// getElementById を使って要素を取得
var elem = document.getElementById("test5");
// 取得したエレメントに対して、イベントリスナーを登録
elem.addEventListener("click" , 関数);
// もう一つ追加する事もできます。
elem.addEventListener("click" , function () {
   //関数にしなくても無名関数でこの中に直接処理を記述する事ができます。
});
</pre>
                
        </div>
        
        <div class="box-child__content">
                
               <h4><span>課題5.</span>フォーム操作</h4>
               <p>
                   下記の情報を参考にしながら<b>「app.js」</b>（必要であれば index.html）に処理を記述し、<b>「index.html」</b>を完成させてください。<br>※app.jsにのみ記述、index.htmlとapp.js両方に記述する2つの方法がありますが、どちらの方法を使ってもOKとします。
               </p>
                   <ol class="list">
                       <li class="list">
                           <p>
                               <b>「登録する」ボタンをクリックした時に、確認ダイアログを表示してください。</b>
                           </p>
                           <p>
                               ・index.html のコードを参照しながら、クリックした時のイベントを取得します。<br>・confirm()を使用し「登録します。よろしですか？」という文字をダイアログで出力します。<br>・ダイアログがキャンセルされた時に、<b>alert()</b>を使用し「キャンセルされました」という文字をダイアログで出力します。
                           </p>
                           <li class="list">
                               <p>
                                   <b>「登録する」ボタンをクリックした時に、確認ダイアログがOKなら入力項目をダイアログで表示してください。</b>
                               </p>
                               <p>・index.html のコードを参照しながら、DOMを使って2つの入力ボックス、セレクトボックスの値を取得します。<br>・alert()を使用し、3つの値をダイアログで出力します。
                               </p>
                           <li class="list">
                               <p>
                                   <b>
                                       「登録する」ボタンをクリックした時に、必須項目が入力されていなければダイアロを表示してください。</b>
                               <p/>
                               <p>
                                   ・index.htmlのコードを参照しながら、DOMを使って2つの入力ボックスの値を取得します。<br>・取得した値を判定し、入力されていなければ<b>alert()</b>を使用し、「【入力されてない項目名】が入力されていません」をダイアログで出力します。
                               </p>
                           </li>
                    </ol>
                    <br>
               <p>
                   <b class="error-message">【解説】</b>
               </p>
               <br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。
                   </p>
                   <br>
            
                    <ol>
                        <li class="list">
                            <p>
                               <b>「登録する」ボタンをクリックした時に、確認ダイアログを表示してください。</b><br>
                            </p>
                            <p>
                               「app.js」
                            </p>
<pre class="lang-js prettyprint">
var elem12 = document.getElementById('form_button');
elem12.addEventListener('click', function () {
    if(!confirm('登録します。よろしいですか？')) {
        alert('キャンセルされました');
        return;
    }
});
</pre>
                        </li>
                        <br>
                   <p>
                       今回もイベントリスナーで「クリック」イベントを取得しています。<br>confirm()で確認ダイアログを出力し、if文でユーザーの操作によって処理を分岐させています。<br>プログラミング経験の無い人は「if文」という言葉を初めて聞いたかもしれませんが、条件分岐はプログラミングの基礎中の基礎です。<br>どの言語でも使用される処理なので、学習しておきましょう。
                   </p>
                        <li class="list">
                            <p>
                                <b>「登録する」ボタンをクリックした時に、確認ダイアログがOKなら入力項目をダイアログで表示してください。</b>
                            </p>
                            <p>
                               「app.js」
                            </p>
<pre class="lang-js prettyprint">
var elem12 = document.getElementById('form_button');
elem12.addEventListener('click', function () {
    if(!confirm('登録します。よろしいですか？')) {
        alert('キャンセルされました');
        return;
    }
 <b>var formName = document.getElementById('form_name').value;
 var formMail = document.getElementById('form_mail').value;
 var formJob = document.getElementById('form_mail').value;
alert("名前：" + formName + "\n メールアドレス：" + formMail + "\n 職業：" +
formJob);</b>
});
</pre>
                          </li>
                    <p>
                        太字になっている箇所が今回新たに追加されたコードです。<br>入力ボックスとセレクトボックスの値をそのまま変数に格納しています。<br>alert()内では、変数と文字列を連結させて表示用の一文を作っています。<br>使用している\nは改行を示しています。
                    </p>
                          <li class="list">
                            <p>
                                <b>「登録する」ボタンをクリックした時に、必須項目が入力されていなければダイアログを表示してください。</b>
                            </p>
                            <p>
                               「app.js」
                            </p>
 <pre class="lang-js prettyprint">
var elem12 = document.getElementById('form_button');
elem12.addEventListener('click', function () {
    if(!confirm('登録します。よろしいですか？')) {
        alert('キャンセルされました');
        return;
    }

    var formName = document.getElementById('form_name').value;
    var formMail = document.getElementById('form_mail').value;
    var formJob = document.getElementById('form_mail').value;
    if ('' === formName) {
        alert('名前が入力されていません');
        return;
    }
    if ('' === formMail) {
        alert('メールアドレスが入力されていません');
        return;
    }

    alert("名前：" + formName + "\n メールアドレス：" + formMail + "\n 職業：" +formJob);
});
</pre>
                           </li>
                      </ol>
                   <p>
                       太字になっている箇所が今回新たに追加されたコードです。<br>名前とメールアドレスを空文字と比較して、一致しているようならダイアログを出力するという処理を行っています。
                   </p>
                   <br>
                   <p>
                       <b class="error-message">・POINT・フォームについて</b><br>
                   </p>
                   <p>
                       今回は課題用の簡単なお問い合せフォームでしたが、入力フォームは現在のWebサイトでもまだまだ多く使用されています。<br>
                       処理の流れとしてはフォームの入力情報をフロントからサーバーに送ってサーバーが処理をする（メールを送る、データベースに登録するなど）という流れが一般的です。<br>最後に取り組んでもらった入力値が正しいかどうかの判定も、しっかりと処理を書いておかないとセキュリティ的にも危険な状態になってしまう重要な部分になります。
                   </p>

        </div>
    </div>
</div>