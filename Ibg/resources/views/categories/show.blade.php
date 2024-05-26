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
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">{{ $category->title }}</div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Title:</th>
                                <td>{{ $category->title }}</td>
                            </tr>
                            <tr>
                                <th>Sub Title:</th>
                                <td>{{ $category->sub_title }}</td>
                            </tr>
                            <tr>
                                <th>Description:</th>
                                <td>{!! nl2br(e($category->description)) !!}</td>
                            </tr>
                            @if ($category->banner_image)
                            <tr>
                                <th>Banner Image:</th>
                                <td><img src="{{ $category->banner_image }}" alt="Banner Image"></td>
                            </tr>
                            @endif
                            <tr>
                                <th>Slug:</th>
                                <td>{{ $category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Meta Title:</th>
                                <td>{{ $category->meta_title }}</td>
                            </tr>
                            <tr>
                                <th>Meta Description:</th>
                                <td>{{ $category->meta_description }}</td>
                            </tr>
                            @if ($category->parent)
                            <tr>
                                <th>Parent Category:</th>
                                <td>{{ $category->parent->title }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                
                <div class="card-footer">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                    </form>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
