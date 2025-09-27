# shippingOption

**Description** : *Shipping option*

**Layer** : 214

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
	id : 'dCwrKT6PQgt03LB9',
	title : 'dkBjIp38soHbqPFu',
	prices : array(
		$client->labeledPrice(
			label : 'jD02CgispbyA8tRL',
			amount : -2268460388834238609,
		),
	),
);
```