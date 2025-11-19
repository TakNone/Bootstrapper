# contacts.resolveUsername

**Description** : *Resolve a @username to get peer info*

**Layer** : 218

```tl
contacts.resolveUsername#725afbbc flags:# username:string referer:flags.0?string = contacts.ResolvedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>username</mark> | [`string`](type/string) | @username to resolve |
| **referer** | [`flags.0?string`](type/string) | Referrer ID from referral links » |

---

## Result

[contacts.ResolvedPeer](type/contacts.ResolvedPeer)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONNECTION_LAYER_INVALID** | `400` | Layer invalid |
| **STARREF_EXPIRED** | `400` | The specified referral link is invalid |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_NOT_OCCUPIED** | `400` | The provided username is not occupied |

---

## Example

```php
$contactsResolvedPeer = $client->contacts->resolveUsername(
	username : 'TakNone',
	referer : 'lrpZ3WjNme8SxVk9',
);
```