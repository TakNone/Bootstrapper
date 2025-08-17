# payments.starsRevenueAdsAccountUrl

**Description** : *Contains a URL leading to a page where the user will be able to place ads for the channel/bot, paying using Telegram Stars*

**Layer** : 211

```tl
payments.starsRevenueAdsAccountUrl#394e7f21 url:string = payments.StarsRevenueAdsAccountUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | URL to open |

---

## Type

[payments.StarsRevenueAdsAccountUrl](type/payments.StarsRevenueAdsAccountUrl)

---

## Example

```php
$paymentsStarsRevenueAdsAccountUrl = $client->payments->starsRevenueAdsAccountUrl(
	url : 'https://docs.liveproto.dev',
);
```