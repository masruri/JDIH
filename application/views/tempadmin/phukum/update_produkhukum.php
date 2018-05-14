
<div class="panel panel-headline" id="home">
	<div class="panel-body">
		<div class="row">
			<!-- untuk penulisan kode -->
     
     <?php echo form_open('produkhukum/update/'.$query->id_produk_hukum) ?>
        <div>
          <label for="">Produk Hukum</label>
          <input type="text" class="form-control" name="produkhukum" value="<?php echo $query->produk_hukum; ?>">
        </div>
        
      </form>
      
		</div>
	</div>
</div>