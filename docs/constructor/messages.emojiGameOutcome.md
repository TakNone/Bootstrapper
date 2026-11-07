# messages.emojiGameOutcome

**Description** : *Dice game outcome*

**Layer** : 233

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
	stake_ton_amount : 6460533897636326375,
	ton_amount : -8437917488126750617,
);
```