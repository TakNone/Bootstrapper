# inputInvoicePremiumGiftCode

**Description** : *Used if the user wishes to start a channel/supergroup giveaway or send some giftcodes to members of a channel/supergroup, in exchange for boosts*

**Layer** : 218

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
		users : 99,
		months : 66,
		store_product : 'zRxyL3TVcZ4jUbIr',
		store_quantity : 7,
		currency : 'YulyhfEHCamRD8jQ',
		amount : 6059268310360860754,
	),
);
```