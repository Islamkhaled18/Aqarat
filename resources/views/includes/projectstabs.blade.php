<div class="tab-slider">
    @foreach($all_projects as $project)
        <div class="item">
            <div class="block-tab">
                <div class="bg-img">
                    <img src="{{asset( $project->project_image)}}">
                </div>
                <div class="text-block">
                    <h2>{{$project->client_name}}</h2>
                    <a href="{{route('singleproject' , $project->id)}}" class="link-block">@lang('site.details')</a>
                </div>
                <div class="overlay-text">
                    <a href="#" class="link-overlay"><span class="fa fa-external-link"></span></a>
                    <div class="details-overlay">
                        <h2>{{$project->client_name}}</h2>
                        <p>
                            {{$project ->details}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
