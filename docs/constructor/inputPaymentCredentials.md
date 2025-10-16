# inputPaymentCredentials

**Description** : *Payment credentials*

**Layer** : 216

```tl
inputPaymentCredentials#3417d728 flags:# save:flags.0?true data:DataJSON = InputPaymentCredentials;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **save** | [`flags.0?true`](type/true) | Save payment credential for future use |
| <mark>data</mark> | [`DataJSON`](type/DataJSON) | Payment credentials |

---

## Type

[InputPaymentCredentials](type/InputPaymentCredentials)

---

## Example

```php
$inputPaymentCredentials = $client->inputPaymentCredentials(
	save : true,
	data : $client->dataJSON(
		data : '0UcF3juBTROtzaJG',
	),
);
```