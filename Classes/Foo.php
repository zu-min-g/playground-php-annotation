<?php

namespace Classes;

class Foo
{
    const Baz = 3.14;
    /**
     * @Annotations\MyAnnotation(
     *     strProperty="value",
     *     intProperty=-123,
     *     boolProperty=true,
     *     nullProperty=null,
     *     floatProperty=3.14,
     *     constProperty=Classes\Foo::Baz,
     *     arrProperty={0, 1, 2},
     *     mapProperty={"key": "value", "hoge"="fuga"},
     *     objProperty=@Annotations\ChildAnnotation(false),
     * )
     */
    private $bar;
}
