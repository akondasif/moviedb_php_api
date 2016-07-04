<?php
return array(
    'router' => array(
        'routes' => array(
            'movie-db.rest.actor' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/actor[/:actor_id]',
                    'defaults' => array(
                        'controller' => 'MovieDB\\V1\\Rest\\Actor\\Controller',
                    ),
                ),
            ),
            'movie-db.rest.category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/category[/:category_id]',
                    'defaults' => array(
                        'controller' => 'MovieDB\\V1\\Rest\\Category\\Controller',
                    ),
                ),
            ),
            'movie-db.rest.film' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/film[/:film_id]',
                    'defaults' => array(
                        'controller' => 'MovieDB\\V1\\Rest\\Film\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'movie-db.rest.actor',
            1 => 'movie-db.rest.category',
            2 => 'movie-db.rest.film',
        ),
    ),
    'zf-rest' => array(
        'MovieDB\\V1\\Rest\\Actor\\Controller' => array(
            'listener' => 'MovieDB\\V1\\Rest\\Actor\\ActorResource',
            'route_name' => 'movie-db.rest.actor',
            'route_identifier_name' => 'actor_id',
            'collection_name' => 'actor',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'MovieDB\\V1\\Rest\\Actor\\ActorEntity',
            'collection_class' => 'MovieDB\\V1\\Rest\\Actor\\ActorCollection',
            'service_name' => 'actor',
        ),
        'MovieDB\\V1\\Rest\\Category\\Controller' => array(
            'listener' => 'MovieDB\\V1\\Rest\\Category\\CategoryResource',
            'route_name' => 'movie-db.rest.category',
            'route_identifier_name' => 'category_id',
            'collection_name' => 'category',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'MovieDB\\V1\\Rest\\Category\\CategoryEntity',
            'collection_class' => 'MovieDB\\V1\\Rest\\Category\\CategoryCollection',
            'service_name' => 'category',
        ),
        'MovieDB\\V1\\Rest\\Film\\Controller' => array(
            'listener' => 'MovieDB\\V1\\Rest\\Film\\FilmResource',
            'route_name' => 'movie-db.rest.film',
            'route_identifier_name' => 'film_id',
            'collection_name' => 'film',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'MovieDB\\V1\\Rest\\Film\\FilmEntity',
            'collection_class' => 'MovieDB\\V1\\Rest\\Film\\FilmCollection',
            'service_name' => 'film',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'MovieDB\\V1\\Rest\\Actor\\Controller' => 'HalJson',
            'MovieDB\\V1\\Rest\\Category\\Controller' => 'HalJson',
            'MovieDB\\V1\\Rest\\Film\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'MovieDB\\V1\\Rest\\Actor\\Controller' => array(
                0 => 'application/vnd.movie-db.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'MovieDB\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.movie-db.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'MovieDB\\V1\\Rest\\Film\\Controller' => array(
                0 => 'application/vnd.movie-db.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'MovieDB\\V1\\Rest\\Actor\\Controller' => array(
                0 => 'application/vnd.movie-db.v1+json',
                1 => 'application/json',
            ),
            'MovieDB\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.movie-db.v1+json',
                1 => 'application/json',
            ),
            'MovieDB\\V1\\Rest\\Film\\Controller' => array(
                0 => 'application/vnd.movie-db.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'MovieDB\\V1\\Rest\\Actor\\ActorEntity' => array(
                'entity_identifier_name' => 'actor_id',
                'route_name' => 'movie-db.rest.actor',
                'route_identifier_name' => 'actor_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'MovieDB\\V1\\Rest\\Actor\\ActorCollection' => array(
                'entity_identifier_name' => 'actor_id',
                'route_name' => 'movie-db.rest.actor',
                'route_identifier_name' => 'actor_id',
                'is_collection' => true,
            ),
            'MovieDB\\V1\\Rest\\Category\\CategoryEntity' => array(
                'entity_identifier_name' => 'category_id',
                'route_name' => 'movie-db.rest.category',
                'route_identifier_name' => 'category_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'MovieDB\\V1\\Rest\\Category\\CategoryCollection' => array(
                'entity_identifier_name' => 'category_id',
                'route_name' => 'movie-db.rest.category',
                'route_identifier_name' => 'category_id',
                'is_collection' => true,
            ),
            'MovieDB\\V1\\Rest\\Film\\FilmEntity' => array(
                'entity_identifier_name' => 'film_id',
                'route_name' => 'movie-db.rest.film',
                'route_identifier_name' => 'film_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'MovieDB\\V1\\Rest\\Film\\FilmCollection' => array(
                'entity_identifier_name' => 'film_id',
                'route_name' => 'movie-db.rest.film',
                'route_identifier_name' => 'film_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'MovieDB\\V1\\Rest\\Actor\\ActorResource' => array(
                'adapter_name' => 'moviedb-docker',
                'table_name' => 'actor',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'MovieDB\\V1\\Rest\\Actor\\Controller',
                'entity_identifier_name' => 'actor_id',
                'table_service' => 'MovieDB\\V1\\Rest\\Actor\\ActorResource\\Table',
            ),
            'MovieDB\\V1\\Rest\\Category\\CategoryResource' => array(
                'adapter_name' => 'moviedb-docker',
                'table_name' => 'category',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'MovieDB\\V1\\Rest\\Category\\Controller',
                'entity_identifier_name' => 'category_id',
                'table_service' => 'MovieDB\\V1\\Rest\\Category\\CategoryResource\\Table',
            ),
            'MovieDB\\V1\\Rest\\Film\\FilmResource' => array(
                'adapter_name' => 'moviedb-docker',
                'table_name' => 'film',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'MovieDB\\V1\\Rest\\Film\\Controller',
                'entity_identifier_name' => 'film_id',
                'table_service' => 'MovieDB\\V1\\Rest\\Film\\FilmResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'MovieDB\\V1\\Rest\\Actor\\Controller' => array(
            'input_filter' => 'MovieDB\\V1\\Rest\\Actor\\Validator',
        ),
        'MovieDB\\V1\\Rest\\Category\\Controller' => array(
            'input_filter' => 'MovieDB\\V1\\Rest\\Category\\Validator',
        ),
        'MovieDB\\V1\\Rest\\Film\\Controller' => array(
            'input_filter' => 'MovieDB\\V1\\Rest\\Film\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'MovieDB\\V1\\Rest\\Actor\\Validator' => array(
            0 => array(
                'name' => 'first_name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'last_name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'last_update',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'MovieDB\\V1\\Rest\\Category\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '25',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'last_update',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'MovieDB\\V1\\Rest\\Film\\Validator' => array(
            0 => array(
                'name' => 'title',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'description',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'release_year',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'language_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'moviedb-docker',
                            'table' => 'language',
                            'field' => 'language_id',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'original_language_id',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'moviedb-docker',
                            'table' => 'language',
                            'field' => 'language_id',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'rental_duration',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            6 => array(
                'name' => 'rental_rate',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            7 => array(
                'name' => 'length',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            8 => array(
                'name' => 'replacement_cost',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            9 => array(
                'name' => 'rating',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            10 => array(
                'name' => 'special_features',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            11 => array(
                'name' => 'last_update',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'MovieDB\\V1\\Rest\\Actor\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
            'MovieDB\\V1\\Rest\\Category\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
            'MovieDB\\V1\\Rest\\Film\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
);
