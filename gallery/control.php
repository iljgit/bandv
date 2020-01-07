<?php

function getGalleryIndex() {
    global $gallery;

    $ret = $_GET['index'];
    if (!$ret || strlen($ret) === 0) {
        $ret = 'recent';
    }

    return $ret;
}

function getGalleryBlogs() {
    global $gallery;

    $ret = [];

    foreach ($gallery as $key => $g) {

        $ret[] = (object) [
            "title" => $g->title,
            "excerpt" => $g->excerpt,
            "category" => "Gallery",
            "date" => $g->date,
            "image" => "/assets/img/gallery/{$key}/{$g->banner}",
            "link" => "/gallery.php?index={$key}",
            "active" => $g->active
        ];
    }

    return $ret;
}

function getAlbums() {
    $blogs = getGalleryBlogs();
    $op = "";
    $count = 0;
    $found = true;
    $first = true;
    $year = 0;

    // add a timestamp field for sorting
    foreach ($blogs as $blog) {
        $blog->timestamp = strtotime($blog->date);
        $blog->year = date('Y', $blog->timestamp);
    }

    //$timestamp = array_column($blogs, 'timestamp');
    $timestamp = array_map(function($e) {
        return is_object($e) ? $e->timestamp : $e['timestamp'];
    }, $blogs);
    array_multisort($timestamp, SORT_DESC, SORT_NUMERIC, $blogs);

    $selectors = "";

    // process
    foreach ($blogs as $blog) {
        if ($year !== $blog->year) {
            if ($first) {
                $first = false;
            }
            else {
                $op .= '</div>';
            }

            $op .= "<div class='row albums' id='{$blog->year}'><div class='col-12'><h2><i class='far fa-calendar-alt'></i>&nbsp;{$blog->year}</h2></div>";
            $year = $blog->year;

            $selectors .= "<a href='#{$blog->year}'><button class='btn btn-success'>{$blog->year}</button></a>&nbsp;&nbsp;";
        }

        $time = strtotime($blog->date);
        $date = date('01-M-Y', $time);
        $display = 'flex';

        $authordate = "<span class='byline'>{$blog->date}</span>";

        $link = $blog->link;
        $link .= strpos($link, '?') ? '&' : '?';
        $link .= "back=blog.php";

        $cClass = strtolower($blog->category);
        
        $op .=  "<div class='col-12 col-sm-6 col-md-4 blog-summary-card' category='{$blog->category}' date='{$date}' epoch='{$time}' style='display: {$display};'>
                    <div class='card {$cClass}'>
                        <div class='card-header' style='background-image: url({$blog->image})'><div class='background'>{$blog->title}</div></div>
                        <div class='card-body'><p>{$blog->excerpt}</p><p>{$authordate}</p></div>
                        <div class='card-footer'><a href='{$link}' class='btn btn-success stretched-link'>Open</a></div>
                    </div>
                </div>";

        $count += 1;

    }

    $op .= '</div>';

    $op = "<div class='row albums'><div class='col-12'>{$selectors}</div></div>{$op}";

    return $op;
}

function getGallery() {
    global $gallery;

    $index = getGalleryIndex();

    $dir = "/assets/img/gallery/{$index}";

    return getCarousel($dir);
}

function getGalleryBanner() {
    global $gallery;

    $index = getGalleryIndex();
    $g = $gallery->$index;

    return "/assets/img/gallery/{$index}/{$g->banner}";
}

function getGalleryTitle() {
    global $gallery;

    $index = getGalleryIndex();
    $g = $gallery->$index;

    return $g->title;
}

function getGalleryBody() {
    global $gallery;

    $index = getGalleryIndex();
    $g = $gallery->$index;

    return $g->body;
}

?>