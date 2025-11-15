# requestedPeerUser

**Description** : *Info about a user, shared by a user with the currently logged in bot using messages\.sendBotRequestedPeer*

**Layer** : 218

```tl
requestedPeerUser#d62ff46a flags:# user_id:long first_name:flags.0?string last_name:flags.0?string username:flags.1?string photo:flags.2?Photo = RequestedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| **first_name** | [`flags.0?string`](type/string) | First name |
| **last_name** | [`flags.0?string`](type/string) | Last name |
| **username** | [`flags.1?string`](type/string) | Username |
| **photo** | [`flags.2?Photo`](type/Photo) | Profile photo |

---

## Type

[RequestedPeer](type/RequestedPeer)

---

## Example

```php
$requestedPeer = $client->requestedPeerUser(
	user_id : -8411650954026314446,
	first_name : 'Tak',
	last_name : 'None',
	username : 'TakNone',
	photo : $client->photoEmpty(
		id : -8304396778076173078,
	),
);
```