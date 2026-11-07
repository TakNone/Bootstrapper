# messages.emojiGameDiceInfo

**Description** : *Dice game information*

**Layer** : 233

```tl
messages.emojiGameDiceInfo#44e56023 flags:# game_hash:string prev_stake:long current_streak:int params:Vector<int> plays_left:flags.0?int = messages.EmojiGameInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>game_hash</mark> | [`string`](type/string) | Game hash |
| <mark>prev_stake</mark> | [`long`](type/long) | Previous stake |
| <mark>current_streak</mark> | [`int`](type/int) | Current streak |
| <mark>params</mark> | [`Vector<int>`](type/int) | Parameters |
| **plays_left** | [`flags.0?int`](type/int) | Plays left |

---

## Type

[messages.EmojiGameInfo](type/messages.EmojiGameInfo)

---

## Example

```php
$messagesEmojiGameInfo = $client->messages->emojiGameDiceInfo(
	game_hash : 'g2A6HYQ73LRJcMxo',
	prev_stake : 1495795103301617311,
	current_streak : 20,
	params : array(34),
	plays_left : 0,
);
```