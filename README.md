<h1 align="center">Unique Identifier</h1>

This package provides unique identifier for Lumen and Laravel.

Getting Started
---

Installation :

```
$ composer require tripteki/laravelphp-unique
```

How to use it :

- Put `Tripteki\Uid\Traits\UniqueIdTrait` to target model.

- Put `TargetModel::observe(\Tripteki\Uid\Observers\UniqueIdObserver::class)` in provider.

Author
---

- Trip Teknologi ([@tripteki](https://linkedin.com/company/tripteki))
- Hasby Maulana ([@hsbmaulana](https://linkedin.com/in/hsbmaulana))
