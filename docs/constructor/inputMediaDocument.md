# inputMediaDocument

**Description** : *Forwarded document*

**Layer** : 218

```tl
inputMediaDocument#a8763ab5 flags:# spoiler:flags.2?true id:InputDocument video_cover:flags.3?InputPhoto video_timestamp:flags.4?int ttl_seconds:flags.0?int query:flags.1?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.2?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | The document to be forwarded |
| **video_cover** | [`flags.3?InputPhoto`](type/InputPhoto) | Custom video cover |
| **video_timestamp** | [`flags.4?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
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
	video_timestamp : 83,
	ttl_seconds : 67,
	query : 'JuDrYN0p2VT3LRfm',
);
```