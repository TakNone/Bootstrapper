# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 225

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
			document_id : -8776786149456426168,
			until : 66,
		),
		$client->emojiStatusCollectible(
			collectible_id : -7283197584294974892,
			document_id : -3987439518424537152,
			title : 'qQ71js0RgxVueHDk',
			slug : '7cWqyTGn1YDdwjf6',
			pattern_document_id : 4421213335231693862,
			center_color : 30,
			edge_color : 80,
			pattern_color : 27,
			text_color : 50,
			until : 47,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : -1986188049709669322,
			until : 21,
		),
	),
);
```