<x-dashboard-layout>
    <div class="p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Home Page Content</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('home_page.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Slider Images -->
                    <h2>Slider Images</h2>
                    <div class="row">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="mb-3 col-md-4">
                                <img src="{{ asset('storage/' . $content->slider_image_ . $i) }}" width="50"
                                    alt="image preview {{ $content->slider_image_ . $i }}">
                                <label for="slider_image_{{ $i }}" class="form-label">Slider Image
                                    {{ $i }}</label>
                                <input type="file" class="form-control" id="slider_image_{{ $i }}"
                                    name="slider_image_{{ $i }}">

                                <label for="slider_title_{{ $i }}" class="form-label">Slider Title
                                    {{ $i }}</label>
                                <input type="text" class="form-control" id="slider_title_{{ $i }}"
                                    name="slider_title_{{ $i }}"
                                    value="{{ $content ? $content->{'slider_title_' . $i} : '' }}">

                                <label for="slider_description_{{ $i }}" class="form-label">Slider
                                    Description {{ $i }}</label>
                                <textarea class="form-control" id="slider_description_{{ $i }}"
                                    name="slider_description_{{ $i }}" rows="3">
                                    {{ $content ? $content->{'slider_description_' . $i} : '' }}
                                </textarea>
                            </div>
                        @endfor
                    </div>
                    <hr>

                    <!-- Labeled Images -->
                    <h2>Labeled Images</h2>
                    <div class="row">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="mb-3 col-md-3">
                                <label for="image_{{ $i }}" class="form-label">Image
                                    {{ $i }}</label>
                                <input type="file" class="form-control" id="image_{{ $i }}"
                                    name="image_{{ $i }}">

                                <label for="label_{{ $i }}" class="form-label">Label
                                    {{ $i }}</label>
                                <input type="text" class="form-control" id="label_{{ $i }}"
                                    name="label_{{ $i }}"
                                    value="{{ $content ? $content->{'label_' . $i} : '' }}">
                            </div>
                        @endfor
                    </div>
                    <hr>

                    <!-- Sections -->
                    <h2>Sections</h2>
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="mb-5">
                            <h3>section {{ $i }}</h3>
                            <label for="section_title_{{ $i }}" class="form-label">Section Title
                                {{ $i }}</label>
                            <input type="text" class="form-control" id="section_title_{{ $i }}"
                                name="section_title_{{ $i }}"
                                value="{{ $content ? $content->{'section_title_' . $i} : '' }}">

                            <label for="section_paragraph_{{ $i }}" class="form-label">Section Paragraph
                                {{ $i }}</label>
                            <textarea class="form-control" id="section_paragraph_{{ $i }}" name="section_paragraph_{{ $i }}"
                                rows="3">
                                {{ $content ? $content->{'section_paragraph_' . $i} : '' }}
                            </textarea>

                            <label for="section_image_{{ $i }}" class="form-label">Section Image
                                {{ $i }}</label>
                            <input type="file" class="form-control" id="section_image_{{ $i }}"
                                name="section_image_{{ $i }}">
                        </div>
                        <hr>
                    @endfor

                    <!-- Instagram Posts -->
                    <h2>Instagram Posts</h2>
                    <div class="mb-3">
                        <label for="instagram_posts" class="form-label">Instagram Posts (JSON format)</label>
                        <textarea class="form-control" id="instagram_posts" name="instagram_posts" rows="5">
                            {{ $content ? $content->instagram_posts : '' }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-dashboard-layout>
