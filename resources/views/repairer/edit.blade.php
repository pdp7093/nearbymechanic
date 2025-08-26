@extends('repairer.layout.main')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Profile</h5>
                    <a href="{{ url('/Repairer-profile') }}" class="btn btn-light btn-sm">Back</a>
                </div>

                <div class="card-body p-4">
                    <form action="{{ url('/Repairer-profile-edit/'.$repairer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="name" value="{{ old('name', $repairer->name) }}" class="form-control" required>
                        </div>


                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $repairer->phone) }}" class="form-control" required>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Address</label>
                            <textarea name="address" class="form-control" rows="3">{{ old('address', $repairer->address) }}</textarea>
                        </div>

                         <!-- State -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">State</label>
                            <input type="text" name="state" value="{{ old('state', $repairer->state) }}" class="form-control" required>
                        </div>

                        <!-- City -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">City</label>
                            <input type="text" name="city" value="{{ old('city', $repairer->city) }}" class="form-control" required>
                        </div>

                        <!-- pincode -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Pincode</label>
                            <input type="text" name="pincode" value="{{ old('pincode', $repairer->pincode) }}" class="form-control" maxlength="6" required>
                        </div>

                        <!-- Profile Image -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Profile Image</label>
                            <input type="file" name="profile_photo" class="form-control">
                            @if($repairer->profile_photo)
                                <small class="text-muted">Current Image:</small><br>
                                <img src="{{ url('garage/owners/'.$repairer->profile_photo) }}" class="rounded mt-2" width="100">
                            @endif
                        </div>

                        <!-- Save Button -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
