<div class="page-content">
   <div class="container-fluid">
      <!-- start page title -->
      <div class="page-title-box">
         <div class="row align-items-center">
            <div class="col-md-8">
               <h6 class="page-title">Gifts</h6>
               <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="<?= admin_url('')?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?= admin_url('gift')?>">Gifts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Gifts</li>
               </ol>
            </div>
            <div class="col-md-4">
               <div class="float-end d-none d-md-block">
                  <div class="dropdown">
                     <a href="<?= admin_url('gift/')?>" class="btn btn-primary  dropdown-toggle" aria-expanded="false">
                     <i class="fas fa-arrow-left me-2"></i> Back
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row mb-5">
      <?php $this->load->view('admin/partials/_messages');?>
      </div>
      <!-- end page title -->
      <?= form_open_multipart('admin/gift/update-process/'.$item->id, 'class="custom-validation"');?>
      
         <div class="row">
            <div class="col-lg-9">
               <div class="card">
                  <div class="card-header bg-primary text-light">
                     Edit Gifts
                  </div>
                  <div class="card-body">
                     <div class="mb-3">
                        <label class="form-label" id="tamo">Gift Title</label>
                        <div>
                           <input data-parsley-type="text" type="text" value="<?= $item->title; ?>" class="form-control" required placeholder="Enter Title" name="gift_title" id="tamo">
                        </div>
                     </div> 
                     <div class="mb-3">
                        <label class="form-label" id="tamo">Gift Amount</label>
                        <div>
                           <input data-parsley-type="number" type="number" value="<?= $item->gift_amount; ?>" class="form-control" required placeholder="Enter Amount" name="gift_amount" id="tamo">
                        </div>
                     </div>  
                     <div class="mb-3">
                        <label class="form-label" id="tamo">Target Amount</label>
                        <div>
                           <input data-parsley-type="number" type="number" value="<?= $item->fetch_amount; ?>" class="form-control" required placeholder="Enter Amount" name="fetch_amount" id="tamo">
                        </div>
                     </div>  
                     <div class="mb-3">
                        <label class="form-label">Massage</label>
                        <div>
                           <textarea name="massage" class="form-control editor" rows="5"><?= $item->massage; ?></textarea>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
            <?php $this->load->view('admin/partials/_edit-input-image');?>
               <div class="card">
                  <div class="card-header bg-primary text-light">
                     Publish
                  </div>
                  <div class="card-body">
                     <div class="mb-3">
                        <label class="form-label mb-3 d-flex">Visiblity</label>
                        <div class="form-check form-check-inline">
                           <input type="radio" id="customRadioInline1" name="is_visible" class="form-check-input" value="1" <?= check_uncheck($item->is_visible,1);?>>
                           <label class="form-check-label" for="customRadioInline1">Show</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input type="radio" id="customRadioInline2" name="is_visible" class="form-check-input" value="0" <?= check_uncheck($item->is_visible,0);?>>
                           <label class="form-check-label" for="customRadioInline2">Hide</label>
                        </div>
                     </div>
                     <div class="mb-0">
                        <div>
                           <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                           Save Changes
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
      <?= form_close();?>
   </div>
   <!-- container-fluid -->
</div>