<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookings view content">
            <h3><?= h($booking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Place') ?></th>
                    <td><?= h($booking->place) ?></td>
                </tr>
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($booking->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= h($booking->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Primary Address Address') ?></th>
                    <td><?= h($booking->primary_address_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Primary Address City') ?></th>
                    <td><?= h($booking->primary_address_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Primary Address Zip') ?></th>
                    <td><?= h($booking->primary_address_zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($booking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booking Date') ?></th>
                    <td><?= h($booking->booking_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($booking->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($booking->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
