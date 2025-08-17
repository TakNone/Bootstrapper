# updateBotPurchasedPaidMedia

**Description** : *Bots only: a user has purchased a paid media*

**Layer** : 211

```tl
updateBotPurchasedPaidMedia#283bd312 user_id:long payload:string qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | The user that bought the media |
| <mark>payload</mark> | [`string`](type/string) | Payload passed by the bot in inputMediaPaidMedia.payload |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotPurchasedPaidMedia(
	user_id : -9184951901392262397,
	payload : '7hIXWBQmnb5uvCkF',
	qts : 50,
);
```