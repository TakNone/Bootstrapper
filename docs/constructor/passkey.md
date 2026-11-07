# passkey

**Description** : *Human\-readable info about a passkey associated to an account, returned when creating a passkey &raquo; or listing passkeys &raquo;*

**Layer** : 233

```tl
passkey#98613ebf flags:# id:string name:string date:int software_emoji_id:flags.0?long last_usage_date:flags.1?int = Passkey;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Unique passkey ID, usable for example in account.deletePasskey |
| <mark>name</mark> | [`string`](type/string) | Human-readable passkey name |
| <mark>date</mark> | [`int`](type/int) | Creation date of the passkey |
| **software_emoji_id** | [`flags.0?long`](type/long) | ID of the custom emoji used as icon for the software or password manager that created the passkey |
| **last_usage_date** | [`flags.1?int`](type/int) | Date when the passkey was last used to log in |

---

## Type

[Passkey](type/Passkey)

---

## Example

```php
$passkey = $client->passkey(
	id : 'YezXOA7tnigqb8lK',
	name : 'xyu5Fh1Z8mQIwNsM',
	date : 50,
	software_emoji_id : -8183307825648684261,
	last_usage_date : 40,
);
```