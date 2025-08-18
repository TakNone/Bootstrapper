# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 211

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
	hash : -1410442831683571210,
	statuses : array(
		$client->emojiStatusEmpty(),
		$client->emojiStatus(
			document_id : -2144272364617196369,
			until : 88,
		),
		$client->emojiStatusCollectible(
			collectible_id : 1398469150148172819,
			document_id : 5586989544339786619,
			title : 'EKQNVBId9ycP75uG',
			slug : 'tfCZh3eA6LvRdwoB',
			pattern_document_id : -1968834780012984482,
			center_color : 60,
			edge_color : 32,
			pattern_color : 76,
			text_color : 65,
			until : 95,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 4098838735077463409,
			until : 83,
		),
	),
);
```