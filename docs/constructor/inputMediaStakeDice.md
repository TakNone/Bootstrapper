# inputMediaStakeDice

**Layer** : 227

```tl
inputMediaStakeDice#f3a9244a game_hash:string ton_amount:long client_seed:bytes = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>game_hash</mark> | [`string`](type/string) | NOTHING |
| <mark>ton_amount</mark> | [`long`](type/long) | NOTHING |
| <mark>client_seed</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaStakeDice(
	game_hash : 'gyO4uP10cpCXRv52',
	ton_amount : -3738140162627314581,
	client_seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```