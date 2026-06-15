# emojiStatusCollectible

**Description** : *An owned collectible gift &raquo; as emoji status*

**Layer** : 227

```tl
emojiStatusCollectible#7184603b flags:# collectible_id:long document_id:long title:string slug:string pattern_document_id:long center_color:int edge_color:int pattern_color:int text_color:int until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>collectible_id</mark> | [`long`](type/long) | ID of the collectible (from starGiftUnique.id) |
| <mark>document_id</mark> | [`long`](type/long) | ID of the custom emoji representing the status |
| <mark>title</mark> | [`string`](type/string) | Name of the collectible |
| <mark>slug</mark> | [`string`](type/string) | Unique identifier of the collectible that may be used to create a collectible gift link » for the current collectible, or to fetch further info about the collectible using payments.getUniqueStarGift |
| <mark>pattern_document_id</mark> | [`long`](type/long) | The ID of a pattern to apply on the profile's backdrop, correlated to the starGiftAttributePattern from the gift in slug |
| <mark>center_color</mark> | [`int`](type/int) | Color of the center of the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| <mark>edge_color</mark> | [`int`](type/int) | Color of the edges of the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| <mark>pattern_color</mark> | [`int`](type/int) | Color of the pattern_document_id applied on the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| <mark>text_color</mark> | [`int`](type/int) | Color of text on the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| **until** | [`flags.0?int`](type/int) | If set, the emoji status will be active until the specified unixtime |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->emojiStatusCollectible(
	collectible_id : 1907575313920325030,
	document_id : 5757930715553036332,
	title : 'CglBQX0urUPbqioS',
	slug : 'QTe1SpkZuY8VK3RA',
	pattern_document_id : 8061266225051918082,
	center_color : 85,
	edge_color : 46,
	pattern_color : 83,
	text_color : 93,
	until : 79,
);
```