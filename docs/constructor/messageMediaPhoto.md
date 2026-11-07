# messageMediaPhoto

**Description** : *Attached photo*

**Layer** : 229

```tl
messageMediaPhoto#e216eb63 flags:# spoiler:flags.3?true live_photo:flags.4?true photo:flags.0?Photo ttl_seconds:flags.2?int video:flags.4?Document = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.3?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **live_photo** | [`flags.4?true`](type/true) | Whether this is a live photo, i.e. a still photo paired with the short video clip captured alongside it |
| **photo** | [`flags.0?Photo`](type/Photo) | Photo |
| **ttl_seconds** | [`flags.2?int`](type/int) | Time to live of self-destructing photo, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the photo immediately after it's played; otherwise self-destructs ttl_seconds after it's played |
| **video** | [`flags.4?Document`](type/Document) | The short video clip of the live photo |

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
		id : -2625958029320476409,
	),
	ttl_seconds : 5,
	video : $client->documentEmpty(
		id : 4281889288567290893,
	),
);
```