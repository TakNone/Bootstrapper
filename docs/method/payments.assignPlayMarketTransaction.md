# payments.assignPlayMarketTransaction

**Description** : *Informs server about a purchase made through the Play Store: for official applications only*

**Layer** : 214

```tl
payments.assignPlayMarketTransaction#dffd50d3 receipt:DataJSON purpose:InputStorePaymentPurpose = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>receipt</mark> | [`DataJSON`](type/DataJSON) | Receipt |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | Payment purpose |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |

---

## Example

```php
$updates = $client->payments->assignPlayMarketTransaction(
	receipt : $client->dataJSON(
		data : 'Jc1lDodfvXqk67rY',
	),
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```