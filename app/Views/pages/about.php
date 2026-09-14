<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="about-container">
    <header class="section-header">
        <div class="tag-row">
            <span class="market-tag">Store Operations &bull; Overview</span>
            <span class="status-indicator">
                <span class="status-pip" aria-hidden="true"></span>
                <span class="status-label">Operational Guide</span>
            </span>
        </div>
        <h1 class="page-title">About POS Foundations</h1>
        <p class="section-lead">
            POS Foundations delivers front-counter retail management, customer relationship directories, and staff access administration designed for modern store operations.
        </p>
    </header>

    <div class="about-layout">
        <!-- Connected 4-Step Flow -->
        <section class="flow-section" aria-labelledby="flow-heading">
            <div class="flow-mast">
                <h2 id="flow-heading" class="section-heading">Counter Service &amp; Transaction Flow</h2>
                <p class="section-sublead">
                    Standard counter operating procedure from customer greeting through receipt settlement:
                </p>
            </div>

            <ol class="staggered-flow-rail" role="list">
                <li class="flow-node step-odd">
                    <div class="node-track" aria-hidden="true">
                        <span class="oversized-num">01</span>
                        <div class="track-line"></div>
                    </div>
                    <div class="node-card">
                        <div class="node-kicker">STEP 01 &bull; CHECK-IN</div>
                        <strong class="flow-step-title">1. Customer Identification</strong>
                        <p class="flow-step-text">Cashiers look up registered retail or commercial customer profiles to verify account status, contact preferences, and special pricing.</p>
                    </div>
                </li>

                <li class="flow-node step-even">
                    <div class="node-track" aria-hidden="true">
                        <span class="oversized-num">02</span>
                        <div class="track-line"></div>
                    </div>
                    <div class="node-card">
                        <div class="node-kicker">STEP 02 &bull; ORDER ENTRY</div>
                        <strong class="flow-step-title">2. Item &amp; Order Verification</strong>
                        <p class="flow-step-text">The point-of-sale terminal catalogs selected retail items, applies relevant promotions, and calculates subtotal balances.</p>
                    </div>
                </li>

                <li class="flow-node step-odd">
                    <div class="node-track" aria-hidden="true">
                        <span class="oversized-num">03</span>
                        <div class="track-line"></div>
                    </div>
                    <div class="node-card">
                        <div class="node-kicker">STEP 03 &bull; STAFF PROCESSING</div>
                        <strong class="flow-step-title">3. Staff Processing</strong>
                        <p class="flow-step-text">Orders are authorized under active staff login credentials, maintaining clear accountability across all cashier and supervisor shifts.</p>
                    </div>
                </li>

                <li class="flow-node step-even">
                    <div class="node-track" aria-hidden="true">
                        <span class="oversized-num">04</span>
                        <div class="track-terminal"></div>
                    </div>
                    <div class="node-card">
                        <div class="node-kicker">STEP 04 &bull; RECEIPT ISSUANCE</div>
                        <strong class="flow-step-title">4. Sale Completion &amp; Receipt</strong>
                        <p class="flow-step-text">The terminal finalizes payment processing, updates customer account history, and issues itemized store receipts.</p>
                    </div>
                </li>
            </ol>
        </section>

        <!-- Operations Policy Memo -->
        <aside class="storage-dispatch-memo" aria-labelledby="memo-heading">
            <div class="memo-mast">
                <div class="memo-top-row">
                    <span class="memo-stamp">OPERATIONS POLICY</span>
                    <span class="memo-ref">STORE ACCESS PROTOCOL</span>
                </div>
                <h2 id="memo-heading" class="memo-title">Role-Based Access Control</h2>
            </div>
            <div class="memo-content">
                <p class="memo-lead">
                    POS Foundations enforces strict operational separation across store personnel to safeguard register drawers, verify customer details, and maintain accountability across daily floor operations.
                </p>
                <div class="memo-meta-ledger">
                    <div class="ledger-row">
                        <span class="ledger-term">Store Administrator:</span>
                        <span class="ledger-value">Full operational control and configuration</span>
                    </div>
                    <div class="ledger-row">
                        <span class="ledger-term">Shift Supervisor:</span>
                        <span class="ledger-value">Register approvals and transaction overrides</span>
                    </div>
                    <div class="ledger-row">
                        <span class="ledger-term">Cashier Staff:</span>
                        <span class="ledger-value">Checkout sales and receipt issuance</span>
                    </div>
                    <div class="ledger-row">
                        <span class="ledger-term">Inventory Clerk:</span>
                        <span class="ledger-value">Stock directory and catalog updates</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
<?= $this->endSection() ?>
