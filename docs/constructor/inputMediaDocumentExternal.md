# inputMediaDocumentExternal

**Description** : *Document that will be downloaded by the telegram servers*

**Layer** : 211

```tl
inputMediaDocumentExternal#779600f9 flags:# spoiler:flags.1?true url:string ttl_seconds:flags.0?int video_cover:flags.2?InputPhoto video_timestamp:flags.3?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>url</mark> | [`string`](type/string) | URL of the document |
| **ttl_seconds** | [`flags.0?int`](type/int) | Self-destruct time to live of document |
| **video_cover** | [`flags.2?InputPhoto`](type/InputPhoto) | NOTHING |
| **video_timestamp** | [`flags.3?int`](type/int) | NOTHING |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaDocumentExternal(
	spoiler : true,
	url : 'https://docs.liveproto.dev',
	ttl_seconds : 14,
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 58,
);
```