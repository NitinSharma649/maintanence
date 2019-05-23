@extends('panel.layouts.main')

@section('css')

@endsection

@section('topbar')
<div id="top_bar">
    <div class="md-top-bar">
        <div class="uk-width-large-8-10 uk-container-center">
            <div class="uk-clearfix">
                <div class="md-top-bar-actions-left">
                    <div class="md-top-bar-checkbox">
                        <input type="checkbox" name="mailbox_select_all" id="mailbox_select_all" data-md-icheck />
                    </div>
                </div>
                <div class="md-top-bar-actions-right">
                    <div class="md-top-bar-icons">
                        <i id="mailbox_list_split" class=" md-icon material-icons">&#xE8EE;</i>
                        <i id="mailbox_list_combined" class="md-icon material-icons">&#xE8F2;</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="md-card-list-wrapper" id="mailbox">
    <div class="uk-width-large-8-10 uk-container-center">
        <div class="md-card-list">
            <div class="md-card-list-header heading_list">Today</div>
            <div class="md-card-list-header md-card-list-header-combined heading_list" style="display: none">All Messages</div>
            <ul class="hierarchical_slide">
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">13 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-grey">hp</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>sophia70@danielnicolas.info</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>sophia70@danielnicolas.info</span>
                        </div>
                        <span>Dolorum omnis fugit facere voluptatem.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_1895">Reply to <span>sophia70@danielnicolas.info</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_1895" id="mailbox_reply_1895" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">13 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_10_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Vernice Wiza I</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Vernice Wiza I</span>
                        </div>
                        <span>Quidem et voluptatem doloremque rerum ea corporis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_1872">Reply to <span>Vernice Wiza I</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_1872" id="mailbox_reply_1872" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">13 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_07_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>jasen.stiedemann@gmail.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>jasen.stiedemann@gmail.com</span>
                        </div>
                        <span>Cupiditate aut dolore tempore sint et et dolorum recusandae.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_308">Reply to <span>jasen.stiedemann@gmail.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_308" id="mailbox_reply_308" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">13 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-grey">rs</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Lola Champlin II</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Lola Champlin II</span>
                        </div>
                        <span>Est illum et tempore.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_270">Reply to <span>Lola Champlin II</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_270" id="mailbox_reply_270" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="md-card-list">
            <div class="md-card-list-header heading_list">Yesterday</div>
            <ul class="hierarchical_slide">
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_01_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>luettgen.rahul@gmail.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>luettgen.rahul@gmail.com</span>
                        </div>
                        <span>Sed autem atque omnis distinctio.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Earum maxime ratione itaque et consequatur sed laborum sed mollitia architecto laudantium ipsa porro molestiae accusamus numquam corrupti voluptatum quia eum blanditiis et molestiae illum explicabo suscipit autem non porro voluptatem molestiae atque est molestias hic officiis quisquam velit quis sint et consequuntur et consequuntur sit dolores non necessitatibus ea ex quos id et vitae omnis deleniti omnis et sunt ratione dolores quos voluptatem ut dolor voluptas omnis exercitationem voluptas voluptatem voluptas iste ea libero odit rerum et ex nihil qui qui ut sunt reprehenderit fuga recusandae error quod consequatur ab accusantium officia consequuntur sunt dolorem explicabo animi nihil dolor itaque in sint vel aperiam ut consequatur molestias doloremque eius tempore voluptas esse voluptatibus et asperiores consequuntur et dolores ut iusto id fugiat laboriosam voluptatum veritatis rerum sunt at qui dignissimos ab dignissimos magni error recusandae sunt eius vero rerum quo officiis id et non molestiae aspernatur illum ullam ad ea animi impedit ea doloribus est ut dolorem eos quis autem tenetur sapiente neque et tenetur sapiente quam sed rem at ex voluptatem adipisci consequuntur et maxime dolores quibusdam laboriosam consequatur molestiae voluptas excepturi ut dicta rerum quas sint esse accusamus quod ut laborum aperiam autem totam repellat qui perspiciatis consequuntur similique saepe sed aut numquam beatae reprehenderit eveniet tempora consequuntur saepe quia voluptatum ullam et expedita aut aut quo mollitia possimus deserunt dolorum voluptate modi veniam voluptatum suscipit enim vitae sunt voluptatem nihil nihil aut dolores alias distinctio modi molestias consequatur hic enim qui qui ipsa libero reiciendis tempora qui ut aut ut quis eveniet vel voluptatibus perferendis iure dolorum nobis quo voluptate molestiae iusto iure voluptas et repellat deserunt reprehenderit distinctio aliquam reprehenderit sunt quos rem molestiae nemo mollitia sed voluptates nostrum laboriosam magnam minima eos voluptatibus accusamus porro sunt consequatur nihil aliquid sunt ex quidem quis eligendi autem similique sed nihil sapiente praesentium voluptas nulla non et magnam nemo aut qui magnam id dolorem sapiente voluptatibus excepturi qui quidem assumenda aut est soluta quae tempora est voluptatem magnam et omnis et enim necessitatibus quod iusto exercitationem ea porro voluptatem laudantium sunt rerum animi quasi illum consequatur ducimus et ut pariatur nulla ut qui optio doloribus magni porro molestiae distinctio modi cumque cupiditate id et qui autem assumenda maiores enim reprehenderit voluptates fuga saepe aut nihil.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_7254">Reply to <span>luettgen.rahul@gmail.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_7254" id="mailbox_reply_7254" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_03_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Ana Paucek</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Ana Paucek</span>
                        </div>
                        <span>Sapiente sunt quidem dolores consequatur qui fugiat magnam mollitia.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Totam dolores aut sit deleniti nihil distinctio doloribus ratione a voluptas itaque mollitia sit suscipit voluptatem aliquid libero aut enim numquam suscipit doloribus perferendis consectetur adipisci quibusdam quisquam necessitatibus aperiam corrupti voluptatem animi placeat amet esse sed recusandae distinctio dolores voluptatem eius enim at sunt voluptate tenetur et sit iusto rerum molestiae cum dolores architecto quis enim dolorem nam ut sint repellendus et voluptatem labore magnam quia consectetur quo quia consequatur veniam enim ipsa quaerat culpa voluptatem est natus molestiae nihil autem quia incidunt sunt modi velit deserunt cupiditate consequatur nihil aut saepe perferendis adipisci ut doloremque quisquam suscipit et inventore et corporis quae consectetur labore consectetur ab impedit harum iure nesciunt a maxime aut repellat fuga saepe tempore sit reprehenderit ullam fugit neque sapiente nemo ea voluptate dolorem eos voluptatem eos harum reiciendis quidem dolores dolorem facilis ut vel laboriosam vel qui quod est modi eligendi earum voluptatem amet aut voluptas sint deserunt a et porro est beatae pariatur consequatur doloremque ut tenetur ut pariatur fuga eos nulla dicta aut eum minima illo aperiam nihil enim quis sequi doloribus quis quis nesciunt non soluta hic saepe quia vel soluta alias qui ullam dolores consectetur qui ipsum incidunt eum nostrum ut eligendi quia ut fuga ut rerum pariatur voluptatem rerum sunt excepturi illum dolor vel aut a sed hic expedita ipsa rerum exercitationem impedit quia dolores autem quam deserunt soluta sint sequi qui impedit quo delectus repudiandae minus maxime et est incidunt deleniti libero laudantium fugiat et ut porro aut animi aspernatur voluptatum quo repudiandae incidunt vel non voluptatem eos et quis quam ut possimus dolorem id porro sunt quas voluptatibus recusandae explicabo aspernatur repellat rerum repellat blanditiis hic.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2947">Reply to <span>Ana Paucek</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2947" id="mailbox_reply_2947" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>brennon.cruickshank@vonrueden.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>brennon.cruickshank@vonrueden.com</span>
                        </div>
                        <span>Deleniti reiciendis quis corporis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Aliquid enim quod a esse voluptas ipsa facilis dolor qui deleniti placeat accusamus eum maxime incidunt debitis libero ratione eos expedita earum sed sequi rem possimus minus ex saepe molestiae et debitis eius facilis occaecati sit aut error incidunt beatae distinctio a blanditiis nihil voluptate perferendis ea maxime cupiditate omnis qui error ea suscipit dolorem molestiae qui repellendus aliquid quae sequi sed nihil libero dolorum quam illum qui dicta voluptas ipsam natus placeat non est quo nostrum cumque voluptate voluptas dolore ratione error ratione quia soluta et nihil facilis et reprehenderit dicta consectetur laborum quasi veniam pariatur odio ut unde quam hic fugiat molestiae nobis tempore debitis quis dolores qui fugit animi nihil possimus cum unde illo atque quidem ut expedita sit dicta hic maxime dolorem autem iste labore illo nulla illum a eaque magni rem ratione fuga aliquid sit aut unde qui architecto natus enim recusandae perspiciatis laudantium quia a eum qui voluptas eveniet sit omnis ipsam nihil et quam ut perferendis vitae exercitationem et ab ut sit quisquam soluta molestias tempora necessitatibus quidem sequi quia id ut nobis voluptatem saepe veniam quaerat laborum similique rerum consequuntur in odio perspiciatis nihil dolorem reprehenderit ea quos voluptatibus doloribus magni qui occaecati in et doloremque corporis labore reprehenderit molestiae perspiciatis ut laborum explicabo quaerat harum eos quia maiores ut itaque voluptatem consequuntur facere quos et qui quaerat voluptatem sint ut facilis sed rem qui sit voluptatem quia vitae facilis ipsa incidunt quam doloribus beatae quisquam totam cupiditate illo soluta est tempore modi quo quas molestias est laboriosam nisi magni incidunt libero sed inventore consequatur inventore ut voluptas velit delectus dolores temporibus sequi quia suscipit enim culpa dolore ipsa non ut assumenda rem architecto quibusdam aut qui quia aut labore et labore impedit quis atque nulla maxime est dolores ipsa omnis ut ea atque quia minima est perferendis dolore eum iste veritatis pariatur culpa voluptatem consequatur hic et facere optio repellat pariatur voluptatem quam eveniet et in ullam distinctio sunt cupiditate voluptas cum veniam at inventore eius voluptatibus harum dolore qui harum omnis ipsa modi a quos nihil eligendi itaque molestiae qui temporibus eaque rerum maiores voluptas et similique porro nostrum quae velit explicabo voluptas itaque est autem sit non nam quia maiores quo inventore distinctio totam pariatur quia asperiores est omnis quasi ipsum totam quasi vitae repudiandae deserunt aut velit voluptatem veritatis dolores perferendis dolore nobis saepe eaque aut voluptas magnam harum ipsam sit et neque ut et dignissimos et facilis atque culpa dolorum tempora repudiandae iste nobis magnam tenetur nam repellat minima quibusdam expedita cupiditate consequatur non nihil doloremque enim et dolores natus aliquid aut et praesentium aliquam voluptatem libero iure pariatur quia est officiis omnis hic eos et ut minima aut est aut aut fuga sapiente illo asperiores rem amet doloribus itaque sed eius perspiciatis numquam et voluptates et accusantium voluptatem iusto magnam voluptas fuga iste dolores adipisci quisquam est aut fugit neque et aut dolor rerum maxime dicta et iure necessitatibus unde doloremque hic enim delectus harum qui qui consequatur sed ut sapiente nemo occaecati praesentium fugiat aperiam iure sint ullam reiciendis et eos eveniet non minus aut nihil aut atque quidem modi hic sed tenetur sed sapiente in rerum sint aperiam non blanditiis assumenda voluptate consequatur at iusto corporis accusamus quas esse occaecati velit maiores nulla maxime ipsam et temporibus aspernatur labore architecto expedita ea et voluptatibus quia quod odio neque vitae rerum debitis rerum minima iste beatae excepturi est quae amet fugit laboriosam magni quo velit in et dolorem ipsam ipsum qui ratione numquam quisquam amet in et minima suscipit voluptas ut minus molestias totam sunt quia est ut delectus eum natus autem aut culpa qui voluptas qui neque ad aliquid omnis ab nostrum ut debitis a asperiores cum harum mollitia repudiandae non quo recusandae natus voluptas impedit consequatur provident quo molestiae ducimus fugiat et culpa totam suscipit voluptatem labore ut velit voluptatem laborum ea alias tempore totam dolorum ut veritatis dolor et quia repellendus accusamus excepturi porro magnam esse maxime molestiae libero ducimus eius cumque velit velit ea ea voluptate deleniti omnis ut quas dolorum voluptas deleniti veritatis non deleniti ea temporibus accusamus vel culpa incidunt non qui nihil rem nihil quo blanditiis accusamus est accusantium ex reiciendis vel molestias repudiandae et aut velit placeat quos aliquam quia deserunt rerum asperiores in minima aliquid alias nostrum ab voluptatem mollitia molestiae similique ab neque quod incidunt error nobis magni et voluptatem esse molestiae esse molestias beatae ut et qui sunt consequuntur ut reiciendis dolorem occaecati nihil voluptatem magnam ut explicabo enim et quo molestiae sit voluptatem aut vitae non quo aut aperiam voluptas possimus minima omnis ad vel officia consequatur perspiciatis voluptate mollitia autem maxime aut beatae veritatis similique nam ea voluptatibus expedita voluptatibus cum amet dolor nulla ea quas delectus et quia minima assumenda sunt dicta inventore quia voluptatibus esse et officia velit autem id vel quis voluptatum ea quis minima ut qui consequatur omnis asperiores mollitia nihil sit itaque qui omnis autem enim possimus laboriosam consequatur voluptatem deserunt impedit nisi itaque officia iure quia quo placeat inventore sapiente iste aut maxime aspernatur dolor totam tempore similique beatae quos voluptate consequatur maiores voluptas ea quo fuga veniam et hic velit aliquam quo quasi exercitationem omnis non ut sint earum consequatur et labore quo consequatur nostrum doloribus necessitatibus nihil exercitationem odio sapiente id aut in iste eligendi quia atque voluptatem.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_5876">Reply to <span>brennon.cruickshank@vonrueden.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_5876" id="mailbox_reply_5876" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_10_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>tristin.bergnaum@creminheidenreich.net</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>tristin.bergnaum@creminheidenreich.net</span>
                        </div>
                        <span>Aut velit doloribus quibusdam aut.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Error nostrum earum voluptas aut incidunt aliquid ea nam vero et nam omnis sed molestias ipsa dolores reprehenderit hic distinctio error voluptas animi rerum reprehenderit consectetur nesciunt velit non molestiae at impedit aperiam vel delectus dolor et consequatur cupiditate aut perferendis fugit non labore veniam praesentium illo est minima voluptas rerum voluptate maiores magnam enim debitis et est magni deserunt enim sit incidunt dolor aliquam pariatur dolore recusandae iste modi et officiis tempora enim consequuntur consequatur officia illum aut aut rem quis enim est consequatur reiciendis voluptatem ea magni est accusantium inventore molestiae incidunt explicabo maiores reprehenderit est laudantium tenetur quos autem culpa ducimus nesciunt alias omnis voluptatum dolorem accusantium reiciendis explicabo ut doloribus nesciunt velit ipsam eius voluptatibus voluptatem quo laborum consectetur perspiciatis libero omnis recusandae neque repellendus molestiae voluptatem tempore ut fugiat id consequatur magnam est libero sit aut voluptas est fugit et aut consequatur provident quisquam quia provident qui voluptatibus esse libero et ad molestiae unde commodi tempora iusto qui dignissimos ea quas aut molestiae dolores quia nemo maxime mollitia similique eum similique necessitatibus maxime similique quas pariatur fugiat repudiandae quos et sunt non sapiente ut dolor recusandae ad quos non excepturi temporibus minima unde qui eum recusandae eum doloribus nam vero voluptas cum aliquid explicabo quod quidem est quidem saepe dolores ut sint et aspernatur qui in et iste hic commodi quibusdam nostrum minus iste ratione voluptatem dolores hic beatae qui distinctio iure sed rerum voluptatem tempore aut culpa ab quia similique quis tempora expedita nobis ex omnis ex neque voluptatum et vitae ipsam quas quam quo dolores adipisci incidunt non ex molestias voluptatem ipsam libero sit nulla nesciunt id doloremque dolorum porro odit voluptatem expedita molestiae ab et officia optio dolorem ex tenetur voluptas aliquam et libero rerum sit illo maiores quasi quas quia laborum nobis in cum placeat occaecati dolorem commodi natus blanditiis velit sed maxime quidem dolores ut mollitia dolore eos quo molestiae vel dolor nisi debitis aliquid illum sunt officia modi neque nisi et autem ipsam quia dolor quidem minima cum cumque saepe natus nihil error dolor mollitia nesciunt incidunt ipsa perferendis corporis quo distinctio molestiae unde molestiae vel magni nemo fugit illo quis accusantium cupiditate sed nihil enim officiis et cum odit minima sunt repellendus beatae ratione aut dolorem fugit ut adipisci odio provident et tempore est ad laborum repudiandae sint quis placeat expedita voluptas quia aut qui error quidem molestiae at provident dignissimos et nihil et sed minus adipisci maiores corporis iure odit maiores ut in tempore asperiores dicta mollitia eligendi magnam aut commodi nulla dolores quasi aliquam officia voluptatum quidem neque quia aspernatur placeat doloribus fugiat in assumenda vel rerum optio at a ab culpa laboriosam similique eveniet in nobis rerum voluptas quia fuga incidunt non voluptatem et hic corporis id eos qui excepturi natus enim nam ducimus magni labore sint et voluptatum labore consequuntur officiis laudantium facere distinctio ipsam perspiciatis sit molestiae dolores eius ut aperiam id aut dolorum expedita eum corrupti aut rem dolorem consectetur reprehenderit quisquam pariatur porro fugit nostrum ratione earum aut quaerat numquam reprehenderit iste omnis aut inventore et omnis asperiores et et esse dolorem soluta ullam quidem quibusdam ratione maiores nihil reiciendis itaque assumenda minima aut incidunt libero natus fugiat ab eum nesciunt quo culpa quidem autem quis alias sit illum explicabo est soluta consequatur voluptate nemo et totam sed deserunt nisi dolor praesentium nemo dolores facere ea omnis consequatur rerum sunt ratione similique in alias voluptatem et ea quasi veniam saepe dicta tempore quia doloribus numquam culpa aliquam aut commodi est fuga ea perferendis id vero ad sequi ea enim dolorem itaque facere totam est voluptates error et molestias dolores quia non ut dignissimos eos minima laudantium atque fugiat nihil nisi soluta atque et possimus blanditiis dignissimos cumque dicta eligendi magni voluptatem corrupti doloremque excepturi consequatur voluptas ut vero eaque temporibus expedita perspiciatis voluptatem tempora necessitatibus error est incidunt assumenda sapiente nulla rem reprehenderit ducimus ullam tempora et odit ad earum rerum et iusto praesentium tempora tempora eius fuga soluta saepe dolor sint pariatur odit qui cum error eveniet sapiente reprehenderit facere laboriosam dolorem ipsam ut optio aut itaque provident ex aperiam aut sed dignissimos sed enim aliquid vel id consequatur aliquid corrupti quia ea aliquid reprehenderit quia ut et eos ratione et nemo architecto sed rerum et qui et quibusdam dolor temporibus ut ut dolorum a quo magni impedit totam dolor rem quod nisi voluptatem nostrum quis accusamus et rerum laborum vel sed quasi autem quisquam iure repudiandae consequuntur atque animi culpa culpa ducimus nemo quo dolores dolores optio est vero officiis reprehenderit molestias aspernatur quis incidunt nobis nihil harum quibusdam id minus ratione soluta commodi non nemo molestias beatae quod explicabo unde consequatur qui dolore debitis aut quae et ea dolor blanditiis harum et laborum assumenda et reiciendis quis eligendi tenetur veritatis numquam labore quia placeat perferendis aut nulla dolor ut dolores voluptatem ea corporis enim non quas et voluptatem autem nam et reiciendis dolores quibusdam repellat perferendis qui ratione aliquam non ducimus incidunt veritatis omnis sequi illo fugiat qui delectus nostrum reprehenderit consequuntur minima sit voluptatum ut et dolor labore repellendus et qui error sit expedita repellendus quisquam rem sit est earum blanditiis consequatur maiores at fugiat aut voluptatem officia et et ipsam nobis quia et ipsum veritatis beatae non necessitatibus doloremque et rerum vero eveniet ab facilis totam et sed doloremque hic sed ut rerum numquam vel incidunt id eligendi accusantium laboriosam quaerat distinctio itaque et dolorem ut sint id dicta inventore repellendus quia eius et omnis voluptatem nostrum est natus iure et optio in voluptas nobis aut quibusdam qui et ducimus ut magnam fuga ut sit dolores qui qui repellat velit numquam cum porro praesentium et alias ducimus omnis nesciunt et repellendus voluptatem nobis id provident unde quo mollitia id dolorem perspiciatis eaque molestias quam facere vero cumque aperiam fugit qui tempora consequatur omnis dicta maiores voluptatem minus labore corporis officia iure velit sit quis molestiae et et amet voluptas ex error ut aperiam quas amet ipsum inventore in iste tempore quidem nisi quas sed nulla fugiat aspernatur dolore reprehenderit eius dolorem est eum eveniet unde non maiores aut in eaque voluptatum eaque ad sit labore voluptate ipsa quod aliquid dolorem eum veritatis error dolorum aut est architecto quisquam totam et occaecati asperiores cumque sint enim quis et hic libero tempora quia delectus rerum repellendus et perferendis blanditiis mollitia excepturi labore deleniti nihil ullam perferendis quis non ad tempore harum facere voluptas id rerum maiores ipsam quae nam quos eaque corporis vel praesentium eos velit et quo vel dolor sed placeat accusantium numquam consequatur odit praesentium recusandae sint atque quae nisi id et commodi asperiores reprehenderit iure harum harum dolores sed quia rerum corrupti mollitia autem quasi nemo id aliquam quia laboriosam odio sed illum reiciendis perferendis quas assumenda quo ab voluptates maiores nisi ea corrupti adipisci id debitis qui voluptas facilis neque enim molestias fuga eos impedit aut non sed voluptatem et explicabo dolores blanditiis adipisci adipisci omnis iure ea qui aliquam repudiandae nostrum voluptatem voluptates quo et dolores quia rem sed in rerum incidunt voluptatem numquam aliquam recusandae veritatis cupiditate magni eum in dolores animi consequatur deleniti et voluptas molestiae et illo magni nobis sequi ut similique voluptatum provident et qui et quos sequi doloribus non ut accusantium consectetur hic architecto sint ex fugit est asperiores et nam necessitatibus sunt debitis temporibus vel quos atque nobis quia maxime ratione est laudantium sit deserunt ut provident distinctio ut sit dolores deleniti expedita earum excepturi officia quidem architecto fuga suscipit quaerat molestiae veniam ut adipisci est et unde minima.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_505">Reply to <span>tristin.bergnaum@creminheidenreich.net</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_505" id="mailbox_reply_505" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_03_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Maddison Kuvalis</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Maddison Kuvalis</span>
                        </div>
                        <span>Repellendus doloremque perspiciatis earum natus.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Voluptatem eveniet illo ex nulla sunt eveniet eveniet est quos iusto et assumenda et enim necessitatibus quis ea dolores aut velit aperiam deleniti temporibus consequatur dicta ex quam incidunt voluptates consequuntur blanditiis et tenetur aut et occaecati minus consequuntur laudantium aut praesentium et occaecati et dolores facilis qui ut illum laborum consequuntur qui quia reprehenderit modi est nam et explicabo qui quia dolor saepe sed iusto enim sit modi quia reprehenderit commodi qui blanditiis quisquam magnam voluptas nemo at natus illum omnis nisi nisi iure adipisci enim optio magni doloribus veritatis quisquam nobis qui ipsa laboriosam voluptas exercitationem reiciendis dolor et sunt fugit voluptate voluptatem numquam aspernatur totam est voluptatibus aut cumque occaecati debitis exercitationem impedit quaerat quam eum quo nostrum consequatur necessitatibus non dolor voluptas et impedit numquam atque accusantium impedit fugiat quisquam veritatis ut vitae voluptatem eos dolores alias suscipit praesentium laudantium praesentium quos ut aperiam pariatur et saepe facilis aut ex rem repellendus ratione quia vel molestiae rem eaque voluptate omnis velit quaerat exercitationem quia quam voluptatem eos necessitatibus consequatur aspernatur sint nesciunt minima totam illo est quaerat et voluptas ea consequatur eius eum corrupti iure exercitationem consectetur provident dolor vel iusto non et ut cumque aperiam similique explicabo quis eaque soluta explicabo dolorem doloribus sit est mollitia fuga quibusdam doloremque laboriosam odit adipisci sed sed omnis voluptas doloribus voluptatibus autem ducimus expedita laudantium repudiandae animi atque dolorem minus eos ut maiores quam perferendis architecto enim quia cumque esse ut reprehenderit voluptatum optio architecto aut porro sit delectus hic dignissimos excepturi aut totam provident eaque blanditiis expedita qui quam commodi qui magni pariatur accusantium sunt et qui nesciunt et blanditiis repellat inventore quo incidunt et nesciunt est ipsam omnis quia id molestias mollitia et molestiae quidem laborum natus sapiente distinctio tenetur exercitationem officia quibusdam sint sit sit non laboriosam consequatur incidunt illum quam sed omnis omnis deleniti illo iste ea ipsam exercitationem ratione commodi qui ratione doloribus ut dolore magnam dolores perspiciatis culpa quo rerum consequuntur commodi eligendi exercitationem ex quia maxime doloremque et enim numquam aut explicabo error eum et veniam et accusantium in ipsam porro reprehenderit sed explicabo illum aut quo officia velit modi.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2970">Reply to <span>Maddison Kuvalis</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2970" id="mailbox_reply_2970" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_01_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>cristobal.hodkiewicz@oberbrunner.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>cristobal.hodkiewicz@oberbrunner.com</span>
                        </div>
                        <span>Ad velit voluptatem quia dolorem distinctio quae.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Vero numquam quis atque cupiditate reiciendis illo qui dignissimos maxime corporis voluptates saepe accusamus provident vel vitae minima maiores aperiam quas illum veritatis illum eaque et eos facilis aliquid sed soluta ut asperiores et et eveniet velit ut et est at numquam sit maiores ipsam maxime rem voluptatibus unde dolorem officiis est corporis non voluptate et repellat quasi dolor et impedit sit quis ea et voluptatem ut facere illum perferendis enim ut dolorum explicabo rerum reprehenderit aut aperiam dolorum et aspernatur et accusantium consectetur sint inventore expedita eos natus autem ut aut earum eligendi enim neque deserunt placeat explicabo aut enim non assumenda non delectus voluptatem quod magni voluptatum quibusdam dolorem doloribus earum reprehenderit ad exercitationem eum numquam necessitatibus cupiditate ipsum dignissimos porro consequuntur impedit culpa laudantium sit voluptas possimus numquam laboriosam possimus voluptatem asperiores fugit et beatae omnis nihil qui cupiditate at quo quasi et et debitis quisquam eaque dolor facilis perspiciatis mollitia id beatae consectetur mollitia enim enim aliquam delectus vel quidem recusandae inventore quia non corrupti vel delectus veniam earum et qui consequatur enim voluptas incidunt delectus delectus labore laboriosam hic iure iure repellendus nesciunt quam voluptas voluptatum et accusamus delectus velit maiores deserunt aut accusantium sint id eligendi tenetur consequatur quasi et voluptate non ut pariatur veritatis facilis ad porro dolor non qui labore ea non in beatae minus ad vitae eius quidem et vitae qui aspernatur ut ea cum nam doloremque minus velit id dolores tempora itaque fugit rem repudiandae molestias voluptatem deleniti officia et incidunt vero tempora rerum voluptas sunt aspernatur voluptatem sint accusantium natus rerum distinctio qui rerum nihil dolor et consectetur praesentium deserunt ab non accusamus deleniti aut aut ipsum neque amet sed dicta earum sit quia quo sit similique quisquam quas quo sunt autem alias ipsum minus voluptatem impedit ut sit vel assumenda perspiciatis ab.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_433">Reply to <span>cristobal.hodkiewicz@oberbrunner.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_433" id="mailbox_reply_433" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-grey">zr</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>magdalena.windler@jacobi.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>magdalena.windler@jacobi.com</span>
                        </div>
                        <span>Doloribus nihil quae facere quisquam ipsum dolorem non quam.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Laboriosam numquam eum dolores enim sit est quasi quas dolorum possimus et harum consequatur est ducimus consequatur ullam molestiae sed dolores et accusamus asperiores magni natus dolorum voluptatem commodi tenetur quo et aut hic incidunt et aut quia optio ipsum enim deleniti provident accusantium dolore odio vel incidunt cumque ab et cupiditate expedita sed neque odit officia esse architecto culpa incidunt id labore et enim minus aut voluptatum expedita ratione vel nam voluptatem tenetur harum debitis numquam beatae sed sit aut quod ut enim saepe magni aut sunt animi dolores quidem voluptatem velit sit vitae illo quia sed qui officia laudantium beatae eos adipisci doloribus eos itaque deleniti ut et ea rerum maiores ut rerum cum eum assumenda tempore dolores consequatur voluptatibus nulla et eligendi quam eos amet et occaecati nisi eligendi itaque nobis et non nobis nobis et dignissimos nihil accusamus dolorum vero voluptatum modi deserunt porro accusamus unde hic sed doloribus qui enim natus fugit recusandae voluptatum voluptatem cum molestias repellat autem unde necessitatibus veritatis et voluptatem doloribus autem est alias quasi rerum odio facilis reprehenderit enim repudiandae ratione rem porro numquam officia veritatis velit repellat quos hic dicta eligendi consectetur ipsum voluptatem autem cum qui velit facere nostrum blanditiis non aut voluptates aut blanditiis eum est sunt ratione architecto molestiae natus error qui veniam aut eius harum dolor officia et et et ad nostrum adipisci nihil doloribus explicabo tenetur sit ut omnis vitae error est autem repudiandae aliquid sit qui explicabo impedit laudantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_5430">Reply to <span>magdalena.windler@jacobi.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_5430" id="mailbox_reply_5430" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="md-card-list">
            <div class="md-card-list-header heading_list">This Month</div>
            <ul class="hierarchical_slide">
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_01_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>eileen03@blick.net</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>eileen03@blick.net</span>
                        </div>
                        <span>Qui expedita in ad ut.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_1276">Reply to <span>eileen03@blick.net</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_1276" id="mailbox_reply_1276" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_02_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Dr. Christa Kilback</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Dr. Christa Kilback</span>
                        </div>
                        <span>Minima ad culpa quo esse veritatis delectus est.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_1115">Reply to <span>Dr. Christa Kilback</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_1115" id="mailbox_reply_1115" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">12 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_03_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Miss Kacie Zieme</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Miss Kacie Zieme</span>
                        </div>
                        <span>Rerum consequatur quis voluptatum ut praesentium exercitationem.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_96">Reply to <span>Miss Kacie Zieme</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_96" id="mailbox_reply_96" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">10 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>ivy.hegmann@hotmail.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>ivy.hegmann@hotmail.com</span>
                        </div>
                        <span>Quia enim qui veniam voluptatem numquam est.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_102">Reply to <span>ivy.hegmann@hotmail.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_102" id="mailbox_reply_102" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">10 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_07_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Marjory Schaden</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Marjory Schaden</span>
                        </div>
                        <span>Ut facilis harum consequatur sunt consequatur et facere.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_1704">Reply to <span>Marjory Schaden</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_1704" id="mailbox_reply_1704" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">9 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_06_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>blick.garrett@schillerstiedemann.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>blick.garrett@schillerstiedemann.com</span>
                        </div>
                        <span>Asperiores omnis recusandae quae sit.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_417">Reply to <span>blick.garrett@schillerstiedemann.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_417" id="mailbox_reply_417" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">7 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-cyan">yb</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Carlos Rempel</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Carlos Rempel</span>
                        </div>
                        <span>Aspernatur autem fugit ea accusamus et quisquam corrupti et.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2850">Reply to <span>Carlos Rempel</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2850" id="mailbox_reply_2850" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">6 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_05_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Jodie Homenick</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Jodie Homenick</span>
                        </div>
                        <span>Natus qui dolorum reprehenderit.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_736">Reply to <span>Jodie Homenick</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_736" id="mailbox_reply_736" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">5 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Mrs. Kyra Schuppe III</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Mrs. Kyra Schuppe III</span>
                        </div>
                        <span>In voluptas qui veritatis qui molestiae.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2666">Reply to <span>Mrs. Kyra Schuppe III</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2666" id="mailbox_reply_2666" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">5 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_02_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>zrutherford@hotmail.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>zrutherford@hotmail.com</span>
                        </div>
                        <span>Atque officiis minima voluptate nobis quam harum et.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_82">Reply to <span>zrutherford@hotmail.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_82" id="mailbox_reply_82" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">3 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_06_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Angel Okuneva</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Angel Okuneva</span>
                        </div>
                        <span>Laborum dignissimos dolore modi sit ut qui et.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2716">Reply to <span>Angel Okuneva</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2716" id="mailbox_reply_2716" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">2 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-cyan">tz</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>sammy63@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>sammy63@yahoo.com</span>
                        </div>
                        <span>Vitae aut iure et voluptate temporibus nobis rerum.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2550">Reply to <span>sammy63@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2550" id="mailbox_reply_2550" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">2 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Dejon Skiles</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Dejon Skiles</span>
                        </div>
                        <span>Perspiciatis tempore ullam ducimus facere.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_2394">Reply to <span>Dejon Skiles</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_2394" id="mailbox_reply_2394" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">1 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>salvatore95@ferryyost.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>salvatore95@ferryyost.com</span>
                        </div>
                        <span>Enim architecto dignissimos saepe voluptates et perspiciatis molestiae.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_715">Reply to <span>salvatore95@ferryyost.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_715" id="mailbox_reply_715" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">1 Nov</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_01_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>bmohr@stanton.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>bmohr@stanton.com</span>
                        </div>
                        <span>Architecto ad deserunt quibusdam id et incidunt.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_1406">Reply to <span>bmohr@stanton.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_1406" id="mailbox_reply_1406" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="md-card-list">
            <div class="md-card-list-header heading_list">Older Messages</div>
            <ul class="hierarchical_slide">
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">6 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_06_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Isaac Gutkowski</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Isaac Gutkowski</span>
                        </div>
                        <span>Aut ut exercitationem totam expedita.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_299">Reply to <span>Isaac Gutkowski</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_299" id="mailbox_reply_299" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">9 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Mrs. Jada Swaniawski II</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Mrs. Jada Swaniawski II</span>
                        </div>
                        <span>Voluptatem inventore at consequuntur voluptas.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_494">Reply to <span>Mrs. Jada Swaniawski II</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_494" id="mailbox_reply_494" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">16 Jul</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Sebastian Crona III</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Sebastian Crona III</span>
                        </div>
                        <span>Quas atque qui adipisci ea.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_46">Reply to <span>Sebastian Crona III</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_46" id="mailbox_reply_46" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">4 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-light-green">fa</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>swisozk@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>swisozk@yahoo.com</span>
                        </div>
                        <span>Assumenda quis occaecati molestias unde tempora facilis tempora.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_490">Reply to <span>swisozk@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_490" id="mailbox_reply_490" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">3 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Gage Kiehn V</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Gage Kiehn V</span>
                        </div>
                        <span>Voluptates ex culpa est libero.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_621">Reply to <span>Gage Kiehn V</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_621" id="mailbox_reply_621" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">4 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_10_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Mr. Orlando Ritchie DVM</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Mr. Orlando Ritchie DVM</span>
                        </div>
                        <span>Laborum voluptas voluptatem optio animi harum nobis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_498">Reply to <span>Mr. Orlando Ritchie DVM</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_498" id="mailbox_reply_498" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">3 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_07_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Macey Boehm</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Macey Boehm</span>
                        </div>
                        <span>Eos magni molestiae ducimus ut impedit velit.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_894">Reply to <span>Macey Boehm</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_894" id="mailbox_reply_894" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">8 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_03_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Osborne Gulgowski</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Osborne Gulgowski</span>
                        </div>
                        <span>Eos nam tempora inventore assumenda unde nihil et aut.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_677">Reply to <span>Osborne Gulgowski</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_677" id="mailbox_reply_677" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">7 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Prof. Cletus Simonis</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Prof. Cletus Simonis</span>
                        </div>
                        <span>A dicta quia dolore dolor harum quia.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_73">Reply to <span>Prof. Cletus Simonis</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_73" id="mailbox_reply_73" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">18 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_03_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>bogisich.vergie@hotmail.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>bogisich.vergie@hotmail.com</span>
                        </div>
                        <span>Ipsum laboriosam et enim eos voluptatem blanditiis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_851">Reply to <span>bogisich.vergie@hotmail.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_851" id="mailbox_reply_851" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">2 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_06_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Bettie Gulgowski</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Bettie Gulgowski</span>
                        </div>
                        <span>Odio quos quis sed suscipit asperiores rerum reiciendis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_613">Reply to <span>Bettie Gulgowski</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_613" id="mailbox_reply_613" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">24 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_05_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>bria23@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>bria23@yahoo.com</span>
                        </div>
                        <span>Qui fugiat sed ut est ut.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_135">Reply to <span>bria23@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_135" id="mailbox_reply_135" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">3 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-cyan">wt</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Dr. Liliane Breitenberg</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Dr. Liliane Breitenberg</span>
                        </div>
                        <span>Consequatur ratione est qui est et aut.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_436">Reply to <span>Dr. Liliane Breitenberg</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_436" id="mailbox_reply_436" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">18 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Buster Runolfsson</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Buster Runolfsson</span>
                        </div>
                        <span>Occaecati sequi voluptatem consequatur dolores et porro dolor.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_370">Reply to <span>Buster Runolfsson</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_370" id="mailbox_reply_370" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">29 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>uhickle@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>uhickle@yahoo.com</span>
                        </div>
                        <span>Nostrum illo optio nesciunt voluptatem deleniti.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_319">Reply to <span>uhickle@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_319" id="mailbox_reply_319" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">4 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_06_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>vcollier@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>vcollier@yahoo.com</span>
                        </div>
                        <span>In assumenda fuga impedit quos.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_227">Reply to <span>vcollier@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_227" id="mailbox_reply_227" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">11 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_01_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>wbotsford@skiles.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>wbotsford@skiles.com</span>
                        </div>
                        <span>Ipsa commodi qui expedita dolor dolor iusto repudiandae.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_814">Reply to <span>wbotsford@skiles.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_814" id="mailbox_reply_814" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">23 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>yundt.raina@pollich.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>yundt.raina@pollich.com</span>
                        </div>
                        <span>Unde at assumenda et voluptas temporibus.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_72">Reply to <span>yundt.raina@pollich.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_72" id="mailbox_reply_72" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">19 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_06_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>ayla66@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>ayla66@yahoo.com</span>
                        </div>
                        <span>Nisi voluptatibus voluptatum et fugiat ducimus.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_868">Reply to <span>ayla66@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_868" id="mailbox_reply_868" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">7 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-light-green">mp</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Archibald Gaylord</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Archibald Gaylord</span>
                        </div>
                        <span>Nulla magnam reiciendis alias non omnis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_498">Reply to <span>Archibald Gaylord</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_498" id="mailbox_reply_498" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">19 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_07_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>Janick Koelpin</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>Janick Koelpin</span>
                        </div>
                        <span>Quo reprehenderit vel perferendis omnis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_318">Reply to <span>Janick Koelpin</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_318" id="mailbox_reply_318" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">6 Oct</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-cyan">bo</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>xharvey@cassin.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>xharvey@cassin.com</span>
                        </div>
                        <span>Placeat ut deleniti esse ut beatae reprehenderit fuga.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_92">Reply to <span>xharvey@cassin.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_92" id="mailbox_reply_92" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">6 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_10_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>nfarrell@davis.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>nfarrell@davis.com</span>
                        </div>
                        <span>Blanditiis consequatur exercitationem reiciendis unde quidem sint ut aliquid.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Sit error autem occaecati delectus aut est nobis ipsa commodi qui aut ex voluptatem inventore soluta laudantium autem est modi expedita vel incidunt assumenda molestiae et laborum amet fugit voluptas est nobis vitae nemo voluptate harum sit totam fugiat mollitia aut quam consequatur rerum possimus et natus quod aliquid ipsa reiciendis commodi et omnis adipisci facilis debitis aut hic accusamus aut neque aut reprehenderit tenetur odit error recusandae similique voluptatem ut animi omnis eveniet et omnis consectetur nihil mollitia illum repellat incidunt ea quas aut molestiae ea rerum officiis debitis rerum quo quisquam eum molestiae ipsa perferendis sequi sit est voluptatibus maxime nihil distinctio quaerat omnis qui qui nesciunt accusantium aspernatur at ex minima voluptatem placeat et iusto laudantium aut omnis sed perferendis porro ab repellat consequatur molestias consequatur repellendus quo fugiat explicabo sed nulla dolorum iusto est delectus impedit et molestias qui nam quis ducimus ea sed voluptates eos magni optio error eius illum non est eos aliquid quasi occaecati ut vero impedit optio et quia praesentium provident tenetur quia at quibusdam aspernatur ullam et ut nostrum quasi enim odio delectus aperiam aut explicabo porro fuga tenetur ut quia molestias necessitatibus nulla libero soluta quia aut quis nisi facilis consequatur distinctio deserunt tempore beatae provident dicta libero molestias labore dolores ut doloribus vero beatae sit est quis aperiam ut corporis velit maxime quas qui non cumque aut quis vel et aperiam nobis velit quasi minima ad cupiditate quisquam aspernatur libero rerum adipisci et harum perferendis autem voluptatem nisi eligendi culpa sed fuga est dolore quos molestiae nihil quas doloribus totam ab libero accusantium placeat harum minima quia eos qui reprehenderit qui tempore sed praesentium voluptatem quis mollitia dolorem aut dolores rerum voluptatem ratione quo tempore vero commodi vel totam voluptas minima vel delectus facere magnam incidunt eos id sed cupiditate eaque possimus reprehenderit quia vero omnis aliquam animi aut molestias commodi voluptatem exercitationem sed ut illum ex ullam dolor eos eum quos doloribus aspernatur quis eveniet non et non adipisci reiciendis enim amet quae eaque et est deserunt aut illo occaecati aut vel eligendi natus est hic quisquam voluptatem in amet quia quaerat voluptatum hic eius aliquam aut deleniti aspernatur et deserunt corrupti exercitationem voluptates.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_657">Reply to <span>nfarrell@davis.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_657" id="mailbox_reply_657" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">3 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-light-green">dk</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>zolson@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>zolson@yahoo.com</span>
                        </div>
                        <span>Corporis id velit quia minus commodi sunt est perspiciatis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Autem et in qui natus repudiandae molestiae doloribus necessitatibus aut ea repudiandae voluptas voluptas molestiae odit assumenda et rem corrupti quia sunt in ut qui ipsam maiores officiis sapiente iusto et dolor consequatur et eius fugit possimus dignissimos sapiente deserunt perferendis voluptatem molestiae architecto eum accusamus omnis.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_831">Reply to <span>zolson@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_831" id="mailbox_reply_831" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">17 Jul</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-light-green">qy</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>mariah49@hoppe.net</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>mariah49@hoppe.net</span>
                        </div>
                        <span>Magnam aut est similique sint.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_872">Reply to <span>mariah49@hoppe.net</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_872" id="mailbox_reply_872" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">24 Sep</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_08_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>bhuel@cassin.org</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>bhuel@cassin.org</span>
                        </div>
                        <span>Rerum id exercitationem in ex dolor ullam.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_796">Reply to <span>bhuel@cassin.org</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_796" id="mailbox_reply_796" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">11 Aug</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <img src="{{ asset('theme/assets/img/avatars/avatar_04_tn.png') }}" class="md-card-list-item-avatar" alt="" />
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>graciela12@yahoo.com</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>graciela12@yahoo.com</span>
                        </div>
                        <span>Officia magnam cumque dolores deleniti sed consequatur.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Facere eos eos voluptas accusantium asperiores vel debitis nihil in pariatur illum rem eius sunt aut ex suscipit culpa et debitis perferendis magnam perferendis maxime et sit dignissimos voluptatum est quia facilis doloribus numquam non quo architecto quo vel vero debitis cum a autem vel dolores ullam et debitis ad rerum sunt et inventore est facere explicabo consequatur non nesciunt perferendis quos debitis quia et error sunt iure quam accusantium iusto eius aliquid quas numquam iste consequatur rem qui cum id dolor quas voluptatem reprehenderit dolores minima deserunt error aliquid et blanditiis enim placeat est rerum non omnis nulla vitae voluptatem est animi dolorum accusantium excepturi voluptates iusto veniam quaerat hic ex porro deserunt omnis soluta enim temporibus porro et vel quis aperiam sed est tempore eos est rerum quo enim esse quo ratione consequatur et animi optio sunt sit asperiores dolorum quis enim vel dolores aliquid omnis natus ratione fugit.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_986">Reply to <span>graciela12@yahoo.com</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_986" id="mailbox_reply_986" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="md-card-list-item-date">28 Jul</span>
                    <div class="md-card-list-item-select">
                        <input type="checkbox" data-md-icheck />
                    </div>
                    <div class="md-card-list-item-avatar-wrapper">
                        <span class="md-card-list-item-avatar md-bg-cyan">jr</span>
                    </div>
                    <div class="md-card-list-item-sender">
                        <span>heathcote.brooke@kuhic.net</span>
                    </div>
                    <div class="md-card-list-item-subject">
                        <div class="md-card-list-item-sender-small">
                            <span>heathcote.brooke@kuhic.net</span>
                        </div>
                        <span>Ipsum aut enim facilis.</span>
                    </div>
                    <div class="md-card-list-item-content-wrapper">
                        <div class="md-card-list-item-content">
                            Magnam et rerum itaque aut accusantium non velit voluptas aut veniam cupiditate fugiat fuga necessitatibus facilis et accusamus nihil sit cumque consequuntur consequuntur aspernatur dolorum minus et dolorem voluptatem molestiae est possimus illum commodi voluptatem possimus qui nobis nemo veniam voluptatem id aut quod eos reprehenderit voluptatum nostrum quo suscipit aut veniam nobis repellendus facilis temporibus et qui eius non quod repellendus beatae autem est modi voluptas molestiae et architecto laboriosam excepturi ut libero aperiam facilis delectus eius odit quidem maxime earum accusamus magnam ut sunt est saepe aspernatur corrupti eaque vel quo omnis fuga quia illo qui doloribus perspiciatis aut sit veritatis id dolorem accusamus corporis quo consectetur eos dolore voluptatem accusamus ex voluptas maxime ipsam accusantium.                                    </div>
                        <form class="md-card-list-item-reply">
                            <label for="mailbox_reply_598">Reply to <span>heathcote.brooke@kuhic.net</span></label>
                            <textarea class="md-input md-input-full" name="mailbox_reply_598" id="mailbox_reply_598" cols="30" rows="4"></textarea>
                            <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('theme/assets/js/pages/page_mailbox.min.js') }}"></script>
@endsection