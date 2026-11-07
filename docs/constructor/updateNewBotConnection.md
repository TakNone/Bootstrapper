# updateNewBotConnection

**Layer** : 229

```tl
updateNewBotConnection#b22083a6 flags:# confirmed:flags.0?true bot_id:long date:flags.1?int device:flags.1?string location:flags.1?string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **confirmed** | [`flags.0?true`](type/true) | NOTHING |
| <mark>bot_id</mark> | [`long`](type/long) | NOTHING |
| **date** | [`flags.1?int`](type/int) | NOTHING |
| **device** | [`flags.1?string`](type/string) | NOTHING |
| **location** | [`flags.1?string`](type/string) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewBotConnection(
	confirmed : true,
	bot_id : -1567082421425719791,
	date : 95,
	device : '0F81MpZmOanfz4NG',
	location : 'cy1WlQUqk478XVb5',
);
```