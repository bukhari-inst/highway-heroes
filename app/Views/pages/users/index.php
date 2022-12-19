<?php if (in_groups('admin')) : ?>

<?= $this->include('pages/users/admin'); ?>

<?php elseif (in_groups('Customers')) : ?>

<?= $this->include('pages/users/customers'); ?>

<?php endif; ?>