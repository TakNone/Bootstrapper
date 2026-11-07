# inputMediaPhoto

**Description** : *Forwarded photo*

**Layer** : 229

```tl
inputMediaPhoto#e3af4434 flags:# spoiler:flags.1?true live_photo:flags.2?true id:InputPhoto ttl_seconds:flags.0?int video:flags.2?InputDocument = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **live_photo** | [`flags.2?true`](type/true) | Whether this is a live photo, i.e. a still photo paired with the short video clip captured alongside it |
| <mark>id</mark> | [`InputPhoto`](type/InputPhoto) | Photo to be forwarded |
| **ttl_seconds** | [`flags.0?int`](type/int) | Time to live of self-destructing photo, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the document immediately after it's played; otherwise self-destructs ttl_seconds after it's played |
| **video** | [`flags.2?InputDocument`](type/InputDocument) | The short video clip of the live photo |

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
	ttl_seconds : 5,
	video : $client->inputDocumentEmpty(),
);
```