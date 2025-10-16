# contacts.getTopPeers

**Description** : *Get most used peers*

**Layer** : 216

```tl
contacts.getTopPeers#973478b6 flags:# correspondents:flags.0?true bots_pm:flags.1?true bots_inline:flags.2?true phone_calls:flags.3?true forward_users:flags.4?true forward_chats:flags.5?true groups:flags.10?true channels:flags.15?true bots_app:flags.16?true offset:int limit:int hash:long = contacts.TopPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **correspondents** | [`flags.0?true`](type/true) | Users we've chatted most frequently with |
| **bots_pm** | [`flags.1?true`](type/true) | Most used bots |
| **bots_inline** | [`flags.2?true`](type/true) | Most used inline bots |
| **phone_calls** | [`flags.3?true`](type/true) | Most frequently called users |
| **forward_users** | [`flags.4?true`](type/true) | Users to which the users often forwards messages to |
| **forward_chats** | [`flags.5?true`](type/true) | Chats to which the users often forwards messages to |
| **groups** | [`flags.10?true`](type/true) | Often-opened groups and supergroups |
| **channels** | [`flags.15?true`](type/true) | Most frequently visited channels |
| **bots_app** | [`flags.16?true`](type/true) | Most frequently used Main Mini Bot Apps |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[contacts.TopPeers](type/contacts.TopPeers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TYPES_EMPTY** | `400` | No top peer type was provided |

---

## Example

```php
$contactsTopPeers = $client->contacts->getTopPeers(
	correspondents : true,
	bots_pm : true,
	bots_inline : true,
	phone_calls : true,
	forward_users : true,
	forward_chats : true,
	groups : true,
	channels : true,
	bots_app : true,
	offset : 0,
	limit : 65,
	hash : 0,
);
```