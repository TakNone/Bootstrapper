# messageExtendedMediaPreview

**Description** : *Paid media preview for not yet purchased paid media, see here &raquo; for more info*

**Layer** : 218

```tl
messageExtendedMediaPreview#ad628cc8 flags:# w:flags.0?int h:flags.0?int thumb:flags.1?PhotoSize video_duration:flags.2?int = MessageExtendedMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **w** | [`flags.0?int`](type/int) | Width |
| **h** | [`flags.0?int`](type/int) | Height |
| **thumb** | [`flags.1?PhotoSize`](type/PhotoSize) | Extremely low resolution thumbnail |
| **video_duration** | [`flags.2?int`](type/int) | Video duration for videos |

---

## Type

[MessageExtendedMedia](type/MessageExtendedMedia)

---

## Example

```php
$messageExtendedMedia = $client->messageExtendedMediaPreview(
	w : 6,
	h : 0,
	thumb : $client->photoSizeEmpty(
		type : '9dtb3Lc4WvVfKeCw',
	),
	video_duration : 4,
);
```