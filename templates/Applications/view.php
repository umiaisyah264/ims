
<div class="row-mt-5">
    <div class="col-md-9">
        <!-- Content 1 -->
          <?php echo $this->Html->image('lh.png'); ?>
</div>
<div class="col-md-3">
    <div class="card shadow">
        <div class="card-body">
            <!-- Content 2 -->
            <!-- address -->
            <?= h($application->company_name) ?><br/>
            <?= h($application->street_1) ?><br/>
            <?= h($application->street_2) ?><br/>
            <?= h($application->postcode) ?><br/>
            <?= h($application->city) ?><br/>
            <?= h($application->state) ?><br/>
            <br/><br/>
            Tuan/Puan,
            <br/><br/>
            <b>PERMOHONAN MENJALANI LATIHAN INDUSTRI</b>
            <br/><br/>
            Saya <?php($application->user->fullname); ?> pelajar dari program ABC, memohon untuk ,menjalani latihan industri di organisasi <?= h($application->company_name) ?>
            <br/><br/>
            Latihan industri ini akan bermula pada Mac 2025 - Ogos 2025 dan posisi yang dicadangkan adalah di bahagian pengurusan teknologi maklumat selaras dengan keperluan akademik saya.
            <br/><br/>
            Diharap pihak Tuan/Puan dapat menerima dan memberi peluang kepada saya untuk mendapatkan pengalaman dan mengaplikasikan ilmu yang telah dipelajari. Saya juga boleh dihubungi melalui talian: 012/1234567
            <br/><br/>
            Sekian,
            <br/><br/>
            Terima Kasih
            <br/><br/>
            
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="applications view content">
            <h3><?= h($application->company_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $application->hasValue('user') ? $this->Html->link($application->user->fullname, ['controller' => 'Users', 'action' => 'view', $application->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($application->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street 1') ?></th>
                    <td><?= h($application->street_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street 2') ?></th>
                    <td><?= h($application->street_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($application->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($application->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pic Name') ?></th>
                    <td><?= h($application->pic_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pic Email') ?></th>
                    <td><?= h($application->pic_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester') ?></th>
                    <td><?= $application->hasValue('semester') ? $this->Html->link($application->semester->session, ['controller' => 'Semesters', 'action' => 'view', $application->semester->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($application->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= $this->Number->format($application->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($application->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($application->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($application->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>