# shippingOption

**Description** : *Shipping option*

**Layer** : 222

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
	id : 'OauESL2Kbec97iHv',
	title : 'Y3VCyTuM1bqBhg5f',
	prices : array(
		$client->labeledPrice(
			label : 'kYpNIJDhO4GBAz0P',
			amount : -1047265352216299255,
		),
	),
);
```