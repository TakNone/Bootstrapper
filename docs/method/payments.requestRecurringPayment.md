# payments.requestRecurringPayment

**Layer** : 216

```tl
payments.requestRecurringPayment#146e958d user_id:InputUser recurring_init_charge:string invoice_media:InputMedia = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) |   |
| <mark>recurring_init_charge</mark> | [`string`](type/string) |   |
| <mark>invoice_media</mark> | [`InputMedia`](type/InputMedia) |   |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->payments->requestRecurringPayment(
	user_id : $client->inputUserEmpty(),
	recurring_init_charge : '3OQk7UgxDM9Wrs86',
	invoice_media : $client->inputMediaEmpty(),
);
```