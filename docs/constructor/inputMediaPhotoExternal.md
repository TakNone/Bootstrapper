# inputMediaPhotoExternal

**Description** : *New photo that will be uploaded by the server using the specified URL*

**Layer** : 214

```tl
inputMediaPhotoExternal#e5bbfe1a flags:# spoiler:flags.1?true url:string ttl_seconds:flags.0?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>url</mark> | [`string`](type/string) | URL of the photo |
| **ttl_seconds** | [`flags.0?int`](type/int) | Self-destruct time to live of photo |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPhotoExternal(
	spoiler : true,
	url : 'https://docs.liveproto.dev',
	ttl_seconds : 66,
);
```