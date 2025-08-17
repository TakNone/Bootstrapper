# account.acceptAuthorization

**Description** : *Sends a Telegram Passport authorization form, effectively sharing data with the service*

**Layer** : 211

```tl
account.acceptAuthorization#f3ed4c73 bot_id:long scope:string public_key:string value_hashes:Vector<SecureValueHash> credentials:SecureCredentialsEncrypted = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>scope</mark> | [`string`](type/string) | Telegram Passport element types requested by the service |
| <mark>public_key</mark> | [`string`](type/string) | Service's public key |
| <mark>value_hashes</mark> | [`Vector<SecureValueHash>`](type/SecureValueHash) | Types of values sent and their hashes |
| <mark>credentials</mark> | [`SecureCredentialsEncrypted`](type/SecureCredentialsEncrypted) | Encrypted values |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **PUBLIC_KEY_REQUIRED** | `400` | A public key is required |

---

## Example

```php
$bool = $client->account->acceptAuthorization(
	bot_id : -5808841076932717227,
	scope : 'tEgA32UeGp6dYC4o',
	public_key : 'vKqYDpEzFBa89fTQ',
	value_hashes : array(
		$client->secureValueHash(
			type : $client->secureValueTypePersonalDetails(),
			hash : '/?$?{LiveProto?P?-?',
		),
	),
	credentials : $client->secureCredentialsEncrypted(
		data : '??ԑLiveProto?????',
		hash : '4N?3}LiveProto?߰??',
		secret : '?=?g{LiveProto5(T??',
	),
);
```