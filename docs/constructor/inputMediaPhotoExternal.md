# inputMediaPhotoExternal

**Description** : *New photo that will be uploaded by the server using the specified URL*

**Layer** : 233

```tl
inputMediaPhotoExternal#e5bbfe1a flags:# spoiler:flags.1?true url:string ttl_seconds:flags.0?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.1?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>url</mark> | [`string`](type/string) | URL of the photo |
| **ttl_seconds** | [`flags.0?int`](type/int) | Time to live of self-destructing photo, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the photo immediately after it's played; otherwise self-destructs ttl_seconds after it's played |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPhotoExternal(
	spoiler : true,
	url : 'https://docs.liveproto.dev',
	ttl_seconds : 58,
);
```