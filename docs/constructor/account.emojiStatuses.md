# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 227

```tl
account.emojiStatuses#90c467d1 hash:long statuses:Vector<EmojiStatus> = account.EmojiStatuses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>statuses</mark> | [`Vector<EmojiStatus>`](type/EmojiStatus) | Emoji statuses |

---

## Type

[account.EmojiStatuses](type/account.EmojiStatuses)

---

## Example

```php
$accountEmojiStatuses = $client->account->emojiStatuses(
	hash : 0,
	statuses : array(
		$client->emojiStatusEmpty(),
		$client->emojiStatus(
			document_id : 1057085799843656902,
			until : 77,
		),
		$client->emojiStatusCollectible(
			collectible_id : 1161305799169702975,
			document_id : -6783555647979641890,
			title : 'hNSkc46iQYjxZ3nd',
			slug : 'Eb7ZTkjP0QoyADN8',
			pattern_document_id : 8407879727336009612,
			center_color : 1,
			edge_color : 59,
			pattern_color : 12,
			text_color : 51,
			until : 19,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 3528472522132207212,
			until : 61,
		),
	),
);
```