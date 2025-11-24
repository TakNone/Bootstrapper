# updateBotSubscriptionExpire

**Layer** : 218

```tl
updateBotSubscriptionExpire#a8ae3eb1 user_id:long payload:string until_date:int qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>payload</mark> | [`string`](type/string) | NOTHING |
| <mark>until_date</mark> | [`int`](type/int) | NOTHING |
| <mark>qts</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotSubscriptionExpire(
	user_id : -300993999754957927,
	payload : 'gwpfClP9E4Bzv1MF',
	until_date : 46,
	qts : 72,
);
```