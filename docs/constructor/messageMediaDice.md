# messageMediaDice

**Description** : *Dice\-based animated sticker*

**Layer** : 233

```tl
messageMediaDice#8cbec07 flags:# value:int emoticon:string game_outcome:flags.0?messages.EmojiGameOutcome = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>value</mark> | [`int`](type/int) | Dice value |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji, for now ,  and  are supported |
| **game_outcome** | [`flags.0?messages.EmojiGameOutcome`](type/messages.EmojiGameOutcome) | Dice game outcome |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaDice(
	value : 45,
	emoticon : 'olAUExShDnaKOPz9',
	game_outcome : $client->messages->emojiGameOutcome(
		seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		stake_ton_amount : -7265684087148633930,
		ton_amount : 7725874472739552305,
	),
);
```