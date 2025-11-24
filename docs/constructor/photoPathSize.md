# photoPathSize

**Description** : *Messages with animated stickers can have a compressed svg \(&lt; 300 bytes\) to show the outline of the sticker before fetching the actual lottie animation*

**Layer** : 218

```tl
photoPathSize#d8214d41 type:string bytes:bytes = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | Always j |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Compressed SVG path payload, see here for decompression instructions |

---

## Type

[PhotoSize](type/PhotoSize)

---

## Example

```php
$photoSize = $client->photoPathSize(
	type : 'lA6ZrDBqKUi2oLTJ',
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```