<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
{{ $rentlog }}
    {{-- <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Book</th>
                <th>Rent Date</th>
                <th>Retrun Date</th>
                <th>Actual Retrun Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentlogs as $r)
            <tr class="{{ $r->actual_retrun_date == null ? '': ($r->actual_retrun_date < $r->actual_retrun_date ? 'bg-danger' : 'bg-info') }}">
                <td>{{ $r->id }}</td>
                <td>{{ $r->user->username }}</td>
                <td>{{ $r->book->title }}</td>
                <td>{{ $r->rent_date }}</td>
                <td>{{ $r->return_date }}</td>
                <td>{{ $r->actual_retrun_date }}</td>
            </tr>
            @endforeach
    </table> --}}
</div>