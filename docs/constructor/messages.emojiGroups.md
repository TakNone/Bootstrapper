# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 211

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
	hash : 94,
	groups : array(
		$client->emojiGroup(
			title : 'KlB1ONwi2XazfMTo',
			icon_emoji_id : -4307406139836522937,
			emoticons : array('rBx3NuIaUPjckJh0'),
		),
		$client->emojiGroupGreeting(
			title : 'PFHYm1i75LfXxSuD',
			icon_emoji_id : -206892463567106255,
			emoticons : array('smNh3wbqQznycu9l'),
		),
		$client->emojiGroupPremium(
			title : 'nERYVrMJ3IL1KeT0',
			icon_emoji_id : 1831914992840210355,
		),
	),
);
```