# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 233

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
			document_id : 1733770232147496278,
			until : 99,
		),
		$client->emojiStatusCollectible(
			collectible_id : 6671359987982636552,
			document_id : 2415485009175965584,
			title : 'tn7EFR5Ny9qQK4ci',
			slug : 'AGCqJZQS5p3BDvWg',
			pattern_document_id : 7207402995699183775,
			center_color : 64,
			edge_color : 92,
			pattern_color : 96,
			text_color : 11,
			until : 22,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : -4090793782241937253,
			until : 64,
		),
	),
);
```