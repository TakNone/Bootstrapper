# inputMediaStakeDice

**Layer** : 222

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
	game_hash : 'uZHJ08sV7zbnw3A5',
	ton_amount : 7804258257415658572,
	client_seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```