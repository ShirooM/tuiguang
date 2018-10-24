<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>投资圈</title>
    <?php include ('./public/css.php')?>
</head>
<body>
<div class="s-top-nav clearfix">
    <div class="s-left float-left">
        <i class="fas fa-angle-left"></i>
        <span>主题贴</span>
    </div>
    <div class="s-right float-right"></div>
</div>

<div class="s-nav clearfix">
    <div class="s-l float-left">
        <i class="fas fa-chart-bar"></i>
        <span>投资吧</span>
    </div>
    <div class="s-r float-right">关注：320万</div>
</div>
<div class="s-contentxx">
    <p><h4 class="pc_font_b" style="color:red;">轻松获利有良方：现货套利独门技巧
</h4></p>

    <table>
        <tr>
            <td class="s-portrait">
                <img src="" class="user-portrait rounded-circle">
            </td>
            <td>
                <div class="user-name s-name" id=""></div>
                <div class="s-describe">高级投资顾问</div>
            </td>
        </tr>
    </table>

    <p class="pc_font_b" style="text-align: center;color:red; ">官方在线指导微信号【<span class="user-wx"></span>】（现货技巧/现货入门）</p>
    <p class="pc_font_b" style="color:red;">有人说自己某些年份，投资市场的获利在100%以上，你信吗？我反正是信了，因为我知道他们是怎么玩的，100%一点也不难。</p>
    <p style="text-align: center;">
        <img src="./upload/39.png" onclick="viewImg(this)" width="100%" />
    </p>
    <p><strong>一、期现套利的原理</strong></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以黄金为例，由于交易性质和交易场所不同， 黄金在期货市场和现货市场存在合理的价格差异。<strong>即： 期货的理论价格＝现货价格*无风险利率＋持有成本</strong></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一般来说，双方的价差稳定在一个固定的区域，但有时会出现短暂的异常。在经济规律的调节下，差价最终会恢复正常的水平。 期现套利可以捕捉这短暂的异常， 运用期货工具将失真的价格差锁定， 当市场恢复到正常时， 通过对充平仓或交割来获利。</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>这里说明下，为什么国内市场只适合做期现套利：</strong>首先，我国对黄金的进出口贸易还处于严格管制阶段，黄金的进出口需得到人民银行的批准， 所以黄金的跨市套利在目前阶段不可行。其次，实际交易中，黄金期货的交易量不够大，除了主力合约之外，其他合约的每日成交量不足百手，所以目前来看黄金期货跨期套利获利空间太小， 操作可行性不大。</p>
    <p><strong>二、期现套利的方法和计算公式</strong></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首先，记住期货的理论价格公式，接下来我们会经常用到它。</p>
    <p style="text-align: center;">
        <img src="./upload/40.png" onclick="viewImg(this)" width="80%" />
    </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中，F（ t,T）=T时期到期的期货合约在t时期的价格；</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S(t)=在t时期标的资产的现货价格；</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r=(T-t)期间的无风险融资利率，一般是一年期贷款利率；</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;K(t,T)=持有成本，包括仓储费、运费、相关杂费等等；</p>
    <p>1、正向套利：</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;升水多少是合理的？ 当价差超过多少时可以采取空期货买现货的方式来套利？</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;假设t日根据期货理论价格公式计算出来的F(t, T)小于沪金期货的价格， 那么我们认为当前的沪金期货价格被高估， 存在正向套利的空间， 可以采取做空期货， 做多现货的方式。</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;举个例子：</p>
    <p style="text-align: center;">沪金期货与 Au95价差</p>
    <p style="text-align: center;">
        <img src="./upload/41.jpg" onclick="viewImg(this)" width="80%" />
    </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;假设沪金现货是V1元/克， 沪金期货是V2元/克</p>
    <p style="text-align: center;">
        <img src="./upload/42.png" onclick="viewImg(this)" width="80%" />
    </p>
    <p style="text-align: center;">
        <img src="./upload/43.png" onclick="viewImg(this)" width="80%" />
    </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在正向市场里， 期货价格会大于现货价格， 但若在t日期货价格相比现货超出 F(t,T)-V1则出现无风险套利机会。</p>
    <p>2、反向套利：</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在反向市场里， 期货价格会小于现货价格， 但若在t日现货价格相比期货超出F(t,T)-V1则出现无风险套利机会。</p>
    <p style="text-align: center;">
        <img src="./upload/44.png" onclick="viewImg(this)" width="80%" />
    </p>
    <p style="text-align: center;">
        <img src="./upload/45.png" onclick="viewImg(this)" width="80%" />
    </p>
    <p><strong>三、实际套利中需要注意的风险及相应解决办法</strong></p>
    <p>1、价差不能回归正常时的风险（换月风险）</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;无风险套利的基本假设是随着期货合约临近交割时， 不合理的价差会回归到正常范围， 特别是期货价格会向现货价格回归， 但在实际中，部分合约即使到了交割日依然与现货维持较大的价差，比如沪金0812合约在交割日收于188元/克，与现货有4元的价差，这也是不合理的价差。所以对于期现套利来说，一旦价差不能回归到正常水平，整个套利将面临失败的风险。</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对于这一风险我们建议的对策是提前换月，将合约主动移仓至下一月份，从而可以赢得更多的时间等待市场回归正常。</p>
    <p>2、 市场剧烈波动时所产生的资金风险</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在市场波动剧烈的情况下，可能出现的一种情况是价差不但不回归，反而会向着单方向运行，这个时候，投资者可能面临保证金不足的风险，<strong>所以在仓位上我们一般建议维持在50%左右</strong>，如果市场波动大，还需要有适当的备用资金防止资金链断裂而被强行平仓。</p>

</div>
<?php include ('./public/comments.php')?>
<?php include ('./public/footer.php')?>
<?php include ('./public/suspension.php')?>
<?php include ('./public/js.php')?>
<?php include ('./public/countcode.php')?>
</body>
</html>