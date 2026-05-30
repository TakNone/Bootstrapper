# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 222

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
			title : 'C8t6OMINF5n2T9hr',
			icon_emoji_id : 1260736410752954555,
			emoticons : array('2jZQdqRC3TGctOi6'),
		),
		$client->emojiGroupGreeting(
			title : 'RZSMvYpPIWso7VnN',
			icon_emoji_id : -4691107289427856662,
			emoticons : array('0rv9q7haTFGUwise'),
		),
		$client->emojiGroupPremium(
			title : 'HMOzGYW6kAEQT78N',
			icon_emoji_id : 6894823018984751410,
		),
	),
);
```