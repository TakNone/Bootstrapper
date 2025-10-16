# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 216

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
			document_id : -6245400411741899822,
			until : 50,
		),
		$client->emojiStatusCollectible(
			collectible_id : 3430897801628540973,
			document_id : 5860589659994567867,
			title : 'Y5DvVH1MieLqR8c4',
			slug : 'uDkrcbUgVhd3PCmK',
			pattern_document_id : -2099961355874208856,
			center_color : 42,
			edge_color : 18,
			pattern_color : 60,
			text_color : 98,
			until : 57,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : -5725226273763391971,
			until : 60,
		),
	),
);
```