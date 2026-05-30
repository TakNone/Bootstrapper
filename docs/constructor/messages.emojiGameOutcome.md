# messages.emojiGameOutcome

**Layer** : 225

```tl
messages.emojiGameOutcome#da2ad647 seed:bytes stake_ton_amount:long ton_amount:long = messages.EmojiGameOutcome;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>seed</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>stake_ton_amount</mark> | [`long`](type/long) | NOTHING |
| <mark>ton_amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[messages.EmojiGameOutcome](type/messages.EmojiGameOutcome)

---

## Example

```php
$messagesEmojiGameOutcome = $client->messages->emojiGameOutcome(
	seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	stake_ton_amount : -6657483553343578478,
	ton_amount : 2183736083707990992,
);
```