# inputInvoicePremiumGiftCode

**Description** : *Used if the user wishes to start a channel/supergroup giveaway or send some giftcodes to members of a channel/supergroup, in exchange for boosts*

**Layer** : 233

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
		users : 1,
		months : 76,
		store_product : '6jcfUExoulOWaJI1',
		store_quantity : 71,
		currency : '40bDQnwrlpVB2Sco',
		amount : -2153953465270206858,
	),
);
```