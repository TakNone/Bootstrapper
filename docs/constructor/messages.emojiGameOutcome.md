# messages.emojiGameOutcome

**Description** : *Dice game outcome*

**Layer** : 229

```tl
messages.emojiGameOutcome#da2ad647 seed:bytes stake_ton_amount:long ton_amount:long = messages.EmojiGameOutcome;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>seed</mark> | [`bytes`](type/bytes) | Seed |
| <mark>stake_ton_amount</mark> | [`long`](type/long) | Staked amount |
| <mark>ton_amount</mark> | [`long`](type/long) | Amount |

---

## Type

[messages.EmojiGameOutcome](type/messages.EmojiGameOutcome)

---

## Example

```php
$messagesEmojiGameOutcome = $client->messages->emojiGameOutcome(
	seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	stake_ton_amount : -4170806827715740491,
	ton_amount : -2926523421660241232,
);
```