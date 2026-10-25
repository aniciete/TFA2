<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="directory-container">
    <header class="directory-header">
        <div class="header-main">
            <h1 class="page-title">User Accounts</h1>
            <p class="section-lead">Authorized internal personnel and system operator records. Total Users: <?= count($users) ?>.</p>
        </div>
    </header>

    <div class="table-container open-ledger" tabindex="0" role="region" aria-label="Staff user accounts directory">
        <table class="data-table">
            <caption class="visually-hidden">Staff user accounts directory</caption>
            <thead>
                <tr>
                    <th scope="col" class="th-num">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr class="ledger-row-item">
                        <td class="td-num" data-label="#"><?= sprintf('%02d', $index + 1) ?></td>
                        <td class="cell-mono tabular-num" data-label="Username"><?= esc($user['username']) ?></td>
                        <td class="cell-primary" data-label="Full Name"><?= esc($user['full_name']) ?></td>
                        <td class="cell-mono tabular-num" data-label="Created At"><?= esc($user['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
