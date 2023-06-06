      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                  <li><a><i class="fa fa-language" aria-hidden="true"></i> Language <span
                              class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="{{ route('system_languages.create') }}">Add new language</a></li>
                          <li><a href="{{ route('system_languages.index') }}">Languages</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa fa-cubes" aria-hidden="true"></i> Our Service <span
                              class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="{{ route('ourservice.index') }}">Our Services</a></li>
                          <li><a href="{{ route('ourservice.create') }}">Add New Our Services</a></li>
                      </ul>
                  </li>

                  <li><a><i class="fa fa-cubes" aria-hidden="true"></i> Our Service Translate <span
                              class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                          @foreach ($ourservice_items as $ourservice_item)
                              <li><a
                                      href="{{ route('ourservice.show', $ourservice_item->id) }}">{{ $ourservice_item->description }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </li>

                  <li><a><i class="fa-solid fa-hands-holding-circle" style="margin-right: 10px;"></i> Best Value <span
                              class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="{{ route('bestvalue.index') }}">Best Values</a></li>
                          <li><a href="{{ route('bestvalue.create') }}">Add New Best Value</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa-solid fa-hands-holding-circle" style="margin-right: 10px;"></i> Best Value
                          Translate <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          @foreach ($bestvalue_items as $bestvalue_item)
                              <li><a
                                      href="{{ route('bestvalue.show', $bestvalue_item->id) }}">{{ $bestvalue_item->description }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="menu_section">
              <h3>Static Contents</h3>
              <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Static Images&Contents <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="{{ route('staticcontent.about_image.index') }}">About Images</a></li>
                          <li><a href="{{ route('heroimage.create') }}">Hero Image </a></li>

                          @if ($staticContent)
                              <li><a href="{{ route('staticcontent.about_content.index') }}">About Content
                                      Translate</a>
                              <li><a href="{{ route('staticcontent.taglineimage.index') }}">Tagline Image
                                  </a>
                              <li><a href="{{ route('staticcontent.tagline.index') }}">Tagline Content
                                      Translate</a>
                          @endif
                  </li>
              </ul>

              </li>
              <li><a><i class="fa-solid fa-gear fa-xl mr-2"></i> Options <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{ route('generalsettings.create') }}">General Setting</a></li>
                      <li><a href="{{ route('socialmedia.create') }}"> Add Social Media Link</a></li>
                      <li><a href="{{ route('maintain.create') }}">Maintain The Web Site</a></li>
                      <li><a href="{{ route('socialmedia.index') }}"> Social Media Link</a></li>
                  </ul>
              </li>
              <li><a><i class="fa-regular fa-image fa-xl mr-2"></i> Logo <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{ route('logo.create') }}">Level One</a></li>
                  </ul>
              </li>
          </div>

      </div>
      <!-- /sidebar menu -->
