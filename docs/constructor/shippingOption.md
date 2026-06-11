# shippingOption

**Description** : *Shipping option*

**Layer** : 227

```tl
shippingOption#b6213cdf id:string title:string prices:Vector<LabeledPrice> = ShippingOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Option ID |
| <mark>title</mark> | [`string`](type/string) | Title |
| <mark>prices</mark> | [`Vector<LabeledPrice>`](type/LabeledPrice) | List of price portions |

---

## Type

[ShippingOption](type/ShippingOption)

---

## Example

```php
$shippingOption = $client->shippingOption(
	id : 'zb76PTCrNDoVjfZM',
	title : 'oqOF5idMvDx1Jprz',
	prices : array(
		$client->labeledPrice(
			label : 'mOnNQPIcHrU1Eu6K',
			amount : 7285411605041996749,
		),
	),
);
```