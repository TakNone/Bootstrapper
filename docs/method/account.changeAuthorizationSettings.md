# account.changeAuthorizationSettings

**Description** : *Change settings related to a session*

**Layer** : 214

```tl
account.changeAuthorizationSettings#40f48462 flags:# confirmed:flags.3?true hash:long encrypted_requests_disabled:flags.0?Bool call_requests_disabled:flags.1?Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **confirmed** | [`flags.3?true`](type/true) | If set, confirms a newly logged in session » |
| <mark>hash</mark> | [`long`](type/long) | Session ID from the authorization constructor, fetchable using account.getAuthorizations |
| **encrypted_requests_disabled** | [`flags.0?Bool`](type/Bool) | Whether to enable or disable receiving encrypted chats: if the flag is not set, the previous setting is not changed |
| **call_requests_disabled** | [`flags.1?Bool`](type/Bool) | Whether to enable or disable receiving calls: if the flag is not set, the previous setting is not changed |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **HASH_INVALID** | `400` | The provided hash is invalid |

---

## Example

```php
$bool = $client->account->changeAuthorizationSettings(
	confirmed : true,
	hash : 6625410270202143024,
	encrypted_requests_disabled : true,
	call_requests_disabled : false,
);
```