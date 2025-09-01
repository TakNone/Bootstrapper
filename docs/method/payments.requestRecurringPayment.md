# payments.requestRecurringPayment

**Layer** : 214

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
	recurring_init_charge : 'q9SOVpf6vrB3xZ4E',
	invoice_media : $client->inputMediaEmpty(),
);
```