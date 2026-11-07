# shareThemeEmojiBackdrop

**Layer** : 233

```tl
shareThemeEmojiBackdrop#64b334e1 flags:# backdrop_id:flags.0?int emojis:flags.1?Vector<Reaction> = ShareTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **backdrop_id** | [`flags.0?int`](type/int) | NOTHING |
| **emojis** | [`flags.1?Vector<Reaction>`](type/Reaction) | NOTHING |

---

## Type

[ShareTheme](type/ShareTheme)

---

## Example

```php
$shareTheme = $client->shareThemeEmojiBackdrop(
	backdrop_id : 30,
	emojis : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'KmOhRPoTx9p27n5G',
		),
		$client->reactionCustomEmoji(
			document_id : 9003770422719391420,
		),
		$client->reactionPaid(),
	),
);
```