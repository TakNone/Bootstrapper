# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 222

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
			document_id : 5009226711387979129,
			until : 79,
		),
		$client->emojiStatusCollectible(
			collectible_id : -193954841543803092,
			document_id : 2981162045782111846,
			title : 'LTdVeilsAXW5YM3y',
			slug : 'WVGRNL5ScDPgHAin',
			pattern_document_id : 7630369243788106890,
			center_color : 92,
			edge_color : 4,
			pattern_color : 9,
			text_color : 25,
			until : 78,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : -7477225843160626423,
			until : 91,
		),
	),
);
```