<div class="s-wx-qr">
    <div class="a">长按下面二维码识别</div>
    <img src="<?php echo($init['wx_qr']) ?>" />
</div>
<div class="s-footer">
    <span>阅读 2860</span>
</div>

<!--查看图片弹出-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">图片查看</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="viewImg" src="" width="100%" />
            </div>
        </div>
    </div>
</div>