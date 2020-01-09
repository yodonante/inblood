# Pagination

## Props

<!-- @vuese:Pagination:props:start -->
|Name|Description|Type|Required|Default|
|---|---|---|---|---|
|total|-|`Number`|`true`|-|
|page|-|`Number`|`false`|1|
|limit|-|`Number`|`false`|20|
|pageSizes|-|`Array`|`false`|default() {
  return [10, 20, 30, 50];
}|
|layout|-|`String`|`false`|'total, sizes, prev, pager, next, jumper'|
|background|-|`Boolean`|`false`|true|
|autoScroll|-|`Boolean`|`false`|true|
|hidden|-|`Boolean`|`false`|false|

<!-- @vuese:Pagination:props:end -->


## Events

<!-- @vuese:Pagination:events:start -->
|Event Name|Description|Parameters|
|---|---|---|
|update:page|-|-|
|update:limit|-|-|
|pagination|-|-|

<!-- @vuese:Pagination:events:end -->


