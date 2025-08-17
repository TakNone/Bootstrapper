# payments.starsRevenueWithdrawalUrl

**Description** : *Contains the URL to use to withdraw Telegram Star revenue*

**Layer** : 211

```tl
payments.starsRevenueWithdrawalUrl#1dab80b7 url:string = payments.StarsRevenueWithdrawalUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Contains the URL to use to withdraw Telegram Star revenue |

---

## Type

[payments.StarsRevenueWithdrawalUrl](type/payments.StarsRevenueWithdrawalUrl)

---

## Example

```php
$paymentsStarsRevenueWithdrawalUrl = $client->payments->starsRevenueWithdrawalUrl(
	url : 'https://docs.liveproto.dev',
);
```