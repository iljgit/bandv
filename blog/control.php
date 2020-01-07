<?php

function getAllBlogs() {
    global $blogs;

    //return array_merge($blogs, getGalleryBlogs());
    return $blogs;
}

function getBackLink() {
    $back = 'blog.php';
    if ($_GET['back']) {
        $back = $_GET['back'];
    }

    $back = urldecode($back);

    return $back;
}

function getBlogObject() {
    $blogs = getAllBlogs();
    $op = "let blogs = [";
    $delim = "";

    // add a timestamp field for sorting
    foreach ($blogs as $blog) {
        $blog->timestamp = strtotime($blog->date);
    }

    $timestamp = array_column($blogs, 'timestamp');
    array_multisort($timestamp, SORT_DESC, $blogs);

    foreach ($blogs as $blog) {
        $op .= $delim . "{";
        $delim = ",";

        foreach($blog as $key => $value) {
            $op .= $key . ': "' . $value . '"';
        }
        
        $op .= "}";
    }

    $op .= "]";

    return $op;
}

function getCriteria() {
    $criteria = (object)[
        'date' => 'all',
        'category' => 'all'
    ];

    if ($_GET['date']) {
        $criteria->date = $_GET['date'];
    }

    if ($_GET['category']) {
        $criteria->category = $_GET['category'];
    }

    return $criteria;
}

function getBlogs() {
    $blogs = getAllBlogs();
    $op = "";
    $count = 0;
    $found = false;

    $criteria = getCriteria();

    // add a timestamp field for sorting
    foreach ($blogs as $blog) {
        $blog->timestamp = strtotime($blog->date);
    }

    $timestamp = array_map(function($e) {
        return is_object($e) ? $e->timestamp : $e['timestamp'];
    }, $blogs);
    array_multisort($timestamp, SORT_DESC, $blogs);

    foreach ($blogs as $blog) {
        $time = strtotime($blog->date);
        $date = date('01-M-Y', $time);
        $display = 'flex';

        if (!$blog->active || strtotime($blog->date) > time()) {
            $display = 'none';
        }
        
        if ($criteria->date !== 'all' && $date !== $criteria->date) {
            $display = 'none';
        }

        if ($criteria->category !== 'all' && $criteria->category !== $blog->category) {
            $display = 'none';
        }

        if ($display === 'flex') {
            $found = true;
        }

        $authordate = "";
        if ($blog->author && $blog->date) {
            $authordate = "{$blog->author}, {$blog->date}";
        }
        else if ($blog->author) {
            $authordate = "{$blog->author}";
        }
        else if ($blog->date) {
            $authordate = "{$blog->date}";
        }

        if ($authordate) {
            $authordate = "<span class='byline'>{$authordate}</span>";
        }

        $link = $blog->link;
        $link .= strpos($link, '?') ? '&' : '?';
        $link .= "back=blog.php";

        $cClass = strtolower($blog->category);
        
        $op .=  "<div class='col-12 col-sm-6 col-md-4 blog-summary-card' category='{$blog->category}' date='{$date}' epoch='{$time}' style='display: {$display};'>
                    <div class='card {$cClass}'>
                        <div class='card-header' style='background-image: url({$blog->image})'><div class='background'>{$blog->title}</div></div>
                        <div class='card-body'><p>{$blog->excerpt}</p><p>{$authordate}</p></div>
                        <div class='card-footer'><a href='{$link}' class='btn btn-success stretched-link'>Read</a><span class='category {$cClass}'>{$blog->category}</span></div>
                    </div>
                </div>";

        $count += 1;

    }

    $display = $found ? 'none' : 'block';
    $notFound = "<div class='col-12' style='display: {$display};' id='notfound'>No matching blogs found</div>";
    return $notFound . $op;
}

function getBlogCategoryList() {
    $blogs = getAllBlogs();
    (object) $cats = [];

    $criteria = getCriteria();

    foreach ($blogs as $blog) {
        if (!$blog->active || strtotime($blog->date) > time()) {
            continue;
        }

        $cats[$blog->category] = true;
    }

    // convert the object to an array
    $catsArray = [];
    foreach ($cats as $key => $value) {
        $catsArray[] = $key;
    }

    // sort it
    sort($catsArray);

    // return the options
    $op = "<option value='all'>All</option>";
    foreach ($catsArray as $cat) {
        $op .= "<option value='{$cat}'>{$cat}</option>";
    }

    return $op;    
}

function getBlogDateList() {
    $blogs = getAllBlogs();
    $criteria = getCriteria();

    (object) $dates = [];
    foreach ($blogs as $blog) {
        if (!$blog->active || strtotime($blog->date) > time()) {
            continue;
        }

        $date = $blog->date;
        $time = strtotime($date);
        $month = date('01-M-Y',$time);
        $dates[$month] = true;
    }

    // convert the object to an array
    $datesArray = [];
    foreach ($dates as $key => $value) {
        $datesArray[] = strtotime($key);
    }

    // sort it
    rsort($datesArray);

    // return the options
    $selected = $criteria->date === 'all' ? 'selected' : '';
    $allOp = "<option value='all' {$selected}>All</option>";

    $op = $allOp . $recentOp;
    foreach ($datesArray as $date) {
        $selected = $criteria->date === date('01-M-Y',$date) ? 'selected' : '';
        $op .= "<option value='" . date('01-M-Y',$date) . "' {$selected}>" . date('F Y', $date) . "</option>";
    }

    return $op;
    
}
?>