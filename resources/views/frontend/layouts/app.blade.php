<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>【SUUMO】不動産売買・住宅購入・賃貸情報ならリクルートの不動産ポータルサイト</title>
    <meta name="keywords" content="不動産,住宅,住宅情報,不動産情報,不動産賃貸,売買,購入,物件,検索,SUUMO,スーモ">
    <meta name="description" content="【SUUMO(スーモ)】不動産・住宅に関する総合情報サイトです。全国の賃貸情報からマンション・一戸建て・土地などの不動産売買・物件購入情報はもちろん、注文住宅、リフォーム、設備情報に至るまでの豊富な住宅情報で、あなたの幸せな住まい探しをサポートします。">
    <meta name="robots" content="noarchive">
    <link rel="stylesheet" href="{{ asset('frontend/css/ou-zen-top.css') }}" media="screen">

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
    <div id="js-mylist" class="mylist">
        <div class="mylist-inner">
            <ul class="mylist-list mylist-list--login">
                <li>
                    <ul class="mylist-member">
                        <li><a href="#" class="member-entry js-member-entry header-btn"><p>会員登録</p></a></li>
                        <li><a href="#" class="mylist-login js-mylist-login header-btn"><p>ログイン</p></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div id="page-content-wrapper" style="margin-top:45px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <div class="footinfo">
        <div class="footinfo-inner">
            <p class="footinfo-txt">不動産・住宅の売買や賃貸をご検討中ですか？SUUMO(スーモ)は全国のマンション、一戸建て、土地などの販売・売却情報から賃貸・リフォームまで、住まいに関するあらゆる情報が満載の不動産総合ポータルサイトです。リクルートが審査した不動産会社や住宅メーカー・工務店、業者の情報を掲載しているので安心してお使いいただけます。住居を探す・借りる・買う・建てる・建て替える・売る・貸す・引越す・・・住まい・暮らしのことならSUUMOにお任せください！</p>
            <div class="footinfo-object"><span class="ui-icon--suumo06"></span></div>
        </div>
    </div>
    <div class="footnav">
        <div class="footnav-inner" id="js-footnav">
            <ul class="navbox_group">
                <li class="navbox js-heightline" style="height: 82px;">
                    <div class="navbox-title">借りる</div>
                    <ul class="navbox-body">
                        <li><a href="https://suumo.jp/chintai/">賃貸<br>（マンション・アパート・一戸建て）</a></li>
                    </ul>
                </li>
                <li class="navbox navbox--large js-heightline" style="height: 82px;">
                    <div class="navbox-title">買う</div>
                    <div class="navbox-body">
                        <dl class="mskrbox">
                            <dt class="mskrbox-title">
                                <a href="https://suumo.jp/ms/">マンション</a>
                            </dt>
                            <dd class="mskrbox-body">
                                <a href="https://suumo.jp/ms/shinchiku/">新築分譲マンション</a>
                            </dd>
                            <dd class="mskrbox-body">
                                <a href="https://suumo.jp/ms/chuko/">中古マンション</a>
                            </dd>
                        </dl>
                        <dl class="krbox">
                            <dt class="krbox-title">一戸建て</dt>
                            <dd class="krbox-body">
                                <a href="https://suumo.jp/ikkodate/">新築一戸建て</a>
                            </dd>
                            <dd class="krbox-body">
                                <a href="https://suumo.jp/chukoikkodate/">中古一戸建て</a>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="navbox js-heightline" style="height: 82px;">
                    <div class="navbox-title">建てる</div>
                    <ul class="navbox-body">
                        <li><a href="https://suumo.jp/chumon/">注文住宅</a></li>
                        <li><a href="https://suumo.jp/tochi/">土地</a></li>
                    </ul>
                </li>
                <li class="navbox js-heightline" style="height: 82px;">
                    <div class="navbox-title">リフォームする</div>
                    <ul class="navbox-body">
                        <li><a href="https://suumo.jp/remodel/">住宅リフォーム</a></li>
                    </ul>
                </li>
                <li class="navbox js-heightline" style="height: 82px;">
                    <div class="navbox-title">売る・貸す</div>
                    <ul class="navbox-body">
                        <li><a href="https://suumo.jp/baikyaku/">不動産売却</a></li>
                        <li><a href="https://suumo.jp/kasu/">部屋を貸す・賃貸経営</a></li>
                    </ul>
                </li>
                <li class="navbox navbox--ct js-heightline" style="height: 82px;">
                    <div class="navbox-title">プロに相談</div>
                    <ul class="navbox-body">
                        <li><a href="https://www.suumocounter.jp/" target="_blank">講座/相談</a></li>
                    </ul>
                </li>
                <li class="navbox js-heightline" style="height: 82px;">
                    <div class="navbox-title">不動産会社を探す</div>
                    <ul class="navbox-body">
                        <li><a href="https://suumo.jp/fudousankaisha/">不動産会社ガイド<br>（分譲・仲介）</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="footlinks">
        <div class="footlinks-inner">
            <div class="linkbox_group">
                <div class="linkbox linkbox--full">
                    <div class="linkbox-title">
                        <a href="https://suumo.jp/">不動産・住宅サイト SUUMO（スーモ）</a>
                    </div>
                    <div class="linkbox-body">
                        <a href="https://suumo.jp/chintai/">賃貸</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chintai/mansion/">賃貸マンション</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chintai/apartment/">賃貸アパート</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chintai/ikkodate/">賃貸一戸建て</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/ms/">マンション</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chintai/soba/">家賃相場</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/ms/shinchiku/">新築分譲マンション</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/ms/chuko/">中古マンション</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/ikkodate/">新築一戸建て</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chukoikkodate/">中古一戸建て</a>&nbsp;&nbsp;|&nbsp;&nbsp;<br><a href="https://suumo.jp/tochi/">土地</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/tokushu/renovation/">リノベーション物件</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://bessou.suumo.jp/" target="_blank">別荘・リゾート</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://inaka.suumo.jp/" target="_blank">移住・田舎暮らし</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chumon/">注文住宅</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/remodel/">住宅リフォーム</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/baikyaku/">不動産売却・査定</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.suumocounter.jp/?vos=dsmcrecb20140123007" target="_blank">新築相談</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://hikkoshi.suumo.jp/" target="_blank">引越し見積もり</a>&nbsp;&nbsp;|&nbsp;&nbsp;<br><a href="https://suumo.jp/loan/">住宅ローン</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/library/" target="_blank">物件ライブラリー</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.suumocounter.jp/fp/?suit=STct20170606005" target="_blank">ファイナンシャルプランナー無料相談</a>
                    </div>
                </div>
            </div>
            <div class="linkbox_group">
                <div class="linkbox linkbox--vt">
                    <div class="linkbox-title">よくある打ち間違い</div>
                    <div class="linkbox-body">
                        <a href="https://suumo.jp/edit/sumo/index_01.html">sumo</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/edit/sumo/index_04.html">su-mo</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/edit/sumo/index_03.html">sumoo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footpp">
        <div class="ppbox_group">
            <div class="ppbox">
                <div class="ppbox-object">
                    <a href="http://www.rsc-web.jp/nsp/sw_suumo.html" target="_blank"><img src="{{ url('/frontend/images/inc_CM_top_000_rscmark.png') }}" width="71" height="71" alt="不動産情報サイト事業者連絡協議会"></a>
                </div>
                <p class="ppbox-body">
                    このサイトは「<a href="http://www.rsc-web.jp/" target="_blank">不動産情報サイト事業者連絡協議会</a>」が定める情報公開の自主規制ルールに則ったサイトとして承認されています。
                </p>
            </div>
        </div>
        <div class="footpp">
            <div class="ppbox_group">
                <p><a href="https://rsch.jp/1be4bb1507815c6e/login.php?type=4" target="_blank"><span style="color: #f82055;">★</span>抽選で100名様にAmazonギフト券（1000円分）進呈<span style="color: #f82055;">★</span>不動産情報サイト利用者意識アンケートにご協力ください</a></p>
            </div>
        </div>
    </div>
    <div class="footrelate">
        <div class="footrelate-inner relatebox">
            <div class="relatebox-title">リクルートの住宅関連サイト</div>
            <div class="relatebox-body">
                <a href="http://smatch.jp/" target="_blank">「街の不動産会社選び」ならスマッチ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.officemovement.com/" target="_blank">賃貸オフィスならオフィスムーブメント</a>
            </div>
        </div>
    </div>
    <div class="relatelinks">
        <div class="relatelinks-inner">
            <a href="https://next.rikunabi.com/" target="_blank">転職ならリクナビNEXT</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.r-agent.com/" target="_blank">転職支援ならリクルートエージェント</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://toranet.jp/" target="_blank">女性の転職情報とらばーゆ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.rikunabi.com/" target="_blank">就職はリクナビ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://job.rikunabi.com/" target="_blank">就職活動はリクナビ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://rikunabi-direct.jp/" target="_blank">就活はリクナビダイレクト</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://haken.rikunabi.com/" target="_blank">リクナビ派遣</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.r-staffing.co.jp/" target="_blank">派遣会社のリクルートスタッフィング</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://kaitori.carsensor.net/" target="_blank">車買取・車査定はカーセンサー</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.froma.com/" target="_blank">バイト探しフロム・エーナビ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://townwork.net/" target="_blank">アルバイト情報タウンワーク</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.hatalike.jp/" target="_blank">求人転職サイトはたらいく</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.fromacareer.com/" target="_blank">フロム・エー キャリア</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.recruit-dc.co.jp/" target="_blank">医師求人ならリクルートドクターズキャリア</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://rikunabi-yakuzaishi.jp/" target="_blank">薬剤師求人ならリクナビ薬剤師</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://shingakunet.com/" target="_blank">大学・専門学校のスタディサプリ進路</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://studysapuri.jp/" target="_blank">勉強・受験はスタディサプリ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.jalan.net/" target="_blank">じゃらんnet</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.ab-road.net/" target="_blank">海外旅行ならエイビーロード</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://zexy.net/" target="_blank">結婚式ならゼクシィ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://zexybaby.zexy.net/" target="_blank">妊娠-出産-育児はゼクシィBaby</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.ponparemall.com/" target="_blank">通販ならポンパレモール</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/" target="_blank">不動産・住宅情報ならSUUMO</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/chintai/" target="_blank">SUUMO賃貸</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://smatch.jp/" target="_blank">不動産会社検索ならスマッチ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.suumocounter.jp/" target="_blank">住宅相談はスーモカウンター</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.carsensor.net/" target="_blank">中古車ならカーセンサー</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.hotpepper.jp/" target="_blank">ホットペッパーグルメ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://beauty.hotpepper.jp/" target="_blank">ホットペッパービューティー</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://dock.cocokarada.jp/" target="_blank">人間ドックのここカラダ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.rgf-hragent.asia/" target="_blank">海外求人・海外転職はRGF</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://tabroom.jp/" target="_blank">家具インテリアのタブルーム</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://golf-jalan.net/" target="_blank">ゴルフ場予約じゃらんゴルフ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://airregi.jp/" target="_blank">POSレジアプリならAirレジ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://recruit-card.jp/" target="_blank">リクルートカード</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.isize.com/top/kanren/" target="_blank">関連サイト</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.recruit.co.jp/company/group/" target="_blank">グループ企業一覧</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.isize.com/" target="_blank">ISIZE</a>
        </div>
    </div>
    <div class="footlogo">
        <div class="logobox">
            <div>
                <a href="http://www.recruit-sumai.co.jp/" target="_blank"><img src="{{ url('/frontend/images/inc_CM_all_000_crrecruit.gif') }}" width="286" height="27" alt="リクルート住まいカンパニー"></a>
            </div>
            <div class="logobox-link">
                <a href="https://www.recruit.co.jp/" target="_blank">リクルートグループサイトへ</a>
            </div>
        </div>
        <div class="footlogo-link">
            <a href="https://suumo.jp/edit/beginner/guide/">初めての方へ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/sitemap/">サイトマップ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/edit/kiyaku/">利用規約</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://cmn.point.recruit.co.jp/policy/privacy.html" target="_blank">プライバシーポリシー</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://suumo.jp/edit/sogotoiawase/" target="_blank">お問い合わせ</a>
        </div>
        <div class="footlogo-action">
            <a href="http://www.recruit-sumai.co.jp/recruit/" target="_blank" class="footlogo-action-btn">採用情報</a>
        </div>
    </div>
    </div>

    @stack('scripts')
</body>

</html>