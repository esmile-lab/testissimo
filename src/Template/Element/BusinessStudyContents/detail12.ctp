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
    .tab_content, .error-message ,.list {
        line-height: 1.8;
    }
    .imgcenter{
        padding-left: 15px;
    }
</style>

<div>
    <div class="tabs">
        <!-- 学習用 -->
        <div id="study_content">
<!--            <embed src="<?= $viewDir ?>id_<?= $studyData['business_study_contents__id']?>.pdf" type="application/pdf" style="width:100%; height:1000px; border: none;">-->
            
            <div class="box-child__content bcolor">
                <h4><span>概要1.</span>学習POINT</h4>
                <p>
                    電卓画面の数値入力部分の機能を作成します。
                </p>
                <p>
                    入力キーが押された時のイベント取得から画面表示までをjsで記述していきます。<br>入力桁数の制限や入力キーによってはある条件下でしか入力できないキーもあるので、その辺りも含めてコーディングします。
                </p>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題1.</span>機能説明</h4>
                <p>
                    下が今回作成する機能部分です。
                </p>
                <br>
                    <div class="imgcenter">
                        <img src="<?=$this->Url->image('Component/BusinessStudyContents/category_id_3/img3.png');?>" alt="img4" style="width:70%;">
                    </div>
                <br>
                <br>
                
                <p>
                    数値入力用のキーが押されたら、表示エリアに入力数値が追加されていきます。<br>下が入力キー一覧です。
                </p>
                <p>
                    「1」・・・表示エリアに1を追加します。<br>
                    「2」・・・表示エリアに2を追加します。<br>
                    「3」・・・表示エリアに3を追加します。<br>
                    「4」・・・表示エリアに4を追加します。<br>
                    「5」・・・表示エリアに5を追加します。<br>
                    「6」・・・表示エリアに6を追加します。<br>
                    「7」・・・表示エリアに7を追加します。<br>
                    「8」・・・表示エリアに8を追加します。<br>
                    「9」・・・表示エリアに9を追加します。<br>
                    「0」・・・表示エリアに0を追加します。<br>
                    「00」・・・表示エリアに00を追加します。<br>
                    「 . 」・・・表示エリアに.を追加します。
                </p>
                <p>
                    基本的には入力された数値をそのまま追加していけば良いのですが、アプリケーションの仕様に従って入力制御をしなければいけない所がいくつかあります。
                </p>
                <p>
                   ・最大入力桁数は16桁です。それ以上は入力できないようにします。（「入力できません」などのダイアログを出すのもありです）<br>
                   ・入力キー「0」は、「.」が付く時以外は先頭には使用できません。（0.1など以外は不可）<br>
                   ・入力キー「00」は、数値の先頭には使用できません。（001234などは不可）<br>
                   ・入力キー「.」は、数値の先頭には使用できません。（.12345などは不可）、数値内に2回使用できません。（1.234.5などは不可）
                </p>
                
            </div>
            
            <div class="box-child__content">
                <h4><span>課題2.</span>イベント機能</h4>
                <p>
                    数値入力用のキーが押された時のイベントを取得します。<br>
                    イベントの取得方法は、いくつかあるのでここでは代表的な取得方法を挙げておきます。
                </p>

                <ol>
                    <li>
                        <p>
                            HTMLファイル内の数値入力用キーのタグ内にイベントハンドラを追加する
                        </p>
                        <p>
                            クリック時のイベントを取得するので、onclickイベントを追加します。<br>イベントハンドラに共通関数を呼び出すで、処理の共通化ができ、コードの量や変更箇所も一ヶ所で管理できるようになります。<br>キー情報をコンソールに表示するなど、確認しながらコーディングしていきましょう。<br><br>
                            例）入力キー「1」のイベントハンドラ(index.html)
                        </p>
                        
<pre class="lang-html prettyprint">
&lt;button type="button" id="input_1" name="number" value="1" class="num" onclick="共通関数();"&gt;1&lt;/button&gt;
</pre>
<br>
                    </li>
                    <li>
                        <p>
                            タグの情報を元にイベントリスナーを追加する
                        </p>
                        <p>
                            イベントリスナーはタグ一つ一つに追加する事もできますが、ある程度大きな枠で包括的なリスナーを作成する事もできます。<br>基本的には共通化を意識して、JSファイルにイベントリスナーを記述する事が今後にもつながります。<br>
                            こちらもキー情報をコンソールに表示するなど、確認しながらコーディングしていきましょう。<br><br>
                            例）入力キー「1」のイベントリスナー(app.js)
                        </p>
                        
<pre class="lang-js prettyprint">
document.getElementById('input_1') .addEventListener('click', function(e) {
   // 処理
});
</pre>
<br>             
                        <p>
                            参考までにいくつか例を挙げましたが、取得方法の指定はありません。<br>今まで自分が書いた事がある、もしくはできそうだと思うやり方で良いです。<br>自由な発想を持ってイベントの取得に取り組んでみてください。
                        </p>
                    </li>
                </ol>
            </div>
            
            <div class="box-child__content">
                <h4><span>課題3.</span>表示機能</h4>
                <p>
                    イベントを取得できたら、表示エリアに数値を表示させます。<br>イベント処理用に作った共通関数に表示部分のロジックを追加していきましょう。
                </p>
                <p>
                    数値入力用キーのタグ内にあるvalue属性に取得用の値が入っていますので、この値を使用します。
                </p>
                <ol>
                    <li>
                        <p>
                            イベントハンドラ、イベントリスナーでvalue属性値を取得<br><br>
                            例）入力キー「1」のイベントハンドラ(index.html)
                        </p>
<pre class="lang-html prettyprint">
&lt;button type="button" id="input_1" name="number" value="1" class="num" onclick=”共通関数(this.value で取得);”&gt;1&lt;/button&gt;
</pre>
                        <p>
                            例）入力キー「1」のイベントリスナー(app.js)
                        </p>
<pre class="lang-css prettyprint">
document.getElementById('input_1') .addEventListener('click', function(e) {
    e.target.name で取得
});
</pre>
                        <p>
                            表示エリア部分の要素を取得し、タグを操作できるようにします。
                        </p>
                    </li>
                    <li>
                        <p>
                            表示エリアのエレメントを取得
                        </p>
<pre class="lang-js prettyprint">
document.getElementById(表示エリアid値);
</pre> 
                        <p>
                            表示エリアに数値を追加していきます。
                        </p>
                    </li>
                    <li>
                        <p>
                            表示エリアのエレメントを操作
                        </p>
<pre class="lang-js prettyprint">
表示エリアのエレメント.textContent += 入力キーの値;
</pre> 
                        <p>+=で値を追加しています。</p>
                    </li>
                </ol>
                <p>
                    ここまでの工程で、一通りの機能が作成できました。<br>実際に数値入力用キーをクリックすると、値が表示されると思います。
                </p>
            </div>
            <div class="box-child__content">
                <h4><span>課題4.</span>入力制御</h4>
                <p>
                    一通り動きが作れたので、最後にアプリケーション仕様に沿って正しく動作するかの処理を加えていきます。<br>
                    課題1でも機能の説明を書きましたが、ここでは一般的な電卓機能として正しく動作させる為の制御を考えていきたいと思います。
                </p>
                <ol>
                    <li>
                        <p>
                            最大入力桁数は16桁。
                        </p>
                        <p>
                            表示エリアに数値を追加する前に、表示エリアの合計文字数を判定し、16桁以上であれば処理を止める...など
                        </p>
                    </li>
                    <li>
                        <p>
                            入力キー「0」は、「.」が付く時以外は先頭には使用できません。
                        </p>
                        <p>
                            「0」が入力された時、表示エリアが「0」1文字だけだった場合は処理を止める...など
                        </p>
                    </li>
                    <li>
                        <p>
                            入力キー「00」は、数値の先頭には使用できません。
                        </p>
                        <p>
                            「00」が入力された時、表示エリアが「0」1文字だけだった場合、もしくは表示エリアが空だった場合は処理を止める...など
                        </p>
                    </li>
                    <li>
                        <p>
                            入力キー「.」は、数値の先頭には使用できません。数値内に2回使用できません。
                        </p>
                        <p>
                            「.」が入力された時、表示エリアが空だった場合、もしくは表示されている数値にすでに「.」が使用されている場合は処理を止める...など
                        </p>
                    </li>
                </ol>
                <p>
                    いくつか入力制御を挙げてみましたが、これで完璧な制御になるわけではありません。<br>実際に自分で入力してみて、「これは電卓として正しく動作していないのではないか？」と思った箇所は、迷わず処理を追加してみましょう。
                </p>
            </div>
        </div>
        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>