<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Apartment Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1579542497699-5209a6c1e542?ixid=M3wzNjM5Nzd8MHwxfHNlYXJjaHwxfHxiaWdncmFwaHxlbnwwfHx8fDE3MTc1NTE4NjF8MA&ixlib=rb-4.0.3&w=400') no-repeat center center/cover;
            height: 100vh;
        }
        .listing-card {
            height: 100%;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">StudentRent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#listings">View Listings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#postListingModal">Post Listing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-hero">
        <div class="container h-100 d-flex align-items-center text-white text-center">
            <div class="mx-auto">
                <h1 class="display-4">Find Your Perfect Student Apartment</h1>
                <p class="lead mb-4">Search, post, and connect with students for apartment rentals</p>
                <a href="#listings" class="btn btn-outline-light btn-lg">View Available Listings</a>
            </div>
        </div>
    </div>

    <!-- Listings Section -->
    <div class="container mt-5" id="listings">
        <h2 class="text-center mb-4">Latest Listings</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Listing Card Example -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1591542596885-7d72a4b11ab2?ixid=M3wzNjM5Nzd8MHwxfHNlYXJjaHwxfHxiaWdncmFwaHxlbnwwfHx8fDE3MTc1NTE4NjF8MA&ixlib=rb-4.0.3&w=400" class="card-img-top" alt="Apartment">
                    <div class="card-body">
                        <h5 class="card-title">Modern Studio Apartment</h5>
                        <p class="card-text">$1,200/month</p>
                        <p class="card-text">Spacious studio near university campus</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Contact: john.doe@example.com</small>
                    </div>
                </div>
            </div>
            <!-- More cards would be dynamically generated here -->
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Post Listing Modal -->
    <div class="modal fade" id="postListingModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Post New Listing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Price/month" required>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Post Listing</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p>© 2023 StudentRent. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>