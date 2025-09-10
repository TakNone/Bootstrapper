# updateBotPurchasedPaidMedia

**Description** : *Bots only: a user has purchased a paid media*

**Layer** : 214

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
	user_id : 6956283476523543288,
	payload : 'hV9bI47aG3N1y6kx',
	qts : 78,
);
```