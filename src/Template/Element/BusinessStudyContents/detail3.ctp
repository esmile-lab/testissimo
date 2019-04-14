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
    
    .tab_content .error-message .list {
        line-height: 1.8px;
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
               <h4><span>課題1.</span>CSSの記述方法</h4>
                   <p>
                       ダウンロードした教材<b>「index.html」</b>に対し、3つの記述パターンでデザインを入れてみましょう。<br>下記の画像と情報を参考に、ページを完成させてください。
                   </p>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>&lt;h1&gt;タグに直接CSSを記述し、大見出しの「文字色」を「赤」に変更</b>
                               </p>
                           <li class="list">
                               <p>
                                   <b>&lt;head&gt;タグ内に CSS を記述し、&lt;h2&gt;タグ内の中見出しの「文字色」を「青」に変更</b><br>※class 属性は使用せず、セレクタに直接&lt;h2&gt;タグを指定してください。
                               </p>
                           <li class="list"><p>
                               <b>
                                   「style.css」という CSS ファイルを「index.html」と同じ場所に作成し、「style.css」から&lt;h3&gt;タグ内の小見出しの「文字色」を「緑」に変更</b><br>※class 属性は使用せず、セレクタに直接&lt;h3&gt;タグを指定してください。
                               </p>
                       </ol>
                       <br>
               
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_3/img1.png');?>" alt="img1" style="width:40%;">
                   </div><br><br>
            </div>
        
            <div class="box-child__content">
               <h4><span>課題2.</span>見出しのデザイン作成</h4>
                   <p>
                       ここからの課題は、全て課題1の3番目の方法で学習を進めていきます。<br>下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>&lt;h1&gt;：中央に配置（中央寄せ）に変更</b>
                               </p>
                           <li class="list">
                               <p>
                                   <b>&lt;h2&gt;：中央に配置（中央寄せ）に変更</b>
                               </p>
                           <li class="list">
                               <p>
                                   <b>&lt;h3&gt;：中央に配置（中央寄せ）に変更</b>
                               </p>
                       </ol>
                       <br>
               
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_3/img2.png');?>" alt="img2" style="width:40%;">
                   </div><br><br>
            </div>
        
            <div class="box-child__content">
               <h4><span>課題3.</span>記事のデザイン作成</h4>
                   <p>
                       下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【画像】：画像を中央に配置（中央寄せ）、画像の横幅300px、縦幅200pxに変更</b>
                               </p>
                           <li class="list">
                               <p>
                                   <b>【記事】：記事の横幅をウィンドウサイズの70%記事の文字サイズを16pxに変更</b>
                               </p>
                       </ol>
                       <br>
               
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_3/img3.png');?>" alt="img3" style="width:40%;">
                   </div><br><br>
            </div>
        
            <div class="box-child__content">
               <h4><span>課題4.</span>表の作成</h4>
                   <p>
                       下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【年代別売上表】：横幅をウィンドウサイズの50%、表の枠線を黒（太さ1px）、ヘッダー部分の背景色をグレイ（#808080）、数値の部分をセルの右端に配置（右寄せ）に変更</b>
                               </p>
                       </ol>
                       <br>
               
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_3/img4.png');?>" alt="img4" style="width:40%;">
                   </div><br><br>
            </div>
        
            <div class="box-child__content">
               <h4><span>課題5.</span>リストの作成</h4>
                   <p>
                       下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【購入方法】：リストの先頭に付いているマーカー「・」を非表示、リスト1つ1つの横幅を150pxに固定、リストを横並びで表示</b>
                               </p>
                       </ol>
                       <br>
               
                   <div class="imgcenter"><img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_1/id_3/img5.png');?>" alt="img1" style="width:40%;">
                   </div><br><br>
            </div>
        </div>
        <!-- 解説用 -->
        <div class="tab_content" id="answer_content">
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>_answer.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">
-->
               <div class="box-child__content">
               <h4><span>課題1.</span>CSSの記述方法</h4>
                   <p>
                       ダウンロードした教材<b>「index.html」</b>に対し、3つの記述パターンでデザインを入れてみましょう。<br>下記の画像と情報を参考に、ページを完成させてください。
                   </p>
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>&lt;h1&gt;タグに直接CSSを記述し、大見出しの「文字色」を「赤」に変更</b>
                               </p>
                           <li class="list">
                               <p>
                                   <b>&lt;head&gt;タグ内に CSS を記述し、&lt;h2&gt;タグ内の中見出しの「文字色」を「青」に変更</b><br>※class 属性は使用せず、セレクタに直接&lt;h2&gt;タグを指定してください。
                               </p>
                           <li class="list">
                               <p>
                                   <b>「style.css」という CSS ファイルを「index.html」と同じ場所に作成し、「style.css」から&lt;h3&gt;タグ内の小見出しの「文字色」を「緑」に変更</b><br>※class 属性は使用せず、セレクタに直接&lt;h3&gt;タグを指定してください。
                               </p>
                       </ol>
                   <b class="error-message">【解説】</b><br><br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。<br>
                   </p>
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>style 属性を使って、タグに直接記述</b>
                               </p>
<pre class="lang-css prettyprint">
&lt;h1 style="color: #ff0000;"&gt;
</pre>
                           <p>
                               タグに直接記述する為、セレクタの指定は無くスタイルを反映する事ができます。<br>他セレクタとプロパティが競合した時は、基本的にここに記述されているプロパティが一番強くなります。
                           </p>
                               
                           <li class="list">
                               <p>
                                   <b>1つのファイルにhtmlとCSSをまとめて記述</b>
                               </p>
                           
<pre class="lang-html prettyprint">
&lt;head&gt;
  &lt;style&gt;
  h1 {
      color : #000fff;
  }
  &lt;/style&gt;
&lt;/head&gt;
</pre><br>
                           
                           <li class="list">
                               <p>
                                   外部ファイルを読み込んだ記述
                               </p>
                           </li>
                               <p>
                                   「index.html」
                               </p>
<pre class="lang-html prettyprint">
&lt;head&gt;
  &lt;link rel="stylesheet" href="style.css"&gt;
&lt;/head&gt;
</pre>
                               <p>
                                   「style.css」
                               </p>
<pre class="lang-css prettyprint">
@charset "utf-8";
h3 {
    color : #008000;
}
</pre>
                       </ol>
                       <br>
                   <p>   
                       &lt;head&gt;タグ内に&lt;link&gt;タグを使って外部CSSファイルを読み込みます。<br>ファイルの先頭には、htmlファイルの時と同じく文字エンコードを指定します。<br>近年では「UTF-8」が多く使用されるようになっています。<br><br>
                       <b class="error-message">・POINT・CSSの基本文法</b><br><br>
                       CSSの書き方は、どこに反映させるのか指定する「セレクタ」と、どんなスタイルを反映させるのかを指定する「プロパティ：値」のセットで記述します。<br>
                       「セレクタ」には、タグの直接指定やid属性、名前属性など様々な指定ができますが、基本的にはCSS用のclass 属性を使うようにしましょう。<br>
                       下記がclass属性のセレクタになります。<br><br>例）class名「aaa」の場合.aaa {}classを指定する時は、クラス名の先頭に「.」を付けます。<br><br>セレクタ全体は中括弧 {} で括ります。<br>セレクタが指定できたら、次はそのセレクタにどのようなスタイルを付けたいかを「プロパティ：値」で記述します。<br>プロパティは多くの種類がある為、ここでは記載しませんが、よく使うプロパティはページ作成の経験が増えれば自然と覚えるようになります。<br>下記がプロパティの一例になります。<br><br>
                       例）class名「aaa」が付いているタグ内のフォントサイズを14pxに設定
                   </p>                               
<pre class="lang-css prettyprint">
.aaa {
    font-size : 14px;
}
</pre>
                               <p>
                                   コードの終わりはセミコロン「;」で閉じます。<br>
                                   複数指定する場合は
                               </p>
<pre class="lang-css prettyprint">
. bbb {
    width :200px;
    heigt:500px
}

&frasl;*※一行で表示する事も可能です*&frasl;

. bbb { width :200px; heigt:500px }
</pre>
<br>
                   
                               <p>
                                   以上が基本的な文法になります。<br>
                                   セレクタに関しては、複数指定やノード指定など、様々な記述方法があるので、実戦課題の時に解説していきたいと思います。
                               </p>
                               <br>
                               <b class="error-message">・POINT・CSSを書き始める前に</b>
                               <br>
                               <br>
                               <p>
                                   CSSは基本的にHTMLとセットなので、合わせてコーディングルールを決めておくようにしましょう。<br>例えば、記述場所に関しては、項番3の外部ファイルのみ使用すると決める事で、CSSのコードがどこに記述されているか簡単に把握する事ができます。<br>ファイル数が1、2つであれば直接htmlファイルを参照する事も大変ではありませんが、ファイル数が50、100となれば非常に効率が悪くなりますし、同じ箇所を指定してしまう（競合指定）が多く発生し打消しの多いコーディングとなってしまいます。<br>基本的には、1、2の方法は使用せず3の方法でコーディングしていくと良いと思います。<br>セレクタの指定に関しても、あまり制限が強いセレクタは指定せず、共通化できるようなセレクタを指定しましょう。<br>プロパティでは、「!important」という絶対指定ができます。<br>これは他セレクタと競合した時に、この記述をされているプロパティを優先するという意味です。<br>これを使ってはいけないわけではありませんが、基本的には使わない方向で競合しないようにセレクタを割り振っていけると良いです。<br>セレクタの名前付けも非常に重要です。画面数が増えれば増えるほど必ずこの壁にぶつかります。<br>安易にclass名を付けていってしまうと、後々同じclass名があったなど、バグの原因にもなってしまいます。
                               </p>
                       
            </div>
            
            <div class="box-child__content">
               <h4><span>課題2.</span>見出しのデザイン作成</h4>
                   <p>
                       ここからの課題は、全て課題1の3番目の方法で学習を進めていきます。<br>下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>&lt;h1&gt;：中央に配置（中央寄せ）に変更</b>
                               </p>
                           </li>
                           <li class="list">
                               <p>
                                   <b>&lt;h2&gt;：中央に配置（中央寄せ）に変更</b>
                               </p>
                           </li>
                           <li class="list">
                               <p>
                                   <b>&lt;h3&gt;：中央に配置（中央寄せ）に変更</b>
                               </p>
                           </li>
                       </ol>
                 
                   <b class="error-message">【解説】</b>
                   <br>
                   <br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。<br>
                   </p>
                       
                       <ol class="list">
                           <li class="list"><p><b>&lt;h1&gt;：中央に配置（中央寄せ）に変更</b></p></li>
                           <li class="list"><p><b>&lt;h2&gt;：中央に配置（中央寄せ）に変更</b></p></li>
                           <li class="list"><p><b>&lt;h3&gt;：中央に配置（中央寄せ）に変更</b></p></li>
                       </ol>
                <p>
                    外部ファイル「style.css」に記述します。
                </p>
                
                <p>
                    「style.css」
                </p>

<pre class="lang-css prettyprint">
@charset "utf-8";
h1 {
    text-align : center;
}
h2 {
    text-align : center;
}
h3 {
    text-align : center;
}
</pre>
                <p>
                    このコードでも正解なのですが、プログラミングで非常に重要な概念でもある「共通化」を使って記述してみます。
                </p>
                
<pre class="lang-css prettyprint">
h1, h2, h3 {
    text-align : center;
}
</pre>
<br>
                <p>
                    このように記述する事でコード量がだいぶ少なくなりました。<br>セレクタは複数指定も可能なので、同じようなプロパティを記述する時は、共通化を考えるようにしましょう。
                </p>
                
            </div>
            
            <div class="box-child__content">
               <h4><span>課題3.</span>記事のデザイン作成</h4>
                   <p>
                       下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                   <br>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【画像】：画像を中央に配置（中央寄せ）、画像の横幅300px、縦幅200pxに変更</b>
                               </p>
                           </li>
                           <li class="list">
                               <p>
                                   <b>【記事】：記事の横幅をウィンドウサイズの70%記事の文字サイズを16pxに変更</b>
                               </p>
                           </li>
                       </ol>
                       <br>
                   <b class="error-message">【解説】</b><br><br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。
                   </p>
                   <br>
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【画像】：画像を中央に配置（中央寄せ）、画像の横幅300px、縦幅200pxに変更</b><br><br>外部ファイル「index.html」、「style.css」に記述します。<br>
                                   &lt;div&gt;タグを&lt;img&gt;タグの上に追加し、&lt;div&gt;、&lt;img&gt;タグに「style.css」で記述するclass名を設定します。
                               </p>
                           </li>
                               <p>
                                   「index.html」
                               </p>

<pre class="lang-html prettyprint">
&lt;div class="test3_div"&gt;
  &lt;img class="test3_img" src="./img/img_1.jpg" /&gt;
&lt;/div&gt;
</pre>
                               <p>
                                   「style.css」
                               </p>
<pre class="lang-css prettyprint">
@charset "utf-8";
.test3_div {
    text-align : center;
}
.test3_img {
    height : 200px;
    width : 300px;
}
</pre>
<br>
                           
                               <p>
                                   画像に限らず、ボックスのサイズを指定するには縦幅「height」、横幅「width」プロパティを使用します。<br>中央寄せに関しては、課題2と同じ方法で、&lt;img&gt;タグに「text-align:center;」を記述した人も多かったと思います。<br>「text-align」プロパティは、ブロック要素内のインライン要素にのみ効力があります。<br>&lt;h&gt;タグは「ブロック要素」ですが、&lt;img&gt;タグは「インライン要素」なのでプロパティが効かないのです。
                               </p><br>
                               <b class="error-message">・POINT・ブロック要素とインライン要素</b><br><br>
                               <p>
                                   htmlの要素は、ブロック要素とインライン要素に分類することができます。<br>ブロック要素は、言葉の通り箱のような領域を確保します。<br>タグの種類としては、&lt;div&gt;や&lt;h1&gt;などの見出しタグや&lt;p&gt;タグ、&lt;ul&gt;&lt;li&gt;タグなどもブロック要素になります。<br>&lt;div&gt;タグなどは中に他のブロック要素を入れる事ができるのですが、&lt;h1&gt;、&lt;p&gt;などのタグは、中にインライン要素しか入れることができません。<br>インライン要素は、文章や文章の一部として扱われるようなもののことで、&lt;a&gt;タグや&lt;span&gt;タグ、&lt;img&gt;タグなど、その他フォーム要素で出てくる&lt;input&gt;タグや&lt;textarea&gt;タグなどもインライン要素になります。<br>補足ですが、今回はインライン要素の中央寄せという課題でしたが、逆にブロック要素を中央寄せしたい時には、「text-align」プロパティは効かないので、「width : 横幅」と「margin : 0px auto」といった感じで、「margin」プロパティの左右にautoを指定します。<br><br>
                               </p>
                   
                           
                           <li class="list">
                               <p>
                                   <b>【記事】：記事の横幅をウィンドウサイズの70%記事の文字サイズを16pxに変更</b>
                               </p>
                           </li>
                           
                               <p>
                                   外部ファイル「index.html」、「style.css」に記述します。<br>&lt;p&gt;タグにセレクタの対象となるclass名を設定し、「style.css」にプロパティを記述します。
                               </p>
                               <p>
                                   「index.html」
                               </p>
                           
<pre class="lang-html prettyprint">
&lt;p class="test3_p"&gt;～省略～&lt;/p&gt;
</pre>
                               <p>
                                   「style.css」
                               </p>
<pre class="lang-css prettyprint">
@charset "utf-8";
.test3_p {
    font-size : 16px;
    width : 70%;
}
</pre>
<br>
                               <p>
                                   文字サイズの設定には「font-size」プロパティを使用します。<br>サイズ単位は絶対値として「px」、相対値「%」や「em」を使うのが一般的です。<br>今回は「px」指定でしたので、親要素の文字サイズがいくつであっても必ず16pxで表示されます。<br>ちなみに、ブラウザ文字のデフォルトサイズが16pxなので、記述してもスタイルは変わらないという課題でした。<br>横幅の指定は、先程の説明にも出てきましたが、相対値である「%」を使用します。<br>ここでは&lt;p&gt;タグ自体が親要素になっているので、「width」プロパティに70%と指定するだけで、画面サイズに対して70%と認識されます。<br>仮に&lt;p&gt;タグの親要素として何かタグを追加し、そのタグに横幅を指定した場合、その親要素の横幅に対しての70%が&lt;p&gt;タグの横幅となります。
                               </p>
                       </ol>
            </div>
            
            <div class="box-child__content">
               <h4><span>課題4.</span>表の作成</h4>
                   <p>
                       下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【年代別売上表】：横幅をウィンドウサイズの50%、表の枠線を黒（太さ1px）、ヘッダー部分の背景色をグレイ（#808080）、数値の部分をセルの右端に配置（右寄せ）に変更</b>
                               </p>
                       </ol>
                   <b class="error-message">【解説】</b><br><br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。
                   </p>
                   <br>
                       <ol class="list">
                           <li class="list"><p>
                               <b>【年代別売上表】：横幅をウィンドウサイズの50%、表の枠線を黒（太さ1px）、ヘッダー部分の背景色をグレイ（#808080）、数値の部分をセルの右端に配置（右寄せ）に変更</b>
                               </p>
                           </li>
                          
                       </ol>
                <p>
                    &lt;table&gt;タグに「style.css」で記述するclass名を設定します。
                </p>
                <p>
                    「index.html」
                </p>

<pre class="lang-html prettyprint">
&lt;table class="test4_table"&gt;
～省略～
&lt;/table&gt;
</pre>
                <p>
                    まずは、課題3同様横幅を設定します。
                </p>
                <p>
                    「style.css」
                </p>
                
<pre class="lang-css prettyprint">
@charset "utf-8";
.test4_table {
    width : 50%;
}
</pre>
                <p>
                    次に枠線を指定します。<br>枠線を引くには「border」プロパティを使用します。<br>値として枠線の太さ、線の形状、色などを順番に指定します。<br>&lt;table&gt;タグだけに枠線を指定しても、表の中に枠線が入らないので&lt;th&gt;、&lt;td&gt;タグにも枠線を指定します。
                </p>
                
<pre class="lang-css prettyprint">
.test4_table, .test4_table th, .test4_table td {
    border : 1px solid #000;
}
</pre>
                <p>
                    ここでまた新たなセレクタが登場しました。<br><b>「.test4_table th」</b><br>&lt;table&gt;タグのclass属性と&lt;th&gt;タグの間に半角スペースを入れる事によって、クラス名「test4_table」内の&lt;th&gt;タグ全てに反映させるという指定になっています。<br>これでテーブルの枠線が完成したわけではありません。<br>現在は枠線の間に隙間が表示されていると思います。<br>その隙間を消す為に「border-collapse」プロパティを使用します。<br>このプロパティは隣合う枠線を重ねて表示してくれるプロパティです。
                </p>
                
<pre class="lang-css prettyprint">
test4_table {
    border-collapse : collapse;
    width : 50%;
}
</pre>
                <p>
                    と指定するとセルの枠線が重なって表示されるようになります。<br>
                    次にヘッダーの背景色をグレイに変えていきます。<br>背景色の設定は「backgroundcolor」プロパティを使用します。<br>セレクタは、先ほどの説明で出てきた「table4_tableth」を指定します。
                </p>
<pre class="lang-css prettyprint">
test4_table th {
    background-color : #808080;
}
&frasl;*※#808080はグレイのカラーコード*&frasl;
</pre>
                
                <p>
                    これでヘッダー部分の背景色がグレイに変更になりました。<br>今回はテーブルのセル内を設定しましたが、このプロパティは領域を持っている要素であればボックス要素、インライン要素両方で使用する事ができます。<br>最後は、数値部分を右端に配置（右寄せ）します。<br>テキスト配置の設定は前の課題にも出てきましたね。<br>セレクタは、表の数値が入っているセル「table4_table td」を指定します。
                </p>
 
<pre class="lang-css prettyprint">
.test4_table td {
    text-align : right;
}
</pre>
                
                <p>
                    今回は右寄せという事で値に「right」を指定します。<br>その他、前の課題で指定した中央寄せ「center」以外にも左寄せ（デフォルト設定）「left」があります。
                </p>

            </div>
            
            <div class="box-child__content">
               <h4><span>課題5.</span>リストの作成</h4>
                   <p>
                       下記の画像と情報を参考にしながら<b>「index.html」</b>、<b>「style.css」</b>にコードを記述し、ページを完成させてください。
                   </p>
                       <ol class="list">
                           <li class="list"><b>【購入方法】：リストの先頭に付いているマーカー「・」を非表示、リスト1つ1つの横幅を150pxに固定、リストを横並びで表示</b>
                       </ol>
                   <b class="error-message">【解説】</b><br><br>
                   <p>
                       ※ソースコードは解答用の教材ファイルを参照してください。
                   </p><br>
                       <ol class="list">
                           <li class="list">
                               <p>
                                   <b>【購入方法】：リストの先頭に付いているマーカー「・」を非表示、リスト1つ1つの横幅を150pxに固定、リストを横並びで表示</b>
                               </p>
                           </li>
                               <p>
                                   &lt;ul&gt;タグに「style.css」で記述するclass名を設定します。
                               </p>
                       </ol>
                <p>
                    「index.html」
                </p>
<pre class="lang-html prettyprint">
&lt;ul class="test5_ul"&gt;
～省略～
&lt;/ul&gt;
</pre>
                
                <p>
                    まずは、デフォルトで付いている先頭のマーカー「・」を非表示にします。<br>リストは、ホームページなどのヘッダーメニューや左（右）メニューなどにもよく使用されるタグなので覚えておきましょう。
                </p>
                <p>
                    「style.css」
                </p>
 <pre class="lang-css prettyprint">
@charset "utf-8";
.test5_ul {
    list-style : none;
}
</pre>
                <p>
                    「list-style」プロパティに非表示用の「none」を指定します。<br>今回は非表示にしましたが、マーカーを数字や画像などに変更した場合もこのプロパティで指定できます。<br><br>次にリスト1つ1つの横幅を150pxに指定します。<br>これは今までの課題を組み合わせればできると思いますので、説明は省きます。
                </p>
                
<pre class="lang-css prettyprint">
.test5_ul li {
    width : 150px;
}
</pre>
                <p>
                    最後にリストを横並びで表示します。<br>これはいくつか横並びにする方法がありますが、今回はシンプルな記述を解説していきます。<br>まず、ブロック要素として存在している&lt;li&gt;タグをインライン要素に変更してみます。<br>これは「display」プロパティに「inline」を設定する事で実現できます。
                </p>
<pre class="lang-css prettyprint">
.test5_ul li {
    display : inline;
    width : 150px;
}
</pre>

                <p>
                    これで縦並びだったリストが横並びになったのではないでしょうか？<br>
                    しかし、これでまだ完成ではありません。<br>前に指定した「width」プロパティが効かなくなっているはずです。<br>これは、インライン要素に変更した事により&lt;li&gt;タグに縦幅、横幅の指定ができなくなったからなのです。<br>※インライン要素にも&lt;img&gt;、&lt;input&gt;タグなどサイズを指定できるタグがあります。<br>そこで、インライン要素とブロック要素両方の良い所取りした「inline-block」プロパティを使用します。
                </p>

<pre class="lang-css prettyprint">
.test5_ul li {
    display : inline-block;
    width : 150px;
}
</pre>
                
                <p>
                    これで「width」プロパティが有効になったと思います。<br>サイズ以外にも「margin」、「padding」などでまわりの余白を指定する事もできます。<br>今後、Web ページ全体を構成する上でブロック要素、インライン要素の概念は必要になってくるので、覚えておきましょう。
                </p>
                
            </div>
        </div>
    </div>
</div>