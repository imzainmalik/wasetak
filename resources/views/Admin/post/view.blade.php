@extends('Admin.layouts.master')
@section('content')

    @php
        $bids = App\Models\Bid::where('post_id', $id);
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h3>{{ $post->title }}</h3>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.post.index') }}" class="btn btn-primary"><i class="fa fa-eye"></i>
                                    View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <tbody>

                                    <tr>
                                        <th class="col-3">User</th>
                                        <td>
                                            {{ $post->getUserInfo->name }}
                                            <br>
                                            <small>{{ $post->getUserInfo->email }}</small>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Post title</th>
                                        <td>{{ $post->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{!! $post->description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Post type</th>
                                        <td>
                                            @if ($post->post_type == 0)
                                                <div class="badge rounded-pill bg-warning">Discussions</div>
                                            @elseif($post->post_type == 1)
                                                <div class="badge rounded-pill bg-info">Trading</div>
                                            @else
                                                <div class="badge rounded-pill bg-danger">Auction</div>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Is published?</th>
                                        <td>
                                            @if ($post->is_active == 1)
                                                <div class="badge rounded-pill bg-success">Published</div>
                                            @else
                                                <div class="badge rounded-pill bg-danger">In Active</div>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if ($post->status == 0)
                                                <div class='badge rounded-pill bg-warning'>Pending</div>
                                            @elseif($post->status == 1)
                                                <div class='badge rounded-pill bg-success'>Approved</div>
                                            @else
                                                <div class='badge rounded-pill bg-danger'>Rejected</div>
                                            @endif
                                        </td>
                                    </tr>
                                    @if ($request->post_type == 'Auction')
                                        <tr>
                                            <th>Is Auction End?</th>
                                            <td>
                                                @if (\Carbon\Carbon::now()->format('Y-m-d') >= $post->bid_end_date)
                                                    <div class='badge rounded-pill bg-danger'>Yes</div>
                                                @else
                                                    <div class='badge rounded-pill bg-success'>No</div>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Has winning bid?</th>
                                            <td>
                                                @if ($bids->where('status', 3)->count() > 0)
                                                    <div class='badge rounded-pill bg-success'>Yes</div>
                                                @else
                                                    <div class='badge rounded-pill bg-danger'>No</div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th>Post Category</th>
                                        <td>{{ $post->getCatInfo->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>${{ $post->price }}.00</td>
                                    </tr>

                                    <tr>
                                        <th>Actions</th>
                                        <td>
                                            @if ($post->status == 0)
                                                <a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 1)"
                                                    data-id="approve" class="edit btn btn-success btn-sm">Approve</a>
                                                |<a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 2)"
                                                    class="edit btn btn-warning btn-sm">Reject</a>

                                                |<a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 3)"
                                                    class="edit btn btn-danger btn-sm">Deleted</a>
                                            @endif

                                            @if ($post->status == 1)
                                                |<a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 2)"
                                                    class="edit btn btn-warning btn-sm">Reject</a>

                                                |<a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 3)"
                                                    class="edit btn btn-danger btn-sm">Deleted</a>
                                            @endif

                                            @if ($post->status == 2)
                                                | <a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 1)"
                                                    data-id="approve" class="edit btn btn-success btn-sm">Approve</a>
                                                |<a href="javascript:void(0)"
                                                    onclick="approval_confirmation({{ $post->id }}, 3)"
                                                    class="edit btn btn-danger btn-sm">Deleted</a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if ($request->post_type == 'Auction')
        @php
            $all_bids = App\Models\Bid::where('post_id', $id)->orderBy('id', 'DESC')->get();
        @endphp
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <h3>Auction Bids</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if ($all_bids->count() > 0)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Bidder Details</th>
                                                <th scope="col">Bid Amount</th>
                                                <th scope="col">Mark as Win</th>
                                                <th scope="col">Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @foreach ($all_bids as $bid)
                                                @php
                                                    $check_has_win_bid = App\Models\Bid::where('post_id', $id)->where('status', 3)->first();
                                                @endphp
                                                <tr>
                                                    <th scope="row">{{ $count++ }}</th>
                                                    <td>
                                                        <strong>{{ $bid->BidderUserDetails->name }}</strong>
                                                        <br>
                                                        {{ $bid->BidderUserDetails->email }}
                                                    </td>
                                                    <td>${{ $bid->bid_amount }}.00</td>
                                                    <td>

                                                        @if ($bid->status == 3)
                                                            <div class="alert alert-success">Winning Bid</div>
                                                        @else
                                                            @if ($check_has_win_bid == null)
                                                                <button class="btn btn-success"
                                                                    onclick="win_bid_confirmation('{{ $bid->id }}','3')">MARK
                                                                    THIS BID AS WIN FOR
                                                                    ${{ $bid->bid_amount }}.00</button>
                                                            @else
                                                                <div class="alert alert-warning">No option available</div>
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td>{{ $bid->created_at->diffForHumans() }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    Currently there's no bid to show.
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
