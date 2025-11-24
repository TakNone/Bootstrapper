# shippingOption

**Description** : *Shipping option*

**Layer** : 218

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
	id : 'DYaV0fEkqn2c3uwz',
	title : '7BNZoADIprPtHJCK',
	prices : array(
		$client->labeledPrice(
			label : 'YXucNdavCpRiLhfS',
			amount : 8704756216028074917,
		),
	),
);
```