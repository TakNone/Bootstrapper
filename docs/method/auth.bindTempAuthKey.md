# auth.bindTempAuthKey

**Description** : *Binds a temporary authorization key temp_auth_key_id to the permanent authorization key perm_auth_key_id. Each permanent key may only be bound to one temporary key at a time, binding a new temporary key overwrites the previous one*

**Layer** : 211

```tl
auth.bindTempAuthKey#cdd42a05 perm_auth_key_id:long nonce:long expires_at:int encrypted_message:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>perm_auth_key_id</mark> | [`long`](type/long) | Permanent auth_key_id to bind to |
| <mark>nonce</mark> | [`long`](type/long) | Random long from Binding message contents |
| <mark>expires_at</mark> | [`int`](type/int) | Unix timestamp to invalidate temporary key, see Binding message contents |
| <mark>encrypted_message</mark> | [`bytes`](type/bytes) | See Generating encrypted_message |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENCRYPTED_MESSAGE_INVALID** | `400` | Encrypted message invalid |
| **TEMP_AUTH_KEY_ALREADY_BOUND** | `400` | The passed temporary key is already bound to another perm_auth_key_id |
| **TEMP_AUTH_KEY_EMPTY** | `400` | No temporary auth key provided |

---

## Example

```php
$bool = $client->auth->bindTempAuthKey(
	perm_auth_key_id : -127501029121893993,
	nonce : -5801992850481291318,
	expires_at : 84,
	encrypted_message : '?????LiveProto???l',
);
```