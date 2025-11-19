# payments.refundStarsCharge

**Description** : *Refund a Telegram Stars transaction, see here &raquo; for more info*

**Layer** : 218

```tl
payments.refundStarsCharge#25ae8f4a user_id:InputUser charge_id:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User to refund |
| <mark>charge_id</mark> | [`string`](type/string) | Transaction ID |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHARGE_ALREADY_REFUNDED** | `400` | The transaction was already refunded |
| **CHARGE_ID_EMPTY** | `400` | The specified charge_id is empty |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$updates = $client->payments->refundStarsCharge(
	user_id : $client->get_input_user(peer : '@TakNone'),
	charge_id : 'Xzerqx0AvS2KwyOc',
);
```