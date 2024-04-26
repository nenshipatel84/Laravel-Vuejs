
<div class="container">
  <h1>Cron Jobs</h1>

  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif

  @if (count($cronJobs) > 0)
    <table class="table table-striped" border="1">
      <thead>
        <tr>
          <th>URL</th>
          <th>Schedule</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cronJobs as $cronJob)
          <tr>
            <td>{{ $cronJob->url }}</td>
            <td>{{ $cronJob->schedule }}</td>
            <td>
              <form action="{{ route('cron-jobs.destroy', $cronJob->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No cron jobs found.</p>
  @endif

</div>
