# inputMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the caption, or even a standalone link preview without an attached message*

**Layer** : 211

```tl
inputMediaWebPage#c21b8849 flags:# force_large_media:flags.0?true force_small_media:flags.1?true optional:flags.2?true url:string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **force_large_media** | [`flags.0?true`](type/true) | If set, specifies that a large media preview should be used |
| **force_small_media** | [`flags.1?true`](type/true) | If set, specifies that a small media preview should be used |
| **optional** | [`flags.2?true`](type/true) | If not set, a WEBPAGE_NOT_FOUND RPC error will be emitted if a webpage preview cannot be generated for the specified url; otherwise, no error will be emitted (unless the provided message is also empty, in which case a MESSAGE_EMPTY will be emitted, instead) |
| <mark>url</mark> | [`string`](type/string) | The URL to use for the link preview |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaWebPage(
	force_large_media : true,
	force_small_media : true,
	optional : true,
	url : 'https://docs.liveproto.dev',
);
```