# messages.emojiGameDiceInfo

**Layer** : 222

```tl
messages.emojiGameDiceInfo#44e56023 flags:# game_hash:string prev_stake:long current_streak:int params:Vector<int> plays_left:flags.0?int = messages.EmojiGameInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>game_hash</mark> | [`string`](type/string) | NOTHING |
| <mark>prev_stake</mark> | [`long`](type/long) | NOTHING |
| <mark>current_streak</mark> | [`int`](type/int) | NOTHING |
| <mark>params</mark> | [`Vector<int>`](type/int) | NOTHING |
| **plays_left** | [`flags.0?int`](type/int) | NOTHING |

---

## Type

[messages.EmojiGameInfo](type/messages.EmojiGameInfo)

---

## Example

```php
$messagesEmojiGameInfo = $client->messages->emojiGameDiceInfo(
	game_hash : 'ycL7JM1Eoq0Rzdjn',
	prev_stake : -8051793777436951884,
	current_streak : 62,
	params : array(89),
	plays_left : 68,
);
```