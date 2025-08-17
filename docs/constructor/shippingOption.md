# shippingOption

**Description** : *Shipping option*

**Layer** : 211

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
	id : 'TvbiO14G6QmNHKud',
	title : 'Znysx8F9bDSX0WQV',
	prices : array(
		$client->labeledPrice(
			label : '59A1SwLIHEicrv3Q',
			amount : -469161481536458645,
		),
	),
);
```