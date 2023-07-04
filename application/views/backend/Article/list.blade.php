@extends('template.backend.template')
@section('content')

<br>
<a class="btn btn-secondary" href="{{ site_url('backend/Article/form') }}" role="button">Tambah data</a>
<br>
<br>
@if(isset($flashdata['notif']))
<div class="alert alert-warning" role="alert">
    {{ $flashdata['notif'] }} 
</div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Article</th>
              <th scope="col">Created at</th>
              <th scope="col">Updated at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($post_list as $post)
              <tr>
                <td>-</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->article }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                  <a href="{{ site_url('backend/Article/hapus/') . $post->id }}" class="btn btn-outline-danger btn-sm" role="button" aria-disabled="true"><i class="bi bi-trash"></i></a>
                  <br>
                  <br>
                  <a href="{{ site_url('backend/Article/edit/') . $post->id }}" class="btn btn-outline-info btn-sm" role="button" aria-disabled="true"><i class="bi bi-pencil-square"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endsection