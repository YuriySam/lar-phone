  <!-- Sidebar Menu -->
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-header">Аміністрування</li>

          


          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-phone-square"></i>
                  <p>Телефонний довідник (Ophone)
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.ophone.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-phone-volume"></i>
                            <p>Ophone</p>
                      </a>
                  </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.office.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> <b>Office (multi)</b></p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.branch.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Branch</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.func.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Func</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.message.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Message</p>
                      </a>
                  </li>
                   <li class="nav-item">
                      <a href="{{ route('admin.street.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Address street</p>
                      </a>
                  </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.numerology.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Numerology</p>
                      </a>
                  </li>
                  
                    <li class="nav-item">
                      <a href="{{ route('admin.numerology.calculate') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Calculate</p>
                      </a>
                  </li>
                 
                  

                  <li class="nav-item">
                      <a href="{{ route('admin.ophone.birthday') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Birthday</p>
                      </a>
                  </li>


              </ul>
          </li>



          


          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                      Posts
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('admin.post.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Post</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.category.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Category</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.category.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tags</p>
                      </a>
                  </li>
                  
              </ul>
          </li>


<li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                      Листи Накази
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('admin.post.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Листи Накази</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.category.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Категорія</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.type_docum.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>type_docum</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.question_docum.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Порушені питання тип (question_docum)</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.office.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> <b>Office (multi)</b></p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.amount_docum.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>amount_docum</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.content_resolution.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution)</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.ophone.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p><b>Автор резолюції (avtor_resolutions) (multi)</b></p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('admin.title_implementation.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Результат розгляду (title_implementation_id)</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.validity.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Обгрунтованість (validity)</p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('admin.category.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Термін виконання сьогодні</p>
                      </a>
                  </li>
              </ul>
          </li>


          <li class="nav-header">Загальні питання</li>
          
          
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Про це</p>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.sidebar-menu -->
