# messageMediaDice

**Description** : *Dice\-based animated sticker*

**Layer** : 222

```tl
messageMediaDice#8cbec07 flags:# value:int emoticon:string game_outcome:flags.0?messages.EmojiGameOutcome = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>value</mark> | [`int`](type/int) | Dice value |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji, for now ,  and  are supported |
| **game_outcome** | [`flags.0?messages.EmojiGameOutcome`](type/messages.EmojiGameOutcome) | NOTHING |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaDice(
	value : 28,
	emoticon : 'M69S0yBiHslqcukO',
	game_outcome : $client->messages->emojiGameOutcome(
		seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		stake_ton_amount : -8597862185910263820,
		ton_amount : 6115808892970836043,
	),
);
```