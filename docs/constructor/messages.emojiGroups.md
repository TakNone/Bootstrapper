# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 218

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
			title : 'Y12V6kGQHBfxIiTg',
			icon_emoji_id : 7871097559696172143,
			emoticons : array('59xbnQN7J2VRBpqe'),
		),
		$client->emojiGroupGreeting(
			title : 'azG9cOorwZC1EfJQ',
			icon_emoji_id : 1549792918865826101,
			emoticons : array('pF6r8SqIAvJXYUBH'),
		),
		$client->emojiGroupPremium(
			title : 'OBCNncWuhIXrdsJm',
			icon_emoji_id : 7899166869023367257,
		),
	),
);
```