# package composer.json
```
{
    "name": "dimitricasierhowest/laravel-package",
    "authors": [
        {
            "name": "Dimiri Casier",
            "email": "dimitri.casier@howest.be"
        }
    ],
    "require": {},
    "autoload": {
        "psr-4": {
            "Dimitricasierhowest\\LaravelPackage\\": "src/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Dimitricasierhowest\\LaravelPackage\\LaravelPackageServiceProvider"
            ]
        }
    }
}
```

# laravel composer.json
```
"require": {
        ...
        "dimitricasierhowest/laravel-package": "dev-develop",
        ...
    },
    
...

"repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:dimitricasierhowest/laravel-package.git"
        }
    ]
...
```