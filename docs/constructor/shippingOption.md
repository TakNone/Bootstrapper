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
	id : 'L2nksA36u1RbVWoZ',
	title : 'Zc3Rw81jE4lzvBGF',
	prices : array(
		$client->labeledPrice(
			label : '0YguMHsr8UOAFDWQ',
			amount : -4648492071595943346,
		),
	),
);
```