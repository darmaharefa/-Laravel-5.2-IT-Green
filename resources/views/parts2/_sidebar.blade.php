 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php url("") ?>/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                 <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#jenistanaman"><i class="fa fa-fw fa-pagelines"></i> Jenis Tanaman <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="jenistanaman" class="collapse">
                        <li>
                            <a href="/dashboard/jenis/1">Tanaman Bunga</a>
                        </li>
                        <li>
                            <a href="/dashboard/jenis/2">Tanaman Daun</a>
                        </li>
                        <li>
                            <a href="/dashboard/jenis/3">Tanaman Pohon</a>
                        </li>
                         <li>
                            <a href="/dashboard/jenis/create">Tambah Tanaman</a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#solusitanaman"><i class="fa fa-fw fa-lightbulb-o"></i> Solusi <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="solusitanaman" class="collapse">
                        <li>
                            <a href="/dashboard/solusi/1">Hama</a>
                        </li>
                        <li>
                            <a href="/dashboard/solusi/2">Pertumbuhan</a>
                        </li>
                         <li>
                            <a href="/dashboard/solusi/create">Tambah Solusi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#tips"><i class="fa fa-fw fa-flask"></i> Tips <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="tips" class="collapse">
                        <li>
                            <a href="/dashboard/tips">Cara dan Tips</a>
                        </li>
                         <li>
                            <a href="/dashboard/tips/create">Tambah Tips</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>