# payments.getStarsGiftOptions

**Description** : *Obtain a list of Telegram Stars gift options » as starsGiftOption constructors*

**Layer** : 211

```tl
payments.getStarsGiftOptions#d3c96bc8 flags:# user_id:flags.0?InputUser = Vector<StarsGiftOption>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **user_id** | [`flags.0?InputUser`](type/InputUser) | Receiver of the gift (optional) |

---

## Result

[Vector<StarsGiftOption>](type/StarsGiftOption)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_GIFT_UNAVAILABLE** | `400` | Gifts are not available in the current region (stars_gifts_enabled is equal to false) |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$starsGiftOption = $client->payments->getStarsGiftOptions(
	user_id : $client->inputUserEmpty(),
);
```