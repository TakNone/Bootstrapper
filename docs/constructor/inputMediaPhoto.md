# inputMediaPhoto

**Description** : *Forwarded photo*

**Layer** : 211

```tl
inputMediaPhoto#b3ba0635 flags:# spoiler:flags.1?true id:InputPhoto ttl_seconds:flags.0?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>id</mark> | [`InputPhoto`](type/InputPhoto) | Photo to be forwarded |
| **ttl_seconds** | [`flags.0?int`](type/int) | Time to live in seconds of self-destructing photo |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPhoto(
	spoiler : true,
	id : $client->inputPhotoEmpty(),
	ttl_seconds : 75,
);
```