# messageMediaWidget

**Layer** : 233

```tl
messageMediaWidget#2238f214 flags:# is_copy:flags.0?true can_query:flags.1?true background_query:flags.2?true width:int height:int payload:bytes public_data:flags.3?string public_data_hash:flags.3?long chat_data:flags.4?string widget_id:flags.5?long = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **is_copy** | [`flags.0?true`](type/true) | NOTHING |
| **can_query** | [`flags.1?true`](type/true) | NOTHING |
| **background_query** | [`flags.2?true`](type/true) | NOTHING |
| <mark>width</mark> | [`int`](type/int) | NOTHING |
| <mark>height</mark> | [`int`](type/int) | NOTHING |
| <mark>payload</mark> | [`bytes`](type/bytes) | NOTHING |
| **public_data** | [`flags.3?string`](type/string) | NOTHING |
| **public_data_hash** | [`flags.3?long`](type/long) | NOTHING |
| **chat_data** | [`flags.4?string`](type/string) | NOTHING |
| **widget_id** | [`flags.5?long`](type/long) | NOTHING |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaWidget(
	is_copy : true,
	can_query : true,
	background_query : true,
	width : 14,
	height : 59,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	public_data : 'OfgHaMPJC239snNl',
	public_data_hash : -5831591196202752235,
	chat_data : '6IXxQ9G31uWlRNLH',
	widget_id : 6159057169110638344,
);
```