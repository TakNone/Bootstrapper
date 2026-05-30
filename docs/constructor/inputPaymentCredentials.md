# inputPaymentCredentials

**Description** : *Payment credentials*

**Layer** : 225

```tl
inputPaymentCredentials#3417d728 flags:# save:flags.0?true data:DataJSON = InputPaymentCredentials;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		data : '7hB8qeXa4HmtwPIG',
	),
);
```