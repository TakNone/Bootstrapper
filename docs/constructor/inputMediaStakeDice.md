# inputMediaStakeDice

**Description** : *Dice game media*

**Layer** : 229

```tl
inputMediaStakeDice#f3a9244a game_hash:string ton_amount:long client_seed:bytes = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>game_hash</mark> | [`string`](type/string) | Game hash |
| <mark>ton_amount</mark> | [`long`](type/long) | Amount |
| <mark>client_seed</mark> | [`bytes`](type/bytes) | Client seed |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaStakeDice(
	game_hash : '7E6iZJmXPyqdpnhj',
	ton_amount : 8797059870387221236,
	client_seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```