@extends('panel.layouts.main')

@section('css')

@endsection

@section('content')
<form action="{{ empty($user) ? route('panel.profile.store') : route('panel.profile.update', $user) }}" method="POST" class="uk-form-stacked" id="user_edit_form">
    @csrf
    @if(!empty($user))
    @method('put')
    @endif
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-large-7-10">
            <div class="md-card">
                <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                    <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{ asset('theme/assets/img/blank.png') }}" alt="user avatar"/>
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div class="user_avatar_controls">
                            <span class="btn-file">
                                <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                <input type="file" name="image" id="image">
                                {{--  <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">  --}}
                            </span>
                            <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                        </div>
                    </div>
                    <div class="user_heading_content">
                        <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">{{ empty($user) ? '' : $user->name }}</span><span class="sub-heading" id="user_edit_position">{{ empty($user) ? '' : $user->position }}</span></h2>
                    </div>
                    <div class="md-fab-wrapper">
                        <div class="md-fab md-fab-toolbar md-fab-small md-fab-accent">
                            <i class="material-icons">&#xE8BE;</i>
                            <div class="md-fab-toolbar-actions">
                                <button type="submit" id="user_edit_save" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Save"><i class="material-icons md-color-white">&#xE161;</i></button>
                                {{--  <button type="submit" id="user_edit_print" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Print"><i class="material-icons md-color-white">&#xE555;</i></button>
                                <button type="submit" id="user_edit_delete" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Delete"><i class="material-icons md-color-white">&#xE872;</i></button>  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user_content">
                    <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                        <li class="uk-active"><a href="#">Basic</a></li>
                        {{--  <li><a href="#">Groups</a></li>
                        <li><a href="#">Todo</a></li>  --}}
                    </ul>
                    <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                        <li>
                            <div class="uk-margin-top">
                                <h3 class="full_width_in_card heading_c">
                                    General info
                                </h3>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <label for="user_edit_uname_control">Name</label>
                                        <input class="md-input" type="text" id="user_edit_uname_control" name="name" value="{{ empty($user) ? '' : $user->name }}"/>
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <label for="user_edit_position_control">User position</label>
                                        <input class="md-input" type="text" id="user_edit_position_control" name="position" value="{{ empty($user) ? '' : $user->position }}"/>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <label for="about">About</label>
                                        <textarea class="md-input" name="about" id="about" cols="30" rows="4">{{ empty($user) ? '' : $user->about  }}</textarea>
                                    </div>
                                </div>
                                @empty($user)                                    
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <label for="password">Password</label>
                                        <input class="md-input" type="text" id="password" name="password" value="123456"/>
                                    </div>
                                </div>
                                @endempty
                                {{--  <h3 class="full_width_in_card heading_c">
                                    Languages
                                </h3>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-1-1">
                                        <select id="user_edit_languages" name="user_edit_languages" multiple>
                                            <option value="gb" selected>English</option>
                                            <option value="pl" selected>Polish</option>
                                            <option value="fr" selected>French</option>
                                        </select>
                                    </div>
                                </div>  --}}
                                <h3 class="full_width_in_card heading_c">
                                    Contact info
                                </h3>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                            <div>
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                    </span>
                                                    <label>Email</label>
                                                    <input type="text" class="md-input" name="email" value="{{ empty($user) ? '' : $user->email  }}" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                    </span>
                                                    <label>Phone Number</label>
                                                    <input type="text" class="md-input" name="user_edit_phone" value="{{ empty($user) ? '' : $user->phone }}" />
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                    </span>
                                                    <label>Facebook</label>
                                                    <input type="text" class="md-input" name="social[facebook]" value="{{ empty($user) ? '' : empty($user->social) ? '' : $user->social['facebook'] }}" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                    </span>
                                                    <label>Twitter</label>
                                                    <input type="text" class="md-input" name="social[twitter]" value="{{ empty($user) ? '' : empty($user->social) ? '' : $user->social['twitter'] }}" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                    </span>
                                                    <label>Linkdin</label>
                                                    <input type="text" class="md-input" name="social[linkedin]" value="{{ empty($user) ? '' : empty($user->social) ? '' : $user->social['linkedin'] }}" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="md-list-addon-icon uk-icon-google-plus"></i>
                                                    </span>
                                                    <label>Google+</label>
                                                    <input type="text" class="md-input" name="social[google]" value="{{ empty($user) ? '' : empty($user->social) ? '' : $user->social['google'] }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{--  <li>
                            <p class="uk-text-muted uk-text-small">Move the draggable group by clicking and holding handler and drag it to other list.</p>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-2">
                                    <h4 class="heading_c uk-margin-small-bottom">My groups</h4>
                                    <ul class="md-list md-list-addon uk-sortable groups_connected" id="user_groups">
                                        <li data-group-id="1">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Cloud Computing</a></span>
                                                <span class="uk-text-small uk-text-muted">177 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="2">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Account Manager Group</a></span>
                                                <span class="uk-text-small uk-text-muted">295 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="3">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Digital Marketing</a></span>
                                                <span class="uk-text-small uk-text-muted">104 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="4">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">HR Professionals Association - Human Resources</a></span>
                                                <span class="uk-text-small uk-text-muted">110 Members</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <h4 class="heading_c uk-margin-small-bottom">All Groups</h4>
                                    <ul class="md-list md-list-addon uk-sortable groups_connected" id="all_groups">
                                        <li data-group-id="5">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Biotech & Pharma Professionals Network</a></span>
                                                <span class="uk-text-small uk-text-muted">177 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="6">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">The IT Sales Global Community</a></span>
                                                <span class="uk-text-small uk-text-muted">217 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="7">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Healthcare Executives Network</a></span>
                                                <span class="uk-text-small uk-text-muted">159 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="8">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Luxury & Lifestyle Professionals</a></span>
                                                <span class="uk-text-small uk-text-muted">229 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="9">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Information Security Community</a></span>
                                                <span class="uk-text-small uk-text-muted">228 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="10">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">eMarketing Association Network</a></span>
                                                <span class="uk-text-small uk-text-muted">138 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="11">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Finance Club</a></span>
                                                <span class="uk-text-small uk-text-muted">265 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="12">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Banking Careers</a></span>
                                                <span class="uk-text-small uk-text-muted">40 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="13">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Java Developers</a></span>
                                                <span class="uk-text-small uk-text-muted">272 Members</span>
                                            </div>
                                        </li>
                                        <li data-group-id="14">
                                            <div class="md-list-addon-element sortable-handler">
                                                <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#">Information Technology: Software, Hardware, Computer, Developer, Cloud & Engineering</a></span>
                                                <span class="uk-text-small uk-text-muted">156 Members</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <input name="user_groups_control" id="user_groups_control" type="hidden"/>
                        </li>
                        <li>
                            <ul class="md-list md-list-addon" id="user_todo">
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_0" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Dolore sit aut quibusdam soluta.</span>
                                        <span class="uk-text-small uk-text-muted">In perspiciatis iure quisquam aut pariatur magnam quo qui repudiandae.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_1" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Nostrum voluptates non qui ut.</span>
                                        <span class="uk-text-small uk-text-muted">Perferendis asperiores repellendus ullam excepturi et earum perspiciatis adipisci.</span>
                                    </div>
                                </li>
                                <li class="md-list-item-disabled">
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_2" type="checkbox" data-md-icheck checked/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Non non voluptatem perspiciatis at.</span>
                                        <span class="uk-text-small uk-text-muted">Quia fugit unde error labore consequatur.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_3" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading uk-text-danger">Aut quo cum in.</span>
                                        <span class="uk-text-small uk-text-danger">Ab ex eaque quisquam et cupiditate.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_4" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Et nisi doloribus maxime rerum.</span>
                                        <span class="uk-text-small uk-text-muted">Qui dolore placeat nam nulla nihil distinctio sint.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_5" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Nobis est sunt quam.</span>
                                        <span class="uk-text-small uk-text-muted">Ea quae vitae ut consequuntur voluptate nihil voluptatem voluptatibus dolores laborum.</span>
                                    </div>
                                </li>
                                <li class="md-list-item-disabled">
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_6" type="checkbox" data-md-icheck checked/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading uk-text-danger">Voluptates cum aut voluptatibus at error.</span>
                                        <span class="uk-text-small uk-text-danger">Quo eveniet ut voluptatibus non quos earum expedita ut itaque.</span>
                                    </div>
                                </li>
                                <li class="md-list-item-disabled">
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_7" type="checkbox" data-md-icheck checked/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Id est vel.</span>
                                        <span class="uk-text-small uk-text-muted">Rem blanditiis provident in quas at odio.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_8" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Harum et corrupti sint qui expedita.</span>
                                        <span class="uk-text-small uk-text-muted">Natus rerum et distinctio quibusdam qui perferendis autem sit.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_9" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Autem ut qui.</span>
                                        <span class="uk-text-small uk-text-muted">Ex eligendi fugiat itaque laborum eos ad.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_10" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Quidem dolores excepturi eos necessitatibus excepturi.</span>
                                        <span class="uk-text-small uk-text-muted">Nostrum tempore iusto ab quo quod nihil id aut in ut.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_11" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Nihil in omnis consequatur.</span>
                                        <span class="uk-text-small uk-text-muted">Consequatur molestias reprehenderit autem atque voluptatum reprehenderit molestias et sit qui.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_12" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading uk-text-danger">Perspiciatis asperiores ut ipsam natus et.</span>
                                        <span class="uk-text-small uk-text-danger">Nisi sequi corrupti consectetur earum accusamus.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_13" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Animi occaecati cupiditate qui enim.</span>
                                        <span class="uk-text-small uk-text-muted">Ex sed magnam sit impedit sit accusantium quae minima.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_14" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Vel laborum sit saepe sed praesentium.</span>
                                        <span class="uk-text-small uk-text-muted">Sit est nemo consequatur atque repellat esse velit.</span>
                                    </div>
                                </li>
                                <li class="md-list-item-disabled">
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_15" type="checkbox" data-md-icheck checked/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Est est et veniam id.</span>
                                        <span class="uk-text-small uk-text-muted">Doloremque dolor voluptas qui aut explicabo quo ullam laboriosam deleniti omnis.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_16" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Et libero veritatis aliquid sint voluptate.</span>
                                        <span class="uk-text-small uk-text-muted">Harum sequi delectus odio et beatae exercitationem consequatur debitis sed repudiandae eaque.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_17" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Laborum labore quos et.</span>
                                        <span class="uk-text-small uk-text-muted">Et voluptatem quaerat vitae et culpa eum et aut blanditiis.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_18" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Ipsam maxime reiciendis accusamus voluptatem.</span>
                                        <span class="uk-text-small uk-text-muted">Officiis vero dolore dolore dolore iste non delectus sapiente vitae.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <input name="todo_item_19" type="checkbox" data-md-icheck/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading uk-text-danger">Iure praesentium voluptas.</span>
                                        <span class="uk-text-small uk-text-danger">Odit qui recusandae dolorem sed similique rerum eaque corporis.</span>
                                    </div>
                                </li>
                            </ul>
                        </li>  --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-width-large-3-10">
            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_c uk-margin-medium-bottom">Other settings</h3>
                    <div class="uk-form-row">
                        <input type="checkbox" checked data-switchery id="user_edit_active" name="isActive" disabled/>
                        <label for="user_edit_active" class="inline-label">User Active</label>
                    </div>
                    <hr class="md-hr">
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="user_edit_role">User Role</label>
                        <select data-md-selectize name="role_id">
                            <option value="{{ $user->role->id }}">{{ $user->role->display_name }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection

@section('js')
<!-- page specific plugins -->
<!-- file input -->
<script src="{{ asset('theme/assets/js/custom/uikit_fileinput.min.js') }}"></script>

<!--  user edit functions -->
<script src="{{ asset('theme/assets/js/pages/page_user_edit.min.js') }}"></script>
@endsection