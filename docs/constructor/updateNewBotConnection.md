# updateNewBotConnection

**Layer** : 227

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
	bot_id : -1571553301637543442,
	date : 32,
	device : 'iotcO9CPBY1zS4RE',
	location : 'xL3DpaXcCl8VWioq',
);
```