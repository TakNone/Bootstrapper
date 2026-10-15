# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 229

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
			title : 'AEM5HXsnvTZCFhwr',
			icon_emoji_id : -2328041858536728687,
			emoticons : array('fj6vF1dGqoiIl5LT'),
		),
		$client->emojiGroupGreeting(
			title : 'iwmx1B2p46RNjIvz',
			icon_emoji_id : 131725267999364774,
			emoticons : array('xKvpicFkCVMEP6n2'),
		),
		$client->emojiGroupPremium(
			title : '9i3xp4rMEY2kSCJ7',
			icon_emoji_id : 7429350418549474461,
		),
	),
);
```