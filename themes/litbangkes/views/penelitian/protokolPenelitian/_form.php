<?php
/* @var $this ProposalPenelitianController */
/* @var $model ProposalPenelitian */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proposal-penelitian-form',
	'enableAjaxValidation'=>false,
  'htmlOptions'=>array('class'=>'stdform stdform2', 'enctype'=>'multipart/form-data')
)); ?>
<?php 

    $pegawai = $model->pegawai;
    echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id) );
?>
	<?php //echo $form->errorSummary($model); ?>
<?php /*
	<div class="par">
		<?php echo $form->labelEx($model,'user_id'); ?>
      <span class="field">
		<?php echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id) ); ?>
      </span>
		<?php echo $form->error($model,'user_id'); ?>
	</div>
*/?>
    <?php
    echo $form->hiddenField($model,'pegawai_id', array('value'=> $pegawai->id));
    ?>

	
  <div class="par">
        <label>Nama</label>   
        <span class="field">
            <?php echo ucfirst($pegawai->nama) ?>
        </span>
    </div>
    <div class="par">
        <label>NIP</label>   
        <span class="field">
            <?php echo ucfirst($pegawai->nip) ?>
        </span>
    </div>
    <div class="par">
        <label>Satuan Kerja</label>   
        <span class="field">
            <?php ?>
        </span>
    </div>


	
    <div class="par">
        <label>Jabatan Fungsional</label>   
        <span class="field">
            <?php echo $model->jabatan->nama ?>
        </span>
    </div>
    <div class="par">
        <label>Sub Bidang</label>   
        <span class="field">
            <?php echo $model->subbidang->nama ?>
        </span>
    </div>
    <div class="par">
        <label>Judul Penelitian</label>   
        <span class="field">
            <?php echo $model->nama_penelitian ?>
        </span>

    </div>

  <div class="par">
      
		  <label>Upload TOR</label>   
      <span class="field">
         <?php echo $form->fileField($modelFile,'filename[tor]'); ?>   
      </span>
		<?php echo $form->error($modelFile,'filename[tor]'); ?>
	</div>

<div class="par">
      
		  <label>Upload Protokol</label>   
      <span class="field">
         <?php echo $form->fileField($modelFile,'filename[protokol]'); ?>   
      </span>
		<?php echo $form->error($modelFile,'filename[protokol]'); ?>
	</div>


	<div class="par">
		<?php echo $form->labelEx($modelProtokol,'anggaran'); ?>
      <span class="field">
		<?php echo $form->textField($modelProtokol,'anggaran'); ?>
      </span>
		<?php echo $form->error($modelProtokol,'anggaran'); ?>
	</div>

	<div class="par">
      
		  <label>Upload RAB</label>   
      <span class="field">
         <?php echo $form->fileField($modelFile,'filename[rab]'); ?>   
      </span>
		<?php echo $form->error($modelFile,'filename[rab]'); ?>
	</div>

	
<?php if ( $model->editable ) { ?>
  <div class="stdformbutton">
		
      <button type="submit" class="btn btn-primary">
          <?php echo $modelProtokol->isNewRecord ? 'Upload Protokol Baru' : 'Simpan'?>
      </button>
      <button type="reset" class="btn">Reset Form</button>
	</div>
<?php } ?>
<?php $this->endWidget(); ?>
