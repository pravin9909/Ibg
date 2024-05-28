{{-- <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> --}}
    {{-- @csrf --}}

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ (old('category_id', $product->category_id ?? '') == $category->id) ? 'selected' : '' }}>{{ $category->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $product->title ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="subtitle">Subtitle</label>
        <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ old('subtitle', $product->subtitle ?? '') }}">
    </div>

    <div class="form-group">
        <label for="sku">SKU</label>
        <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku', $product->sku ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control ckeditor-classic">{{ old('description', $product->description ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="specification">Specification</label>
        <textarea name="specification" id="specification" class="form-control">{{ old('specification', $product->specification ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="video_link">Video Link</label>
        <input type="text" name="video_link" id="video_link" class="form-control" value="{{ old('video_link', $product->video_link ?? '') }}">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $product->slug ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="meta_title">Meta Title</label>
        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $product->meta_title ?? '') }}">
    </div>

    <div class="form-group">
        <label for="meta_description">Meta Description</label>
        <textarea name="meta_description" id="meta_description" class="form-control">{{ old('meta_description', $product->meta_description ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="size_guide">Size Guide</label>
        <input type="text" name="size_guide" id="size_guide" class="form-control" value="{{ old('size_guide', $product->size_guide ?? '') }}">
    </div>

    <div class="form-group">
        <label for="main_image">Main Image</label>
        <input type="file" name="main_image" id="main_image" class="form-control" value="{{ old('main_image') }}">
    </div>

    <div class="form-group">
        <label for="color_id">Color</label>
        <select name="color_id" id="color_id" class="form-control">
            <option value="">Select Color</option>
            @foreach ($colors as $color)
                <option value="{{ $color->id }}" {{ (old('color_id', $product->color_id ?? '') == $color->id) ? 'selected' : '' }}>{{ $color->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="fabric_option_id">Fabric Option</label>
        <select name="fabric_option_id" id="fabric_option_id" class="form-control">
            <option value="">Select Fabric Option</option>
            @foreach ($fabricOptions as $fabricOption)
                <option value="{{ $fabricOption->id }}" {{ (old('fabric_option_id', $product->fabric_option_id ?? '') == $fabricOption->id) ? 'selected' : '' }}>{{ $fabricOption->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="wash_care_id">Wash Care</label>
        <select name="wash_care_id" id="wash_care_id" class="form-control">
            <option value="">Select Wash Care</option>
            @foreach ($washCares as $washCare)
                <option value="{{ $washCare->id }}" {{ (old('wash_care_id', $product->wash_care_id ?? '') == $washCare->id) ? 'selected' : '' }}>{{ $washCare->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="feature_id">Feature</label>
        <select name="feature_id" id="feature_id" class="form-control">
            <option value="">Select Feature</option>
            @foreach ($features as $feature)
                <option value="{{ $feature->id }}" {{ (old('feature_id', $product->feature_id ?? '') == $feature->id) ? 'selected' : '' }}>{{ $feature->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="gender_id">Gender</label>
        <select name="gender_id" id="gender_id" class="form-control">
            <option value="">Select Gender</option>
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}" {{ (old('gender_id', $product->gender_id ?? '') == $gender->id) ? 'selected' : '' }}>{{ $gender->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="branding_option_id">Branding Option</label>
        <select name="branding_option_id" id="branding_option_id" class="form-control">
            <option value="">Select Branding Option</option>
            @foreach ($brandingOptions as $brandingOption)
                <option value="{{ $brandingOption->id }}" {{ (old('branding_option_id', $product->branding_option_id ?? '') == $brandingOption->id) ? 'selected' : '' }}>{{ $brandingOption->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="pattern_id">Pattern</label>
        <select name="pattern_id" id="pattern_id" class="form-control">
            <option value="">Select Pattern</option>
            @foreach ($patterns as $pattern)
                <option value="{{ $pattern->id }}" {{ (old('pattern_id', $product->pattern_id ?? '') == $pattern->id) ? 'selected' : '' }}>{{ $pattern->name }}</option>
            @endforeach
        </select>
    </div>

    <script>
    ClassicEditor
    .create(document.querySelector('.ckeditor-classic'))
    .catch(error => {
    console.error(error);
    });
    </script>

