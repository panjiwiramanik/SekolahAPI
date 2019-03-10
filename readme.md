# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Api Route

Base Url = https://sekolahapi.derazu.tech/

1. Kelas

| Type | Link | Info | 
|------|------|------|
| get | kelas' | get all kelas data |
| get | kelas/{id} | get detail kelas data based on id |
| post | kelas/add | add kelas data, param: nama_kelas, jurusan |
| post | kelas/{id} | edit kelas data based on kelas id, param: nama_kelas, jurusan |
| delete | kelas/{id} | delete kelas data based on kelas id |

2. Siswa

| Type | Link | Info | 
|------|------|------|
| get | siswa' | get all siswa data |
| get | siswa/{id} | get detail siswa data based on id |
| post | siswa/add | add kelas data, param: nis, nama_lengkap, jenis_kelamin, alamat |
| post | siswa/{id} | edit siswa data based on siswa id, param: nis, nama_lengkap, jenis_kelamin, alamat |
| delete | siswa/{id} | delete siswa data based on siswa id |

## Authors

* **M. Panji Wiramanik** - (https://github.com/panjiwiramanik)