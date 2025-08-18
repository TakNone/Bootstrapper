# auth.loggedOut

**Description** : *Future auth token &raquo; to be used on subsequent authorizations*

**Layer** : 211

```tl
auth.loggedOut#c3a2835f flags:# future_auth_token:flags.0?bytes = auth.LoggedOut;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **future_auth_token** | [`flags.0?bytes`](type/bytes) | Future auth token » to be used on subsequent authorizations |

---

## Type

[auth.LoggedOut](type/auth.LoggedOut)

---

## Example

```php
$authLoggedOut = $client->auth->loggedOut(
	future_auth_token : 'R??y?LiveProtop??',
);
```