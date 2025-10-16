# shippingOption

**Description** : *Shipping option*

**Layer** : 216

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
	id : 'bf97l3PvozVqRigs',
	title : '89hDFTqHMsyUNcl5',
	prices : array(
		$client->labeledPrice(
			label : 'JDwuS75yibaMZvoV',
			amount : -6000134668230448021,
		),
	),
);
```