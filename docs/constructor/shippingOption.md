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
	id : 'V7Sx23LlMTiBPOE5',
	title : '1xWGjPAQfBkEmaOn',
	prices : array(
		$client->labeledPrice(
			label : 'qkMAfIhPmUCJVHr7',
			amount : 2242057339092087604,
		),
	),
);
```