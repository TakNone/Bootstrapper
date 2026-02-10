# requestedPeerChannel

**Description** : *Info about a channel/supergroup, shared by a user with the currently logged in bot using messages\.sendBotRequestedPeer*

**Layer** : 222

```tl
requestedPeerChannel#8ba403e4 flags:# channel_id:long title:flags.0?string username:flags.1?string photo:flags.2?Photo = RequestedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel_id</mark> | [`long`](type/long) | Channel/supergroup ID |
| **title** | [`flags.0?string`](type/string) | Channel/supergroup title |
| **username** | [`flags.1?string`](type/string) | Channel/supergroup username |
| **photo** | [`flags.2?Photo`](type/Photo) | Channel/supergroup photo |

---

## Type

[RequestedPeer](type/RequestedPeer)

---

## Example

```php
$requestedPeer = $client->requestedPeerChannel(
	channel_id : 288779869764886899,
	title : 'oeX71Ls9HTOa2KM3',
	username : 'TakNone',
	photo : $client->photoEmpty(
		id : -7424553501073527756,
	),
);
```