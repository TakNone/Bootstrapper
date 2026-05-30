# shippingOption

**Description** : *Shipping option*

**Layer** : 225

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
	id : 'pQK5ycf3bBF9Tmdg',
	title : 'VcgX9MkRr5KZULtJ',
	prices : array(
		$client->labeledPrice(
			label : 'ZjKIE0StymX7hGls',
			amount : 7730756032712830770,
		),
	),
);
```