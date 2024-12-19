<x-app-layout>
    <section class="content">
        <!-- Success Message -->
        @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <!-- User Details -->
            <div class="col-lg-6">
                <div class="no-hover">
                    <div class="inner">
                        <h3>Profile</h3>
                        <form>
                            <!-- Name -->
                            <div class="form-group">
                                <label for="profile_name">Name</label>
                                <input id="profile_name" type="text" value="{{ Auth::user()->name }}" readonly
                                    class="form-control">
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="profile_email">Email</label>
                                <input id="profile_email" type="text" value="{{ Auth::user()->email }}" readonly
                                    class="form-control">
                            </div>

                            <!-- Joined Date -->
                            <div class="form-group">
                                <label for="profile_joined">Joined</label>
                                <input id="profile_joined" type="text" value="{{ Auth::user()->created_at->format('d M, Y') }}" readonly
                                    class="form-control">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Update Password Form -->
            <div class="col-lg-6">
                <div class="no-hover">
                    <div class="inner">
                        <h3>Update Password</h3>
                        <form method="POST" action="{{ route('password.change') }}">
                            @csrf
                            @method('PUT')

                            <!-- Current Password -->
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input id="current_password" type="password" name="current_password" required
                                    class="form-control">
                                @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- New Password -->
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input id="new_password" type="password" name="new_password" required
                                    class="form-control">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Confirm New Password -->
                            <div class="form-group">
                                <label for="new_password_confirmation">Confirm New Password</label>
                                <input id="new_password_confirmation" type="password" name="new_password_confirmation" required
                                    class="form-control">
                                @error('new_password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Update Password</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
