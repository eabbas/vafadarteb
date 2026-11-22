@extends('dashboard')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">
<script src="https://cdn.jsdelivr.net/npm/persian-date@1.1.0/dist/persian-date.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>

<style>
    :root {
        --metronic-primary: #1B84FF;
        --metronic-primary-dark: #0a6fd6;
        --metronic-primary-light: #4a9fff;
        --metronic-bg-content: #FCFCFC;
        --metronic-bg-form: #FFFFFF;
        --metronic-shadow-form: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text: #9A9CAE;
        --metronic-text-dark: #4A5568;
        --metronic-text-hover: #1B84FF;
        --metronic-danger: #dc2626;

        --shadow-sm: 0 2px 8px rgba(27, 132, 255, 0.06);
        --shadow-md: 0 4px 20px rgba(27, 132, 255, 0.10);
    }

    /* ===== کارت اصلی ===== */
    .vafadar-form-card {
        background: var(--metronic-bg-form);
        border: 1px solid var(--metronic-border);
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .vafadar-form-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر فرم ===== */
    .vafadar-form-header {
        background: var(--metronic-shadow-form);
        border-bottom: 2px solid var(--metronic-border);
        padding: 18px 28px;
    }

    .vafadar-form-header h2 {
        color: var(--metronic-text-dark);
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .vafadar-form-header .header-icon {
        width: 40px;
        height: 40px;
        background: var(--metronic-primary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: var(--metronic-text);
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
        transition: all 0.3s ease;
    }

    .vafadar-input {
        width: 100%;
        padding: 12px 16px;
        background: var(--metronic-shadow-form);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-text-dark);
        font-size: 13px;
        transition: all 0.3s ease;
        outline: none;
    }

    .vafadar-input::placeholder {
        color: var(--metronic-text);
        font-size: 12px;
    }

    .vafadar-input:hover {
        border-color: var(--metronic-primary-light);
    }

    .vafadar-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }

    /* ===== سلکت ===== */
    .vafadar-select {
        width: 100%;
        padding: 12px 16px;
        background: var(--metronic-shadow-form);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-text-dark);
        font-size: 13px;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 14px center;
        cursor: pointer;
    }

    .vafadar-select:hover {
        border-color: var(--metronic-primary-light);
    }

    .vafadar-select:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }

    /* =====================================================
       مقدار تخفیف
    ===================================================== */

    .discount-value-row {
        display: flex;
        align-items: stretch;
        gap: 8px;
        width: 100%;
    }

    .discount-value-input {
        flex: 1;
        min-width: 0;
    }

    .discount-type-btn {
        min-width: 95px;
        padding: 0 14px;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        background: var(--metronic-shadow-form);
        color: var(--metronic-text);
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all .25s ease;
        white-space: nowrap;
    }

    .discount-type-btn:hover {
        border-color: var(--metronic-primary);
        color: var(--metronic-primary);
        background: #EFF7FF;
    }

    .discount-type-btn.active {
        background: var(--metronic-primary);
        border-color: var(--metronic-primary);
        color: #fff;
        box-shadow: 0 4px 12px rgba(27, 132, 255, .18);
    }

    /* =====================================================
       وضعیت تخفیف
    ===================================================== */

    .discount-status-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        min-height: 47px;
        padding: 10px 14px;
        border: 1.5px solid var(--metronic-border);
        background: var(--metronic-shadow-form);
        border-radius: 12px;
        transition: all .25s ease;
    }

    .discount-status-text {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .discount-status-title {
        font-size: 12px;
        font-weight: 700;
        color: var(--metronic-text-dark);
    }

    .discount-status-description {
        font-size: 10px;
        color: var(--metronic-text);
    }

    .discount-status-toggle {
        width: 48px;
        height: 27px;
        min-width: 48px;
        position: relative;
        border: none;
        border-radius: 30px;
        background: #CBD0DA;
        cursor: pointer;
        transition: all .3s ease;
        padding: 3px;
    }

    .discount-status-toggle .toggle-dot {
        display: block;
        width: 21px;
        height: 21px;
        border-radius: 50%;
        background: #fff;
        transition: transform .3s ease;
        box-shadow: 0 1px 4px rgba(0,0,0,.12);
    }

    .discount-status-toggle.active {
        background: var(--metronic-primary);
    }

    .discount-status-toggle.active .toggle-dot {
        transform: translateX(-21px);
    }

    /* =====================================================
       انتخاب محصولات / کاربران / دسته‌بندی‌ها
    ===================================================== */

    .picker-box {
        width: 100%;
        border: 1.5px solid var(--metronic-border);
        border-radius: 14px;
        background: #fff;
        padding: 12px;
        transition: border-color .25s ease, box-shadow .25s ease;
    }

    .picker-box:focus-within {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, .06);
    }

    .picker-search {
        width: 100%;
        padding: 11px 14px;
        border: 1px solid var(--metronic-border);
        border-radius: 10px;
        outline: none;
        background: var(--metronic-shadow-form);
        color: var(--metronic-text-dark);
        font-size: 12px;
        transition: all .2s ease;
        margin-bottom: 10px;
    }

    .picker-search::placeholder {
        color: var(--metronic-text);
    }

    .picker-search:focus {
        border-color: var(--metronic-primary);
        background: #fff;
    }

    .picker-list {
        max-height: 190px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 5px;
        padding: 3px;
    }

    .picker-list::-webkit-scrollbar {
        width: 5px;
    }

    .picker-list::-webkit-scrollbar-track {
        background: #F1F3F6;
        border-radius: 10px;
    }

    .picker-list::-webkit-scrollbar-thumb {
        background: #C9DDF5;
        border-radius: 10px;
    }

    .picker-option {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
        padding: 10px 12px;
        margin: 0;
        border: 1px solid transparent;
        border-radius: 9px;
        cursor: pointer;
        transition: all .2s ease;
        background: #fff;
    }

    .picker-option:hover {
        background: #F3F8FF;
        border-color: #DCEBFC;
    }

    .picker-option.selected {
        background: #EFF7FF;
        border-color: #B9DAFF;
    }

    .picker-option input[type="checkbox"] {
        width: 16px;
        height: 16px;
        min-width: 16px;
        accent-color: var(--metronic-primary);
        cursor: pointer;
        margin: 0;
    }

    .picker-option span {
        color: var(--metronic-text-dark);
        font-size: 12px;
        font-weight: 500;
        line-height: 1.8;
        flex: 1;
    }

    .picker-option.selected span {
        color: var(--metronic-primary-dark);
        font-weight: 700;
    }

    .picker-count {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 5px 5px;
        margin-top: 8px;
        border-top: 1px solid var(--metronic-border);
        color: var(--metronic-text);
        font-size: 11px;
        font-weight: 600;
    }

    .picker-no-result {
        padding: 20px 10px;
        text-align: center;
        color: var(--metronic-text);
        font-size: 12px;
    }

    .picker-selected-items {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
        margin-top: 8px;
    }

    .picker-chip {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 6px 10px;
        background: #EFF7FF;
        border: 1px solid #CDE4FF;
        color: var(--metronic-primary-dark);
        border-radius: 8px;
        font-size: 11px;
        font-weight: 600;
        max-width: 100%;
    }

    .picker-chip span {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 180px;
    }

    .picker-chip button {
        border: none;
        background: transparent;
        color: #E05252;
        font-size: 16px;
        line-height: 1;
        cursor: pointer;
        padding: 0;
    }

    /* ===== دکمه ثبت ===== */
    .vafadar-btn {
        padding: 12px 32px;
        background: var(--metronic-primary);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
        white-space: nowrap;
    }

    .vafadar-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }

    .vafadar-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== خطا ===== */
    .vafadar-error {
        color: var(--metronic-danger);
        font-size: 12px;
        margin-top: 4px;
        display: block;
        padding-right: 4px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-form-grid {
            grid-template-columns: 1fr !important;
            gap: 16px !important;
        }

        .vafadar-form-header h2 {
            font-size: 17px;
        }

        .vafadar-btn {
            padding: 10px 24px;
            font-size: 13px;
        }

        .vafadar-form-footer {
            flex-direction: column;
            align-items: stretch !important;
            gap: 12px !important;
        }

        .vafadar-form-footer .vafadar-btn {
            width: 100%;
            justify-content: center;
        }

        .discount-value-row {
            flex-wrap: wrap;
        }

        .discount-value-input {
            flex-basis: 100%;
        }

        .discount-type-btn {
            flex: 1;
            min-height: 42px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-form-header {
            padding: 14px 16px;
        }

        .vafadar-form-header h2 {
            font-size: 15px;
        }

        .vafadar-form-body {
            padding: 16px !important;
        }

        .vafadar-input {
            padding: 10px 14px;
            font-size: 12px;
        }

        .vafadar-select {
            padding: 10px 14px;
            font-size: 12px;
        }

        .picker-box {
            padding: 9px;
        }
    }


.free-shipping-option {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 15px;
    border: 1.5px solid var(--metronic-border);
    border-radius: 13px;
    background: var(--metronic-shadow-form);
    cursor: pointer;
    transition: all .25s ease;
}

.free-shipping-option:hover {
    border-color: var(--metronic-primary);
    background: #F3F8FF;
}

.free-shipping-option input {
    display: none;
}

.free-shipping-icon {
    width: 43px;
    height: 43px;
    min-width: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #E8F3FF;
    color: var(--metronic-primary);
    border-radius: 11px;
    font-size: 18px;
}

.free-shipping-content {
    display: flex;
    flex-direction: column;
    gap: 5px;
    flex: 1;
}

.free-shipping-content strong {
    font-size: 13px;
    color: var(--metronic-text-dark);
}

.free-shipping-content small {
    font-size: 11px;
    color: var(--metronic-text);
    line-height: 1.8;
}

.free-shipping-check {
    width: 23px;
    height: 23px;
    border: 1.5px solid var(--metronic-border);
    border-radius: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: transparent;
    font-size: 11px;
    transition: all .25s ease;
}

.free-shipping-option:has(input:checked) {
    border-color: var(--metronic-primary);
    background: #EFF7FF;
}

.free-shipping-option:has(input:checked) .free-shipping-check {
    background: var(--metronic-primary);
    border-color: var(--metronic-primary);
    color: white;
}
.picker-extra-info {
    color: var(--metronic-primary);
    background: #EFF7FF;
    border: 1px solid #DCEBFC;
    border-radius: 7px;
    padding: 5px 9px;
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
    direction: ltr;
    margin-right: auto;
}

.picker-option {
    justify-content: space-between;
}

@media (max-width: 480px) {
    .picker-option {
        flex-wrap: wrap;
    }

    .picker-extra-info {
        margin-right: 26px;
    }
}
</style>

<div class="w-full flex justify-center py-6">
    <div class="w-full max-w-4xl vafadar-form-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </span>
                ایجاد کد تخفیف جدید
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات کد تخفیف را وارد کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('discuntCode.store')}}" method="POST" id="form" class="vafadar-form-body p-6">
            @csrf

            <!-- ===== گرید فیلدها ===== -->
            <div class="vafadar-form-grid grid grid-cols-2 max-[420px]:flex max-[420px]:flex-col gap-6">

                <!-- عنوان -->
                <div>
                    <label class="vafadar-label" for="title">عنوان</label>
                    <input type="text" id="title" name="title"
                        placeholder="عنوان کد تخفیف را وارد کنید"
                        value="{{ old('title') }}" class="vafadar-input">
                    @error('title')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- مقدار تخفیف درصدی --}}
                <div id="percentBox">

                    <label class="vafadar-label" for="number">
                        مقدار تخفیف
                    </label>

                    <div class="discount-value-row">

                        <input
                            type="number"
                            name="number"
                            id="number"
                            value="{{ old('number') }}"
                            placeholder="مثلاً ۲۰"
                            class="vafadar-input discount-value-input"
                        >

                        <button type="button" class="discount-type-btn"
                            data-discount-type="percent">
                            درصدی
                        </button>

                        <button type="button" class="discount-type-btn"
                            data-discount-type="number">
                            مبلغ ثابت
                        </button>

                    </div>

                    @error('number')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- مقدار تخفیف مبلغ ثابت --}}
                <div id="fixedBox" class="hidden">

                    <label class="vafadar-label" for="price">
                        مقدار تخفیف
                    </label>

                    <div class="discount-value-row">

                        <input
                            type="number"
                            name="price"
                            id="price"
                            value="{{ old('price') }}"
                            placeholder="مبلغ تخفیف را وارد کنید"
                            class="vafadar-input discount-value-input"
                            disabled
                        >

                        <button type="button" class="discount-type-btn"
                            data-discount-type="percent">
                            درصدی
                        </button>

                        <button type="button" class="discount-type-btn"
                            data-discount-type="number">
                            مبلغ ثابت
                        </button>

                    </div>

                    @error('price')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- نوع تخفیف برای ارسال به کنترلر --}}
                <input type="hidden" name="discunt_type"
                    id="discunt_type"
                    value="{{ old('discunt_type', 'percent') }}">


                <!-- تاریخ شروع -->
                <div>
                    <label class="vafadar-label" for="start_date">
                        تاریخ شروع اعتبار
                    </label>

                    <div class="relative">
                        <input type="text"
                            name="start_date"
                            id="start_date"
                            class="vafadar-input"
                            placeholder="انتخاب تاریخ شروع"
                            value="{{ old('start_date') }}"
                            autocomplete="off"
                            readonly>

                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#1B84FF] pointer-events-none">
                            <i class="fa fa-calendar-alt"></i>
                        </span>
                    </div>

                    @error('start_date')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- تاریخ پایان -->
                <div>
                    <label class="vafadar-label" for="end_date">
                        تاریخ پایان اعتبار
                    </label>

                    <div class="relative">
                        <input type="text"
                            name="end_date"
                            id="end_date"
                            class="vafadar-input"
                            placeholder="انتخاب تاریخ پایان"
                            value="{{ old('end_date') }}"
                            autocomplete="off"
                            readonly>

                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#1B84FF] pointer-events-none">
                            <i class="fa fa-calendar-alt"></i>
                        </span>
                    </div>

                    @error('end_date')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- محدودیت استفاده -->
                <div>
                    <label class="vafadar-label" for="usage_limit">محدودیت تعداد استفاده</label>
                    <input type="number" name="usage_limit" id="usage_limit"
                        class="vafadar-input" placeholder="مثلاً 100"
                        value="{{ old('usage_limit') }}" min="1">
                    @error('usage_limit')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror
                </div>
                {{-- کد تخفیف --}}
                <div class="">

                    <label class="vafadar-label" for="code">
                        کد تخفیف
                    </label>

                    <div class=" flex flex-row gap-1">

                        <input
                            type="text"
                            name="code"
                            id="code"
                            maxlength="5"
                            value="{{ old('code') }}"
                            placeholder="کد تخفیف را وارد کنید"
                            class="vafadar-input w-8/12 "
                            dir="ltr"
                        >

                        <button type="button" class='w-4/12 text-white rounded-xl bg-[#1B84FF] cursor-pointer' id="generateCodeBtn">
                            <i class="fa fa-sync-alt "></i>
                            تولید کد
                        </button>

                    </div>

                    @error('code')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>
                {{-- مزایای اضافی کد تخفیف --}}
                <div class="col-span-2">

                    <label class="vafadar-label">
                        مزایای اضافی کد تخفیف
                    </label>

                    <div class="grid grid-cols-2 gap-4">

                        {{-- ارسال رایگان --}}
                        <label class="free-shipping-option">

                            <input
                                type="checkbox"
                                name="free_shipping"
                                value="1"
                                {{ old('free_shipping') == '1' ? 'checked' : '' }}
                            >

                            <span class="free-shipping-icon">
                                <i class="fa fa-truck"></i>
                            </span>

                            <span class="free-shipping-content">
                                <strong>ارسال رایگان</strong>
                            </span>

                            <span class="free-shipping-check">
                                <i class="fa fa-check"></i>
                            </span>

                        </label>

                        {{-- فعال / غیرفعال --}}
                        <label class="free-shipping-option">

                            <input
                                type="checkbox"
                                name="is_active"
                                value="1"
                                {{ old('is_active') == '1' ? 'checked' : '' }}
                            >

                            <span class="free-shipping-icon">
                                <i class="fa fa-toggle-on"></i>
                            </span>

                            <span class="free-shipping-content">
                                <strong>فعال / غیرفعال</strong>
                            </span>

                            <span class="free-shipping-check">
                                <i class="fa fa-check"></i>
                            </span>

                        </label>

                    </div>

                </div>

                
            </div>

            {{-- ===== سه باکس انتخاب: محصولات / کاربران / دسته‌بندی‌ها ===== --}}

            <div class="flex flex-col gap-6 mt-6">

                {{-- انتخاب محصولات --}}
                <div data-picker="products">

                    <label class="vafadar-label">
                        انتخاب محصولات مشمول تخفیف
                    </label>

                    <div class="picker-box">

                        <input type="text" class="picker-search" data-search
                            placeholder="جستجو بین محصولات...">

                        <div class="picker-list" data-list>

                            @foreach($products as $product)
                                @php
                                    $productId = $product->id;
                                    $productName =$product->title;
                                    $productPrice = $product->price;
                                @endphp

                                <label class="picker-option"
                                    data-picker-option
                                    data-title="{{ $productName }}">

                                    <input
                                        type="checkbox"
                                        name="products[]"
                                        value="{{ $productId }}"
                                        {{ in_array($productId, old('products', [])) ? 'checked' : '' }}
                                    >

                                    <span>{{ $productName }}</span>

                                    <small class="picker-extra-info">
                                        {{ number_format((float) $productPrice) }} تومان
                                    </small>

                                </label>
                            @endforeach

                        </div>

                        <div class="picker-no-result hidden" data-no-result>
                            موردی پیدا نشد.
                        </div>

                        <div class="picker-count" data-count>
                            ۰ مورد انتخاب شده
                        </div>

                        <div class="picker-selected-items" data-selected></div>

                    </div>

                    @error('products')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- انتخاب کاربران --}}
                <div data-picker="users">

                    <label class="vafadar-label">
                        انتخاب کاربران مشمول تخفیف
                    </label>

                    <div class="picker-box">

                        <input type="text" class="picker-search" data-search
                            placeholder="جستجو بین کاربران...">

                        <div class="picker-list" data-list>

                            @foreach($users as $user)
                                @php
                                    $userId = $user->id;
                                    $userName = $user->name;
                                    $userPhone = $user->phoneNumber;
                                @endphp

                                <label class="picker-option"
                                    data-picker-option
                                    data-title="{{ $userName }} {{ $userPhone }}">

                                    <input
                                        type="checkbox"
                                        name="users[]"
                                        value="{{ $userId }}"
                                        {{ in_array($userId, old('users', [])) ? 'checked' : '' }}
                                    >

                                    <span>{{ $userName }}</span>

                                    <small class="picker-extra-info">
                                        {{ $userPhone ?: 'شماره تلفن ثبت نشده' }}
                                    </small>

                                </label>
                            @endforeach

                        </div>

                        <div class="picker-no-result hidden" data-no-result>
                            موردی پیدا نشد.
                        </div>

                        <div class="picker-count" data-count>
                            ۰ مورد انتخاب شده
                        </div>

                        <div class="picker-selected-items" data-selected></div>

                    </div>

                    @error('users')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- انتخاب دسته‌بندی‌ها --}}
                <div data-picker="categories">

                    <label class="vafadar-label">
                        انتخاب دسته‌بندی‌های مشمول تخفیف
                    </label>

                    <div class="picker-box">

                        <input
                            type="text"
                            class="picker-search"
                            data-search
                            placeholder="جستجو بین دسته‌بندی‌ها..."
                        >

                        <div class="picker-list" data-list>

                            @foreach($categories as $category)
                                @php
                                    $categoryId = $category->id;
                                    $categoryName = $category->title;
                                @endphp
                                @if($category->id!=1)
                                    <label class="picker-option"
                                        data-picker-option
                                        data-title="{{ $categoryName }}">

                                        <input
                                            type="checkbox"
                                            name="categories[]"
                                            value="{{ $categoryId }}"
                                            {{ in_array($categoryId, old('categories', [])) ? 'checked' : '' }}
                                        >

                                        <span>{{ $categoryName }}</span>

                                    </label>
                                @endif
                            @endforeach

                        </div>

                        <div class="picker-no-result hidden" data-no-result>
                            موردی پیدا نشد.
                        </div>

                        <div class="picker-count" data-count>
                            ۰ مورد انتخاب شده
                        </div>

                        <div class="picker-selected-items" data-selected></div>

                    </div>

                    @error('categories')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <!-- ===== فوتر ===== -->
            <div class="vafadar-form-footer flex items-center justify-between mt-6 pt-6 border-t border-[#DBDFE9]">

                <button type="submit" class="vafadar-btn">
                    <span>ثبت کد تخفیف</span>

                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </button>

                <span class="text-xs text-[#9A9CAE]">
                    * تمامی فیلدها ضروری هستند
                </span>

            </div>

        </form>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       تولید کد تخفیف
    ===================================================== */

    const codeInput = document.getElementById('code');
    const generateBtn = document.getElementById('generateCodeBtn');

    const CHARS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    if (codeInput && generateBtn) {

        generateBtn.addEventListener('click', function () {

            let randomCode = '';

            for (let i = 0; i < 5; i++) {
                randomCode += CHARS.charAt(
                    Math.floor(Math.random() * CHARS.length)
                );
            }

            codeInput.value = randomCode;

            codeInput.classList.add('ring-2', 'ring-[#1B84FF]');

            setTimeout(function () {
                codeInput.classList.remove('ring-2', 'ring-[#1B84FF]');
            }, 400);

            codeInput.focus();
        });

        codeInput.addEventListener('input', function () {

            this.value = this.value
                .toUpperCase()
                .replace(/[^A-Z0-9]/g, '')
                .slice(0, 5);

        });
    }


    /* =====================================================
       انتخاب نوع تخفیف: درصدی / مبلغ ثابت
    ===================================================== */

    const percentBox = document.getElementById('percentBox');
    const fixedBox = document.getElementById('fixedBox');
    const discountTypeInput = document.getElementById('discunt_type');

    const discountButtons = document.querySelectorAll('[data-discount-type]');

    function setDiscountType(type) {

        if (!percentBox || !fixedBox || !discountTypeInput) return;

        discountTypeInput.value = type;

        const percentInput = document.getElementById('number');
        const fixedInput = document.getElementById('price');

        if (type === 'percent') {

            percentBox.classList.remove('hidden');
            fixedBox.classList.add('hidden');

            percentInput.disabled = false;
            fixedInput.disabled = true;

        } else {

            percentBox.classList.add('hidden');
            fixedBox.classList.remove('hidden');

            percentInput.disabled = true;
            fixedInput.disabled = false;

        }

        discountButtons.forEach(function (button) {

            const isActive = button.dataset.discountType === type;

            button.classList.toggle('active', isActive);

            button.setAttribute(
                'aria-pressed',
                isActive ? 'true' : 'false'
            );

        });
    }

    discountButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            setDiscountType(this.dataset.discountType);

        });

    });

    // مقدار اولیه از old یا مقدار پیش‌فرض
    setDiscountType(discountTypeInput?.value || 'percent');


    /* =====================================================
       وضعیت تخفیف
    ===================================================== */

    const statusToggle = document.getElementById('statusToggle');
    const statusInput = document.getElementById('status');
    const statusTitle = document.getElementById('statusTitle');
    const statusDescription = document.getElementById('statusDescription');

    function updateStatus(isActive) {

        statusInput.value = isActive ? '1' : '0';

        statusToggle.classList.toggle('active', isActive);

        statusToggle.setAttribute(
            'aria-pressed',
            isActive ? 'true' : 'false'
        );

        statusTitle.textContent = isActive ? 'فعال' : 'غیرفعال';
    }

    if (statusToggle && statusInput) {

        statusToggle.addEventListener('click', function () {

            const isActive = statusInput.value !== '1';

            updateStatus(isActive);

        });

        updateStatus(statusInput.value === '1');
    }


    /* =====================================================
       انتخاب‌گر محصولات / کاربران / دسته‌بندی‌ها
    ===================================================== */

    const pickerCards = document.querySelectorAll('[data-picker]');

    const persianNumber = function (number) {
        return number.toLocaleString('fa-IR');
    };

    pickerCards.forEach(function (card) {

        const searchInput = card.querySelector('[data-search]');
        const items = card.querySelectorAll('[data-picker-option]');
        const noResult = card.querySelector('[data-no-result]');
        const counter = card.querySelector('[data-count]');
        const selectedContainer = card.querySelector('[data-selected]');

        if (!searchInput || !counter || !selectedContainer) return;

        // به‌روزرسانی وضعیت یک انتخاب‌گر
        function updatePicker() {

            const checkedItems = card.querySelectorAll(
                '[data-picker-option] input[type="checkbox"]:checked'
            );

            const selectedCount = checkedItems.length;

            counter.textContent =
                persianNumber(selectedCount) + ' مورد انتخاب شده';

            selectedContainer.innerHTML = '';

            checkedItems.forEach(function (checkbox) {

                const option = checkbox.closest('[data-picker-option]');
                const title = option.dataset.title ||
                    option.querySelector('span')?.textContent.trim() ||
                    checkbox.value;

                option.classList.add('selected');

                const chip = document.createElement('div');
                chip.className = 'picker-chip';

                const text = document.createElement('span');
                text.textContent = title;

                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.innerHTML = '&times;';
                removeButton.setAttribute('aria-label', 'حذف انتخاب');

                removeButton.addEventListener('click', function () {

                    checkbox.checked = false;

                    updatePicker();

                });

                chip.appendChild(text);
                chip.appendChild(removeButton);

                selectedContainer.appendChild(chip);

            });

            // به‌روزرسانی کلاس گزینه‌ها
            items.forEach(function (item) {

                const checkbox = item.querySelector('input[type="checkbox"]');

                item.classList.toggle(
                    'selected',
                    checkbox && checkbox.checked
                );

            });

        }

        // جستجوی زنده
        function filterItems() {

            const query = searchInput.value.trim().toLowerCase();

            let visibleCount = 0;

            items.forEach(function (item) {

                const title = (
                    item.dataset.title ||
                    item.querySelector('span')?.textContent ||
                    ''
                ).toLowerCase();

                const matched = title.includes(query);

                item.style.display = matched ? 'flex' : 'none';

                if (matched) visibleCount++;

            });

            if (noResult) {
                noResult.classList.toggle(
                    'hidden',
                    visibleCount !== 0
                );
            }

        }

        searchInput.addEventListener('input', filterItems);

        // تغییر وضعیت چک‌باکس‌ها
        items.forEach(function (item) {

            const checkbox = item.querySelector('input[type="checkbox"]');

            if (!checkbox) return;

            checkbox.addEventListener('change', updatePicker);

        });

        // پاک کردن جستجو با Escape
        searchInput.addEventListener('keydown', function (event) {

            if (event.key === 'Escape') {

                this.value = '';

                filterItems();

            }

        });

        // مقداردهی اولیه
        updatePicker();
        filterItems();

    });


    /* =====================================================
       اعتبارسنجی نوع تخفیف
    ===================================================== */

    const form = document.getElementById('form');

    if (form) {

        form.addEventListener('submit', function (event) {

            const type = discountTypeInput.value;

            const percentInput = document.getElementById('number');
            const fixedInput = document.getElementById('price');

            if (type === 'percent') {

                percentInput.disabled = false;
                fixedInput.disabled = true;

            } else {

                percentInput.disabled = true;
                fixedInput.disabled = false;

            }

        });

    }

});


/* =====================================================
   تقویم شمسی
===================================================== */

$(document).ready(function () {

    $('#start_date').pDatepicker({

        format: 'YYYY/MM/DD',
        initialValue: false,
        autoClose: true,
        observer: true,

        calendarType: 'persian',

        calendar: {
            persian: {
                locale: 'fa'
            }
        },

        toolbox: {
            calendarSwitch: {
                enabled: false
            }
        },

        navigator: {
            enabled: true
        }

    });

    $('#end_date').pDatepicker({

        format: 'YYYY/MM/DD',
        initialValue: false,
        autoClose: true,
        observer: true,

        calendarType: 'persian',

        calendar: {
            persian: {
                locale: 'fa'
            }
        },

        toolbox: {
            calendarSwitch: {
                enabled: false
            }
        },

        navigator: {
            enabled: true
        }

    });

});
</script>

@endsection