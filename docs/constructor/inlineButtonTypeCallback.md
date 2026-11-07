# inlineButtonTypeCallback

**Layer** : 229

```tl
inlineButtonTypeCallback#2955bc38 flags:# requires_password:flags.0?true data:bytes = InlineButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **requires_password** | [`flags.0?true`](type/true) | NOTHING |
| <mark>data</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[InlineButtonType](type/InlineButtonType)

---

## Example

```php
$inlineButtonType = $client->inlineButtonTypeCallback(
	requires_password : true,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```