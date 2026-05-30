# inputInvoicePremiumGiftCode

**Description** : *Used if the user wishes to start a channel/supergroup giveaway or send some giftcodes to members of a channel/supergroup, in exchange for boosts*

**Layer** : 225

```tl
inputInvoicePremiumGiftCode#98986c0d purpose:InputStorePaymentPurpose option:PremiumGiftCodeOption = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | Should be populated with inputStorePaymentPremiumGiveaway for giveaways and inputStorePaymentPremiumGiftCode for gifts |
| <mark>option</mark> | [`PremiumGiftCodeOption`](type/PremiumGiftCodeOption) | Should be populated with one of the giveaway options returned by payments.getPremiumGiftCodeOptions, see the giveaways » documentation for more info |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoicePremiumGiftCode(
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
	option : $client->premiumGiftCodeOption(
		users : 28,
		months : 13,
		store_product : 't0qU9jHINOGspEwQ',
		store_quantity : 36,
		currency : 'WJdHYp3Z1alqsBAN',
		amount : 7449580614768170829,
	),
);
```