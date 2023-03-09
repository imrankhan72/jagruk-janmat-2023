        <div class="comment-block margin-30">
            <span class="comment"><i class="fa fa-comment-o"></i>Comments <span class="badge"> {{$comments->count()}}</span> </span>

            <div class="heading-block">
                <h1>Comment Now</h1>
            </div>
        </div>


        <div class="row margin-30">
            {{ Form::open(array('route' => 'comments/store')) }}
            <input type="hidden" name="article_id" value="{{$article->id}}">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"  placeholder=" Your Name" required>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Your Email ID" required>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="comment" rows="4"  placeholder="Your Comment" required></textarea>
                </div>

                <div class="text-center"><button type="submit" class="btn btn-warning btn-larg">Submit</button></div>
            </div>

        </div>
    </form>
    
        <hr/>
        @if($comments->count() > 0)
        <div class="heading-block">
            <h1>Previous Comments</h1>
        </div>

        @foreach($comments as $comment)
            <div class="comment-deatils">
                <p>{{$comment->comment}}</p>
                <span class="name2">{{$comment->name}}</span>
            </div>
        @endforeach

        @endif
