# shippingOption

**Description** : *Shipping option*

**Layer** : 229

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
	id : 'l2uYIm5C7LXkBSti',
	title : 'xPfOQNvhCl53ZpjJ',
	prices : array(
		$client->labeledPrice(
			label : 'YUhbRaP53x9yW1rV',
			amount : 1895139353993878382,
		),
	),
);
```