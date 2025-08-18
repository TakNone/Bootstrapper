# messageMediaPhoto

**Description** : *Attached photo*

**Layer** : 211

```tl
messageMediaPhoto#695150d7 flags:# spoiler:flags.3?true photo:flags.0?Photo ttl_seconds:flags.2?int = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.3?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **photo** | [`flags.0?Photo`](type/Photo) | Photo |
| **ttl_seconds** | [`flags.2?int`](type/int) | Time to live in seconds of self-destructing photo |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPhoto(
	spoiler : true,
	photo : $client->photoEmpty(
		id : -4840014496887971358,
	),
	ttl_seconds : 51,
);
```