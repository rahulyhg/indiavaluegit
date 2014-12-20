<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Page Details
        </header>
        <div class="panel-body">
            <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/createpagesubmit');?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-4">
                        <input type="text" id="normal-field" class="form-control" name="title" value="<?php echo set_value('title');?>">
                    </div>
                </div>
                <div class=" form-group">
                    <label class="col-sm-2 control-label" for="normal-field ">text</label>
                    <div class="col-sm-8">
                        <textarea name="text" id="" cols="20" rows="10" class="form-control tinymce">
                            <?php echo set_value( 'text');?>
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
</div>