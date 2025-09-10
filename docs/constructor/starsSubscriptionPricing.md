# starsSubscriptionPricing

**Description** : *Pricing of a Telegram Star subscription &raquo;*

**Layer** : 214

```tl
starsSubscriptionPricing#5416d58 period:int amount:long = StarsSubscriptionPricing;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`int`](type/int) | The user should pay amount stars every period seconds to gain and maintain access to the channel. Currently the only allowed subscription period is 30*24*60*60, i.e. the user will be debited amount stars every month |
| <mark>amount</mark> | [`long`](type/long) | Price of the subscription in Telegram Stars |

---

## Type

[StarsSubscriptionPricing](type/StarsSubscriptionPricing)

---

## Example

```php
$starsSubscriptionPricing = $client->starsSubscriptionPricing(
	period : 95,
	amount : 10134250099016367,
);
```