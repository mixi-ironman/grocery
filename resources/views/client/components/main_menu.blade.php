<div class="sub-menu-category">
    <ul class="menu-list">
        @foreach($categoryList as $index => $categoryParent)
        <li class="menu-item">
            <a href="" class="menu-item-link menu-item-link_hover" style="display:flex;justify-content:space-between">
                    <span style="display:block;flex:1;height:100%;width:100%;font-size:18px;padding: 8px 10px;">{{ $categoryParent->name }}</span>
                @if($categoryParent->childrentCategory->count())
                    <span style="font-size:16px;font-weight:bold;color:black;margin-left:10px"><i class="fa-solid fa-water"></i></span>
                @endif
            </a

            >
            <!-- sub-item -->
            @if($categoryParent->childrentCategory->count())
            <div class="sub-menu-item">
                <ul class="menu-list menu-sub-list">
                    @foreach($categoryParent->childrentCategory as $index => $categoryChild)
                    <li class="menu-sub-item">
                        <a href="" class="menu-sub-item_link">{{ $categoryChild->name }}</a>
                    </li>
                    @endforeach
                   
                </ul>
            </div>
            @endif
        </li>
        @endforeach
    </ul>
</div>