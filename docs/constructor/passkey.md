# passkey

**Layer** : 225

```tl
passkey#98613ebf flags:# id:string name:string date:int software_emoji_id:flags.0?long last_usage_date:flags.1?int = Passkey;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>id</mark> | [`string`](type/string) | NOTHING |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| **software_emoji_id** | [`flags.0?long`](type/long) | NOTHING |
| **last_usage_date** | [`flags.1?int`](type/int) | NOTHING |

---

## Type

[Passkey](type/Passkey)

---

## Example

```php
$passkey = $client->passkey(
	id : 'AzqOWU0Fd2R1LJcX',
	name : 'Nvkbic4FSwYulta6',
	date : 22,
	software_emoji_id : -8084665833391663315,
	last_usage_date : 54,
);
```