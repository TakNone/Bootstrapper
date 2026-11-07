# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 233

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
			title : 'Bzks2M70OGNYaxm4',
			icon_emoji_id : 2504695898537685248,
			emoticons : array('gKSzW0rQ3HskBMbl'),
		),
		$client->emojiGroupGreeting(
			title : 'EtUYfpjeXGLrq6VN',
			icon_emoji_id : 3073067936333790289,
			emoticons : array('gsV4oOTW9qNjMBtY'),
		),
		$client->emojiGroupPremium(
			title : '7FixlOvnMSCVEabc',
			icon_emoji_id : 6608811999781089917,
		),
	),
);
```