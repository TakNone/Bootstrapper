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
	id : '1yCQwnIBf70NcjTD',
	title : 'zFUXQeS3LoH4ajfE',
	prices : array(
		$client->labeledPrice(
			label : 'Zzj3TDfK7FVr5cai',
			amount : 2042501788841112964,
		),
	),
);
```