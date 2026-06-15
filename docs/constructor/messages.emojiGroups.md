# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 227

```tl
messages.emojiGroups#881fb94b hash:int groups:Vector<EmojiGroup> = messages.EmojiGroups;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>groups</mark> | [`Vector<EmojiGroup>`](type/EmojiGroup) | A list of emoji categories |

---

## Type

[messages.EmojiGroups](type/messages.EmojiGroups)

---

## Example

```php
$messagesEmojiGroups = $client->messages->emojiGroups(
	hash : 0,
	groups : array(
		$client->emojiGroup(
			title : '0Azj8KIRLNu1hS3Z',
			icon_emoji_id : -2824636581806583969,
			emoticons : array('zVSPHk1RQULFaDJE'),
		),
		$client->emojiGroupGreeting(
			title : 'eLvnqJlojP2rOW9b',
			icon_emoji_id : 7826441587362131775,
			emoticons : array('hiS02NmyVOAHvEk9'),
		),
		$client->emojiGroupPremium(
			title : 'kYOtbAyfsTzpohw7',
			icon_emoji_id : -2270151512329245413,
		),
	),
);
```