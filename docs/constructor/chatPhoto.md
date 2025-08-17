# chatPhoto

**Description** : *Group profile photo*

**Layer** : 211

```tl
chatPhoto#1c6e1c11 flags:# has_video:flags.0?true photo_id:long stripped_thumb:flags.1?bytes dc_id:int = ChatPhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_video** | [`flags.0?true`](type/true) | Whether the user has an animated profile picture |
| <mark>photo_id</mark> | [`long`](type/long) | Photo ID |
| **stripped_thumb** | [`flags.1?bytes`](type/bytes) | Stripped thumbnail |
| <mark>dc_id</mark> | [`int`](type/int) | DC where this photo is stored |

---

## Type

[ChatPhoto](type/ChatPhoto)

---

## Example

```php
$chatPhoto = $client->chatPhoto(
	has_video : true,
	photo_id : -8213845356363999830,
	stripped_thumb : '?<r?LiveProto??%P?',
	dc_id : 55,
);
```