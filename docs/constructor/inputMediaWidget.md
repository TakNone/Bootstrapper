# inputMediaWidget

**Layer** : 233

```tl
inputMediaWidget#44f6c04e flags:# allow_queries:flags.0?true shared_widget:flags.1?true width:int height:int html:string public_data:flags.2?string chat_data:flags.3?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **allow_queries** | [`flags.0?true`](type/true) | NOTHING |
| **shared_widget** | [`flags.1?true`](type/true) | NOTHING |
| <mark>width</mark> | [`int`](type/int) | NOTHING |
| <mark>height</mark> | [`int`](type/int) | NOTHING |
| <mark>html</mark> | [`string`](type/string) | NOTHING |
| **public_data** | [`flags.2?string`](type/string) | NOTHING |
| **chat_data** | [`flags.3?string`](type/string) | NOTHING |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaWidget(
	allow_queries : true,
	shared_widget : true,
	width : 75,
	height : 97,
	html : '1opQU2Rb4udcqjOK',
	public_data : 'MaXuntyboml9UsI1',
	chat_data : 'KEt5fsen9HGzgJhx',
);
```