# inputInlineButtonTypeUrlAuth

**Layer** : 233

```tl
inputInlineButtonTypeUrlAuth#9961bcb4 flags:# request_write_access:flags.0?true fwd_text:flags.1?string url:string bot:flags.2?InputUser = InlineButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **request_write_access** | [`flags.0?true`](type/true) | NOTHING |
| **fwd_text** | [`flags.1?string`](type/string) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| **bot** | [`flags.2?InputUser`](type/InputUser) | NOTHING |

---

## Type

[InlineButtonType](type/InlineButtonType)

---

## Example

```php
$inlineButtonType = $client->inputInlineButtonTypeUrlAuth(
	request_write_access : true,
	fwd_text : 'Nawd2IOeYgMkXsJT',
	url : 'https://docs.liveproto.dev',
	bot : $client->get_input_user(user : '@TakNone'),
);
```