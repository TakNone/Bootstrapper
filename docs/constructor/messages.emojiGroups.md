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
			title : 'zjwKeBxlAyqhip1b',
			icon_emoji_id : -3459706845972503568,
			emoticons : array('vzWZgK38IH7syfMQ'),
		),
		$client->emojiGroupGreeting(
			title : 'Kgpu9W7iMZI5fdV0',
			icon_emoji_id : 4242745168611700585,
			emoticons : array('PBXxLa7g0spUGzEI'),
		),
		$client->emojiGroupPremium(
			title : 'jY4VkhfpZsAI7Evl',
			icon_emoji_id : 6792485926700573892,
		),
	),
);
```