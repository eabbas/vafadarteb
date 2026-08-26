@extends("dashboard")

@section("content")
<div class="advertisement-form-container">
    <div class="form-header">
        <h1 class="form-title">ایجاد آگهی جدید</h1>
        <p class="form-subtitle">اطلاعات آگهی را در بخش‌های زیر وارد کنید</p>
    </div>

    <form action="{{route('advertisement.store')}}" method="POST" enctype="multipart/form-data" class="advertisement-form">
        @csrf
        
        <!-- بخش اصلی - شبیه به طرح Mega Collections -->
        <div class="form-grid">
            <!-- سمت چپ: اطلاعات اصلی -->
            <div class="form-main">
                <div class="form-group featured-group">
                    <label for="title" class="form-label">عنوان اصلی</label>
                    <input type="text" name="title" id="title" class="form-input featured-input" placeholder="مثال: Mega Collections">
                    <small class="form-hint">عنوان اصلی آگهی که درشت نمایش داده می‌شود</small>
                </div>

                <div class="form-group">
                    <label for="subtitle" class="form-label">زیر عنوان</label>
                    <input type="text" name="subtitle" id="subtitle" class="form-input" placeholder="مثال: Huge Sale Up To 40% Off">
                </div>

                <div class="form-group">
                    <label for="summary" class="form-label">توضیحات</label>
                    <textarea name="summary" id="summary" class="form-input form-textarea" placeholder="مثال: at our outlet stores" rows="3"></textarea>
                </div>
            </div>

            <!-- سمت راست: تنظیمات و تصویر -->
            <div class="form-sidebar">
                <div class="form-group image-upload-group">
                    <label for="image_path" class="form-label">تصویر پس‌زمینه</label>
                    <div class="image-upload-box">
                        <input type="file" name="image_path" id="image_path" class="image-input" accept="image/*">
                        <label for="image_path" class="image-upload-label">
                            <span class="upload-icon">📸</span>
                            <span class="upload-text">انتخاب تصویر</span>
                            <span class="upload-hint">فایل‌های JPG, PNG, JPEG</span>
                        </label>
                        <div class="image-preview" id="imagePreview"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id" class="form-label">دسته‌بندی</label>
                    <select name="category_id" id="category_id" class="form-input form-select">
                        <option value="">انتخاب دسته‌بندی</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group status-group">
                    <label class="form-label">وضعیت</label>
                    <div class="status-toggle">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" id="is_active" value="1" class="toggle-input" checked>
                        <label for="is_active" class="toggle-label">
                            <span class="toggle-slider"></span>
                            <span class="toggle-text active-text">فعال</span>
                            <span class="toggle-text inactive-text">غیرفعال</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- دکمه‌های اقدام -->
        <div class="form-actions">
            <a href="{{route('advertisement.index')}}" class="btn btn-secondary">لغو</a>
            <button type="submit" class="btn btn-primary">ذخیره آگهی</button>
        </div>
    </form>
</div>

<!-- استایل‌های اختصاصی -->
<style>
/* تنظیمات کلی */
.advertisement-form-container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 2rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 24px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

/* هدر فرم */
.form-header {
    padding: 1.5rem;
    margin-bottom: 2rem;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.2);
}

.form-title {
    color: #fff;
    font-size: 2.5rem;
    font-weight: 700;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.form-subtitle {
    color: rgba(255,255,255,0.8);
    font-size: 1.1rem;
    margin: 0.5rem 0 0 0;
}

/* گرید فرم */
.form-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    background: rgba(255,255,255,0.95);
    padding: 2rem;
    border-radius: 20px;
    box-shadow: inset 0 2px 10px rgba(0,0,0,0.05);
}

/* گروه‌های فرم */
.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.form-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f7fafc;
}

.form-input:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
    background: #fff;
}

.featured-input {
    font-size: 1.5rem;
    font-weight: 700;
    background: #fff;
    border-color: #667eea;
    color: #2d3748;
}

.featured-input:focus {
    border-color: #764ba2;
    box-shadow: 0 0 0 3px rgba(118, 75, 162, 0.2);
}

.form-textarea {
    resize: vertical;
    min-height: 80px;
}

.form-select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%234a5568' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    padding-right: 2.5rem;
}

.form-hint {
    display: block;
    margin-top: 0.25rem;
    font-size: 0.8rem;
    color: #718096;
}

/* آپلود تصویر */
.image-upload-group {
    background: linear-gradient(135deg, #f6f9fc 0%, #edf2f7 100%);
    padding: 1.5rem;
    border-radius: 16px;
    border: 2px dashed #cbd5e0;
}

.image-upload-box {
    position: relative;
    width: 100%;
}

.image-input {
    position: absolute;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.image-upload-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    background: #fff;
    border-radius: 12px;
    border: 2px dashed #d0d7e3;
    transition: all 0.3s ease;
}

.image-upload-label:hover {
    border-color: #667eea;
    background: #f7fafc;
}

.upload-icon {
    font-size: 3rem;
    margin-bottom: 0.5rem;
}

.upload-text {
    font-weight: 600;
    color: #2d3748;
    font-size: 1.1rem;
}

.upload-hint {
    font-size: 0.8rem;
    color: #a0aec0;
    margin-top: 0.25rem;
}

.image-preview {
    margin-top: 1rem;
    display: none;
}

.image-preview img {
    width: 100%;
    max-height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

/* سویچ وضعیت */
.status-toggle {
    display: flex;
    align-items: center;
    padding: 0.5rem;
    background: #f7fafc;
    border-radius: 12px;
}

.toggle-input {
    display: none;
}

.toggle-label {
    position: relative;
    display: flex;
    align-items: center;
    gap: 1rem;
    cursor: pointer;
    width: 100%;
    justify-content: center;
}

.toggle-slider {
    position: relative;
    width: 60px;
    height: 30px;
    background: #cbd5e0;
    border-radius: 30px;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.toggle-slider::after {
    content: '';
    position: absolute;
    top: 3px;
    left: 3px;
    width: 24px;
    height: 24px;
    background: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.toggle-input:checked + .toggle-label .toggle-slider {
    background: #667eea;
}

.toggle-input:checked + .toggle-label .toggle-slider::after {
    transform: translateX(30px);
}

.toggle-text {
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.inactive-text {
    color: #a0aec0;
}

.toggle-input:checked + .toggle-label .inactive-text {
    color: #a0aec0;
}

.toggle-input:checked + .toggle-label .active-text {
    color: #667eea;
}

/* دکمه‌های اقدام */
.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 2px solid rgba(255,255,255,0.2);
}

.btn {
    padding: 0.75rem 2rem;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
}

.btn-secondary {
    background: rgba(255,255,255,0.2);
    color: #fff;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
}

.btn-secondary:hover {
    background: rgba(255,255,255,0.3);
    transform: translateY(-2px);
}

/* واکنش‌گرایی */
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .advertisement-form-container {
        padding: 1rem;
        margin: 1rem;
    }
    
    .form-title {
        font-size: 1.8rem;
    }
    
    .form-actions {
        flex-direction: column-reverse;
    }
    
    .btn {
        width: 100%;
        text-align: center;
    }
}
</style>

<!-- اسکریپت نمایش تصویر -->
<script>
document.getElementById('image_path').addEventListener('change', function(e) {
    const preview = document.getElementById('imagePreview');
    const file = e.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" alt="پیش‌نمایش">`;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>

@endsection