# payments.requestRecurringPayment

**Layer** : 218

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
	user_id : $client->get_input_user(user : '@TakNone'),
	recurring_init_charge : 'N3nyatqO29w8Z6IL',
	invoice_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```