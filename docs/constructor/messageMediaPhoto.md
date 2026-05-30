# messageMediaPhoto

**Description** : *Attached photo*

**Layer** : 225

```tl
messageMediaPhoto#e216eb63 flags:# spoiler:flags.3?true live_photo:flags.4?true photo:flags.0?Photo ttl_seconds:flags.2?int video:flags.4?Document = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.3?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **live_photo** | [`flags.4?true`](type/true) | NOTHING |
| **photo** | [`flags.0?Photo`](type/Photo) | Photo |
| **ttl_seconds** | [`flags.2?int`](type/int) | Time to live in seconds of self-destructing photo |
| **video** | [`flags.4?Document`](type/Document) | NOTHING |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPhoto(
	spoiler : true,
	live_photo : true,
	photo : $client->photoEmpty(
		id : 7844272984603921330,
	),
	ttl_seconds : 70,
	video : $client->documentEmpty(
		id : -6993161076127350624,
	),
);
```