<div class="card">
        <div class="card-header bg-primary text-light">
            Size Chart
        </div>
        <div class="card-body text-center">
            <div class="mb-0">
                <img class="img-thumbnail rounded me-2" id="blah" alt="" width="200" src="<?= get_image($item->size_chart);?>" data-holder-rendered="true" style="display:<?= $item->size_chart!=0?'block':'none';?>">
            </div>
            <div class="mb-0">
                <input type="file" name="file" class="filestyle" id="imgInp" data-input="false" data-buttonname="btn-secondary">
                <input type="hidden" name="media_id" id="media_id" />
                <input type="hidden" name="hdn_media_id" id="media_id" value="<?= $item->size_chart;?>" />
                <a href="javascript:;" id="openLibrary">or Choose From Library</a>
                </div> 
        </div>
    </div>