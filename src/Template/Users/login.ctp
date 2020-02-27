<!-- File: src/Template/Users/login.ctp -->

<div style="position: absolute;
    width: 29pc;
    height: 200px;
    z-index: 15;
    top: 30%;
    left: 43%;
    margin: -100px 0 0 -150px;background-color: #f69420;">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset style="background-color: #f69420;">
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>