<?php
    return [
        'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
        'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
        'select' => '<select name="{{name}}" class="form-control" {{attrs}}>{{content}}</select>',
        'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
        'button' => '<button class="btn btn-primary" {{attrs}}>{{text}}</button>',
        'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
    ];