# inlineButtonTypeUrlAuth

**Layer** : 233

```tl
inlineButtonTypeUrlAuth#bfd02da2 flags:# fwd_text:flags.0?string url:string button_id:int = InlineButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **fwd_text** | [`flags.0?string`](type/string) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| <mark>button_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[InlineButtonType](type/InlineButtonType)

---

## Example

```php
$inlineButtonType = $client->inlineButtonTypeUrlAuth(
	fwd_text : 'C1neEoFsIqZW69hU',
	url : 'https://docs.liveproto.dev',
	button_id : 99,
);
```