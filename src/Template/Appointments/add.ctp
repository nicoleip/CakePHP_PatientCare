<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=  $this->Element('actions', array('type' => 'Appointment', 'typePlural' => 'Appointments')); ?>
</nav>
<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->control('patient_id', ['options' => $patients, 'empty' => true]);
            echo $this->Form->control('doctor_id', ['options' => $doctors, 'empty' => true]);
            echo $this->Form->control('appointment_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
