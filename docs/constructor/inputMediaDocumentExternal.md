# inputMediaDocumentExternal

**Description** : *Document that will be downloaded by the telegram servers*

**Layer** : 229

```tl
inputMediaDocumentExternal#779600f9 flags:# spoiler:flags.1?true url:string ttl_seconds:flags.0?int video_cover:flags.2?InputPhoto video_timestamp:flags.3?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>url</mark> | [`string`](type/string) | URL of the document |
| **ttl_seconds** | [`flags.0?int`](type/int) | Time to live of self-destructing document, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the document immediately after it's played; otherwise self-destructs ttl_seconds after it's played |
| **video_cover** | [`flags.2?InputPhoto`](type/InputPhoto) | Custom video cover |
| **video_timestamp** | [`flags.3?int`](type/int) | Start playing the video at the specified timestamp (seconds) |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaDocumentExternal(
	spoiler : true,
	url : 'https://docs.liveproto.dev',
	ttl_seconds : 72,
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 0,
);
```