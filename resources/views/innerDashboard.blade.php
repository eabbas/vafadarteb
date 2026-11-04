@extends('dashboard')

@section('content')
<style>
    /* ========== Medical Store Dashboard — Compact & Pro ========== */
    :root {
        --ms-primary: #2563eb;
        --ms-primary-soft: #eff6ff;
        --ms-success: #059669;
        --ms-success-soft: #ecfdf5;
        --ms-warning: #d97706;
        --ms-warning-soft: #fffbeb;
        --ms-danger: #dc2626;
        --ms-danger-soft: #fef2f2;
        --ms-purple: #7c3aed;
        --ms-purple-soft: #f5f3ff;
        --ms-ink: #0f172a;
        --ms-muted: #64748b;
        --ms-line: #eef1f6;
        --ms-bg: #f6f8fc;
        --ms-radius: 16px;
        --ms-shadow: 0 1px 2px rgba(15, 23, 42, .04), 0 4px 16px rgba(15, 23, 42, .04);
    }

    .ms-dash {
        font-family: 'Vazirmatn', system-ui, sans-serif;
        background: var(--ms-bg);
        padding: 16px 18px 20px;
        border-radius: 20px;
        color: var(--ms-ink);
    }

    /* --- Header --- */
    .ms-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 14px;
    }
    .ms-head h5 {
        font-size: 17px;
        font-weight: 800;
        margin: 0;
        letter-spacing: -.2px;
    }
    .ms-head h5 i { color: var(--ms-primary); }
    .ms-head p {
        font-size: 11.5px;
        color: var(--ms-muted);
        margin: 2px 0 0;
    }
    .ms-head-actions { display: flex; gap: 8px; }
    .ms-btn {
        font-size: 12px;
        font-weight: 600;
        padding: 7px 14px;
        border-radius: 10px;
        border: 1px solid var(--ms-line);
        background: #fff;
        color: var(--ms-muted);
        display: inline-flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        transition: .15s;
        white-space: nowrap;
    }
    .ms-btn:hover { background: #f8fafc; color: var(--ms-ink); }
    .ms-btn.primary {
        background: var(--ms-primary);
        border-color: var(--ms-primary);
        color: #fff;
        box-shadow: 0 4px 12px rgba(37, 99, 235, .25);
    }
    .ms-btn.primary:hover { background: #1d4ed8; }

    /* --- Card base --- */
    .ms-card {
        background: #fff;
        border: 1px solid var(--ms-line);
        border-radius: var(--ms-radius);
        box-shadow: var(--ms-shadow);
        overflow: hidden;
    }
    .ms-card-pad { padding: 14px 16px; }
    .ms-card-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .ms-card-head h6 {
        font-size: 13px;
        font-weight: 700;
        margin: 0;
    }
    .ms-card-head .ms-sub {
        font-size: 10.5px;
        color: var(--ms-muted);
        margin: 1px 0 0;
    }
    .ms-chip {
        font-size: 10px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 20px;
        background: #f1f5f9;
        color: var(--ms-muted);
    }
    .ms-chip.ok   { background: var(--ms-success-soft); color: var(--ms-success); }
    .ms-chip.warn { background: var(--ms-warning-soft); color: var(--ms-warning); }
    .ms-chip.bad  { background: var(--ms-danger-soft);  color: var(--ms-danger); }

    /* --- KPI cards --- */
    .ms-kpis {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-bottom: 12px;
    }
    .ms-kpi {
        background: #fff;
        border: 1px solid var(--ms-line);
        border-radius: var(--ms-radius);
        padding: 12px 14px;
        box-shadow: var(--ms-shadow);
        position: relative;
        overflow: hidden;
        transition: .18s;
    }
    .ms-kpi:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(15,23,42,.07); }
    .ms-kpi::after {
        content: '';
        position: absolute;
        inset: auto 0 0 0;
        height: 3px;
        background: var(--ms-primary);
        opacity: .8;
    }
    .ms-kpi.k-green::after  { background: var(--ms-success); }
    .ms-kpi.k-orange::after { background: var(--ms-warning); }
    .ms-kpi.k-purple::after { background: var(--ms-purple); }

    .ms-kpi-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
    }
    .ms-kpi-icon {
        width: 34px; height: 34px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 14px;
        background: var(--ms-primary-soft);
        color: var(--ms-primary);
    }
    .k-green  .ms-kpi-icon { background: var(--ms-success-soft); color: var(--ms-success); }
    .k-orange .ms-kpi-icon { background: var(--ms-warning-soft); color: var(--ms-warning); }
    .k-purple .ms-kpi-icon { background: var(--ms-purple-soft);  color: var(--ms-purple); }

    .ms-kpi-delta {
        font-size: 10px;
        font-weight: 700;
        padding: 3px 7px;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
        gap: 3px;
    }
    .ms-kpi-delta.up   { background: var(--ms-success-soft); color: var(--ms-success); }
    .ms-kpi-delta.down { background: var(--ms-danger-soft);  color: var(--ms-danger); }

    .ms-kpi-val {
        font-size: 19px;
        font-weight: 800;
        letter-spacing: -.3px;
        line-height: 1.1;
        margin-bottom: 2px;
    }
    .ms-kpi-lbl { font-size: 11px; color: var(--ms-muted); }

    /* --- Layout grid --- */
    .ms-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 12px;
        margin-bottom: 12px;
    }
    .ms-grid-3 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 12px;
        margin-bottom: 12px;
    }

    .ms-chart-box { position: relative; width: 100%; height: 190px; }
    .ms-chart-sm  { position: relative; width: 100%; height: 170px; }

    /* --- Legend --- */
    .ms-legend {
        display: flex;
        flex-wrap: wrap;
        gap: 6px 14px;
        justify-content: center;
        margin-top: 8px;
    }
    .ms-legend span {
        font-size: 10.5px;
        color: var(--ms-muted);
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .ms-dot { width: 8px; height: 8px; border-radius: 3px; display: inline-block; }

    /* --- Table --- */
    .ms-table { width: 100%; border-collapse: collapse; font-size: 11.5px; }
    .ms-table thead th {
        font-size: 10px;
        font-weight: 700;
        color: var(--ms-muted);
        text-transform: uppercase;
        padding: 0 8px 8px;
        text-align: right;
        border-bottom: 1px solid var(--ms-line);
    }
    .ms-table tbody td {
        padding: 8px;
        border-bottom: 1px solid #f5f7fb;
        vertical-align: middle;
    }
    .ms-table tbody tr:last-child td { border-bottom: none; }
    .ms-table tbody tr:hover { background: #fafcff; }

    .ms-avatar {
        width: 24px; height: 24px;
        border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        font-size: 10px; font-weight: 700;
        background: var(--ms-primary-soft); color: var(--ms-primary);
        margin-left: 6px;
    }
    .ms-amount { font-weight: 700; font-variant-numeric: tabular-nums; }
    .ms-status {
        font-size: 10px; font-weight: 600;
        padding: 3px 8px; border-radius: 20px;
        white-space: nowrap;
    }
    .ms-status.s-done  { background: var(--ms-success-soft); color: var(--ms-success); }
    .ms-status.s-ship  { background: var(--ms-warning-soft); color: var(--ms-warning); }
    .ms-status.s-proc  { background: var(--ms-primary-soft); color: var(--ms-primary); }
    .ms-status.s-cancel{ background: var(--ms-danger-soft);  color: var(--ms-danger); }

    /* --- Stock alerts --- */
    .ms-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 10px;
        border-radius: 10px;
        margin-bottom: 6px;
        border: 1px solid transparent;
    }
    .ms-alert:last-child { margin-bottom: 0; }
    .ms-alert.crit { background: var(--ms-danger-soft);  border-color: #fecaca; }
    .ms-alert.warn { background: var(--ms-warning-soft); border-color: #fde68a; }
    .ms-alert-icon {
        width: 30px; height: 30px;
        border-radius: 9px;
        display: flex; align-items: center; justify-content: center;
        font-size: 12px;
        background: #fff;
        flex-shrink: 0;
    }
    .ms-alert.crit .ms-alert-icon { color: var(--ms-danger); }
    .ms-alert.warn .ms-alert-icon { color: var(--ms-warning); }
    .ms-alert-body { flex: 1; min-width: 0; }
    .ms-alert-title {
        font-size: 11.5px; font-weight: 700;
        white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .ms-alert-sub { font-size: 10px; color: var(--ms-muted); }
    .ms-alert-btn {
        font-size: 10px; font-weight: 700;
        padding: 4px 10px; border-radius: 8px;
        border: 1px solid currentColor;
        background: transparent;
        cursor: pointer;
        white-space: nowrap;
    }
    .ms-alert.crit .ms-alert-btn { color: var(--ms-danger); }
    .ms-alert.warn .ms-alert-btn { color: var(--ms-warning); }

    .ms-stock-foot {
        display: flex; align-items: center; justify-content: space-between;
        margin-top: 10px; padding-top: 10px;
        border-top: 1px dashed var(--ms-line);
        font-size: 11px;
    }
    .ms-stock-foot strong { font-size: 12.5px; font-weight: 800; }

    /* --- Responsive --- */
    @media (max-width: 1100px) {
        .ms-kpis { grid-template-columns: repeat(2, 1fr); }
        .ms-grid, .ms-grid-3 { grid-template-columns: 1fr; }
    }
    @media (max-width: 576px) {
        .ms-dash { padding: 12px; border-radius: 14px; }
        .ms-kpis { gap: 8px; }
        .ms-kpi-val { font-size: 16px; }
        .ms-chart-box { height: 160px; }
    }
</style>

<div class="ms-dash" dir="rtl">

    {{-- ================= Header ================= --}}
    <div class="ms-head">
        <div>
            <h5><i class="fas fa-stethoscope me-1"></i> داشبورد فروشگاه تجهیزات پزشکی</h5>
            <p>خلاصه‌ای از فروش، موجودی و عملکرد فروشگاه</p>
        </div>
        <div class="ms-head-actions">
            <button class="ms-btn"><i class="fas fa-download"></i> گزارش</button>
            <button class="ms-btn primary"><i class="fas fa-plus"></i> محصول جدید</button>
        </div>
    </div>

    {{-- ================= KPI Cards ================= --}}
    <div class="ms-kpis">
        <div class="ms-kpi">
            <div class="ms-kpi-top">
                <div class="ms-kpi-icon"><i class="fas fa-sack-dollar"></i></div>
                <span class="ms-kpi-delta up"><i class="fas fa-arrow-up"></i> ۱۲٪</span>
            </div>
            <div class="ms-kpi-val">۸۴۵,۲۰۰,۰۰۰</div>
            <div class="ms-kpi-lbl">فروش کل (تومان)</div>
        </div>

        <div class="ms-kpi k-green">
            <div class="ms-kpi-top">
                <div class="ms-kpi-icon"><i class="fas fa-boxes-stacked"></i></div>
                <span class="ms-kpi-delta down"><i class="fas fa-triangle-exclamation"></i> ۸ مورد</span>
            </div>
            <div class="ms-kpi-val">۱,۲۴۷</div>
            <div class="ms-kpi-lbl">محصولات فعال</div>
        </div>

        <div class="ms-kpi k-orange">
            <div class="ms-kpi-top">
                <div class="ms-kpi-icon"><i class="fas fa-cart-shopping"></i></div>
                <span class="ms-kpi-delta up"><i class="fas fa-arrow-up"></i> ۸٪</span>
            </div>
            <div class="ms-kpi-val">۳۲۶</div>
            <div class="ms-kpi-lbl">سفارشات این ماه</div>
        </div>

        <div class="ms-kpi k-purple">
            <div class="ms-kpi-top">
                <div class="ms-kpi-icon"><i class="fas fa-users"></i></div>
                <span class="ms-kpi-delta up"><i class="fas fa-arrow-up"></i> ۵٪</span>
            </div>
            <div class="ms-kpi-val">۲,۴۹۸</div>
            <div class="ms-kpi-lbl">مشتریان فعال</div>
        </div>
    </div>

    {{-- ================= Charts Row ================= --}}
    <div class="ms-grid">
        {{-- Sales Line Chart --}}
        <div class="ms-card">
            <div class="ms-card-pad">
                <div class="ms-card-head">
                    <div>
                        <h6>روند فروش تجهیزات</h6>
                        <p class="ms-sub">۶ ماه اخیر (میلیون تومان)</p>
                    </div>
                    <span class="ms-chip">۶ ماه</span>
                </div>
                <div class="ms-chart-box">
                    <canvas id="msSalesChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Category Doughnut --}}
        <div class="ms-card">
            <div class="ms-card-pad">
                <div class="ms-card-head">
                    <div>
                        <h6>دسته‌بندی فروش</h6>
                        <p class="ms-sub">سهم هر دسته از فروش</p>
                    </div>
                </div>
                <div class="ms-chart-sm">
                    <canvas id="msCategoryChart"></canvas>
                </div>
                <div class="ms-legend">
                    <span><i class="ms-dot" style="background:#2563eb;"></i>تشخیصی</span>
                    <span><i class="ms-dot" style="background:#059669;"></i>مصرفی</span>
                    <span><i class="ms-dot" style="background:#d97706;"></i>اتاق عمل</span>
                    <span><i class="ms-dot" style="background:#7c3aed;"></i>ارتوپدی</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= Second Charts Row ================= --}}
    <div class="ms-grid-3">
        {{-- Top Selling Products --}}
        <div class="ms-card">
            <div class="ms-card-pad">
                <div class="ms-card-head">
                    <div>
                        <h6>پرفروش‌ترین محصولات</h6>
                        <p class="ms-sub">تعداد فروش — این ماه</p>
                    </div>
                </div>
                <div class="ms-chart-sm">
                    <canvas id="msTopProductsChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Stock Status --}}
        <div class="ms-card">
            <div class="ms-card-pad">
                <div class="ms-card-head">
                    <div>
                        <h6>وضعیت موجودی انبار</h6>
                        <p class="ms-sub">موجودی فعلی در برابر حد بحرانی</p>
                    </div>
                </div>
                <div class="ms-chart-sm">
                    <canvas id="msStockChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Recent Orders --}}
        <div class="ms-card">
            <div class="ms-card-pad">
                <div class="ms-card-head">
                    <div>
                        <h6>سفارشات اخیر</h6>
                        <p class="ms-sub">۵ سفارش آخر</p>
                    </div>
                    <a href="#" class="ms-chip" style="text-decoration:none;">همه <i class="fas fa-arrow-left ms-1"></i></a>
                </div>
                <table class="ms-table">
                    <thead>
                        <tr>
                            <th>مشتری</th>
                            <th>محصول</th>
                            <th>مبلغ</th>
                            <th>وضعیت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="ms-avatar">ع</span>علی رضایی</td>
                            <td>فشار خون دیجیتال</td>
                            <td class="ms-amount">۴,۲۵۰,۰۰۰</td>
                            <td><span class="ms-status s-done">تکمیل</span></td>
                        </tr>
                        <tr>
                            <td><span class="ms-avatar" style="background:#ecfdf5;color:#059669;">م</span>مریم احمدی</td>
                            <td>ست تزریقات</td>
                            <td class="ms-amount">۱,۸۹۰,۰۰۰</td>
                            <td><span class="ms-status s-ship">ارسال</span></td>
                        </tr>
                        <tr>
                            <td><span class="ms-avatar" style="background:#fffbeb;color:#d97706;">ح</span>حسین کریمی</td>
                            <td>اکسیژن‌ساز</td>
                            <td class="ms-amount">۱۲,۵۰۰,۰۰۰</td>
                            <td><span class="ms-status s-proc">پردازش</span></td>
                        </tr>
                        <tr>
                            <td><span class="ms-avatar" style="background:#f5f3ff;color:#7c3aed;">ز</span>زهرا موسوی</td>
                            <td>مانیتور حیاتی</td>
                            <td class="ms-amount">۲۸,۴۰۰,۰۰۰</td>
                            <td><span class="ms-status s-done">تکمیل</span></td>
                        </tr>
                        <tr>
                            <td><span class="ms-avatar" style="background:#fef2f2;color:#dc2626;">ر</span>رضا نوری</td>
                            <td>ویلچر تاشو</td>
                            <td class="ms-amount">۵,۶۰۰,۰۰۰</td>
                            <td><span class="ms-status s-cancel">لغو</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- ================= Low Stock Alerts ================= --}}
    <div class="ms-card">
        <div class="ms-card-pad">
            <div class="ms-card-head">
                <div>
                    <h6>هشدار موجودی کم</h6>
                    <p class="ms-sub">محصولاتی که به حد بحرانی رسیده‌اند</p>
                </div>
                <span class="ms-chip bad">۸ مورد</span>
            </div>

            <div class="row g-2">
                <div class="col-md-6">
                    <div class="ms-alert crit">
                        <div class="ms-alert-icon"><i class="fas fa-syringe"></i></div>
                        <div class="ms-alert-body">
                            <div class="ms-alert-title">سرنگ انسولین ۱cc</div>
                            <div class="ms-alert-sub">باقیمانده: ۱۲ عدد (حد بحرانی: ۵۰)</div>
                        </div>
                        <button class="ms-alert-btn">سفارش</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ms-alert crit">
                        <div class="ms-alert-icon"><i class="fas fa-mask-face"></i></div>
                        <div class="ms-alert-body">
                            <div class="ms-alert-title">ماسک جراحی ۳ لایه</div>
                            <div class="ms-alert-sub">باقیمانده: ۳۰ بسته (حد بحرانی: ۱۰۰)</div>
                        </div>
                        <button class="ms-alert-btn">سفارش</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ms-alert warn">
                        <div class="ms-alert-icon"><i class="fas fa-bandage"></i></div>
                        <div class="ms-alert-body">
                            <div class="ms-alert-title">چسب زخم طبی</div>
                            <div class="ms-alert-sub">باقیمانده: ۷۵ عدد (حد بحرانی: ۲۰۰)</div>
                        </div>
                        <button class="ms-alert-btn">سفارش</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ms-alert warn">
                        <div class="ms-alert-icon"><i class="fas fa-thermometer"></i></div>
                        <div class="ms-alert-body">
                            <div class="ms-alert-title">دماسنج جیوه‌ای</div>
                            <div class="ms-alert-sub">باقیمانده: ۱۸ عدد (حد بحرانی: ۴۰)</div>
                        </div>
                        <button class="ms-alert-btn">سفارش</button>
                    </div>
                </div>
            </div>

            <div class="ms-stock-foot">
                <span class="text-muted">ارزش کل موجودی انبار:</span>
                <strong>۲,۴۸۵,۰۰۰,۰۰۰ تومان</strong>
            </div>
        </div>
    </div>

</div>

{{-- ================= Charts Script ================= --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    Chart.defaults.font.family = "'Vazirmatn', system-ui, sans-serif";
    Chart.defaults.font.size = 10;
    Chart.defaults.color = '#64748b';

    const tooltipStyle = {
        backgroundColor: '#0f172a',
        padding: 10,
        cornerRadius: 8,
        titleFont: { size: 11 },
        bodyFont: { size: 11 }
    };

    // ---------- Sales Line Chart ----------
    const salesCtx = document.getElementById('msSalesChart');
    if (salesCtx) {
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
                datasets: [
                    {
                        label: 'تجهیزات پزشکی',
                        data: [420, 580, 510, 680, 720, 845],
                        borderColor: '#2563eb',
                        backgroundColor: 'rgba(37, 99, 235, 0.07)',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#2563eb',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 3,
                        pointHoverRadius: 5,
                        tension: 0.4,
                        fill: true,
                    },
                    {
                        label: 'اقلام مصرفی',
                        data: [280, 320, 350, 410, 460, 520],
                        borderColor: '#059669',
                        backgroundColor: 'rgba(5, 150, 105, 0.05)',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#059669',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 3,
                        pointHoverRadius: 5,
                        tension: 0.4,
                        fill: true,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            boxWidth: 6,
                            padding: 12,
                            font: { size: 10, weight: '500' }
                        }
                    },
                    tooltip: {
                        ...tooltipStyle,
                        callbacks: {
                            label: ctx => ' ' + ctx.dataset.label + ': ' + ctx.parsed.y.toLocaleString('fa-IR') + 'M'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: '#f1f5f9', drawBorder: false },
                        ticks: {
                            callback: v => v.toLocaleString('fa-IR') + 'M',
                            font: { size: 9 }
                        }
                    },
                    x: { grid: { display: false }, ticks: { font: { size: 9 } } }
                }
            }
        });
    }

    // ---------- Category Doughnut ----------
    const catCtx = document.getElementById('msCategoryChart');
    if (catCtx) {
        new Chart(catCtx, {
            type: 'doughnut',
            data: {
                labels: ['تشخیصی', 'مصرفی', 'اتاق عمل', 'ارتوپدی'],
                datasets: [{
                    data: [38, 27, 22, 13],
                    backgroundColor: ['#2563eb', '#059669', '#d97706', '#7c3aed'],
                    borderColor: '#fff',
                    borderWidth: 2.5,
                    hoverOffset: 4,
                    borderRadius: 5,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '72%',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...tooltipStyle,
                        callbacks: {
                            label: ctx => ' ' + ctx.label + ': ' + ctx.parsed.toLocaleString('fa-IR') + '٪'
                        }
                    }
                }
            }
        });
    }

    // ---------- Top Products Bar (Horizontal) ----------
    const topCtx = document.getElementById('msTopProductsChart');
    if (topCtx) {
        new Chart(topCtx, {
            type: 'bar',
            data: {
                labels: ['ست تزریقات', 'فشار خون', 'اکسیژن‌ساز', 'مانیتور حیاتی', 'ویلچر'],
                datasets: [{
                    label: 'تعداد فروش',
                    data: [210, 148, 92, 74, 61],
                    backgroundColor: ['#059669', '#2563eb', '#3b82f6', '#6366f1', '#8b5cf6'],
                    borderRadius: 5,
                    borderSkipped: false,
                    barPercentage: 0.55,
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...tooltipStyle,
                        callbacks: {
                            label: ctx => ' ' + ctx.parsed.x.toLocaleString('fa-IR') + ' عدد'
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: { color: '#f1f5f9', drawBorder: false },
                        ticks: { font: { size: 9 } }
                    },
                    y: { grid: { display: false }, ticks: { font: { size: 9 } } }
                }
            }
        });
    }

    // ---------- Stock Status Bar (Vertical) ----------
    const stockCtx = document.getElementById('msStockChart');
    if (stockCtx) {
        new Chart(stockCtx, {
            type: 'bar',
            data: {
                labels: ['تشخیصی', 'مصرفی', 'اتاق عمل', 'ارتوپدی', 'اورژانس'],
                datasets: [
                    {
                        label: 'موجودی',
                        data: [320, 480, 210, 150, 87],
                        backgroundColor: '#059669',
                        borderRadius: 4,
                        barPercentage: 0.5,
                        categoryPercentage: 0.7,
                    },
                    {
                        label: 'حد بحرانی',
                        data: [100, 200, 80, 50, 30],
                        backgroundColor: '#f87171',
                        borderRadius: 4,
                        barPercentage: 0.5,
                        categoryPercentage: 0.7,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            boxWidth: 6,
                            padding: 10,
                            font: { size: 9 }
                        }
                    },
                    tooltip: {
                        ...tooltipStyle,
                        callbacks: {
                            label: ctx => ' ' + ctx.dataset.label + ': ' + ctx.parsed.y.toLocaleString('fa-IR') + ' عدد'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: '#f1f5f9', drawBorder: false },
                        ticks: { font: { size: 9 } }
                    },
                    x: { grid: { display: false }, ticks: { font: { size: 9 } } }
                }
            }
        });
    }
});
</script>
@endsection