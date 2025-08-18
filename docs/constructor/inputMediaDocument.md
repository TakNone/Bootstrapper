# inputMediaDocument

**Description** : *Forwarded document*

**Layer** : 211

```tl
inputMediaDocument#a8763ab5 flags:# spoiler:flags.2?true id:InputDocument video_cover:flags.3?InputPhoto video_timestamp:flags.4?int ttl_seconds:flags.0?int query:flags.1?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.2?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | The document to be forwarded |
| **video_cover** | [`flags.3?InputPhoto`](type/InputPhoto) | NOTHING |
| **video_timestamp** | [`flags.4?int`](type/int) | NOTHING |
| **ttl_seconds** | [`flags.0?int`](type/int) | Time to live of self-destructing document |
| **query** | [`flags.1?string`](type/string) | Text query or emoji that was used by the user to find this sticker or GIF: used to improve search result relevance |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaDocument(
	spoiler : true,
	id : $client->inputDocumentEmpty(),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 95,
	ttl_seconds : 16,
	query : 'CQq5ZWRSpB70LrFV',
);
```