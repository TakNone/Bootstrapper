# shippingOption

**Description** : *Shipping option*

**Layer** : 233

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
	id : 'qbzXL2PrhQEKfxCS',
	title : 'dQf0rFuHUkeCapiE',
	prices : array(
		$client->labeledPrice(
			label : 'tUf6DLKh3TYd4A2m',
			amount : -458503149739936898,
		),
	),
);
```