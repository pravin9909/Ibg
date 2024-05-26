<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        /* Adjust styles as needed */
        body {
            padding-top: 56px; /* Adjust padding for fixed navbar */
        }
        .sidebar {
            position: fixed;
            top: 56px; /* Height of the navbar */
            left: 0;
            bottom: 0;
            width: 200px;
            background: #333;
            overflow-y: auto; /* Enable scrolling if content overflows */
            padding-top: 20px; /* Adjust padding as needed */
            color: white;
        }
        .content {
            margin-left: 200px; /* Adjust content area when sidebar opens */
            padding: 20px;
        }
        .category-form {
            padding: 20px;
            background: #8998a7;
            border: 1px solid #9ed3e4;
        }
        .dashboard-logo{
            margin-left: 750px;
        }
        .dashboard-name{
            margin-left: 50px;
        }
        .companydata{
            margin-left: 50px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <img src="{{ asset('assets/images/logo-ibg.png') }}" width="80" height="80" class="dashboard-logo" alt="Logo">

    {{-- <h2 class="dashboard-name">IBG</h2> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Sign out</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <ul class="nav flex-column"><br>
        <h5 class="companydata">IBG Admin</h5>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Category Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Product Management</a>
        </li>
        <!-- Add more categories as needed -->
    </ul>
</div>

<!-- Page content -->
<div class="card">
    <div class="card-header">Edit Category - {{ $category->title }}</div>

    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $category->title) }}" required>
            </div>

            <div class="form-group">
                <label for="sub_title">Sub Title</label>
                <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ old('sub_title', $category->sub_title) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5">{{ old('description', $category->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="banner_image">Banner Image</label>
                <input type="text" name="banner_image" id="banner_image" class="form-control" value="{{ old('banner_image', $category->banner_image) }}">
            </div>

            {{-- <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $category->slug) }}" required>
            </div> --}}

            <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $category->meta_title) }}">
            </div>

            <div class="form-group">
                <label for="meta_description">Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="3">{{ old('meta_description', $category->meta_description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="parent_id">Parent Category</label>
                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == old('parent_id', $category->parent_id) ? 'selected' : '' }}>{{ $cat->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
