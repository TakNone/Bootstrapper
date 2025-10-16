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
	id : 'OdEmBeY7vfWCj1p4',
	title : 'GpT8hUoCML3izRkK',
	prices : array(
		$client->labeledPrice(
			label : 'hQODxTB5FN1rt4S8',
			amount : -8981947382661502356,
		),
	),
);
```