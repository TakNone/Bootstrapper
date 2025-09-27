# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 214

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
			document_id : -798565221347329175,
			until : 23,
		),
		$client->emojiStatusCollectible(
			collectible_id : 8548115762363156606,
			document_id : 506300853635837413,
			title : 'h6wdMtZ4Wf2ueJBE',
			slug : 'Q6BuOHFZmsL9Cv8a',
			pattern_document_id : -6503663084542593695,
			center_color : 56,
			edge_color : 97,
			pattern_color : 3,
			text_color : 98,
			until : 15,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : -6611139045635192368,
			until : 79,
		),
	),
);
```