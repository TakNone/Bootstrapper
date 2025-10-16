# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 216

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
			title : 'RGdONUBx8wW7y945',
			icon_emoji_id : -4496836888509376540,
			emoticons : array('PgOoEQxaJKmUecFl'),
		),
		$client->emojiGroupGreeting(
			title : 'EpOQLSGwtsRgBl3K',
			icon_emoji_id : -8511892382927622167,
			emoticons : array('KUcFYpNjMq8O4ZXu'),
		),
		$client->emojiGroupPremium(
			title : '5z2nFZbslwqTmxQN',
			icon_emoji_id : 7277676727752186392,
		),
	),
);
```