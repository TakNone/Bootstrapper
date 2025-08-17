# labeledPrice

**Description** : *This object represents a portion of the price for goods or services*

**Layer** : 211

```tl
labeledPrice#cb296bf8 label:string amount:long = LabeledPrice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>label</mark> | [`string`](type/string) | Portion label |
| <mark>amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[LabeledPrice](type/LabeledPrice)

---

## Example

```php
$labeledPrice = $client->labeledPrice(
	label : 'fbDOH7am9SZIF12B',
	amount : 3802340196790885014,
);
```