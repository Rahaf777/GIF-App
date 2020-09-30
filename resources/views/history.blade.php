@include('layouts.header')

<!--  User Search History -->

<div class="container" style="margin-top:120px">

    <div class="row">

        <div class="col-md-12 head-title">
            <h3>Search History</h3>
        </div>
      
        <table class="center">
            <thead>
                <tr>
                    <th>Search String</th>
                    <th>Search Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($search_logs as $search_logs)
                <tr>
                    <td> {{ $search_logs->search_string }} </td>

                    <td> {{ $search_logs->created_at }}</td>

                </tr>
                @endforeach


            </tbody>
        </table>


    </div>
</div>
</div>

@include('layouts.footer')