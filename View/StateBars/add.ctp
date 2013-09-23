<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">

        <div class="attendeeMeta form well well-small">

            <?php echo $this->Form->create('StateBars', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
            <fieldset>
                <h2><?php echo __('Add State Bar Number'); ?></h2>
                <hr />

                <div class="control-group">
                    <?php echo $this->Form->label('attendee_id', 'Attendee', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('attendee_id', array('class' => 'span12')); ?>
                    </div><!-- .controls -->
                </div><!-- .control-group -->

                <div class="control-group">
                    <?php echo $this->Form->label('state_id', 'State', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('state_id', array('class' => 'span12')); ?>
                    </div><!-- .controls -->
                </div><!-- .control-group -->
                
                <div class="control-group">
                    <?php echo $this->Form->label('bar-number', 'Bar Number', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('bar-number', array('class' => 'span12')); ?>
                    </div><!-- .controls -->
                </div><!-- .control-group -->

            </fieldset>
            <hr />
            <div class="text-right">
                <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?> 
            </div>
            
            <?php echo $this->Form->end(); ?>

        </div>

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
