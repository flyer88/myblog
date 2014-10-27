
  <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix" role="complementary">
                         <ul class="nav bs-docs-sidenav">
                                             <li class="active">
                                                 <a href={{ route ('admin') }}>所有文章</a>
                                            </li>
                                            <li class="">
                                                <a href={{ route('admin.article.type.name','php') }}>PHP</a>
                                            </li>
                                              <li class="">
                                                <a href={{ route('admin.article.type.name','laravel') }}>Laravel</a>
                                            </li>
                                             <li class="">
                                                <a href={{ route('admin.article.type.name','ubuntu') }}>Ubuntu</a>
                                            </li>
                                             <li class="">
                                                <a href={{ route('admin.article.type.name','java') }}>Java</a>
                                            </li>
                                         
                                             <li>
                                                <a  href="{{ route('admin.logout') }}" >登出</a>
                                             </li>
                                             <li>
                                                 <a  href="{{ route('admin.article.add') }}" >添加文章</a>
                                            </li>           
                                               <li> 
                                                <a class="back-to-top" href="#top" style=" text-align:center">返回顶部</a>
                                             </li>                
                         </ul>

                            
                        </div> 