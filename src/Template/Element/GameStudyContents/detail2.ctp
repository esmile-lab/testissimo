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
        <!-- 学習用 -->
        <div class="box-child__content bcolor">
            <h4><span>学習POINT1.</span> 入力判定</h4>
            <p>
                アクションゲームにおいて、プレイヤーが意図した通りの動作をキャラクターがすることはとても大切な要件になります。<br>
                プレイヤーがボタンを押した際の、ジャンプ、二段ジャンプ、攻撃の判定を工夫して、キャラクターを自在に操作できるようなプログラムを学習しましょう。
            </p>
        </div>

        <div class="box-child__content bcolor">
            <h4><span>学習POINT2.</span> ジャンプ動作</h4>
            <p>
                障害物を越えたり、敵を踏みつけたりといったジャンプ動作はランアクションゲームで最も爽快感を感じる、遊びの肝といっていい部分です。<br>
                ジャンプの動きは物理の公式を用いれば簡単に実装できますが、そのままだとイメージよりももっさりした動きになってしまいがちです。<br>
                計算方法やパラメータを工夫して、”遊べる動き”をプログラムするテクニックを学習しましょう。
            </p>
            <br>
            <img src="<?=$this->Url->image('Component/GameStudyContents/category_id_2/img1.png');?>" alt="img1" style="width:40%;">
        </div>

        <div class="box-child__content bcolor">
            <h4><span>学習POINT3.</span> マップデータの外部リソース化</h4>
            <p>
                最終的にランアクションゲームの難易度はマップの構成によって決まります。<br>
                そのため面白く遊べるようにするためには、マップの調整を頻繁に行う必要があります。<br>
                しかし、もしマップデータをプログラムとして記述してしまうと、マップ調整の度にプログラムをコンパイルしなければならなくなり、非常に時間がかかってしまいます。<br>
                マップデータをCSVファイル等のファイルにして別途読み込むようにすればその心配がいりません。<br>
                マップデータは外部リソースの形で実装し、難易度の調整がしやすいような仕組みのプログラムを学習しましょう。
            </p>
        </div>

        <div class="box-child__content bcolor">
            <h4><span>学習POINT4.</span> 当たり判定</h4>
            <p>
                2Dランアクションではプレイヤーキャラクターや敵キャラクター、弾や地形といった様々なオブジェクトが登場します。<br>
                 あたり判定が不正確であるとプレイヤーに理不尽なストレスを与えてしまうことになります。<br>
                 まずは正確なあたり判定の実装を行い、その次にプレイヤー有利な調整を行って、楽しくプレイできる様なゲームプログラムを学習しましょう。
            </p>
            <br>
            <img src="<?=$this->Url->image('Component/GameStudyContents/category_id_2/img2.png');?>" alt="img2" style="width:40%;">
        </div>

        <!-- 解説用 -->
        <div id="answer_content">
        </div>
    </div>
</div>