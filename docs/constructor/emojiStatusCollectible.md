# emojiStatusCollectible

**Description** : *An owned collectible gift &raquo; as emoji status*

**Layer** : 218

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
	collectible_id : -9138238405309194109,
	document_id : -4066814959248407333,
	title : 'G70dqhO3WgJZ6KlS',
	slug : 'KVBOhYn6TxmR5bz4',
	pattern_document_id : 4708794612098797179,
	center_color : 14,
	edge_color : 11,
	pattern_color : 81,
	text_color : 96,
	until : 81,
);
```