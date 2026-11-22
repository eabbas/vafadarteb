
@extends('dashboard')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">
<script src="https://cdn.jsdelivr.net/npm/persian-date@1.1.0/dist/persian-date.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>

<style>
    :root {
        --primary: #1B84FF;
        --primary-dark: #0a6fd6;
        --primary-light: #4a9fff;
        --bg: #F5F5F5;
        --border: #DBDFE9;
        --text: #9A9CAE;
        --text-dark: #4A5568;
        --danger: #dc2626;
    }

    .vafadar-form-card {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(27,132,255,.06);
        overflow: hidden;
    }

    .vafadar-form-header {
        background: var(--bg);
        border-bottom: 2px solid var(--border);
        padding: 18px 28px;
    }

    .vafadar-form-header h2 {
        color: var(--text-dark);
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .header-icon {
        width: 40px;
        height: 40px;
        background: var(--primary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .vafadar-label {
        color: var(--text);
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
    }

    .vafadar-input,
    .vafadar-select {
        width: 100%;
        padding: 12px 16px;
        background: var(--bg);
        border: 1.5px solid var(--border);
        border-radius: 12px;
        color: var(--text-dark);
        font-size: 13px;
        outline: none;
        transition: .25s;
    }

    .vafadar-input:focus,
    .vafadar-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(27,132,255,.08);
        background: #fff;
    }

    .vafadar-input::placeholder {
        color: var(--text);
        font-size: 12px;
    }

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
        border: 1.5px solid var(--border);
        border-radius: 12px;
        background: var(--bg);
        color: var(--text);
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: .25s;
    }

    .discount-type-btn.active {
        background: var(--primary);
        border-color: var(--primary);
        color: #fff;
    }

    .free-shipping-option {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 15px;
        border: 1.5px solid var(--border);
        border-radius: 13px;
        background: var(--bg);
        cursor: pointer;
        transition: .25s;
    }

    .free-shipping-option input {
        display: none;
    }

    .free-shipping-option:has(input:checked) {
        border-color: var(--primary);
        background: #EFF7FF;
    }

    .free-shipping-icon {
        width: 43px;
        height: 43px;
        min-width: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #E8F3FF;
        color: var(--primary);
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
        color: var(--text-dark);
    }

    .free-shipping-check {
        width: 23px;
        height: 23px;
        border: 1.5px solid var(--border);
        border-radius: 7px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: transparent;
        font-size: 11px;
    }

    .free-shipping-option:has(input:checked) .free-shipping-check {
        background: var(--primary);
        border-color: var(--primary);
        color: white;
    }

    /* انتخاب‌گرها */

    .picker-box {
        width: 100%;
        border: 1.5px solid var(--border);
        border-radius: 14px;
        background: #fff;
        padding: 12px;
        transition: .25s;
    }

    .picker-box:focus-within {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(27,132,255,.06);
    }

    .picker-search {
        width: 100%;
        padding: 11px 14px;
        border: 1px solid var(--border);
        border-radius: 10px;
        outline: none;
        background: var(--bg);
        color: var(--text-dark);
        font-size: 12px;
        margin-bottom: 10px;
    }

    .picker-search:focus {
        border-color: var(--primary);
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

    .picker-option {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        width: 100%;
        padding: 10px 12px;
        margin: 0;
        border: 1px solid transparent;
        border-radius: 9px;
        cursor: pointer;
        background: #fff;
        transition: .2s;
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
        accent-color: var(--primary);
        cursor: pointer;
        margin: 0;
    }

    .picker-option span {
        color: var(--text-dark);
        font-size: 12px;
        font-weight: 500;
        line-height: 1.8;
        flex: 1;
    }

    .picker-option.selected span {
        color: var(--primary-dark);
        font-weight: 700;
    }

    .picker-extra-info {
        color: var(--primary);
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

    .picker-count {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 5px 5px;
        margin-top: 8px;
        border-top: 1px solid var(--border);
        color: var(--text);
        font-size: 11px;
        font-weight: 600;
    }

    .picker-no-result {
        padding: 20px 10px;
        text-align: center;
        color: var(--text);
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
        border: 1px solid #CDE4FF;
        background: #EFF7FF;
        color: var(--primary-dark);
        border-radius: 8px;
        font-size: 11px;
        font-weight: 600;
        max-width: 100%;
    }

    .picker-chip.old-chip {
        background: #E8FFE9;
        border-color: #B9E9BC;
        color: #247A2B;
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

    .vafadar-btn {
        padding: 12px 32px;
        background: var(--primary);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: .3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .vafadar-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27,132,255,.25);
    }

    .vafadar-error {
        color: var(--danger);
        font-size: 12px;
        margin-top: 4px;
        display: block;
        padding-right: 4px;
    }

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

        .vafadar-form-body {
            padding: 16px !important;
        }

        .vafadar-input {
            padding: 10px 14px;
            font-size: 12px;
        }

        .picker-box {
            padding: 9px;
        }

        .picker-option {
            flex-wrap: wrap;
        }

        .picker-extra-info {
            margin-right: 26px;
        }
    }
</style>

@php
    $selectedProducts = old('products', $discuntCode->products->pluck('id')->toArray());
    $selectedUsers = old('users', $discuntCode->users->pluck('id')->toArray());
    $selectedCategories = old('categories', $discuntCode->categories->pluck('id')->toArray());

    $existingProductIds = $discuntCode->products->pluck('id')->toArray();
    $existingUserIds = $discuntCode->users->pluck('id')->toArray();
    $existingCategoryIds = $discuntCode->categories->pluck('id')->toArray();

    $removedProducts = old('removed_products', []);
    $removedUsers = old('removed_users', []);
    $removedCategories = old('removed_categories', []);
@endphp

<div class="w-full flex justify-center py-6">

    <div class="w-full max-w-4xl vafadar-form-card">

        {{-- هدر --}}
        <div class="vafadar-form-header">

            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </span>

                ویرایش کد تخفیف
            </h2>

            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">
                اطلاعات کد تخفیف را ویرایش کنید
            </p>

        </div>

        <form
            action="{{ route('discuntCode.update', ['discuntCode' => $discuntCode->id]) }}"
            method="POST"
            id="form"
            class="vafadar-form-body p-6"
        >

            @csrf

            <div class="vafadar-form-grid grid grid-cols-2 max-[420px]:flex max-[420px]:flex-col gap-6">

                {{-- عنوان --}}
                <div>

                    <label class="vafadar-label" for="title">
                        عنوان
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        placeholder="عنوان کد تخفیف را وارد کنید"
                        value="{{ old('title', $discuntCode->title) }}"
                        class="vafadar-input"
                    >

                    @error('title')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- تخفیف درصدی --}}
                <div
                    id="percentBox"
                    class="{{ old('discunt_type', $discuntCode->discunt_type) == 'percent' ? '' : 'hidden' }}"
                >

                    <label class="vafadar-label" for="number">
                        مقدار تخفیف
                    </label>

                    <div class="discount-value-row">

                        <input
                            type="number"
                            name="number"
                            id="number"
                            value="{{ old('number', $discuntCode->discunt_type == 'percent' ? $discuntCode->discunt_value : '') }}"
                            placeholder="مثلا 20 درصد"
                            class="vafadar-input discount-value-input"
                        >

                        <button type="button" class="discount-type-btn" data-discount-type="percent">
                            درصدی
                        </button>

                        <button type="button" class="discount-type-btn" data-discount-type="number">
                            مبلغ ثابت
                        </button>

                    </div>

                    @error('number')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- تخفیف مبلغ ثابت --}}
                <div
                    id="fixedBox"
                    class="{{ old('discunt_type', $discuntCode->discunt_type) == 'number' ? '' : 'hidden' }}"
                >

                    <label class="vafadar-label" for="price">
                        مقدار تخفیف
                    </label>

                    <div class="discount-value-row">

                        <input
                            type="number"
                            name="price"
                            id="price"
                            value="{{ old('price', $discuntCode->discunt_type == 'number' ? $discuntCode->discunt_value : '') }}"
                            placeholder="مثلا 10000000 تومان"
                            class="vafadar-input discount-value-input"
                        >

                        <button type="button" class="discount-type-btn" data-discount-type="percent">
                            درصدی
                        </button>

                        <button type="button" class="discount-type-btn" data-discount-type="number">
                            مبلغ ثابت
                        </button>

                    </div>

                    @error('price')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                <input
                    type="hidden"
                    name="discunt_type"
                    id="discunt_type"
                    value="{{ old('discunt_type', $discuntCode->discunt_type) }}"
                >

                {{-- تاریخ شروع --}}
                <div>

                    <label class="vafadar-label" for="start_date">
                        تاریخ شروع اعتبار
                    </label>

                    <div class="relative">

                        <input
                            type="text"
                            name="start_date"
                            id="start_date"
                            class="vafadar-input"
                            placeholder="انتخاب تاریخ شروع"
                            value="{{ old('start_date', $discuntCode->start_date) }}"
                            autocomplete="off"
                            readonly
                        >

                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#1B84FF] pointer-events-none">
                            <i class="fa fa-calendar-alt"></i>
                        </span>

                    </div>

                    @error('start_date')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- تاریخ پایان --}}
                <div>

                    <label class="vafadar-label" for="end_date">
                        تاریخ پایان اعتبار
                    </label>

                    <div class="relative">

                        <input
                            type="text"
                            name="end_date"
                            id="end_date"
                            class="vafadar-input"
                            placeholder="انتخاب تاریخ پایان"
                            value="{{ old('end_date', $discuntCode->end_date) }}"
                            autocomplete="off"
                            readonly
                        >

                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#1B84FF] pointer-events-none">
                            <i class="fa fa-calendar-alt"></i>
                        </span>

                    </div>

                    @error('end_date')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- محدودیت استفاده --}}
                <div>

                    <label class="vafadar-label" for="usage_limit">
                        محدودیت تعداد استفاده
                    </label>

                    <input
                        type="number"
                        name="usage_limit"
                        id="usage_limit"
                        class="vafadar-input"
                        placeholder="مثلاً 100"
                        value="{{ old('usage_limit', $discuntCode->usage_limit) }}"
                        min="1"
                    >

                    @error('usage_limit')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- کد تخفیف --}}
                <div>

                    <label class="vafadar-label" for="code">
                        کد تخفیف
                    </label>

                    <div class="flex flex-row gap-1">

                        <input
                            type="text"
                            name="code"
                            id="code"
                            maxlength="5"
                            value="{{ old('code', $discuntCode->code) }}"
                            placeholder="کد تخفیف را وارد کنید"
                            class="vafadar-input w-8/12"
                            dir="ltr"
                        >

                        <button
                            type="button"
                            class="w-4/12 text-white rounded-xl bg-[#1B84FF] cursor-pointer"
                            id="generateCodeBtn"
                        >
                            <i class="fa fa-sync-alt"></i>
                            تولید کد
                        </button>

                    </div>

                    @error('code')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- مزایای اضافی --}}
                <div class="col-span-2">

                    <label class="vafadar-label">
                        مزایای اضافی کد تخفیف
                    </label>

                    <div class="grid grid-cols-2 gap-4">

                        <label class="free-shipping-option">

                            <input
                                type="checkbox"
                                name="free_shipping"
                                value="1"
                                {{ old('free_shipping', $discuntCode->free_shipping) == '1' ? 'checked' : '' }}
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

                        <label class="free-shipping-option">

                            <input
                                type="checkbox"
                                name="is_active"
                                value="1"
                                {{ old('is_active', $discuntCode->is_active) == '1' ? 'checked' : '' }}
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

            {{-- انتخاب‌گرها --}}
            <div class="flex flex-col gap-6 mt-6">

                {{-- محصولات --}}
                <div data-picker="products">

                    <label class="vafadar-label">
                        انتخاب محصولات مشمول تخفیف
                    </label>

                    <div class="picker-box">

                        <input
                            type="text"
                            class="picker-search"
                            data-search
                            placeholder="جستجو بین محصولات..."
                        >

                        <div class="picker-list" data-list>

                            @foreach($products as $product)

                                <label
                                    class="picker-option"
                                    data-picker-option
                                    data-title="{{ $product->title }}"
                                >

                                    <input
                                        type="checkbox"
                                        name="products[]"
                                        value="{{ $product->id }}"
                                        data-existing="{{ in_array($product->id, $existingProductIds) ? '1' : '0' }}"
                                        {{ in_array($product->id, $selectedProducts) ? 'checked' : '' }}
                                    >

                                    <span>{{ $product->title }}</span>

                                    <small class="picker-extra-info">
                                        تومان {{ number_format((float) $product->price) }}
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

                        <div class="picker-selected-items" data-selected>

                            @foreach($discuntCode->products as $product)

                                @if(
                                    in_array($product->id, $selectedProducts) &&
                                    !in_array($product->id, $removedProducts)
                                )

                                    <div
                                        class="picker-chip old-chip"
                                        data-old-chip
                                        data-item-id="{{ $product->id }}"
                                    >

                                        <span>{{ $product->title }}</span>

                                        <button
                                            type="button"
                                            data-old-remove
                                            data-id="{{ $product->id }}"
                                            aria-label="حذف محصول"
                                        >
                                            ×
                                        </button>

                                    </div>

                                @endif

                            @endforeach

                        </div>

                    </div>

                    @error('products')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- کاربران --}}
                <div data-picker="users">

                    <label class="vafadar-label">
                        انتخاب کاربران مشمول تخفیف
                    </label>

                    <div class="picker-box">

                        <input
                            type="text"
                            class="picker-search"
                            data-search
                            placeholder="جستجو بین کاربران..."
                        >

                        <div class="picker-list" data-list>

                            @foreach($users as $user)

                                <label
                                    class="picker-option"
                                    data-picker-option
                                    data-title="{{ $user->name }} {{ $user->phoneNumber }}"
                                >

                                    <input
                                        type="checkbox"
                                        name="users[]"
                                        value="{{ $user->id }}"
                                        data-existing="{{ in_array($user->id, $existingUserIds) ? '1' : '0' }}"
                                        {{ in_array($user->id, $selectedUsers) ? 'checked' : '' }}
                                    >

                                    <span>{{ $user->name }}</span>

                                    <small class="picker-extra-info">
                                        {{ $user->phoneNumber ?: 'شماره تلفن ثبت نشده' }}
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

                        <div class="picker-selected-items" data-selected>

                            @foreach($discuntCode->users as $user)

                                @if(
                                    in_array($user->id, $selectedUsers) &&
                                    !in_array($user->id, $removedUsers)
                                )

                                    <div
                                        class="picker-chip old-chip"
                                        data-old-chip
                                        data-item-id="{{ $user->id }}"
                                    >

                                        <span>{{ $user->name }}</span>

                                        <button
                                            type="button"
                                            data-old-remove
                                            data-id="{{ $user->id }}"
                                            aria-label="حذف کاربر"
                                        >
                                            ×
                                        </button>

                                    </div>

                                @endif

                            @endforeach

                        </div>

                    </div>

                    @error('users')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

                {{-- دسته‌بندی‌ها --}}
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
                                @if($category->id!=1)
                                    <label
                                        class="picker-option"
                                        data-picker-option
                                        data-title="{{ $category->title }}"
                                    >

                                        <input
                                            type="checkbox"
                                            name="categories[]"
                                            value="{{ $category->id }}"
                                            data-existing="{{ in_array($category->id, $existingCategoryIds) ? '1' : '0' }}"
                                            {{ in_array($category->id, $selectedCategories) ? 'checked' : '' }}
                                        >

                                        <span>{{ $category->title }}</span>

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

                        <div class="picker-selected-items" data-selected>

                            @foreach($discuntCode->categories as $category)

                                @if(
                                    in_array($category->id, $selectedCategories) &&
                                    !in_array($category->id, $removedCategories)
                                )

                                    <div
                                        class="picker-chip old-chip"
                                        data-old-chip
                                        data-item-id="{{ $category->id }}"
                                    >

                                        <span>{{ $category->title }}</span>

                                        <button
                                            type="button"
                                            data-old-remove
                                            data-id="{{ $category->id }}"
                                            aria-label="حذف دسته‌بندی"
                                        >
                                            ×
                                        </button>

                                    </div>

                                @endif

                            @endforeach

                        </div>

                    </div>

                    @error('categories')
                        <span class="vafadar-error">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            {{-- آرایه شناسه موارد حذف‌شده --}}
            <div id="removed-items-container">

                @foreach($removedProducts as $removedId)
                    <input type="hidden" name="removed_products[]" value="{{ $removedId }}">
                @endforeach

                @foreach($removedUsers as $removedId)
                    <input type="hidden" name="removed_users[]" value="{{ $removedId }}">
                @endforeach

                @foreach($removedCategories as $removedId)
                    <input type="hidden" name="removed_categories[]" value="{{ $removedId }}">
                @endforeach

            </div>

            {{-- فوتر --}}
            <div class="vafadar-form-footer flex items-center justify-between mt-6 pt-6 border-t border-[#DBDFE9]">

                <button type="submit" class="vafadar-btn">

                    <span>ثبت تغییرات کد تخفیف</span>

                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>

                </button>

                <span class="text-xs text-[#9A9CAE]">
                    * اطلاعات کد تخفیف را بررسی کنید
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
                codeInput.classList.remove(
                    'ring-2',
                    'ring-[#1B84FF]'
                );
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
       انتخاب نوع تخفیف
    ===================================================== */

    const percentBox = document.getElementById('percentBox');
    const fixedBox = document.getElementById('fixedBox');

    const discountTypeInput = document.getElementById('discunt_type');

    const discountButtons = document.querySelectorAll(
        '[data-discount-type]'
    );

    const percentInput = document.getElementById('number');
    const fixedInput = document.getElementById('price');


    function setDiscountType(type) {

        if (
            !percentBox ||
            !fixedBox ||
            !discountTypeInput ||
            !percentInput ||
            !fixedInput
        ) return;

        discountTypeInput.value = type;

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


    setDiscountType(
        discountTypeInput?.value || 'percent'
    );


    /* =====================================================
       انتخاب‌گر محصولات، کاربران و دسته‌بندی‌ها
    ===================================================== */

    const pickerCards = document.querySelectorAll('[data-picker]');

    const removedContainer = document.getElementById(
        'removed-items-container'
    );

    const removedFieldNames = {
        products: 'removed_products[]',
        users: 'removed_users[]',
        categories: 'removed_categories[]'
    };


    function persianNumber(number) {
        return number.toLocaleString('fa-IR');
    }


    pickerCards.forEach(function (card) {

        const pickerType = card.dataset.picker;

        const searchInput = card.querySelector('[data-search]');
        const items = card.querySelectorAll('[data-picker-option]');
        const noResult = card.querySelector('[data-no-result]');
        const counter = card.querySelector('[data-count]');
        const selectedContainer = card.querySelector('[data-selected]');

        const removedFieldName = removedFieldNames[pickerType];

        if (
            !searchInput ||
            !counter ||
            !selectedContainer ||
            !removedContainer ||
            !removedFieldName
        ) return;


        /* حذف شناسه از آرایه حذف‌شده‌ها */

        function removeFromRemovedList(id) {

            removedContainer
                .querySelectorAll('input[name="' + removedFieldName + '"]')
                .forEach(function (input) {

                    if (input.value === String(id)) {
                        input.remove();
                    }

                });

        }


        /* اضافه کردن شناسه به آرایه حذف‌شده‌ها */

        function addToRemovedList(id) {

            const alreadyExists = Array.from(
                removedContainer.querySelectorAll(
                    'input[name="' + removedFieldName + '"]'
                )
            ).some(function (input) {

                return input.value === String(id);

            });

            if (alreadyExists) return;

            const input = document.createElement('input');

            input.type = 'hidden';
            input.name = removedFieldName;
            input.value = id;

            removedContainer.appendChild(input);

        }


        /* بررسی وجود چیپ قدیمی */

        function oldChipExists(id) {

            return Array.from(
                selectedContainer.querySelectorAll('[data-old-chip]')
            ).some(function (chip) {

                return chip.dataset.itemId === String(id);

            });

        }


        /* پیدا کردن چک‌باکس بر اساس شناسه */

        function findCheckbox(id) {

            return Array.from(
                card.querySelectorAll(
                    '[data-picker-option] input[type="checkbox"]'
                )
            ).find(function (input) {

                return input.value === String(id);

            });

        }


        /* به‌روزرسانی انتخاب‌گر */

        function updatePicker() {

            const checkedItems = card.querySelectorAll(
                '[data-picker-option] input[type="checkbox"]:checked'
            );

            counter.textContent =
                persianNumber(checkedItems.length) + ' مورد انتخاب شده';


            /*
             * تغییر جدید:
             * اگر چک‌باکس یک گزینه قدیمی غیرفعال شده باشد،
             * چیپ سبزرنگ آن هم از پایین لیست حذف می‌شود.
             */

            selectedContainer
                .querySelectorAll('[data-old-chip]')
                .forEach(function (chip) {

                    const id = chip.dataset.itemId;
                    const checkbox = findCheckbox(id);

                    if (!checkbox || !checkbox.checked) {
                        chip.remove();
                    }

                });


            // فقط چیپ‌های جدید حذف می‌شوند
            selectedContainer
                .querySelectorAll('[data-dynamic-chip]')
                .forEach(function (chip) {
                    chip.remove();
                });


            checkedItems.forEach(function (checkbox) {

                const option = checkbox.closest('[data-picker-option]');

                const title = option.dataset.title ||
                    option.querySelector('span')?.textContent.trim() ||
                    checkbox.value;


                // اگر چیپ قدیمی وجود دارد، چیپ جدید نساز
                if (oldChipExists(checkbox.value)) {
                    return;
                }


                // ساخت چیپ جدید
                const chip = document.createElement('div');

                chip.className = 'picker-chip';
                chip.dataset.dynamicChip = 'true';


                const text = document.createElement('span');
                text.textContent = title;


                const removeButton = document.createElement('button');

                removeButton.type = 'button';
                removeButton.textContent = '×';

                removeButton.setAttribute(
                    'aria-label',
                    'حذف انتخاب'
                );


                // حذف چیپ جدید
                removeButton.addEventListener('click', function () {

                    /*
                     * اگر این گزینه قبلاً در دیتابیس وجود داشته،
                     * حذف آن داخل آرایه حذف‌شده‌ها ثبت می‌شود.
                     */

                    if (checkbox.dataset.existing === '1') {
                        addToRemovedList(checkbox.value);
                    }

                    checkbox.checked = false;

                    updatePicker();

                });


                chip.appendChild(text);
                chip.appendChild(removeButton);

                selectedContainer.appendChild(chip);

            });


            // بروزرسانی ظاهر گزینه‌ها
            items.forEach(function (item) {

                const checkbox = item.querySelector(
                    'input[type="checkbox"]'
                );

                item.classList.toggle(
                    'selected',
                    checkbox && checkbox.checked
                );

            });

        }


        /* جستجوی زنده */

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

                if (matched) {
                    visibleCount++;
                }

            });


            if (noResult) {
                noResult.classList.toggle(
                    'hidden',
                    visibleCount !== 0
                );
            }

        }


        searchInput.addEventListener('input', filterItems);


        /* تغییر وضعیت چک‌باکس‌ها */

        items.forEach(function (item) {

            const checkbox = item.querySelector(
                'input[type="checkbox"]'
            );

            if (!checkbox) return;


            checkbox.addEventListener('change', function () {

                /*
                 * اگر مورد قدیمی دوباره انتخاب شد،
                 * شناسه‌اش از آرایه حذف‌شده‌ها پاک شود.
                 */

                if (
                    checkbox.dataset.existing === '1' &&
                    checkbox.checked
                ) {

                    removeFromRemovedList(checkbox.value);

                }


                /*
                 * اگر مورد قدیمی از داخل لیست چک‌باکس
                 * غیرفعال شد، شناسه‌اش به آرایه حذف‌شده‌ها اضافه شود.
                 */

                if (
                    checkbox.dataset.existing === '1' &&
                    !checkbox.checked
                ) {

                    addToRemovedList(checkbox.value);

                }


                // با این فراخوانی چیپ قدیمی هم حذف می‌شود
                updatePicker();

            });

        });


        /* حذف چیپ‌های قدیمی */

        selectedContainer.addEventListener('click', function (event) {

            const button = event.target.closest('[data-old-remove]');

            if (!button) return;

            const id = button.dataset.id;

            const oldChip = button.closest('[data-old-chip]');

            const checkbox = findCheckbox(id);


            // غیرفعال کردن انتخاب مربوط به آن چیپ
            if (checkbox) {
                checkbox.checked = false;
            }


            // ثبت شناسه در آرایه حذف‌شده‌ها
            addToRemovedList(id);


            // حذف چیپ قدیمی از صفحه
            if (oldChip) {
                oldChip.remove();
            }


            updatePicker();

        });


        /* پاک کردن جستجو با Escape */

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


    /* ارسال فرم */

    const form = document.getElementById('form');

    if (form) {

        form.addEventListener('submit', function () {

            if (!discountTypeInput || !percentInput || !fixedInput) {
                return;
            }

            const type = discountTypeInput.value;

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
