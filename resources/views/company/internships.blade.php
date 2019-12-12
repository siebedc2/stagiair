<h1>{{ $company->name }}</h1>

<h2>Internships</h2>

@foreach($company->internships as $internship)
    <div>{{ $internship->title }}</div>
    <div>{{ $internship->description }}</div>
    <br>
@endforeach
