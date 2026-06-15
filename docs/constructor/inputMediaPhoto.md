# inputMediaPhoto

**Description** : *Forwarded photo*

**Layer** : 227

```tl
inputMediaPhoto#e3af4434 flags:# spoiler:flags.1?true live_photo:flags.2?true id:InputPhoto ttl_seconds:flags.0?int video:flags.2?InputDocument = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **live_photo** | [`flags.2?true`](type/true) | NOTHING |
| <mark>id</mark> | [`InputPhoto`](type/InputPhoto) | Photo to be forwarded |
| **ttl_seconds** | [`flags.0?int`](type/int) | Time to live in seconds of self-destructing photo |
| **video** | [`flags.2?InputDocument`](type/InputDocument) | NOTHING |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPhoto(
	spoiler : true,
	live_photo : true,
	id : $client->inputPhotoEmpty(),
	ttl_seconds : 69,
	video : $client->inputDocumentEmpty(),
);
```