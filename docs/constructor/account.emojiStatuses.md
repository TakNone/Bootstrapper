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
			document_id : 3915889226021088417,
			until : 14,
		),
		$client->emojiStatusCollectible(
			collectible_id : 7481496803563295604,
			document_id : 5506236055376874745,
			title : 'KsPQ4wNxuIBz7lV5',
			slug : 'esxSRMCiGy9Q2V6v',
			pattern_document_id : 8818192710207359639,
			center_color : 53,
			edge_color : 99,
			pattern_color : 84,
			text_color : 28,
			until : 8,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 8017550004403447106,
			until : 92,
		),
	),
);
```